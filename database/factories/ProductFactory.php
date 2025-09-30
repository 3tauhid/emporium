<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\ProductSeller;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'main_seller_id' => User::factory()->create([
                'user_role_id' => 2,
            ]),
            'price' => $this->faker->randomFloat(2, 20, 2000), // 20.00 - 2000.00
            'average_rating' => $this->faker->randomFloat(1, 1, 5), // ProductReviewFactory will reset it
            'total_reviews' => $this->faker->numberBetween(0, 500), // ProductReviewFactory will reset it
            'total_faqs' => $this->faker->numberBetween(0, 30),
            'department_id' => $this->faker->numberBetween(1, 10),
            'brand_id' => $this->faker->numberBetween(1, 10),
            'stock' => $this->faker->numberBetween(0, 200),
            'name' => ucwords($this->faker->words(10, true)),
            'description' => $this->faker->text(2000),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($product) {
            ProductSeller::factory()->create([
                'product_id' => $product->id,
                'seller_id' => $product->main_seller_id,
                'price' => $product->price,
                'stock' => $product->stock,
            ]);

            // You must also use ComparingProductFactory and ComparingValueFactory if you don't use seeder.
        });
    }
}
