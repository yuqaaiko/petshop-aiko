<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
    Supplier::create([
        'nama_supplier' => 'PetFood Supplier',
        'alamat' => 'Jl. Mawar No. 10',
        'telepon' => '081234567801',
    ]);

    Supplier::create([
        'nama_supplier' => 'PetCare Supplier',
        'alamat' => 'Jl. Melati No. 20',
        'telepon' => '081234567802',
    ]);

    Supplier::create([
        'nama_supplier' => 'PetAccessory Supplier',
        'alamat' => 'Jl. Kenanga No. 30',
        'telepon' => '081234567803',
    ]);
}
}
