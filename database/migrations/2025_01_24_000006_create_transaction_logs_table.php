<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionLogsTable extends Migration
{
    public function up()
    {
        Schema::create('transaction_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->constrained('transactions')->onDelete('cascade'); // Foreign key to transactions
            $table->json('original_data'); // JSON data of the original transaction before changes
            $table->string('change_type'); // Type of change (e.g., created, updated, deleted)
            $table->foreignId('changed_by')->constrained('users')->onDelete('cascade'); // User who made the change
            $table->timestamp('changed_at')->useCurrent(); // Timestamp of the change
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction_logs');
    }
}
