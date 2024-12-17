<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@stockify.com',
                'password' => Hash::make('password1a'),
                'role' => 'Admin',
            ],
            [
                'name' => 'John Manager',
                'email' => 'manager@stockify.com',
                'password' => Hash::make('password2b'),
                'role' => 'Manajer Gudang',
            ],
            [
                'name' => 'Jane Staff',
                'email' => 'staff@stockify.com',
                'password' => Hash::make('password3c'),
                'role' => 'Staff Gudang',
            ],
        ]);
    }
}
