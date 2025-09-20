<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductSummary;

class ProductSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductSummary::create([
            'product_id' => 1,
            'description' => '9th Generation Intel Core i7 9750H 6 Core Processor (Up to 4.5GHz) with Windows 10 Home 64 Bit',
        ]);
        ProductSummary::create([
            'product_id' => 1,
            'description' => 'NVIDIA GeForce GTX 1660 Ti Graphics with 6GB of dedicated GDDR6 VRAM',
        ]);
        ProductSummary::create([
            'product_id' => 1,
            'description' => '15.6 inches Full HD (1920 x 1080) Widescriptioncreen LED backlit IPS Display (144Hz Refresh Rate, 3ms Overdrive Response Time, 300nit Brightness and 72 percentage NTSC)',
        ]);
        ProductSummary::create([
            'product_id' => 1,
            'description' => '16GB DDR4 2666MHz Memory, 256GB PCIe NVMe SSD (2 x PCIe M.2 Slots; 1 Slot Open for Easy Upgradescription) and 1 Available Hard Drive Bay',
        ]);
        ProductSummary::create([
            'product_id' => 1,
            'description' => 'Backlit Keyboard; LAN: Killer Ethernet E2500 10/100/1000 Gigabit Ethernet LAN; Wireless: Killer DoubleShot Pro Wireless AC 1550 802. 11ac; 4th Gen All Metal AeroBlade 3D Fan',
        ]);
    }
}
