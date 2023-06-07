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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('n_mesa');
            $table->date('fecha_reserva');
            $table->tinyInteger('n_personas');
            $table->integer('total_pagar');
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id')
                  ->references('id')->on('clients')
                  ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
