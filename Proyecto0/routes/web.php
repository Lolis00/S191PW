<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HotelController;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:admin'])->get('/test-role', function () {
    return 'El middleware role está funcionando correctamente.';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->get('/test-role', function () {
    return 'Middleware funcionando correctamente.';
});
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/search/flights', [SearchController::class, 'searchFlights'])->name('search.flights');
    Route::get('/search/hotels', [SearchController::class, 'searchHotels'])->name('search.hotels');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
});

require __DIR__.'/auth.php';
