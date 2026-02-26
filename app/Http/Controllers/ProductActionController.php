<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductImage;
use App\Models\Product;
use App\Models\ComparingFeature;
use App\Models\ComparingProduct;
use App\Models\ComparingValue;
use App\Models\Brand;

class ProductActionController extends Controller
{
    public function showProductImage($productImageId)
    {
        $productImage = ProductImage::find($productImageId);

        if ($productImage->isWideImage()) {
            $content = "<center><img style='width: 100%;' src ='".$productImage->url."'></center>";
        } else {
            $content = "<center><img style='height: 300px; margin: 50px;' src ='".$productImage->url."'></center>";
        }

        return response()->json(['content'=> $content], 200);
    }

    public function updateProductName(Request $request)
    {
        $request->validate([
            'product_id' => ['required'],
            'name' => ['required', 'string', 'max:191'],
        ]);

        $productId = $request->input('product_id');
        $name = $request->input('name');

        $product = Product::find($productId);

        $this->authorize('update', $product);

        Product::where('id', $productId)->update(['name' => $name]);

        session(['success_message' => 'Successfully Updated']);

        return redirect(route('products.edit', $productId));
    }

    public function updateProductBrand(Request $request)
    {
        $request->validate([
            'productId' => ['required'],
            'brandId' => ['required'],
        ]);

        $productId = $request->input('productId');
        $brandId = $request->input('brandId');

        $product = Product::find($productId);

        $this->authorize('update', $product);

        Product::where('id', $productId)->update(['brand_id' => $brandId]);

        session(['success_message' => 'Successfully updated']);

        return response()->noContent();
    }

    public function updateProductWithNewBrand(Request $request)
    {
        $request->validate([
            'product_id' => ['required'],
            'name' => ['required', 'string', 'max:50'],
        ]);

        $productId = $request->input('product_id');
        $name = $request->input('name');

        $product = Product::find($productId);

        $this->authorize('update', $product);

        $brand = Brand::create([
            'name' => $name,
        ]);

        Product::where('id', $productId)->update(['brand_id' => $brand->id]);

        session(['success_message' => 'Successfully Updated']);

        return redirect(route('products.edit', $productId));
    }

    public function updateProductDepartment(Request $request)
    {
        $request->validate([
            'productId' => ['required'],
            'departmentId' => ['required'],
        ]);

        $productId = $request->input('productId');
        $departmentId = $request->input('departmentId');

        $product = Product::find($productId);

        $this->authorize('update', $product);

        Product::where('id', $productId)->update(['department_id' => $departmentId]);
        ComparingProduct::where('main_product_id', $productId)->update(['product_id' => null]);

        ComparingValue::where('product_id', $productId)->delete();

        $comparingFeatures = ComparingFeature::where('department_id', $departmentId)->get();

        if (isset($comparingFeatures[0]->id)) {
            foreach ($comparingFeatures as $comparingFeature) {
                ComparingValue::create([
                    'product_id' => $productId,
                    'comparing_feature_id' => $comparingFeature->id,
                    'value' => 'Empty',
                ]);
            }
        }

        session(['success_message' => 'Successfully updated']);

        return response()->noContent();
    }

    public function updateProductDescription(Request $request)
    {
        $request->validate([
            'product_id' => ['required'],
            'description' => ['required', 'string', 'max:2000'],
        ]);

        $productId = $request->input('product_id');
        $description = $request->input('description');

        $product = Product::find($productId);

        $this->authorize('update', $product);

        Product::where('id', $productId)->update(['description' => $description]);

        session(['success_message' => 'Successfully Updated']);

        return redirect(route('products.edit', $productId));
    }
}
