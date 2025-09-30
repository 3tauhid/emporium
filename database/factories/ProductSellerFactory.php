<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\User;

class ProductSellerFactory extends Factory
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
            'seller_id' => User::factory()->create([
                'user_role_id' => 2,
            ]),
            'price' => $this->faker->randomFloat(2, 20, 2000),
            'stock' => $this->faker->numberBetween(0, 200),
            'shipping_location' => $this->faker->city(),
        ];
    }
}
