<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Pelanggan;
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
            'id_user' => 'A1',
            'role' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'id_user' => 'A2',
            'role' => 'admin',
            'username' => 'admin2',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'id_user' => 'P1',
            'role' => 'user',
            'status' => 'premium',
            'username' => 'user',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'id_user' => 'P2',
            'role' => 'user',
            'status' => 'non-premium',
            'username' => 'user2',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'id_user' => 'P3',
            'role' => 'user',
            'status' => 'non-premium',
            'username' => 'user3',
            'password' => bcrypt('123'),
        ]);
        Pelanggan::create([
            'id_pelanggan'=>'P1',
            'first_name'=>'Rizky ',
            'last_name'=>'Gantengs',
            'provinsi'=>'Sumatera Selatan',
            'kota'=>'Palembang',
            'noHp'=>'08123456789',
        ]);
        Pelanggan::create([
            'id_pelanggan'=>'P2',
            'first_name'=>'Heru ',
            'last_name'=>'Gantengs',
            'provinsi'=>'Sumatera Selatan',
            'kota'=>'Palembang',
            'noHp'=>'08123456789',
        ]);
        Pelanggan::create([
            'id_pelanggan'=>'P3',
            'first_name'=>'Dico ',
            'last_name'=>'Gantengs',
            'provinsi'=>'Sumatera Selatan',
            'kota'=>'Palembang',
            'noHp'=>'08123456789',
        ]);
        Admin::create([
            'id_admin'=> 'A1',
            'first_name'=> 'Garix ',
            'last_name'=> 'Kece Badai',
            'provinsi'=> 'Sumatera Selatan',
            'kota'=> 'Lubuk Linggau',
            'noHp'=> '089754788383843',
        ]);
        Admin::create([
            'id_admin'=> 'A2',
            'first_name'=> 'Rifvo ',
            'last_name'=> 'Kece Badai',
            'provinsi'=> 'Sumatera Selatan',
            'kota'=> 'Lubuk Linggau',
            'noHp'=> '089754788383843',
        ]);
    }
}
