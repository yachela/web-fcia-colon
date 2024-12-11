<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $medicamentos = Category::firstOrCreate(['name' => 'Medicamentos'], ['description' => 'Medicamentos generales']);
        $suplementos = Category::firstOrCreate(['name' => 'Suplementos'], ['description' => 'Vitaminas y suplementos']);

        DB::table('products')->insert([
            [
                'name' => 'Paracetamol 500mg',
                'slug' => Str::slug('Paracetamol 500mg'), 
                'description' => 'Medicamento para el alivio del dolor y la fiebre.',
                'category_id' => $medicamentos->id,
                'price' => 3550,
                'stock' => 100,
                'image_url' => 'storage/products/paracetamol.jpg',
                'is_prescription' => false,
                'expiration_date' => '2025-12-31',
                'manufacturer' => 'Laboratorios XYZ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jarabe Expectorante Cedric',
                'slug' => Str::slug('Jarabe Expectorante Cedric'),
                'description' => 'Jarabe para aliviar la tos seca y la flema.',
                'category_id' => $medicamentos->id,
                'price' => 8999,
                'stock' => 50,
                'image_url' => 'storage/products/cedric.jpg',
                'is_prescription' => false,
                'expiration_date' => '2024-08-15',
                'manufacturer' => 'Farmacia ABC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Multivitamínico Centrum',
                'slug' => Str::slug('Multivitamínico Centrum'),
                'description' => 'Fórmula completa con vitaminas y minerales esenciales.',
                'category_id' => $suplementos->id,
                'price' => 25000,
                'stock' => 80,
                'image_url' => 'storage/products/centrum.jpg',
                'is_prescription' => false,
                'expiration_date' => '2025-10-30',
                'manufacturer' => 'VitaCare Labs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ibuprofeno 600mg',
                'slug' => Str::slug('Ibuprofeno 600mg'),
                'description' => 'Alivia el dolor moderado y reduce la inflamación.',
                'category_id' => $medicamentos->id,
                'price' => 4999,
                'stock' => 150,
                'image_url' => 'storage/products/ibuprofeno.jpg',
                'is_prescription' => false,
                'expiration_date' => '2025-11-20',
                'manufacturer' => 'Laboratorios Salud Plus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}