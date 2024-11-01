<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarController; 

class LibroController extends Controller
{
    public function index()
    {
        return view('principal');
    }

    public function create()
    {
        return view('registro_libro');
    }

    public function store(request $peticion)
    {
        // $libro=$peticion->input('titulo');
        // session()->flash('exito','Todo correcto: Libro'.$libro.'guardado');
        // return to_route('registro_libro');
         return $peticion->all();
    }
}
