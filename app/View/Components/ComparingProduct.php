<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Product;

class ComparingProduct extends Component
{
    public $productId;
    public $mainProductId;
    public $comparingSlot;
    public $page;

    public function __construct($productId, $mainProductId, $comparingSlot, $page)
    {
        $this->productId = $productId;
        $this->mainProductId = $mainProductId;
        $this->comparingSlot = $comparingSlot;
        $this->page = $page;
    }
    
    public function render()
    {
        $product = Product::with('user', 'brand', 'comparingValues', 'productImages')->find($this->productId);

        $mainProduct = Product::with(['comparingProducts' => function($query) {
            $query->where('slot', $this->comparingSlot);
        }])
        ->find($this->mainProductId);

        return view('components.comparing-product', [
            'product' => $product,
            'mainProduct' => $mainProduct,
            'comparingSlot' => $this->comparingSlot,
            'page' => $this->page,
        ]);
    }
}
