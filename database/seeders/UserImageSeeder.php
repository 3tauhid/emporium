<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        UserImage::create([
            'user_id' => 4,
            'path' => 'user-images/p43.jpeg',
            'original_name' => 'p43.jpeg',
        ]);
    }
}
