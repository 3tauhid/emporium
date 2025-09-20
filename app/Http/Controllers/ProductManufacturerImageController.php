<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductManufacturerImage;
use App\Services\StorageHandlers\DynamicStorageHandler;

class ProductManufacturerImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:5000'], // 5MB
        ]);

        $productId = $request->input('productId');

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
        ProductManufacturerImage::where('id', $productManufacturerImageId)->delete();

        session(['success_message' => 'Deleted successfully.']);

        return response()->noContent();
    }
}
