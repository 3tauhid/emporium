<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\ProductReview;

class ProductRatingPercentage extends Component
{
    public $productId;
    public $totalRating;
    public $star;

    public function __construct($productId, $totalRating, $star)
    {
        $this->productId = $productId;
        $this->totalRating = $totalRating;
        $this->star = $star;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $reviewStats = ProductReview::selectRaw('COUNT(*) as reviewCount')->where('rating', $this->star)->where('product_id', $this->productId)->first();

        $percent = 0;

        if ($this->totalRating != 0)
        {
            $percent = round($reviewStats->reviewCount * 100 / $this->totalRating, 0);
        }

        $ratio1 = $percent / 2;
        $ratio2 = 50 - $ratio1;
        
        return view('components.product-rating-percentage', [
            'star' => $this->star,
            'ratio1' => $ratio1,
            'ratio2' => $ratio2,
            'percent' => $percent,
        ]);
    }
}
