<?php

namespace Database\Factories;

use App\Models\TransactionDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TransactionDetail>
 */
class TransactionDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_transaction' => 1,
            'id_product' => 1,
            'qty' => fake()->numberBetween(1, 5),
            'subtotal' => fake()->randomFloat(2, 10000, 500000),
        ];
    }
}
