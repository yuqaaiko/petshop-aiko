<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'nama_produk' => 'Whiskas Makanan Kucing',
            'harga' => 35000,
            'stok' => 20,
            'satuan' => 'pack',
            'id_kategori' => 1,
            'id_supplier' => 1,
        ]);

        Product::create([
            'nama_produk' => 'Royal Canin Makanan Kucing',
            'harga' => 85000,
            'stok' => 15,
            'satuan' => 'pack',
            'id_kategori' => 1,
            'id_supplier' => 1,
        ]);

        Product::create([
            'nama_produk' => 'Pedigree Makanan Anjing',
            'harga' => 65000,
            'stok' => 15,
            'satuan' => 'pack',
            'id_kategori' => 1,
            'id_supplier' => 1,
        ]);

        Product::create([
            'nama_produk' => 'Pasir Kucing',
            'harga' => 45000,
            'stok' => 20,
            'satuan' => 'pack',
            'id_kategori' => 2,
            'id_supplier' => 2,
        ]);

        Product::create([
            'nama_produk' => 'Shampoo Hewan',
            'harga' => 50000,
            'stok' => 10,
            'satuan' => 'botol',
            'id_kategori' => 2,
            'id_supplier' => 2,
        ]);

        Product::create([
            'nama_produk' => 'Mainan Kucing',
            'harga' => 30000,
            'stok' => 12,
            'satuan' => 'pcs',
            'id_kategori' => 3,
            'id_supplier' => 3,
        ]);

        Product::create([
            'nama_produk' => 'Kalung Hewan',
            'harga' => 25000,
            'stok' => 10,
            'satuan' => 'pcs',
            'id_kategori' => 3,
            'id_supplier' => 3,
        ]);

        Product::create([
            'nama_produk' => 'Tempat Makan Hewan',
            'harga' => 40000,
            'stok' => 10,
            'satuan' => 'pcs',
            'id_kategori' => 3,
            'id_supplier' => 3,
        ]);
    }
}
