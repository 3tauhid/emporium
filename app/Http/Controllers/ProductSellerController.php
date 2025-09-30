<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSeller;

class ProductSellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('seller')->only('create', 'store', 'edit', 'update');
    }

    public function index($productId)
    {
        $product = Product::with('brand', 'productSellers.user', 'productImages')->find($productId);

        return view('product-sellers', [
            'product' => $product,
        ]);
    }

    public function create($productId)
    {
        $content = view('partials._product-sellers-create', [
            'productId' => $productId,
        ])->render();

        return response()->json(['content'=> $content], 200);
    }

    public function store(Request $request, $productId)
    {
        $request->validate([
            'stock' => ['required'],
            'stock' => ['required', 'integer', 'max:65535'],
            'price' => ['required', 'numeric', 'min:0', 'max:9999999999.99'],
            'shipping_location' => ['required', 'string', 'max:50'],
        ]);

        $stock = $request->input('stock');
        $price = $request->input('price');
        $shippingLocation = $request->input('shipping_location');

        $productSeller = ProductSeller::where('product_id', $productId)->where('seller_id', auth()->id())->first();

        if (!isset($productSeller)) {
            ProductSeller::create([
                'product_id' => $productId,
                'seller_id' => auth()->id(),
                'price' => $price,
                'stock' => $stock,
                'shipping_location' => $shippingLocation,
            ]);
		}

        return redirect(route('seller-products.index'));
    }

    public function edit($productSellerId)
    {
        $productSeller = ProductSeller::find($productSellerId);

        $content = view('partials._product-sellers-edit', [
            'productSeller' => $productSeller,
        ])->render();

        return response()->json(['content'=> $content], 200);
    }

    public function update(Request $request, $productSellerId)
    {
        $request->validate([
            'stock' => ['required', 'integer', 'max:65535'],
            'price' => ['required', 'numeric', 'min:0', 'max:9999999999.99'],
            'shipping_location' => ['required', 'string', 'max:50'],
        ]);
        
        $stock = $request->input('stock');
        $price = $request->input('price');
        $shippingLocation = $request->input('shipping_location');

        ProductSeller::where('id', $productSellerId)->update(['stock' => $stock, 'price' => $price, 'shipping_location' => $shippingLocation]);

        return redirect(route('seller-products.index'));
    }
}
