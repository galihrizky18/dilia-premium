<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Pelanggan;
use App\Models\Testimonial;
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

        for ($i=0; $i < 300; $i++) { 
            User::factory()->create();
            Pelanggan::factory()->create();
        }
        // Pelanggan::factory(30)->create();

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
            'first_name'=>'User ',
            'last_name'=>'1',
            'provinsi'=>'Sumatera Selatan',
            'kota'=>'Palembang',
            'noHp'=>'08123456789',
        ]);
        Pelanggan::create([
            'id_pelanggan'=>'P2',
            'first_name'=>'User ',
            'last_name'=>'2',
            'provinsi'=>'Sumatera Selatan',
            'kota'=>'Palembang',
            'noHp'=>'08123456789',
        ]);
        Pelanggan::create([
            'id_pelanggan'=>'P3',
            'first_name'=>'User ',
            'last_name'=>'3',
            'provinsi'=>'Sumatera Selatan',
            'kota'=>'Palembang',
            'noHp'=>'08123456789',
        ]);
        Admin::create([
            'id_admin'=> 'A1',
            'first_name'=> 'Admin ',
            'last_name'=> '1',
            'provinsi'=> 'Sumatera Selatan',
            'kota'=> 'Palembang',
            'noHp'=> '089754788383843',
        ]);
        Admin::create([
            'id_admin'=> 'A2',
            'first_name'=> 'Admin ',
            'last_name'=> '2',
            'provinsi'=> 'Sumatera Selatan',
            'kota'=> 'Palembang',
            'noHp'=> '089754788383843',
        ]);

        Testimonial::create([
            'id_user'=> 'P2',
            'first_name'=>'User',
            'last_name'=>'2',
            'noHp'=>'08123456789',
            'komentar'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, iure enim. Totam, explicabo necessitatibus! Facilis dolore maxime aspernatur temporibus ab.
            ',
        ]);
        Testimonial::create([
            'id_user'=> 'P1',
            'first_name'=>'User ',
            'last_name'=>'1',
            'noHp'=>'08123456789',
            'komentar'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, iure enim. Totam, explicabo necessitatibus! Facilis dolore maxime aspernatur temporibus ab.
            ',
        ]);
        Testimonial::create([
            'id_user'=> 'P3',
            'first_name'=>'User ',
            'last_name'=>'3',
            'noHp'=>'08123456789',
            'komentar'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, iure enim. Totam, explicabo necessitatibus! Facilis dolore maxime aspernatur temporibus ab.
            ',
        ]);
    }
}
