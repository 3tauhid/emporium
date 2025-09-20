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
            'disk' => 'local',
            'path' => 'user-images/p40.jpeg',
            'url' => '/user-images/1',
            'original_name' => 'p40.jpeg',
        ]);
        UserImage::create([
            'user_id' => 2,
            'disk' => 'local',
            'path' => 'user-images/p41.jpeg',
            'url' => '/user-images/2',
            'original_name' => 'p41.jpeg',
        ]);
        UserImage::create([
            'user_id' => 3,
            'disk' => 'local',
            'path' => 'user-images/p42.jpeg',
            'url' => '/user-images/3',
            'original_name' => 'p42.jpeg',
        ]);
        UserImage::create([
            'user_id' => 4,
            'disk' => 'local',
            'path' => 'user-images/p43.jpeg',
            'url' => '/user-images/4',
            'original_name' => 'p43.jpeg',
        ]);
    }
}
