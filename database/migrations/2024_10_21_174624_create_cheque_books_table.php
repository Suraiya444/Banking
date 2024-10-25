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
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('customer_account_id')->constrained();
            $table->integer('no_of_pages')->nullable();
            $table->integer('first_leaf_no') ;
            $table->integer('last_leaf_no');
            $table->integer('status')->default(0)->comment('0 inactive,1 active');
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
