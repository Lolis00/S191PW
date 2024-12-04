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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_vuelo');
            $table->string('origen');
            $table->string('destino');
            $table->date('fecha_salida');
            $table->date('fecha_regreso')->nullable();
            $table->time('horario_salida');
            $table->time('horario_llegada');
            $table->integer('duracion'); // En minutos
            $table->decimal('precio', 8, 2);
            $table->string('aerolinea');
            $table->boolean('escalas');
            $table->integer('asientos_disponibles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
