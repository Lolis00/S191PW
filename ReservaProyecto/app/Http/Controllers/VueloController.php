<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Vuelo::query();

        // Filtros de búsqueda
        if ($request->filled('origen')) {
            $query->where('origen', 'LIKE', '%' . $request->origen . '%');
        }
        if ($request->filled('destino')) {
            $query->where('destino', 'LIKE', '%' . $request->destino . '%');
        }
        if ($request->filled('fecha_salida')) {
            $query->where('fecha_salida', $request->fecha_salida);
        }
        if ($request->filled('fecha_regreso')) {
            $query->where('fecha_regreso', $request->fecha_regreso);
        }

        // Filtros avanzados
        if ($request->filled('aerolinea')) {
            $query->where('aerolinea', $request->aerolinea);
        }
        if ($request->filled('precio_min') && $request->filled('precio_max')) {
            $query->whereBetween('precio', [$request->precio_min, $request->precio_max]);
        }
        if ($request->filled('escalas')) {
            $query->where('escalas', $request->escalas);
        }

        $vuelos = $query->get();

        return view('vuelos.index', compact('vuelos'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        return view('vuelos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero_vuelo' => 'required|unique:vuelos',
            'origen' => 'required',
            'destino' => 'required',
            'fecha_salida' => 'required|date',
            'horario_salida' => 'required',
            'horario_llegada' => 'required',
            'duracion' => 'required|integer',
            'precio' => 'required|numeric',
            'aerolinea' => 'required',
            'escalas' => 'required|boolean',
            'asientos_disponibles' => 'required|integer',
        ]);

        Vuelo::create($request->all());

        return redirect()->route('vuelos.index')->with('success', 'Vuelo creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vuelo $vuelo)
    {
        return view('vuelos.show', compact('vuelo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vuelo $vuelo)
    {
        return view('vuelos.edit', compact('vuelo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vuelo $vuelo)
    {
        $request->validate([
            'numero_vuelo' => 'required|unique:vuelos,numero_vuelo,' . $vuelo->id,
            'origen' => 'required',
            'destino' => 'required',
            'fecha_salida' => 'required|date',
            'horario_salida' => 'required',
            'horario_llegada' => 'required',
            'duracion' => 'required|integer',
            'precio' => 'required|numeric',
            'aerolinea' => 'required',
            'escalas' => 'required|boolean',
            'asientos_disponibles' => 'required|integer',
        ]);

        $vuelo->update($request->all());

        return redirect()->route('vuelos.index')->with('success', 'Vuelo actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vuelo $vuelo)
    {
        $vuelo->delete();

        return redirect()->route('vuelos.index')->with('success', 'Vuelo eliminado correctamente.');
    }
}
