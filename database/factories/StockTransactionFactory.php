<?php

namespace Database\Factories;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StockTransaction>
 */
class StockTransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        $faker = Faker::create('id_ID');
        return [
            'product_id' => $this->faker->numberBetween(1, 50), 
            'user_id'    => 2,
            'type'       => $this->faker->randomElement(['Masuk', 'Keluar']),
            'quantity'   => $this->faker->numberBetween(1, 100),
            'date'       => $this->faker->dateTimeBetween('-1 year', 'now'),
            'status'     => $this->faker->randomElement(['Pending', 'Diterima', 'Ditolak', 'Dikeluarkan']),
            'notes'      => $faker->sentence,
        ];
    }
}
