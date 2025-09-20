<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductReview;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductReview::create([
            'product_id' => 1,
            'user_id' => 3,
            'rating' => 5,
            'description' => 'Laptop performs great. Youll be able to run pretty much any AAA title at Max - Ultra at reasonable frame ratings. Cooling much better then the 2018 model and I didnt notice any thermal throttling. You are unable to upgrade the Nvidia driver manually. You must use GeForce experience. 144hrz display is good not great but for the price its unbeatable.',
        ]);

        ProductReview::create([
            'product_id' => 1,
            'user_id' => 3,
            'rating' => 5,
            'description' => 'You are unable to upgrade the Nvidia driver manually. You must use GeForce experience.',
        ]);

        ProductReview::create([
            'product_id' => 1,
            'user_id' => 17,
            'rating' => 5,
            'description' => 'Laptop performs great. Youll be able to run pretty much any AAA title at Max - Ultra at reasonable frame ratings. Cooling much better then the 2018 model and I didnt notice any thermal throttling. You are unable to upgrade the Nvidia driver manually. You must use GeForce experience. 144hrz display is good not great but for the price its unbeatable.',
        ]);

        ProductReview::create([
            'product_id' => 1,
            'user_id' => 3,
            'rating' => 3,
            'description' => 'Laptop performs great. Youll be able to run pretty much any AAA title at Max - Ultra at reasonable frame ratings. Cooling much better then the 2018 model and I didnt notice any thermal throttling. You are unable to upgrade the Nvidia driver manually. You must use GeForce experience. 144hrz display is good not great but for the price its unbeatable.',
        ]);

        ProductReview::create([
            'product_id' => 1,
            'user_id' => 18,
            'rating' => 5,
            'description' => 'You are unable to upgrade the Nvidia driver manually. You must use GeForce experience.',
        ]);

        ProductReview::create([
            'product_id' => 1,
            'user_id' => 18,
            'rating' => 5,
            'description' => 'You are unable to upgrade the Nvidia driver manually. You must use GeForce experience.',
        ]);

        ProductReview::create([
            'product_id' => 1,
            'user_id' => 18,
            'rating' => 5,
            'description' => 'You are unable to upgrade the Nvidia driver manually. You must use GeForce experience.',
        ]);
    }
}
