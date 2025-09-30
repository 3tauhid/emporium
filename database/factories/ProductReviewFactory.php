<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\User;
use App\Models\ProductReview;

class ProductReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'user_id' => User::factory()->create([
                'user_role_id' => 3,
            ]),
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'description' => $this->faker->sentence(50),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($productReview) {
            $productReviewStats = ProductReview::selectRaw('SUM(rating) as reviewSum, COUNT(*) as reviewCount')->where('product_id', $productReview->product_id)->first();

            $averageRating = $productReviewStats->reviewSum / $productReviewStats->reviewCount;

            Product::where('id', $productReview->product_id)->update(['total_reviews' => $productReviewStats->reviewCount, 'average_rating' => $averageRating]);
        });
    }
}
