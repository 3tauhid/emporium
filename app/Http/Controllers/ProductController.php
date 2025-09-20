<?php

namespace App\Http\Controllers;

use App\Services\Vendor\Tauhid\Pagination\Pagination;
use App\Models\Product;
use App\Models\Department;
use App\Models\Brand;
use App\Services\DepartmentHelper;
use App\Models\ProductSeller;
use App\Models\ComparingProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('seller')->only('edit', 'store');
    }

    public function index()
    {
        $rootDepartments = Department::select('id', 'name')->where('parent_department_id', 0)->get();

        $products = Product::select('id', 'name', 'average_rating', 'total_reviews', 'department_id', 'price', 'stock')
        ->with('department:id,name', 'product_images')
        ->filter(request(['search', 'order-by', 'department', 'rating', 'minimum-price', 'maximum-price']))
        ->paginate(20)
        ->withQueryString();

        $pagination = Pagination::default($products);

        $selfAndChildDepartments = Department::where('id', request('department'))->orWhere('parent_department_id', request('department'))->get();
        
        return view('products', [
            'rootDepartments' => $rootDepartments,
            'products' => $products,
            'pagination' => $pagination,
            'selfAndChildDepartments' => $selfAndChildDepartments,
        ]);
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'main_seller_id' => auth()->id(),
            'price' => 0,
            'average_rating' => 0,
            'total_reviews' => 0,
            'total_faqs' => 0,
            'stock' => 0,
            'name' => 'New Product',
            'description' => 'Write Description',
        ]);

        ComparingProduct::create([
            'main_product_id' => $product->id,
            'slot' => 1,
        ]);
        ComparingProduct::create([
            'main_product_id' => $product->id,
            'slot' => 2,
        ]);

        ProductSeller::create([
            'product_id' => $product->id,
            'seller_id' => auth()->id(),
            'price' => 0,
            'stock' => 0,
            'shipping_location' => 'Empty',
        ]);

        session(['success_message' => 'Successfully Created']);

        return response()->noContent();
    }

    public function show($productId)
    {
        $product = Product::with('brand', 'user', 'product_images', 'product_summaries', 'product_manufacturer_images', 'department.comparing_features', 'comparing_values', 'comparing_products', 'product_faqs', 'product_reviews.user.user_image')->find($productId);
        
        $product->setRelation('main_seller_inventory', 
            $product->product_sellers()->where('seller_id', $product->main_seller_id)->first()
        );

        $parentDepartmentNames = DepartmentHelper::getParentDepartmentNames($product->department_id);

        return view('products-show', [
            'product' => $product,
            'parentDepartmentNames' => $parentDepartmentNames,
        ]);
    }

    public function edit($productId)
    {
        $product = Product::with('brand', 'user', 'product_images', 'product_summaries', 'product_manufacturer_images', 'department.comparing_features', 'comparing_values', 'comparing_products', 'product_faqs', 'product_reviews.user.user_image')->find($productId);
        $parentDepartmentNames = DepartmentHelper::getParentDepartmentNames($product->department_id);
        $brands = Brand::orderBy('name')->get();
        $departments = Department::orderBy('name')->get();
        $productSeller = ProductSeller::where('seller_id', auth()->id())->where('product_id', $productId)->first();

        return view('products-edit', [
            'product' => $product,
            'parentDepartmentNames' => $parentDepartmentNames,
            'brands' => $brands,
            'departments' => $departments,
            'productSeller' => $productSeller,
        ]);
    }
}
