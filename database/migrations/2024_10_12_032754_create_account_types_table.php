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
        Schema::create('account_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('loanable')->default(0)->comment('1 yes, 0 no');
            $table->decimal('loan_amount',5,2)->default(0)->comment('in %');
            $table->decimal('min_balance',10,2);
            $table->decimal('max_balance',10,2);
            $table->decimal('max_transfer',10,2);
            $table->decimal('max_withdrawal',10,2);
            $table->decimal('yearly_interest',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_types');
    }
};
