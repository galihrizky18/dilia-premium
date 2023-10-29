<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'id_user' => 'U1',
            'nama' => 'Garix',
            'role' => 'user',
            'username' => 'garix',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'id_user' => 'A1',
            'nama' => 'Rizky',
            'role' => 'admin',
            'username' => 'rizky',
            'password' => bcrypt('123'),
        ]);
    }
}
