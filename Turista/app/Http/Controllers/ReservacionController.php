<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vuelo;
use App\Models\Hotel;

class ReservacionController extends Controller
{
    public function mostrarFormulario() {
        $vuelos = Vuelo::all();
        $hoteles = Hotel::all();
        return view('reservacion.formulario', compact('vuelos', 'hoteles'));
    }
    
    public function agregarACarrito(Request $request) {
        session(['vuelo_id' => $request->vuelo_id, 'hotel_id' => $request->hotel_id]);
        return redirect()->route('reservacion.resumen');
    }
    
    public function mostrarResumen(Request $request) {
        $vuelo = Vuelo::find(session('vuelo_id'));
        $hotel = Hotel::find(session('hotel_id'));
        $total = $this->calcularTotal($request->num_pasajeros, $request->num_noches, $vuelo, $hotel);
        
        return view('reservacion.resumen', compact('vuelo', 'hotel', 'total'));
    }
    
    public function confirmarCompra(Request $request) {
        $reservacion = Reservacion::create([
            'vuelo_id' => session('vuelo_id'),
            'hotel_id' => session('hotel_id'),
            'num_pasajeros' => $request->num_pasajeros,
            'num_noches' => $request->num_noches,
            'total' => $this->calcularTotal($request->num_pasajeros, $request->num_noches, Vuelo::find(session('vuelo_id')), Hotel::find(session('hotel_id')))
        ]);
        return redirect()->route('reservacion.completada', ['reservacion' => $reservacion]);
    }
    
    private function calcularTotal($num_pasajeros, $num_noches, $vuelo, $hotel) {
        return ($num_pasajeros * $vuelo->precio) + ($num_noches * $hotel->precio_por_noche);
    }
    
    public function cancelarReservacion($id) {
        $reservacion = Reservacion::find($id);
        $fechaVuelo = new Carbon($reservacion->vuelo->fecha_salida);
        $fechaCheckin = new Carbon($reservacion->hotel->checkin_date);
    
        if (Carbon::now()->addHours(48)->lt($fechaVuelo) && Carbon::now()->addHours(48)->lt($fechaCheckin)) {
            $reservacion->delete();
            return redirect()->route('reservacion.cancelada');
        }
    
        return back()->withErrors(['No es posible cancelar esta reservación debido a las políticas de cancelación.']);
    }
}
