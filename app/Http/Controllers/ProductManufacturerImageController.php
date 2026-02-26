<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StorageHandlers\DynamicStorageHandler;
use App\Models\ProductManufacturerImage;
use App\Models\Product;

class ProductManufacturerImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:5000'], // 5MB
        ]);

        $productId = $request->input('productId');

        $product = Product::find($productId);

        $this->authorize('create', [ProductManufacturerImage::class, $product]);

        $uploadInfo = DynamicStorageHandler::store($request->file('image'), 'product-manufacturer-images', 'public');
        
        ProductManufacturerImage::create([
            'product_id' => $productId,
            'disk' => 'public',
            'path' => $uploadInfo['path'],
            'url' => $uploadInfo['url'],
            'original_name' => $uploadInfo['original_name'],
        ]);

        session(['success_message' => $uploadInfo['original_name'] . ' has been uploaded.']);
        
        return response()->noContent();
    }

    public function destroy($productManufacturerImageId)
    {
        $productManufacturerImage = ProductManufacturerImage::with('product')->find($productManufacturerImageId);

        $this->authorize('delete', $productManufacturerImage);

        ProductManufacturerImage::where('id', $productManufacturerImageId)->delete();

        session(['success_message' => 'Deleted successfully.']);

        return response()->noContent();
    }
}
