<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Crear roles
        $sysAdmin = Role::create(['name' => 'SysAdmin']);
        $admin = Role::create(['name' => 'Admin']);
        $supplier = Role::create(['name' => 'Supplier']);
        $reader = Role::create(['name' => 'Reader']);

        // Crear permisos y asignarlos a roles
        // Permisos de manipulacion
        Permission::create(['name' => 'manage system settings'])->assignRole($sysAdmin);
        Permission::create(['name' => 'manage users'])->assignRole([$sysAdmin, $admin]);
        Permission::create(['name' => 'manage suppliers'])->assignRole([$admin]);
        Permission::create(['name' => 'manage incomes'])->assignRole([$admin]);
        Permission::create(['name' => 'manage expenses'])->assignRole([$admin]);
        

        // Permisos de lectura
        Permission::create(['name' => 'view financial states'])->assignRole([$sysAdmin, $admin, $reader]);
        Permission::create(['name' => 'view incomes'])->assignRole([$admin, $reader]);
        Permission::create(['name' => 'view expenses'])->assignRole([$admin, $reader]);
        Permission::create(['name' => 'view reports'])->assignRole([$admin, $reader]);

        // SysAdmin tiene todos los permisos
        //$sysAdmin->givePermissionTo(Permission::all());
    }
}
