<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomepageController extends Controller
{
    public function __invoke()
    {
        $gamingProducts = Product::select('id')->with('productImages')->whereHas('department', function($query) {
            $query->where('name', 'Gaming');
        })
        ->get();

        $watchProducts = Product::select('id')->with('productImages')->whereHas('department', function($query) {
            $query->where('name', 'Wireless')->orWhere('name', 'Watch');
        })
        ->get();

        $topTotalRatedProducts = Product::select('id')->with('productImages')->orderBy('total_reviews', 'desc')->take(10)->get();

        $kitchenProducts = Product::select('id')->with('productImages')->whereHas('department', function($query) {
            $query->where('name', 'Home & Kitchen');
        })
        ->get();

        return view('homepage', [
            'gamingProducts' => $gamingProducts,
            'watchProducts' => $watchProducts,
            'topTotalRatedProducts' => $topTotalRatedProducts,
            'kitchenProducts' => $kitchenProducts,
        ]);
    }
}
