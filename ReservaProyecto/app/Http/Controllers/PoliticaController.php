<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticaController extends Controller
{
    public function index()
{
    $politicas = Politica::all();
    return view('admin.politicas.index', compact('politicas'));
}

public function update(Request $request)
{
    $request->validate([
        'politicas' => 'required|string',
    ]);

    Politica::updateOrCreate([], ['contenido' => $request->politicas]);

    return redirect()->back()->with('success', 'Políticas actualizadas correctamente.');
}
}
