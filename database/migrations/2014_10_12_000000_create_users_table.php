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
        Schema::create('users', function (Blueprint $table) {
            $table->id();//Integer Unsigned Increment
            $table->string('name');// Varchar 255 caracteres
            //$table->text('name');// Varchar de mas de 255 caracteres
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();//timestamp para guardar fechas, nullable s la dejamos vacia
            $table->string('password');
            $table->string('avatar');//Nueva tabla
            $table->string('imagen');
            $table->rememberToken();//Varchar de 100 caracteres, mantener sesion
            $table->timestamps();//Crea dos columnas created_at y update_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
