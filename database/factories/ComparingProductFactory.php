<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ComparingProduct;

class ComparingProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'main_product_id' => null, // Always use this factory through Product's relationship or manually give an id
            'slot' => 1,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($comparingProduct) {
            ComparingProduct::create([
                'main_product_id' => $comparingProduct->main_product_id,
                'slot' => 2,
            ]);
        });
    }
}
