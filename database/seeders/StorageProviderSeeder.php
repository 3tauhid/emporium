<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\StorageProvider;

class StorageProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StorageProvider::truncate();

        StorageProvider::create([
            'name' => 'Local Storage',
            'disk' => 'local',
            'logo_path' => 'logo.png',
            'credentials' => json_encode([]),
            'description' => null,
            'is_active' => 1,
        ]);

        StorageProvider::create([
            'name' => 'Public Storage',
            'disk' => 'public',
            'logo_path' => 'logo.png',
            'credentials' => json_encode([]),
            'description' => null,
            'is_active' => 1,
        ]);

    }
}
