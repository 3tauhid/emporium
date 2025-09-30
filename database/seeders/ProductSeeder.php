<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSummary;
use App\Models\ProductFaq;
use App\Models\ProductReview;
use App\Models\ProductSeller;
use App\Models\User;
use App\Models\ComparingValue;
use App\Models\ProductManufacturerImage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        
        Product::truncate();
        ProductSeller::truncate();
        ProductImage::truncate();
        ProductManufacturerImage::truncate();
        ProductSummary::truncate();
        ProductFaq::truncate();
        ProductReview::truncate();
        ComparingValue::truncate();

        Schema::enableForeignKeyConstraints();

        // Product
        $product = Product::factory()->create([
            'main_seller_id' => 2,
            'department_id' => 3,
            'brand_id' => 1,
            'name' => 'Acer Predator Helios 300 Gaming Laptop PC, 15.6 Full HD 144Hz 3ms IPS Display, Intel i7-9750H, GTX 1660 Ti 6GB, 16GB DDR4, 256GB PCIe NVMe SSD, Backlit Keyboard, PH315-52-78VL',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p44.jpg',
            'url' => '/storage/product-images/p44.jpg',
            'original_name' => 'p44.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p45.jpg',
            'url' => '/storage/product-images/p45.jpg',
            'original_name' => 'p45.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p46.jpg',
            'url' => '/storage/product-images/p46.jpg',
            'original_name' => 'p46.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p47.jpg',
            'url' => '/storage/product-images/p47.jpg',
            'original_name' => 'p47.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p48.jpg',
            'url' => '/storage/product-images/p48.jpg',
            'original_name' => 'p48.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p49.jpg',
            'url' => '/storage/product-images/p49.jpg',
            'original_name' => 'p49.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m1.jpg',
            'url' => '/storage/product-manufacturer-images/m1.jpg',
            'original_name' => 'm1.jpg',
        ]);
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m2.jpg',
            'url' => '/storage/product-manufacturer-images/m2.jpg',
            'original_name' => 'm2.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'main_seller_id' => 2,
            'department_id' => 4,
            'brand_id' => 7,
            'name' => 'Oculus Quest All-in-one VR Gaming Headset',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p11.jpg',
            'url' => '/storage/product-images/p11.jpg',
            'original_name' => 'p11.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p15.jpg',
            'url' => '/storage/product-images/p15.jpg',
            'original_name' => 'p15.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m3.jpg',
            'url' => '/storage/product-manufacturer-images/m3.jpg',
            'original_name' => 'm3.jpg',
        ]);
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m4.jpg',
            'url' => '/storage/product-manufacturer-images/m4.jpg',
            'original_name' => 'm4.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'main_seller_id' => 2,
            'department_id' => 4,
            'brand_id' => 6,
            'name' => 'DualShock 4 Wireless Controller for PlayStation 4 Red Magma',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p12.jpg',
            'url' => '/storage/product-images/p12.jpg',
            'original_name' => 'p12.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p14.jpg',
            'url' => '/storage/product-images/p14.jpg',
            'original_name' => 'p14.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m5.jpg',
            'url' => '/storage/product-manufacturer-images/m5.jpg',
            'original_name' => 'm5.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'main_seller_id' => 2,
            'department_id' => 6,
            'brand_id' => 6,
            'name' => 'Darksiders Genesis - PlayStation 4',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p13.jpg',
            'url' => '/storage/product-images/p13.jpg',
            'original_name' => 'p13.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p16.jpg',
            'url' => '/storage/product-images/p16.jpg',
            'original_name' => 'p16.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p17.jpg',
            'url' => '/storage/product-images/p17.jpg',
            'original_name' => 'p17.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p18.jpg',
            'url' => '/storage/product-images/p18.jpg',
            'original_name' => 'p18.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m6.jpg',
            'url' => '/storage/product-manufacturer-images/m6.jpg',
            'original_name' => 'm6.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'main_seller_id' => 2,
            'department_id' => 4,
            'brand_id' => 6,
            'name' => 'DualShock 4 Wireless Controller for PlayStation 4 - Jet Black',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p36.jpg',
            'url' => '/storage/product-images/p36.jpg',
            'original_name' => 'p36.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p19.jpg',
            'url' => '/storage/product-images/p19.jpg',
            'original_name' => 'p19.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m5.jpg',
            'url' => '/storage/product-manufacturer-images/m5.jpg',
            'original_name' => 'm5.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'main_seller_id' => 2,
            'department_id' => 4,
            'brand_id' => 7,
            'name' => 'Oculus - Quest All-in-one VR Gaming Headset - 128GB - Black (Renewed)',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p15.jpg',
            'url' => '/storage/product-images/p15.jpg',
            'original_name' => 'p15.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p11.jpg',
            'url' => '/storage/product-images/p11.jpg',
            'original_name' => 'p11.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m3.jpg',
            'url' => '/storage/product-manufacturer-images/m3.jpg',
            'original_name' => 'm3.jpg',
        ]);
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m4.jpg',
            'url' => '/storage/product-manufacturer-images/m4.jpg',
            'original_name' => 'm4.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'main_seller_id' => 2,
            'department_id' => 6,
            'brand_id' => 6,
            'name' => 'Call of Duty: Modern Warfare - PlayStation 4',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p16.jpg',
            'url' => '/storage/product-images/p16.jpg',
            'original_name' => 'p16.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p17.jpg',
            'url' => '/storage/product-images/p17.jpg',
            'original_name' => 'p17.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p18.jpg',
            'url' => '/storage/product-images/p18.jpg',
            'original_name' => 'p18.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m6.jpg',
            'url' => '/storage/product-manufacturer-images/m6.jpg',
            'original_name' => 'm6.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'main_seller_id' => 2,
            'department_id' => 6,
            'brand_id' => 6,
            'name' => 'The Witcher 3: Wild Hunt Complete Edition',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p17.jpg',
            'url' => '/storage/product-images/p17.jpg',
            'original_name' => 'p17.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p16.jpg',
            'url' => '/storage/product-images/p16.jpg',
            'original_name' => 'p16.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p18.jpg',
            'url' => '/storage/product-images/p18.jpg',
            'original_name' => 'p18.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m6.jpg',
            'url' => '/storage/product-manufacturer-images/m6.jpg',
            'original_name' => 'm6.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'main_seller_id' => 2,
            'department_id' => 6,
            'brand_id' => 6,
            'name' => 'Gears 5: Standard Edition – Xbox One',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p18.jpg',
            'url' => '/storage/product-images/p18.jpg',
            'original_name' => 'p18.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p16.jpg',
            'url' => '/storage/product-images/p16.jpg',
            'original_name' => 'p16.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p17.jpg',
            'url' => '/storage/product-images/p17.jpg',
            'original_name' => 'p17.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m6.jpg',
            'url' => '/storage/product-manufacturer-images/m6.jpg',
            'original_name' => 'm6.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'main_seller_id' => 2,
            'department_id' => 4,
            'brand_id' => 10,
            'name' => '8BitDo Ultimate 2C Bluetooth Controller for Switch/Switch 2, Wireless Controller with 6-Axis Motion Control',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p19.jpg',
            'url' => '/storage/product-images/p19.jpg',
            'original_name' => 'p19.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p36.jpg',
            'url' => '/storage/product-images/p36.jpg',
            'original_name' => 'p36.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m5.jpg',
            'url' => '/storage/product-manufacturer-images/m5.jpg',
            'original_name' => 'm5.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'main_seller_id' => 2,
            'department_id' => 8,
            'brand_id' => 2,
            'name' => 'Apple Watch SE (GPS, 40mm) - Space Gray Aluminum Case with Black Sport Band',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p20.jpg',
            'url' => '/storage/product-images/p20.jpg',
            'original_name' => 'p20.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p24.jpg',
            'url' => '/storage/product-images/p24.jpg',
            'original_name' => 'p24.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p25.jpg',
            'url' => '/storage/product-images/p25.jpg',
            'original_name' => 'p25.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m7.jpg',
            'url' => '/storage/product-manufacturer-images/m7.jpg',
            'original_name' => 'm7.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'main_seller_id' => 2,
            'department_id' => 7,
            'brand_id' => 5,
            'name' => 'Sony WH-CH520 Wireless Headphones Bluetooth On-Ear Headset with Microphone and up to 50 Hours Battery Life with Quick Charging, Black',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p21.jpg',
            'url' => '/storage/product-images/p21.jpg',
            'original_name' => 'p21.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p22.jpg',
            'url' => '/storage/product-images/p22.jpg',
            'original_name' => 'p22.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p23.jpg',
            'url' => '/storage/product-images/p23.jpg',
            'original_name' => 'p23.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m8.jpg',
            'url' => '/storage/product-manufacturer-images/m8.jpg',
            'original_name' => 'm8.jpg',
        ]);
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m9.jpg',
            'url' => '/storage/product-manufacturer-images/m9.jpg',
            'original_name' => 'm9.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 7,
            'brand_id' => 5,
            'name' => 'Sony WH-CH520 Wireless Headphones Bluetooth On-Ear Headset with Microphone, Black',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p22.jpg',
            'url' => '/storage/product-images/p22.jpg',
            'original_name' => 'p22.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p21.jpg',
            'url' => '/storage/product-images/p21.jpg',
            'original_name' => 'p21.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p23.jpg',
            'url' => '/storage/product-images/p23.jpg',
            'original_name' => 'p23.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m8.jpg',
            'url' => '/storage/product-manufacturer-images/m8.jpg',
            'original_name' => 'm8.jpg',
        ]);
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m9.jpg',
            'url' => '/storage/product-manufacturer-images/m9.jpg',
            'original_name' => 'm9.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 7,
            'brand_id' => 5,
            'name' => 'Sony WH-CH520 Wireless Headphones Bluetooth, Black',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p23.jpg',
            'url' => '/storage/product-images/p23.jpg',
            'original_name' => 'p23.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p21.jpg',
            'url' => '/storage/product-images/p21.jpg',
            'original_name' => 'p21.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p22.jpg',
            'url' => '/storage/product-images/p22.jpg',
            'original_name' => 'p22.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m8.jpg',
            'url' => '/storage/product-manufacturer-images/m8.jpg',
            'original_name' => 'm8.jpg',
        ]);
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m9.jpg',
            'url' => '/storage/product-manufacturer-images/m9.jpg',
            'original_name' => 'm9.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 8,
            'brand_id' => 2,
            'name' => 'Apple Watch Series SE 44mm Gold Aluminum (GPS+Cellular)',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p24.jpg',
            'url' => '/storage/product-images/p24.jpg',
            'original_name' => 'p24.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p20.jpg',
            'url' => '/storage/product-images/p20.jpg',
            'original_name' => 'p20.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p25.jpg',
            'url' => '/storage/product-images/p25.jpg',
            'original_name' => 'p25.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m7.jpg',
            'url' => '/storage/product-manufacturer-images/m7.jpg',
            'original_name' => 'm7.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 8,
            'brand_id' => 2,
            'name' => 'Apple Watch SE (2nd Gen) [GPS 40mm] Smart Watch Starlight Aluminum Case & Starlight Sport Band',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p25.jpg',
            'url' => '/storage/product-images/p25.jpg',
            'original_name' => 'p25.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p20.jpg',
            'url' => '/storage/product-images/p20.jpg',
            'original_name' => 'p20.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p24.jpg',
            'url' => '/storage/product-images/p24.jpg',
            'original_name' => 'p24.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m7.jpg',
            'url' => '/storage/product-manufacturer-images/m7.jpg',
            'original_name' => 'm7.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 7,
            'brand_id' => 8,
            'name' => 'Beats Studio Buds - True Wireless Noise Cancelling Earbuds',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p26.jpg',
            'url' => '/storage/product-images/p26.jpg',
            'original_name' => 'p26.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p37.jpg',
            'url' => '/storage/product-images/p37.jpg',
            'original_name' => 'p37.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m10.jpg',
            'url' => '/storage/product-manufacturer-images/m10.jpg',
            'original_name' => 'm10.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 7,
            'brand_id' => 9,
            'name' => 'JBL Live Free 2 - True Wireless Noise Cancelling Earbuds',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p27.jpg',
            'url' => '/storage/product-images/p27.jpg',
            'original_name' => 'p27.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p38.jpg',
            'url' => '/storage/product-images/p38.jpg',
            'original_name' => 'p38.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m10.jpg',
            'url' => '/storage/product-manufacturer-images/m10.jpg',
            'original_name' => 'm10.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 11,
            'brand_id' => 11,
            'name' => 'Hamilton Beach Electric Vegetable Chopper & Mini Food Processor, 3-Cup, 350 Watts, for Dicing, Mincing, and Puree, Black (72850)',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p28.jpg',
            'url' => '/storage/product-images/p28.jpg',
            'original_name' => 'p28.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m11.jpg',
            'url' => '/storage/product-manufacturer-images/m11.jpg',
            'original_name' => 'm11.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 11,
            'brand_id' => 12,
            'name' => 'Ourokhome Manual Food Processor Vegetable Chopper, Portable Hand Pull String Garlic Mincer Onion Cutter for Veggies, Ginger, Fruits, Nuts, Herbs, etc., 900ml, Green',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p29.jpg',
            'url' => '/storage/product-images/p29.jpg',
            'original_name' => 'p29.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m11.jpg',
            'url' => '/storage/product-manufacturer-images/m11.jpg',
            'original_name' => 'm11.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 11,
            'brand_id' => 13,
            'name' => 'Cuisinart Chopper, Stainless Steel/Black, CTG-00-SCHP',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p30.jpg',
            'url' => '/storage/product-images/p30.jpg',
            'original_name' => 'p30.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m11.jpg',
            'url' => '/storage/product-manufacturer-images/m11.jpg',
            'original_name' => 'm11.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 11,
            'brand_id' => 11,
            'name' => 'Hamilton Beach Stack & Snap Food Processor and Vegetable Chopper, BPA Free, Stainless Steel Blades, 12 Cup Bowl, 2-Speed 450 Watt Motor, Black (70725A)',
        ]);

        // ProductImage
        ProductImage::create([
           'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p31.jpg',
            'url' => '/storage/product-images/p31.jpg',
            'original_name' => 'p31.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m11.jpg',
            'url' => '/storage/product-manufacturer-images/m11.jpg',
            'original_name' => 'm11.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 11,
            'brand_id' => 14,
            'name' => 'Longmann Food Chopper, Vegetable Chopper, Onion Chopper, Garlic Chopper, Nuts Chopper - Hand Chopper',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p32.jpg',
            'url' => '/storage/product-images/p32.jpg',
            'original_name' => 'p32.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m11.jpg',
            'url' => '/storage/product-manufacturer-images/m11.jpg',
            'original_name' => 'm11.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 11,
            'brand_id' => 15,
            'name' => 'OXO Good Grips Handheld Mandoline Slicer for Kitchen, Adjustable Vegetable Slicer',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p33.jpg',
            'url' => '/storage/product-images/p33.jpg',
            'original_name' => 'p33.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m11.jpg',
            'url' => '/storage/product-manufacturer-images/m11.jpg',
            'original_name' => 'm11.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 11,
            'brand_id' => 11,
            'name' => 'Hamilton Beach Food Processor & Vegetable Chopper for Slicing, Shredding, Mincing, and Puree, 10 Cups + Easy Clean Bowl Scraper, Black and Stainless Steel (70730)',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p34.jpg',
            'url' => '/storage/product-images/p34.jpg',
            'original_name' => 'p34.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m11.jpg',
            'url' => '/storage/product-manufacturer-images/m11.jpg',
            'original_name' => 'm11.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 11,
            'brand_id' => 16,
            'name' => 'EASYSPEED Electric Garlic Chopper 1Cup, Mini USB Charging Wireless Food Processor with 304 Stainless Steel, 2 Sharp Blades, Portable Kitchen Meat Grinder for Onion, Garlic, Ginger, Baby Food',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p35.jpg',
            'url' => '/storage/product-images/p35.jpg',
            'original_name' => 'p35.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m11.jpg',
            'url' => '/storage/product-manufacturer-images/m11.jpg',
            'original_name' => 'm11.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 3,
            'brand_id' => 3,
            'name' => 'Dell Gaming Laptop PC, 15.6 Full HD 144Hz 3ms IPS Display, GTX 1660 Ti 6GB, 16GB DDR4',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p45.jpg',
            'url' => '/storage/product-images/p45.jpg',
            'original_name' => 'p45.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m1.jpg',
            'url' => '/storage/product-manufacturer-images/m1.jpg',
            'original_name' => 'm1.jpg',
        ]);
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m2.jpg',
            'url' => '/storage/product-manufacturer-images/m2.jpg',
            'original_name' => 'm2.jpg',
        ]);

        // Product
        $product = Product::factory()->create([
            'department_id' => 3,
            'brand_id' => 4,
            'name' => 'Asus Gaming Laptop PC, 15.6 Full HD 144Hz 3ms IPS Display, Intel i7-9750H, GTX 1660 Ti 6GB, 16GB DDR4',
        ]);

        // ProductImage
        ProductImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-images/p46.jpg',
            'url' => '/storage/product-images/p46.jpg',
            'original_name' => 'p46.jpg',
        ]);

        // ProductManufacturerImage
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m1.jpg',
            'url' => '/storage/product-manufacturer-images/m1.jpg',
            'original_name' => 'm1.jpg',
        ]);
        ProductManufacturerImage::create([
            'product_id' => $product->id,
            'disk' => 'public',
            'path' => 'product-manufacturer-images/m2.jpg',
            'url' => '/storage/product-manufacturer-images/m2.jpg',
            'original_name' => 'm2.jpg',
        ]);

        $products = Product::all();

        foreach ($products as $product) {
            ProductSummary::factory(5)->create([
                'product_id' => $product->id,
            ]);

            ProductFaq::factory(3)->create([
                'product_id' => $product->id,
            ]);

            ProductReview::factory(5)->create([
                'product_id' => $product->id,
            ]);

            ComparingValue::factory()->create([
                'product_id' => $product->id,
            ]);

            $user = User::where('id', '!=', $product->main_seller_id)->seller()->first();

            // ProductSeller is already created through ProductFactory. These are just extra sellers.
            ProductSeller::factory()->create([
                'product_id' => $product->id,
                'seller_id' => $user->id,
                'price' => $product->price,
                'stock' => $product->stock,
            ]);
        }

        // Product::factory(10)->hasProductSummaries(5)->hasProductFaqs(3)->hasProductReviews(5)->hasComparingProducts()->hasComparingValues()->create();
    }
}
