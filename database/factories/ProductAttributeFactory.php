<?php

namespace Database\Factories;

use App\Models\ProductAttribute;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductAttribute>
 */
class ProductAttributeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = ProductAttribute::class;

    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 50), 
            'name'       => $this->faker->randomElement(['Ukuran', 'Warna', 'Berat']), // Nama atribut
            'value'      => $this->faker->randomElement(['M', 'L', 'XL', 'Merah', 'Biru', '1kg', '500g']), // Nilai atribut
        ];
    }
}
