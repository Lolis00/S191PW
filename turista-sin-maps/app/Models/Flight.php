<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['number', 'origin', 'destination', 'departure_time', 'arrival_time', 'price', 'available_seats'];
}
