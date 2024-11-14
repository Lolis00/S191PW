<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/reservar', [ReservationController::class,'index'])->name('reservar.index');

Route::post('/reservar/calcular', [ReservationController::class, 'calculate'])->name('reservar.calculate');
Route::post('/reservar/confirmar', [ReservationController::class, 'confirm'])->name('reservar.confirm');
Route::post('/reservar/cancelar', [ReservationController::class, 'cancel'])->name('reservar.cancel');
