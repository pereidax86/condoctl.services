<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTypesTable extends Migration
{
    public function up()
    {
        Schema::create('transaction_types', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the transaction type (e.g., "Mensualidad", "Jardinería", etc.)
            $table->enum('type', ['income', 'expense']); // Defines if the type is an income or expense
            $table->boolean('ordinary')->default(true); // Suggestion: Mark as ordinary by default
            $table->text('description')->nullable(); // Optional description of the category
            $table->timestamps(); // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction_types');
    }
}
