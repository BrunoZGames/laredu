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
        Schema::create('game_tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained();
            $table->foreignId('test_id')->constrained();
            $table->integer('level');
            $table->integer('max_score');
            $table->integer('rounds');
            $table->integer('max_time');
            $table->integer('min_time');
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
        Schema::dropIfExists('game_tests');
    }
};
