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
            $table->foreignId('bank_id')->constrained();
            $table->foreignId('bank_branch_id')->constrained();
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('contact_no');
            $table->string('nid',20);
            $table->string('email')->nullable();
            $table->text('per_address');
            $table->text('pre_address')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('ref_id')->nullable();
            $table->string('education')->nullable();
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
