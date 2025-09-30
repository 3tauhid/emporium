<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
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
        Schema::disableForeignKeyConstraints();
        
        Brand::truncate();

        Schema::enableForeignKeyConstraints();

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
            'name' => 'Sony',
        ]);
        Brand::create([
            'name' => 'PlayStation',
        ]);
        Brand::create([
            'name' => 'Oculus',
        ]);
        Brand::create([
            'name' => 'Beats',
        ]);
        Brand::create([
            'name' => 'JBL',
        ]);
        Brand::create([
            'name' => '8BitDo',
        ]);
        Brand::create([
            'name' => 'Hamilton Beach',
        ]);
        Brand::create([
            'name' => 'Ourokhome',
        ]);
        Brand::create([
            'name' => 'Cuisinart',
        ]);
        Brand::create([
            'name' => 'Longmann',
        ]);
        Brand::create([
            'name' => 'OXO',
        ]);
        Brand::create([
            'name' => 'EasySpeed',
        ]);
    }
}
