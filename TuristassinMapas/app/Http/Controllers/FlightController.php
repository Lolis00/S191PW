<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    
    public function search(Request $request)
    {
        $flights = Flight::where('departure', 'like', "%{$request->departure}%")
            ->where('arrival', 'like', "%{$request->arrival}%")
            ->get();

        return view('flights.search', compact('flights'));
    }
}


