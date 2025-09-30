<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFaqFactory extends Factory
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
            'question' => substr($this->faker->sentence(5), 0, -1) . '?',
            'answer' => $this->faker->sentence(100),
        ];
    }
}
