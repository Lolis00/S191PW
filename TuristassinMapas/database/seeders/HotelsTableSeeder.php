<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelsTableSeeder extends Seeder
{
    
    public function run()
    {
        Hotel::create([
            'name' => 'Hotel Paradise',
            'location' => 'Los Angeles',
            'price_per_night' => 120.00,
            'stars' => 5,
            'availability' => true,
        ]);
        Hotel::create([
            'name' => 'Hotel Comfort',
            'location' => 'Miami',
            'price_per_night' => 85.50,
            'stars' => 4,
            'availability' => true,
        ]);
    }
}
