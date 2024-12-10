<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::resource('productos', ProductoController::class);
Route::post('/', function () {return view('welcome');});
Route::resource('productos', ProductoController::class);

