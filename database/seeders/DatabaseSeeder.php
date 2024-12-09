<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;



class DatabaseSeeder extends Seeder
{
 
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            
           
        ]);
    }

    
}
