<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('private_ticket_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id')->unique();
            $table->string('user_id');
            $table->decimal('credit', 8, 2);
            $table->boolean('ticket_status');
            $table->softDeletes('soft_delete');
            $table->timestamps();
            
            $table->foreign('transaction_id')->references('transaction_id')->on('public_ticket_transactions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('private_ticket_transactions');
    }
};
