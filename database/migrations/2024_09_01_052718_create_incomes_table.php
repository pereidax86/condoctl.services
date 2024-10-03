<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->decimal('amount', 8, 2); // Guardará la cantidad del ingreso
            $table->date('date'); // Fecha en que se realizó el ingreso
            $table->unsignedBigInteger('user_id'); // Relación con el usuario que registró el ingreso
            $table->timestamps();

            // Llave foránea para asegurar la relación con la tabla users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('incomes');
    }
}
