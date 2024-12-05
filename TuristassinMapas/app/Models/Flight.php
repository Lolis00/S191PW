<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'number', 'airline', 'departure', 'arrival', 'price', 'duration', 'availability', 'stops',
    ];
}
