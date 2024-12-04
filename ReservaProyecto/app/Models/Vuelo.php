<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_vuelo',
        'origen',
        'destino',
        'fecha_salida',
        'fecha_regreso',
        'horario_salida',
        'horario_llegada',
        'duracion',
        'precio',
        'aerolinea',
        'escalas',
        'asientos_disponibles',
    ];
}
