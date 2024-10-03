<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Crear un usuario de prueba con el rol SysAdmin
        $sysAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'sysadmin@example.com',
            'password' => bcrypt('password'),
        ]);
        $sysAdmin->assignRole('SysAdmin');

        // Crear un usuario de prueba con el rol Admin
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('Admin');

        // Crear un usuario de prueba con el rol Supplier
        $supplier = User::create([
            'name' => 'Supplier User',
            'email' => 'supplier@example.com',
            'password' => bcrypt('password'),
        ]);
        $supplier->assignRole('Supplier');

        // Crear un usuario de prueba con el rol Reader
        $reader = User::create([
            'name' => 'Reader User',
            'email' => 'reader@example.com',
            'password' => bcrypt('password'),
        ]);
        $reader->assignRole('Reader');

    }

}