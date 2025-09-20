<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSeller;

class ProductSellerActionController extends Controller
{
    public function updateAuthProductSeller(Request $request)
    {
        $request->validate([
            'product_id' => ['required'],
            'stock' => ['required', 'integer', 'max:65535'],
            'price' => ['required', 'numeric', 'min:0', 'max:9999999999.99'],
            'shipping_location' => ['required', 'string', 'max:50'],
        ]);

        $productId = $request->input('product_id');
        $stock = $request->input('stock');
        $price = $request->input('price');
        $shippingLocation = $request->input('shipping_location');

        Product::where('id', $productId)->update(['stock' => $stock, 'price' => $price]); // delete this info from products table
        ProductSeller::where('seller_id', auth()->id())->where('product_id', $productId)->update(['stock' => $stock, 'price' => $price, 'shipping_location' => $shippingLocation]);

        session(['success_message' => 'Successfully Updated']);
        
        return redirect(route('products.edit', $productId));
    }
}
