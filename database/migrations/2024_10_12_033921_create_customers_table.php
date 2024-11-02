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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('nid',20)->nullable();
            $table->string('image')->nullable();
            $table->string('nid_image')->nullable();
            $table->string('nid_image_back')->nullable();
            $table->string('email')->nullable();
            $table->text('per_address')->nullable();
            $table->text('pre_address')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('ref_id')->nullable();
            $table->string('income',14,2)->nullable();
            $table->string('occupation')->nullable();
            $table->decimal('balance',14,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
