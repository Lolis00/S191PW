<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::get('/', [LibroController::class, 'index'])->name('inicio');
Route::get('/registro_libro', [LibroController::class, 'create'])->name('registro.libro');
Route::post('/libro_registro', [LibroController::class, 'store']);
