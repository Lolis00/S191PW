<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\RepasoController;
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [InicioController::class, 'inicio'])->name('inicio');
Route::get('/repaso1', [RepasoController::class, 'index'])->name('repaso1');
Route::post('/convertir', [RepasoController::class, 'convertir'])->name('convertir');


