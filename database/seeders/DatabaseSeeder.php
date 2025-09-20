<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            OrderSeeder::class,
            DepartmentSeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
            ProductSellerSeeder::class,
            ProductSummarySeeder::class,
            ProductManufacturerImageSeeder::class,
            ComparingFeatureSeeder::class,
            ComparingValueSeeder::class,
            ComparingProductSeeder::class,
            ProductFaqSeeder::class,
            ProductReviewSeeder::class,
        ]);
    }
}
