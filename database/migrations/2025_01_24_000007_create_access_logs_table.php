<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessLogsTable extends Migration
{
    public function up()
    {
        Schema::create('access_logs', function (Blueprint $table) {
            $table->id();
            $table->string('visitor_name'); // Name of the visitor or supplier
            $table->foreignId('property_id')->constrained('properties')->onDelete('cascade'); // Foreign key to properties
            $table->date('date'); // Date of access
            $table->time('time'); // Time of access
            $table->timestamps(); // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('access_logs');
    }
}
