<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Product([
            'name' => $row['name'],
            'sku' => $row['sku'],
            'category_id' => $row['category_id'],
            'supplier_id' => $row['supplier_id'],
            'purchase_price' => $row['purchase_price'],
            'selling_price' => $row['selling_price'],
            'image' => $row['image'], 
        ]);
    }
}
