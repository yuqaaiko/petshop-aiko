<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_kategori' => 1,
            'id_supplier' => 1,
            'nama_produk' => fake()->word(2, true),
            'nama_kategori' => fake()->randomfloat(2, 10000, 100000),
            'stok' => fake()->numberBetween(1, 100),
            'satuan' => fake()->randomElement([
                                'pcs',
                                'kg',
                                'botol',
                                'pack',
        ]),

        ];
    }
}
