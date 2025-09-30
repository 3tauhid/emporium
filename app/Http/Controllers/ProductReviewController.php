<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductReview;

class ProductReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('customer')->only('store');
    }

    public function index($productId)
    {
        $sortingType = request('sortingType');

        $reviewQuery = ProductReview::where('product_id', $productId)->with('user.userImage');

        if ($sortingType == 'Best') {
            $reviewQuery->orderBy('rating', 'desc');
        }

        if ($sortingType == 'Worst') {
            $reviewQuery->orderBy('rating', 'asc');
        }

        $productReviews = $reviewQuery->get();

        $content = view('partials._product-reviews', [
            'productReviews' => $productReviews,
        ])->render();

        return response()->json(['content'=> $content], 200);
    }

    public function store(Request $request, $productId)
    {
        $request->validate([
            'rating' => ['required', 'integer', 'max:191'],
            'description' => ['required', 'string', 'max:2000'],
        ]);

        $rating = $request->input('rating');
        $description = $request->input('description');

        ProductReview::create([
            'product_id' => $productId,
            'user_id' => auth()->id(),
            'rating' => $rating,
            'description' => $description,
        ]);

        $productReviewStats = ProductReview::selectRaw('SUM(rating) as reviewSum, COUNT(*) as reviewCount')->where('product_id', $productId)->first();

        $averageRating = $productReviewStats->reviewSum / $productReviewStats->reviewCount;

        Product::where('id', $productId)->update(['total_reviews' => $productReviewStats->reviewCount, 'average_rating' => $averageRating]);

        return redirect(route('products.show', $productId));
    }
}
