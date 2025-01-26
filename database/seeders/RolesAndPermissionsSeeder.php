<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Define all permissions
        $permissions = [
            'view_dashboard',      // Acceder al dashboard
            'manage_users',        // Administrar usuarios
            'manage_properties',   // Administrar propiedades
            'view_account',        // Ver cuenta del residente
            'manage_access',       // Gestionar accesos
            'view_reports',        // Ver reportes
            'manage_config',       // Configurar el sistema
        ];

        // Create Permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create Roles and Assign Permissions

        // Sysadmin: Acceso completo
        $sysadmin = Role::firstOrCreate(['name' => 'sysadmin']);
        $sysadmin->givePermissionTo(Permission::all());

        // Admin: Todo menos configuración del sistema
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->givePermissionTo(
            Permission::where('name', '!=', 'manage_config')->get()
        );

        // Resident: Acceso limitado a su cuenta
        $resident = Role::firstOrCreate(['name' => 'resident']);
        $resident->givePermissionTo(['view_dashboard', 'view_account']);

        // Security: Acceso para gestionar accesos
        $security = Role::firstOrCreate(['name' => 'security']);
        $security->givePermissionTo(['view_dashboard', 'manage_access']);

        // Read-only: Solo puede ver reportes
        $readOnly = Role::firstOrCreate(['name' => 'read_only']);
        $readOnly->givePermissionTo(['view_dashboard', 'view_reports']);
    }
}
