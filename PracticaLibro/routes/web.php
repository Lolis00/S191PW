<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::get('/', [LibroController::class, 'index'])->name('inicio');
Route::get('/registro-libro', [LibroController::class, 'create'])->name('registro.libro');
Route::post('/registro-libro', [LibroController::class, 'store']);
