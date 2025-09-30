<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\UserImage;

class UserImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        
        UserImage::truncate();

        Schema::enableForeignKeyConstraints();

        UserImage::create([
            'user_id' => 1,
            'path' => 'user-images/p40.jpeg',
            'original_name' => 'p40.jpeg',
        ]);
        UserImage::create([
            'user_id' => 2,
            'path' => 'user-images/p41.jpeg',
            'original_name' => 'p41.jpeg',
        ]);
        UserImage::create([
            'user_id' => 3,
            'path' => 'user-images/p42.jpeg',
            'original_name' => 'p42.jpeg',
        ]);
    }
}
