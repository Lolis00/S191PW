<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador1;


//Route::get('/', function () {
    //return view('welcome');
//});


//Route::view('/formulario','formulario')->name('form');
Route::get('/', [Controlador1::class, 'inicio'])->name('rutainicio');
Route::get('/fomulario', [Controlador1::class, 'insert'])->name('form');

Route::get('/formulario', [Controlador1::class, 'insert'])->name('ruta.formulario');
Route::post('/formulario', [Controlador1::class, 'insert'])->name('ruta.insert');

Route::get('/create', [Controlador1::class, 'create']);
