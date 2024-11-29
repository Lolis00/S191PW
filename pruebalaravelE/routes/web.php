<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\ClienteController;


Route::resource ('cliente',ClienteController::class);
Route::get ('/',[ClienteController::class, 'home' ])->name('rutainicio');
