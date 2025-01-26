<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Carbon\Carbon;
use App\Models\User;

class TestUsersSeeder extends Seeder
{
    public function run()
    {
        $sysadmin = Role::where('name', 'sysadmin')->first();
        $residentRole = Role::where('name', 'resident')->first();
        $adminRole = Role::where('name', 'admin')->first();

        User::create([
        'name' => 'Super Admin',
        'email' => 'sysadmin@example.com',
        'password' => Hash::make('password'),
        ])->assignRole($sysadmin);

        User::create([
            'name' => 'Condominium Administrator',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            ])->assignRole($adminRole);

        User::create([
            'name' => 'Condominium Test Resident',
            'email' => 'resident@example.com',
            'password' => Hash::make('password'),
            ])->assignRole($residentRole);

    }
}
