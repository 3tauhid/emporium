<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductManufacturerImage;

class ProductManufacturerImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductManufacturerImage::create([
            'product_id' => 1,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/p54.jpg',
            'url' => '/storage/product-manufacturer-images/p54.jpg',
            'original_name' => 'p54.jpg',
        ]);
        ProductManufacturerImage::create([
            'product_id' => 1,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/p55.jpg',
            'url' => '/storage/product-manufacturer-images/p55.jpg',
            'original_name' => 'p54.jpg',
        ]);
    }
}
