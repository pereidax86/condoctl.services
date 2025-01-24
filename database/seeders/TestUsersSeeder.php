<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Carbon\Carbon;

class TestUsersSeeder extends Seeder
{
    public function run()
    {
        $residentRole = Role::where('name', 'resident')->first();
        $adminRole = Role::where('name', 'admin')->first();

        DB::table('users')->insert([
            ['name' => 'Test Resident', 'email' => 'resident@test.com', 'password' => Hash::make('password'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Test Admin', 'email' => 'admin@test.com', 'password' => Hash::make('password'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        DB::table('model_has_roles')->insert([
            ['role_id' => $residentRole->id, 'model_type' => 'App\\Models\\User', 'model_id' => 1],
            ['role_id' => $adminRole->id, 'model_type' => 'App\\Models\\User', 'model_id' => 2],
        ]);
    }
}
