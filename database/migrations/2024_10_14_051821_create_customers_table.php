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
            $table->integer('bank_branch_id');
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('nid');
            $table->string('email');
            $table->string('contact_no');
            $table->text('per_address');
            $table->text('pre_address');
            $table->date('dob');
            $table->string('gender');
            $table->integer('ref_id');
            $table->string('education');
            $table->integer('balance');
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
