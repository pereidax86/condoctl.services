<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseDeletionsTable extends Migration
{
    public function up()
    {
        Schema::create('expense_deletions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('expense_id'); // ID del egreso eliminado
            $table->string('description'); // Descripción del egreso eliminado
            $table->decimal('amount', 8, 2); // Monto del egreso eliminado
            $table->date('date'); // Fecha del egreso eliminado
            $table->unsignedBigInteger('deleted_by'); // ID del usuario que eliminó el egreso
            $table->string('reason'); // Razón de la eliminación
            $table->timestamp('deleted_at'); // Fecha y hora de la eliminación
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('expense_deletions');
    }
}
