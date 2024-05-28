<?php

// database/migrations/xxxx_xx_xx_create_docents_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentsTable extends Migration
{
    public function up()
    {
        Schema::create('docents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('lastname1');
            $table->string('lastname2');
            $table->string('email')->unique();
            $table->timestamps();
            $table->bigInteger('create_user');
            $table->bigInteger('update_user');
        });
    }

    public function down()
    {
        Schema::dropIfExists('docents');
    }
}
