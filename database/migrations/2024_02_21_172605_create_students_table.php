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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('idalu');
            $table->string('name');
            $table->string('last_name');
            $table->string('last_name2');
            $table->foreignId('course_id')->constrained();
            $table->date('date_of_birth');
            $table->string('email');
            $table->string('dni_nif');
            $table->string('cip');
            $table->foreignId('address_id')->constrained();
            $table->timestamps();
            $table->bigInteger('create_user');
            $table->bigInteger('update_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
