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
        Schema::create('loan_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('loan_id')->constrained();
            $table->integer('payment_number');
            $table->decimal('balance',10,2);
            $table->decimal('amount',10,2);
            $table->decimal('principal_amount',10,2);
            $table->decimal('interest_amount',10,2);
            $table->integer('status')->default(0)->comment('0 not paid,1 paid');
            $table->date('expected_date')->nullable();
            $table->date('pay_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_payments');
    }
};
