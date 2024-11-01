<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert; // Asegúrate de instalar e importar la librería Alertify si no la tienes ya

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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'isbn' => 'required|numeric|digits:13',
            'titulo' => 'required|string|max:150',
            'autor' => 'required|string',
            'paginas' => 'required|integer|min:1',
            'anio' => 'required|integer|min:1000|max:' . date('Y'),
            'editorial' => 'required|string',
            'email' => 'required|email',
        ]);

        // Aquí se podría guardar el libro en la base de datos

        alert()->success("Todo correcto: Libro \"{$validatedData['titulo']}\" guardado");
        return redirect('/registro-libro');
    }
}
