<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
   
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('number'); // Número de vuelo
            $table->string('airline'); // Aerolínea
            $table->string('departure'); // Ciudad de salida
            $table->string('arrival'); // Ciudad de llegada
            $table->decimal('price', 8, 2); // Precio del vuelo
            $table->integer('duration'); // Duración del vuelo (en minutos)
            $table->boolean('availability')->default(true); // Disponibilidad
            $table->integer('stops')->default(0); // Número de escalas
            $table->timestamps(); // created_at y updated_at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};

