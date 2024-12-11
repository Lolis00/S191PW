<?php

namespace App\Http\Controllers;
use Alert;

use Illuminate\Http\Request;

class Controlador1 extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }
    
    public function insert(Request $request)
    {
        // Validación de los datos recibidos
        $validatedData = $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtemail' => 'required|email|max:255',
            'txttelefono' => 'required|numeric|min:1',
        ]);

       
        return back()->with('success', 'Datos validados y procesados correctamente.');
    }

    
}
