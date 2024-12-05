<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VueloController;

use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);
Route::resource('vuelos', VueloController::class);
Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');});
