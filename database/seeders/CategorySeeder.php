<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Medicamentos', 'description' => 'Medicamentos generales'],
            ['name' => 'Suplementos', 'description' => 'Vitaminas y suplementos'],
            ['name' => 'Cuidado personal', 'description' => 'Productos de higiene personal'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['name' => $category['name']], 
                ['description' => $category['description']] 
            );
        }
    }
}
