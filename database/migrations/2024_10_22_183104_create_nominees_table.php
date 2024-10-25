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
        Schema::create('nominees', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->constrained();
            $table->integer('customer_accounts_id')->constrained();
            $table->string('name');
            $table->date('dob');
            $table->string('image');
            $table->text('pre_address');
            $table->text('per_address');
            $table->string('nid')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->string('relation')->nullable();
            $table->string('second_name')->nullable();
            $table->string('second_nid')->nullable();
            $table->string('second_relation')->nullable();
            $table->string('second_per_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nominees');
    }
};
