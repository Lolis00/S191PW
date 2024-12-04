<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;

Route::get('/', function () {return view('welcome');});
Route::get('/flights', [FlightController::class, 'index']);
Route::post('/flights/search', [FlightController::class, 'search']);
