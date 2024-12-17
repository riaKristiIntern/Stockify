<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Product::class;

    public function definition(): array
    {
        $faker = Faker::create('id_ID');

        $categoryId = $this->faker->numberBetween(1, 4);
        $category = Category::find($categoryId);

        // Nama produk sesuai kategori
        $names = [
            1 => ['TV', 'Laptop', 'Handphone', 'Kulkas'],
            2 => ['Jaket', 'Kemeja', 'Celana', 'Kaos'],
            3 => ['Mie Instan', 'Snack', 'Air Mineral', 'Kopi'],
            4 => ['Shampoo', 'Sabun', 'Pasta Gigi', 'Krim Wajah'],
        ];

        $productName = $faker->randomElement($names[$categoryId]);

        return [
            'category_id'   => $categoryId,
            'supplier_id'   => $this->faker->numberBetween(1, 2),
            'name'          => $productName,
            'sku'           => strtoupper(Str::random(10)),
            'description'   => $faker->sentence(6),
            'purchase_price' => $faker->randomFloat(2, 10, 100000),  // Harga beli, nilai acak antara 10 hingga 1000
            'selling_price'  => function (array $attributes) {         // Harga jual, yang lebih besar dari harga beli
                return $this->faker->randomFloat(2, $attributes['purchase_price'] + 1, 200000);
            },
            'image'         => 'path/to/sample_image.jpg',
        ];
    }
}
