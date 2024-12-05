<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Verificar el rol del usuario autenticado
        if (Auth::user()->role === 'admin') {
            // Redirigir al panel de administración
            return redirect()->route('admin.index');
        }

        // Lógica para usuarios regulares (búsqueda de vuelos)
        $query = Vuelo::query();

        // Filtros de búsqueda
        if ($request->filled('origen')) {
            $query->where('origen', 'LIKE', '%' . $request->origen . '%');
        }
        if ($request->filled('destino')) {
            $query->where('destino', 'LIKE', '%' . $request->destino . '%');
        }

        $vuelos = $query->get();

        return view('home', compact('vuelos'));
    }
}