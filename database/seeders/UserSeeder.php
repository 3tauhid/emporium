<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
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
        Schema::disableForeignKeyConstraints();
        
        User::truncate();

        Schema::enableForeignKeyConstraints();

        User::factory()->create([
            'name' => 'John',
            'email' => 'admin@example.com',
            'user_role_id' => 1,
            'is_active' => 1,
        ]);

        User::factory()->create([
            'name' => 'Scarlet',
            'email' => 'seller@example.com',
            'user_role_id' => 2,
            'is_active' => 1,
        ]);

        User::factory()->create([
            'name' => 'Brayden',
            'email' => 'customer@example.com',
            'user_role_id' => 3,
            'is_active' => 1,
        ]);

        User::factory(10)->create([
            'user_role_id' => 2,
        ]);

        User::factory(10)->create([
            'user_role_id' => 3,
        ]);
    }
}
