<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => 1,
            'phone' => '123',
            'address' => '123, Dhaka, Bangladesh',
            'is_active' => 1,
        ]);
        User::create([
            'name' => 'Scarlet',
            'email' => 'seller@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => 2,
            'phone' => '123',
            'address' => '123, Dhaka, Bangladesh',
            'is_active' => 1,
        ]);
        User::create([
            'name' => 'Brayden',
            'email' => 'customer@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => 3,
            'phone' => '123',
            'address' => '123, Dhaka, Bangladesh',
            'is_active' => 1,
        ]);
        User::create([
            'name' => 'Harper',
            'email' => 'seller2@example.com',
            'password' => Hash::make('password'),
            'user_role_id' => 2,
            'phone' => '123',
            'address' => '123, Dhaka, Bangladesh',
            'is_active' => 1,
        ]);

        for ($i = 3; $i <= 10; $i++) {
            User::create([
                'name' => 'seller' . $i,
                'email' => "seller$i@example.com",
                'password' => Hash::make('password'),
                'user_role_id' => 2,
                'phone' => '123',
                'address' => '123, Dhaka, Bangladesh',
                'is_active' => 0,
            ]);
        }

        for ($i = 2; $i <= 10; $i++) {
            User::create([
                'name' => 'customer' . $i,
                'email' => "customer$i@example.com",
                'password' => Hash::make('password'),
                'user_role_id' => 3,
                'phone' => '123',
                'address' => '123, Dhaka, Bangladesh',
                'is_active' => 0,
            ]);
        }
    }
}
