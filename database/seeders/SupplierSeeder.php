<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            ['name' => 'Supplier A', 'address' => 'Jl. Achmad Yani No. 1', 'phone' => '081234567890', 'email' => 'a@supplier.com'],
            ['name' => 'Supplier B', 'address' => 'Jl. Bersada No. 2', 'phone' => '081234567891', 'email' => 'b@supplier.com'],
        ]);
    }
}
