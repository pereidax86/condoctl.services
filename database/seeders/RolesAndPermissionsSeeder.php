<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create Permissions
        $permissions = [
            'manage_users', 'manage_properties', 'view_account',
            'manage_access', 'view_reports'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create Roles and Assign Permissions
        $sysadmin = Role::create(['name' => 'sysadmin']);
        $sysadmin->givePermissionTo(Permission::all());

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo(['manage_users', 'manage_properties']);

        Role::create(['name' => 'resident'])
            ->givePermissionTo(['view_account']);
        Role::create(['name' => 'security'])
            ->givePermissionTo(['manage_access']);
        Role::create(['name' => 'read_only'])
            ->givePermissionTo(['view_reports']);
    }
}
