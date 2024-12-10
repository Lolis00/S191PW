@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Bienvenido, {{ Auth::user()->name }}</h1>
        <p class="text-gray-600 mb-4">Este es tu panel principal.</p>

        @if(Auth::user()->role === 'admin')
            <div class="mb-6">
                <p class="text-green-700 font-medium">Eres un administrador. Puedes administrar vuelos y hoteles.</p>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('flights.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Administrar Vuelos
                </a>
                <a href="{{ route('hotels.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Administrar Hoteles
                </a>
            </div>
        @else
            <div class="mb-6">
                <p class="text-yellow-700 font-medium">Eres un usuario regular. Explora vuelos y hoteles disponibles.</p>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('search.flights') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                    Buscar Vuelos
                </a>
                <a href="{{ route('search.hotels') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                    Buscar Hoteles
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
