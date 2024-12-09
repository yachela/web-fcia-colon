<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
  
        $adminRole = Role::create(['name' => 'Admin']);
        $employeeRole = Role::create(['name' => 'Employee']);
        $customerRole = Role::create(['name' => 'Customer']);

        $permissions = [
            'products.show',
            'products.create',
            'products.edit',
            'products.destroy',
            'users.manage',
           // 'customers.manage',
    
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $adminRole->syncPermissions($permissions); 
        $employeeRole->syncPermissions([
            'products.show',
            'products.create',
            'products.edit',
            'products.destroy',
        ]);
        $customerRole->syncPermissions(['products.show']); 
    
    }


}
