<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Elektronik', 'description' => 'Produk elektronik'],
            ['name' => 'Pakaian', 'description' => 'Produk pakaian'],
            ['name' => 'Makanan & Minuman', 'description' => 'Produk makanan & Minuman'],
            ['name' => 'Perawatan & Kecantikan', 'description' => 'Produk Perawatan & Kecantikan'],
        ]);
    }
}
