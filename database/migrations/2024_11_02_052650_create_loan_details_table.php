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
            $table->foreignId('loan_id')->constrained();
            $table->foreignId('customer_account_id')->constrained();
            $table->string('payment_no')->nullable();
            $table->string('loan_manage');
            $table->decimal('payment');
            $table->decimal('pricipal');
            $table->decimal('interest',5,2)->default(0)->comment('in %');
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
