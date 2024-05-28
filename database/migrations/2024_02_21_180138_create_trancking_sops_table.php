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
        Schema::create('trancking_sops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('student_id')->constrained();
            $table->foreignId('course_id')->constrained();
            $table->date('tracking_date');
            $table->string('notes');
            $table->foreignId('attached_report')->constrained();
            $table->foreignId('contact_professional_id')->constrained();
            $table->foreignId('tutoring_tracking_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trancking_sops');
    }
};
