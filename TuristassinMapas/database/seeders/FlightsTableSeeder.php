<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flight;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Flight::create([
            'number' => 'FL123',
            'airline' => 'AirlineX',
            'departure' => 'New York',
            'arrival' => 'Los Angeles',
            'price' => 199.99,
            'duration' => 360,
            'availability' => true,
            'stops' => 0,
        ]);
        Flight::create([
            'number' => 'FL124',
            'airline' => 'AirlineY',
            'departure' => 'Chicago',
            'arrival' => 'Miami',
            'price' => 150.50,
            'duration' => 180,
            'availability' => true,
            'stops' => 1,
        ]);
    }
}
