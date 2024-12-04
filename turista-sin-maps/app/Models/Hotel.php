<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name', 'location', 'price_per_night', 'rating', 'available_rooms', 'description'];
}
