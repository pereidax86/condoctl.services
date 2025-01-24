<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Property name or identifier
            $table->foreignId('owner_id') // Foreign key to users table
                  ->constrained('users') // References the users table
                  ->onDelete('cascade'); // Cascade delete if the user is deleted
            $table->string('tenant_name')->nullable(); // Tenant name if rented
            $table->string('tenant_contact')->nullable(); // Tenant contact details
            $table->date('rental_contract_end')->nullable(); // End date of the rental contract
            $table->string('status'); // Status of the property (e.g., occupied, unoccupied, rented)
            $table->timestamps(); // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
