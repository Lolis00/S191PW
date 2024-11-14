<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservacionController;

Route::get('/reservacion', [ReservacionController::class, 'mostrarFormulario'])->name('reservacion.formulario');
Route::post('/reservacion/carrito', [ReservacionController::class, 'agregarACarrito'])->name('reservacion.carrito');
Route::get('/reservacion/resumen', [ReservacionController::class, 'mostrarResumen'])->name('reservacion.resumen');
Route::post('/reservacion/confirmar', [ReservacionController::class, 'confirmarCompra'])->name('reservacion.confirmar');
Route::post('/reservacion/cancelar/{id}', [ReservacionController::class, 'cancelarReservacion'])->name('reservacion.cancelar');
Route::get('/reservacion', [ReservacionController::class, 'mostrarFormulario'])->name('reservacion.formulario');
Route::post('/reservacion/carrito', [ReservacionController::class, 'agregarACarrito'])->name('reservacion.carrito');

