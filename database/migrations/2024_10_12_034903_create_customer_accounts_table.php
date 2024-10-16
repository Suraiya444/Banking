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
        Schema::create('customer_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('account_type_id')->constrained();
            $table->decimal('max_balance',10,2);
            $table->decimal('max_transfer',10,2);
            $table->decimal('max_withdrawal',10,2);
            $table->decimal('yearly_interest',10,2)->comment('in %');
            $table->date('account_open_date');
            $table->date('account_close_date')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_accounts');
    }
};
