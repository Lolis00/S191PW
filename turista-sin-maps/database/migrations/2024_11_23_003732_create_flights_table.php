<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('flights', function (Blueprint $table) {
        $table->id();
        $table->string('number');
        $table->string('origin');
        $table->string('destination');
        $table->dateTime('departure_time');
        $table->dateTime('arrival_time');
        $table->decimal('price', 10, 2);
        $table->integer('available_seats');
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