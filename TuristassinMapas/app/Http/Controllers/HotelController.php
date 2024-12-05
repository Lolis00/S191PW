<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function search(Request $request)
    {
        $hotels = Hotel::where('location', 'like', "%{$request->location}%")
            ->where('availability', true)
            ->get();

        return view('hotels.search', compact('hotels'));
    }

}
