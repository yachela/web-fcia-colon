<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener las categorías por nombre
        $medicamentos = Category::firstOrCreate(['name' => 'Medicamentos'], ['description' => 'Medicamentos generales']);
        $suplementos = Category::firstOrCreate(['name' => 'Suplementos'], ['description' => 'Vitaminas y suplementos']);

        // Insertar productos
        DB::table('products')->insert([
            [
                'name' => 'Paracetamol 500mg',
                'description' => 'Medicamento para el alivio del dolor y la fiebre.',
                'category_id' => $medicamentos->id,
                'price' => 3.50,
                'stock' => 100,
                'image_url' => 'https://via.placeholder.com/foto-producto',
                'is_prescription' => false,
                'expiration_date' => '2025-12-31',
                'manufacturer' => 'Laboratorios XYZ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jarabe Expectorante Cedric',
                'description' => 'Jarabe para aliviar la tos seca y la flema.',
                'category_id' => $medicamentos->id,
                'price' => 8.99,
                'stock' => 50,
                'image_url' => 'https://via.placeholder.com/300x200',
                'is_prescription' => false,
                'expiration_date' => '2024-08-15',
                'manufacturer' => 'Farmacia ABC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Multivitamínico Centrum',
                'description' => 'Fórmula completa con vitaminas y minerales esenciales.',
                'category_id' => $suplementos->id,
                'price' => 25.00,
                'stock' => 80,
                'image_url' => 'https://via.placeholder.com/300x200',
                'is_prescription' => false,
                'expiration_date' => '2025-10-30',
                'manufacturer' => 'VitaCare Labs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ibuprofeno 600mg',
                'description' => 'Alivia el dolor moderado y reduce la inflamación.',
                'category_id' => $medicamentos->id,
                'price' => 4.99,
                'stock' => 150,
                'image_url' => 'https://via.placeholder.com/300x200',
                'is_prescription' => false,
                'expiration_date' => '2025-11-20',
                'manufacturer' => 'Laboratorios Salud Plus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
