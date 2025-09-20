<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductImage;
use App\Services\StorageHandlers\DynamicStorageHandler;

class ProductImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:5000'], // 5MB
        ]);

        $productId = $request->input('productId');

        $uploadInfo = DynamicStorageHandler::store($request->file('image'), 'product-images', 'public');
        
        ProductImage::create([
            'product_id' => $productId,
            'disk' => 'public',
            'path' => $uploadInfo['path'],
            'url' => $uploadInfo['url'],
            'original_name' => $uploadInfo['original_name'],
        ]);

        session(['success_message' => $uploadInfo['original_name'] . ' has been uploaded.']);
        
        return response()->noContent();
    }

    public function destroy($productImageId)
    {
        $productImage = ProductImage::find($productImageId);
        $productImageStats = ProductImage::selectRaw('COUNT(*) as productImageCount')->where('product_id', $productImage->product_id)->first();

        if ($productImageStats->productImageCount > 1) {
            ProductImage::where('id', $productImageId)->delete();
        }

        session(['success_message' => 'Deleted successfully.']);

        return response()->noContent();
    }
}
