<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        
        Department::truncate();

        Schema::enableForeignKeyConstraints();

        Department::create([
            'parent_department_id' => 0,
            'name' => 'Electronic',
        ]);
        Department::create([
            'parent_department_id' => 1,
            'name' => 'Computers',
        ]);
        Department::create([
            'parent_department_id' => 2,
            'name' => 'Laptops',
        ]);
        Department::create([
            'parent_department_id' => 1,
            'name' => 'Gaming',
        ]);
        Department::create([
            'parent_department_id' => 0,
            'name' => 'Software',
        ]);
        Department::create([
            'parent_department_id' => 5,
            'name' => 'Gaming',
        ]);
        Department::create([
            'parent_department_id' => 1,
            'name' => 'Wireless',
        ]);
        Department::create([
            'parent_department_id' => 7,
            'name' => 'Watch',
        ]);
        Department::create([
            'parent_department_id' => 0,
            'name' => 'Accessory',
        ]);
        Department::create([
            'parent_department_id' => 9,
            'name' => 'Bag',
        ]);
        Department::create([
            'parent_department_id' => 9,
            'name' => 'Home & Kitchen',
        ]);
        Department::create([
            'parent_department_id' => 0,
            'name' => 'Arts & Crafts',
        ]);
        Department::create([
            'parent_department_id' => 0,
            'name' => 'Baby',
        ]);
        Department::create([
            'parent_department_id' => 0,
            'name' => 'Beauty & Personal Care',
        ]);
        Department::create([
            'parent_department_id' => 0,
            'name' => 'Books',
        ]);
        Department::create([
            'parent_department_id' => 1,
            'name' => 'Cellphones',
        ]);
    }
}
