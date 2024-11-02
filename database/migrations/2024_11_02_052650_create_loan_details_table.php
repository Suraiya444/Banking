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
        Schema::create('loan_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loan_id')->constrained();
            $table->foreignId('customer_account_id')->constrained();
            $table->string('payment_no')->nullable();
            $table->decimal('loan_balance',20,2)->default(0);
            $table->decimal('payment',20,2)->default(0);
            $table->decimal('pricipal',20,2)->default(0);
            $table->decimal('interest',5,2)->default(0)->comment('in %');
            $table->date('pay_date')->nullable();
            $table->date('actual_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_details');
    }
};
