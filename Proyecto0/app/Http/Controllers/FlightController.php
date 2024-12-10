<?php

namespace App\Http\Controllers;
use App\Models\Flight;

use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Muestra una lista de los vuelos.
     */
    public function index()
    {
        $flights = Flight::all(); // Recupera todos los vuelos
        return view('flights.index', compact('flights')); // Envía los datos a la vista
    }

    /**
     * Muestra el formulario para crear un nuevo vuelo.
     */
    public function create()
    {
        return view('flights.create'); // Muestra la vista para crear un vuelo
    }

    /**
     * Guarda un nuevo vuelo en la base de datos.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'flight_number' => 'required|string|max:255',
            'origin' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'departure_date' => 'required|date',
            'return_date' => 'nullable|date',
            'airline' => 'required|string|max:255',
            'price' => 'required|numeric',
            'seats_available' => 'required|integer',
        ]);

        Flight::create($validated); // Crea un nuevo vuelo con los datos validados

        return redirect()->route('flights.index')->with('success', 'Vuelo creado con éxito.');
    }

    /**
     * Muestra un vuelo específico.
     */
    public function show(Flight $flight)
    {
        return view('flights.show', compact('flight'));
    }

    /**
     * Muestra el formulario para editar un vuelo existente.
     */
    public function edit(Flight $flight)
    {
        return view('flights.edit', compact('flight'));
    }

    /**
     * Actualiza un vuelo en la base de datos.
     */
    public function update(Request $request, Flight $flight)
    {
        $validated = $request->validate([
            'flight_number' => 'required|string|max:255',
            'origin' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'departure_date' => 'required|date',
            'return_date' => 'nullable|date',
            'airline' => 'required|string|max:255',
            'price' => 'required|numeric',
            'seats_available' => 'required|integer',
        ]);

        $flight->update($validated); // Actualiza el vuelo con los datos validados

        return redirect()->route('flights.index')->with('success', 'Vuelo actualizado con éxito.');
    }

    /**
     * Elimina un vuelo de la base de datos.
     */
    public function destroy(Flight $flight)
    {
        $flight->delete(); // Elimina el vuelo
        return redirect()->route('flights.index')->with('success', 'Vuelo eliminado con éxito.');
    }
    public function dashboard()
{
    $flightsCount = Flight::count();
    $hotelsCount = Hotel::count();
    return view('dashboard', compact('flightsCount', 'hotelsCount'));
}

}
