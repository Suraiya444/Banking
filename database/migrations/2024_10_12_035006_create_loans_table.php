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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('customer_account_id')->constrained();
            $table->date('start_date');
            $table->integer('term_length');
            $table->decimal('interest_rate',10,2);
            $table->decimal('principal_amount',10,2);
            $table->decimal('amount_with_interest',10,2);
            $table->decimal('fine',10,2);
            $table->decimal('total_paid',10,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
