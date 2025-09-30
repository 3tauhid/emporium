<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StorageProviderSeeder::class,
            UserSeeder::class,
            UserImageSeeder::class,
            BrandSeeder::class,
            DepartmentSeeder::class,
            ComparingFeatureSeeder::class,
            ComparingProductSeeder::class, // ProductSeeder also creates ComparingProduct; so ComparingProduct::truncate() should be executed before it
            ProductSeeder::class,
            OrderSeeder::class,
            CartItemSeeder::class,
        ]);
    }
}
