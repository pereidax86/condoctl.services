<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeDeletionsTable extends Migration
{
    public function up()
    {
        Schema::create('income_deletions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('income_id'); // ID del ingreso eliminado
            $table->string('description'); // Descripción del ingreso eliminado
            $table->decimal('amount', 8, 2); // Monto del ingreso eliminado
            $table->date('date'); // Fecha del ingreso eliminado
            $table->unsignedBigInteger('deleted_by'); // ID del usuario que eliminó el ingreso
            $table->string('reason'); // Razón de la eliminación
            $table->timestamp('deleted_at'); // Fecha y hora de la eliminación
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('income_deletions');
    }
}

