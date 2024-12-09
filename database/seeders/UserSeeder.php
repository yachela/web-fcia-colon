<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Admin;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Luis',
            'email' => 'luis@fciacolon.com',
            'password' => Hash::make('password',),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Laura',
            'email' => 'laura@fciacolon.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('Employee');

        User::create([
            'name' => 'Natalia',
            'email' => 'natalia@fciacolon.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('Customer');

        User::factory(9)->create();
    }
}
