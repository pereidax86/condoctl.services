<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained('properties')->onDelete('cascade'); // Foreign key to properties
            $table->enum('type', ['income', 'expense']); // Transaction type (income or expense)
            $table->decimal('amount', 10, 2); // Transaction amount
            $table->foreignId('transaction_type_id')->constrained('transaction_types')->onDelete('cascade'); // Foreign key to transaction types
            $table->text('description')->nullable(); // Optional description of the transaction
            $table->date('date'); // Transaction date
            $table->timestamps(); // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
