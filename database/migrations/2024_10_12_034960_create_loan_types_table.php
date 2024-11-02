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
        Schema::create('loan_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('interest_percentage')->comment('in %');
            $table->decimal('amount', 14,2);
            $table->decimal('min_amount')->nullable();
            $table->decimal('max_amount')->nullable();
            $table->string('min_duration');
            $table->string('max_duration');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_types');
    }
};
