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
        Schema::create('game_test_students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->integer('time');
            $table->integer('score');
            $table->timestamps();
            $table->bigInteger('creation_user');
            $table->bigInteger('update_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_test_students');
    }
};
