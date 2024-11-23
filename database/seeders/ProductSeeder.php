<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Paracetamol 500mg',
                'description' => 'Medicamento para el alivio del dolor y la fiebre.',
                'category' => 'Medicamentos',
                'price' => 3.50,
                'stock' => 100,
                'image_url' => 'https://via.placeholder.com/150',
                'is_prescription' => false,
                'expiration_date' => '2025-12-31',
                'manufacturer' => 'Laboratorios XYZ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jarabe para la tos',
                'description' => 'Jarabe para aliviar la tos seca.',
                'category' => 'Medicamentos',
                'price' => 8.99,
                'stock' => 50,
                'image_url' => 'https://via.placeholder.com/150',
                'is_prescription' => true,
                'expiration_date' => '2024-08-15',
                'manufacturer' => 'Farmacia ABC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vitaminas C 1000mg',
                'description' => 'Suplemento vitamínico para reforzar el sistema inmunológico.',
                'category' => 'Suplementos',
                'price' => 12.50,
                'stock' => 200,
                'image_url' => 'https://via.placeholder.com/150',
                'is_prescription' => false,
                'expiration_date' => '2026-05-01',
                'manufacturer' => 'Healthy Life Corp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Omega 3 1000mg',
                'description' => 'Suplemento alimenticio para la salud del corazón y cerebro.',
                'category' => 'Suplementos',
                'price' => 18.99,
                'stock' => 150,
                'image_url' => 'https://via.placeholder.com/150',
                'is_prescription' => false,
                'expiration_date' => '2026-12-01',
                'manufacturer' => 'HealthPlus Inc.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Multivitaminas Adultos',
                'description' => 'Fórmula completa con vitaminas y minerales esenciales.',
                'category' => 'Suplementos',
                'price' => 25.00,
                'stock' => 100,
                'image_url' => 'https://via.placeholder.com/150',
                'is_prescription' => false,
                'expiration_date' => '2025-10-30',
                'manufacturer' => 'VitaCare Labs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Calcio + Vitamina D',
                'description' => 'Suplemento para fortalecer los huesos y prevenir osteoporosis.',
                'category' => 'Suplementos',
                'price' => 15.75,
                'stock' => 80,
                'image_url' => 'https://via.placeholder.com/150',
                'is_prescription' => false,
                'expiration_date' => '2025-05-15',
                'manufacturer' => 'BoneHealth Pharma',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Magnesio 500mg',
                'description' => 'Suplemento para el alivio del estrés y relajación muscular.',
                'category' => 'Suplementos',
                'price' => 9.99,
                'stock' => 120,
                'image_url' => 'https://via.placeholder.com/150',
                'is_prescription' => false,
                'expiration_date' => '2026-08-20',
                'manufacturer' => 'Natural Balance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}