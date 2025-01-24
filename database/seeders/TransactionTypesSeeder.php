<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransactionTypesSeeder extends Seeder
{
    public function run()
    {
        DB::table('transaction_types')->insert([
            // Income categories
            ['name' => 'Mensualidad', 'type' => 'income', 'ordinary' => true, 'description' => 'Monthly fee', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Anualidad', 'type' => 'income', 'ordinary' => true, 'description' => 'Annual fee', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'TAG Acceso Vehicular', 'type' => 'income', 'ordinary' => false, 'description' => 'Vehicle access TAG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Renta Terraza', 'type' => 'income', 'ordinary' => false, 'description' => 'Terrace rental', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tarjeta Acceso Peatonal', 'type' => 'income', 'ordinary' => false, 'description' => 'Pedestrian access card', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Deposito en garantia', 'type' => 'income', 'ordinary' => false, 'description' => 'Security deposit', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Multa', 'type' => 'income', 'ordinary' => false, 'description' => 'Fine', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Devolucion SPEI', 'type' => 'income', 'ordinary' => false, 'description' => 'SPEI refund', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Expense categories
            ['name' => 'Jardineria', 'type' => 'expense', 'ordinary' => true, 'description' => 'Gardening expenses', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Seguridad', 'type' => 'expense', 'ordinary' => true, 'description' => 'Security expenses', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Comunicaciones', 'type' => 'expense', 'ordinary' => true, 'description' => 'Communication expenses', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tecnologia', 'type' => 'expense', 'ordinary' => true, 'description' => 'Technology expenses', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Alberca', 'type' => 'expense', 'ordinary' => true, 'description' => 'Pool maintenance', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Energia', 'type' => 'expense', 'ordinary' => true, 'description' => 'Energy costs', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Limpieza', 'type' => 'expense', 'ordinary' => true, 'description' => 'Cleaning expenses', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Mantenimiento', 'type' => 'expense', 'ordinary' => true, 'description' => 'Maintenance expenses', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
