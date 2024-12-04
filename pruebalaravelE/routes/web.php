<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ClienteController;


Route::resource('cliente', clienteController::class);
Route::get('/', [clienteController::class, 'home' ])->name('rutainicio');
