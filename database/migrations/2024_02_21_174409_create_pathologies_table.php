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
        Schema::create('pathologies', function (Blueprint $table) {
            $table->id();
            $table->string('pathology_name');
            $table->integer('note');
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
        Schema::dropIfExists('pathologies');
    }
};
