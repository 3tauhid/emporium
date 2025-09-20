<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Acer',
        ]);
        Brand::create([
            'name' => 'Apple',
        ]);
        Brand::create([
            'name' => 'Dell',
        ]);
        Brand::create([
            'name' => 'Asus',
        ]);
        Brand::create([
            'name' => 'Lenovo',
        ]);
        Brand::create([
            'name' => 'Samsung',
        ]);
        Brand::create([
            'name' => 'Oculus',
        ]);
        Brand::create([
            'name' => 'WIOR',
        ]);
        Brand::create([
            'name' => 'THQ Nordic',
        ]);
        Brand::create([
            'name' => 'PlayStation',
        ]);
        Brand::create([
            'name' => 'Vera Bradley',
        ]);
        Brand::create([
            'name' => 'BAYCO',
        ]);
    }
}
