<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 100,
            'name' => 'admin',
            'email' => 'admin@test.com',
            'email_verified_at'=> now(),
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
            'role' => 1,
            'dpi'=>"1234 56789 1011",
            'nit' => '1234567-8',
            'imagen' => '/img/avatars/avatar3.jpeg',
            'telefono' => '58025942'
        ]);
        DB::table('users')->insert([
            'id' => 101,
            'name' => 'usuario',
            'email' => 'usuario@test.com',
            'email_verified_at'=> now(),
            'password' => Hash::make('usuario'),
            'remember_token' => Str::random(10),
            'role' => 2,
            'dpi'=>"1234 56789 1011",
            'nit' => '1234567-8',
            'imagen' => '/img/avatars/avatar3.jpeg',
            'telefono' => '58025942'
        ]);
        DB::table('users')->insert([
            'id' => 102,
            'name' => 'empresa',
            'email' => 'empresa@test.com',
            'email_verified_at'=> now(),
            'password' => Hash::make('empresa'),
            'remember_token' => Str::random(10),
            'role' => 3,
            'dpi'=>"1234 56789 1011",
            'nit' => '1234567-8',
            'imagen' => '/img/avatars/avatar3.jpeg',
            'telefono' => '58025942'
        ]);
    }
}
