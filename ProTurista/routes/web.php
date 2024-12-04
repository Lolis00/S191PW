<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\clienteController;

//Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');

//Route::get('/consultas', [controladorVistas::class, 'select'])->name('rutaconsulta');

/*sirve para trabajar con el controladorclientecontroller*/
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutacacas');

Route::post('/cliente', [clienteController::class, 'store'])->name('rutaenviar');

Route::get('/', [clienteController::class, 'home'])->name('rutainicio');

Route::get('/consultas', [clienteController::class, 'index'])->name('rutaconsulta');

Route::get('/clientes/{id}/edit', [clienteController::class, 'edit'])->name('clientes.edit');

Route::put('/clientes/{id}', [clienteController::class, 'update'])->name('clientes.update');

Route::delete('/clientes/{id}', [clienteController::class, 'destroy'])->name('clientes.destroy');




/*Route::get('/', function () {
    return view('welcome');
});
*/

/*el primer parametro es la vista y el segundo es la ruta.
Funciona tanto la sintaxis de arriba como la de abajo*/

/* Route::view('/','inicio') ->name('rutainicio');


Route::view('/formulario','formulario')->name('rutacacas');

Route::view('/consultas','clientes')->name('rutaconsulta'); */

Route::view('/component', 'componentes');

Route::view('/component2', 'componentes2');