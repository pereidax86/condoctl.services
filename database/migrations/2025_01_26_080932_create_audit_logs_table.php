<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditLogsTable extends Migration
{
    public function up()
    {
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // ID del usuario que realizó la acción
            $table->string('email')->nullable();              // Email del usuario
            $table->string('action');                         // Acción realizada (POST, PUT, DELETE)
            $table->string('route');                          // Ruta afectada
            $table->json('data')->nullable();                 // Datos enviados en la solicitud
            $table->timestamps();                             // Fecha y hora del log
        });
    }

    public function down()
    {
        Schema::dropIfExists('audit_logs');
    }
}
