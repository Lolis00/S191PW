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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
$table->string('flight_number');
$table->string('origin');
$table->string('destination');
$table->date('departure_date');
$table->date('return_date')->nullable();
$table->string('airline');
$table->integer('price');
$table->integer('seats_available');
$table->boolean('has_layovers')->default(false);
$table->string('departure_time');
$table->string('arrival_time');
$table->timestamps();
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
