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
        Schema::create('cheque_books', function (Blueprint $table) {
            $table->id();
            $table->int('customer_id')->nullable();
            $table->int('customer_account_id')->nullable();
            $table->int('no_of_pages')->nullable();
            $table->int('first_leaf_no')->nullable();
            $table->int('last_leaf_no')->nullable();
            $table->int('status')->default(0)->comment('0 inactive,1 active');
            $table->timestamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cheque_books');
    }
};
