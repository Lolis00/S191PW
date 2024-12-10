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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
$table->string('name');
$table->string('location');
$table->integer('stars');
$table->integer('price_per_night');
$table->integer('rooms_available');
$table->text('description');
$table->text('cancellation_policies');
$table->json('services')->nullable();
$table->json('photos')->nullable();
$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
