<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductSeller;

class SellerProductController extends Controller
{
    public function index()
    {
        $products = Product::where('main_seller_id', auth()->id())->orderBy('id', 'desc')->get();

        // Seller as other's products
        $otherProductSellers = ProductSeller::where('seller_id', auth()->id())
        ->with('product:id,name')
        ->whereHas('product', function($query) {
            $query->where('main_seller_id', '!=', auth()->id());
        })
        ->get();

        return view('seller-products', [
            'products' => $products,
            'otherProductSellers' => $otherProductSellers,
        ]);
    }
}
