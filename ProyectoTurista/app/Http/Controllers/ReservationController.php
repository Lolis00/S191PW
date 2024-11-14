<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorReservas;

class ReservationController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function calculate(ValidadorReservas $request)
    {
       
    $hotel = $request->input('hotel');
    session()->flash('reserva', 'Se ha reservado el Hotel ' . $hotel);
    return to_route('reservar.index');

        /*$flightPrice = $request->flight === "vuelo1" ? 200 : 250;
        $hotelPricePerNight = $request->hotel === "hotel1" ? 100 : 150;
        $totalAmount = ($flightPrice * $request->passengers) + ($hotelPricePerNight * $request->stayDuration * $request->passengers);

        return redirect()->route('reservar.index')->with([
            'summary' => [
                'selectedFlight' => $request->flight,
                'selectedHotel' => $request->hotel,
                'totalPassengers' => $request->passengers,
                'totalNights' => $request->stayDuration,
                'totalAmount' => $totalAmount,
            ],
            'message' => 'Total calculado correctamente',
            'type' => 'success'
        ]);*/
    }

    public function confirm(Request $request)
    {
        // Lógica para confirmar la compra
    }

    public function cancel(Request $request)
    {
        // Lógica para cancelar la reservación
    }
}
