<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\ComparingFeature;

class ComparingFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        
        ComparingFeature::truncate();

        Schema::enableForeignKeyConstraints();

        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Item Model',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Processor',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Processor Speed',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Processor Count',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'RAM',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'RAM Type',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Chipset Brand',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Card Description',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Graphics Ram',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Display Resolution',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Display Size',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Display Technology',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Hard Disk Size',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Hard Drive Interface',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Dimensions',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Weight',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Operating System',
        ]);
        ComparingFeature::create([
            'department_id' => 3,
            'name' => 'Wireless Compatibility',
        ]);

        ComparingFeature::create([
            'department_id' => 4,
            'name' => 'Item model number',
        ]);
        ComparingFeature::create([
            'department_id' => 4,
            'name' => 'Operating System',
        ]);
        ComparingFeature::create([
            'department_id' => 4,
            'name' => 'Item Weight',
        ]);
        ComparingFeature::create([
            'department_id' => 4,
            'name' => 'Product Dimensions',
        ]);
        ComparingFeature::create([
            'department_id' => 4,
            'name' => 'Color',
        ]);

        ComparingFeature::create([
            'department_id' => 8,
            'name' => 'Dial diameters',
        ]);
        ComparingFeature::create([
            'department_id' => 8,
            'name' => 'Movement',
        ]);
        ComparingFeature::create([
            'department_id' => 8,
            'name' => 'Waterproof',
        ]);
        ComparingFeature::create([
            'department_id' => 8,
            'name' => 'Backlight',
        ]);
        ComparingFeature::create([
            'department_id' => 8,
            'name' => 'Color',
        ]);
    }
}
