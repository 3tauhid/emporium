<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\ComparingFeature;
use App\Models\ComparingValue;

class ComparingValueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $comparingFeature = ComparingFeature::first();

        // This is a dummy value for hacking so that we can execute afterCreating()
        return [
            'product_id' => null, // Always use this factory through Product's relationship or manually give an id
            'comparing_feature_id' => $comparingFeature->id,
            'value' => ucwords($this->faker->word()),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($comparingValue) {
            $product = Product::find($comparingValue->product_id);
            $comparingFeatures = ComparingFeature::where('department_id', $product->department_id)->get();

            $comparingValue->delete();

            if (isset($comparingFeatures[0]->id)) {
                foreach ($comparingFeatures as $comparingFeature) {
                    ComparingValue::create([
                        'product_id' => $product->id,
                        'comparing_feature_id' => $comparingFeature->id,
                        'value' => ucwords($this->faker->word()),
                    ]);
                }
            }
        });
    }
}
