<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Blade;
use App\View\Components\ComparingProduct;

class ComparableProductController extends Controller
{
    public function index($mainProductId, $comparingSlot, $page)
    {
        $mainProduct = Product::with(['comparing_products' => function($query) use ($comparingSlot) {
            $query->where('slot', $comparingSlot);
        }])->find($mainProductId);
        $products = Product::select('id', 'name')->where('department_id', $mainProduct->department_id)->get();
        
        $content = view('partials._comparing-products-dropdown', [
            'products' => $products,
            'comparingSlot' => $comparingSlot,
            'mainProduct' => $mainProduct,
            'page' => $page,
        ])->render();

        return response()->json(['content'=> $content], 200);
    }

    public function show($mainProductId, $comparingSlot, $page, $productId)
    {
        $content = Blade::renderComponent(new ComparingProduct($productId, $mainProductId, $comparingSlot, $page));

        return response()->json(['content'=> $content], 200);
    }
}
