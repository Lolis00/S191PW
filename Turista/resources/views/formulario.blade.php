@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Formulario de Reservación</h2>
    <form action="{{ route('reservacion.carrito') }}" method="POST">
        @csrf
        
        <!-- Selección de Vuelo -->
        <div class="form-group mb-3">
            <label for="vuelo_id">Selecciona un vuelo:</label>
            <select class="form-control" id="vuelo_id" name="vuelo_id" required>
                <option value="" disabled selected>Selecciona un vuelo</option>
                @foreach($vuelos as $vuelo)
                    <option value="{{ $vuelo->id }}">
                        {{ $vuelo->origen }} - {{ $vuelo->destino }} ({{ $vuelo->fecha_salida }})
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Selección de Hotel -->
        <div class="form-group mb-3">
            <label for="hotel_id">Selecciona un hotel:</label>
            <select class="form-control" id="hotel_id" name="hotel_id" required>
                <option value="" disabled selected>Selecciona un hotel</option>
                @foreach($hoteles as $hotel)
                    <option value="{{ $hotel->id }}">
                        {{ $hotel->nombre }} - {{ $hotel->ubicacion }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Número de Pasajeros -->
        <div class="form-group mb-3">
            <label for="num_pasajeros">Número de pasajeros:</label>
            <input type="number" class="form-control" id="num_pasajeros" name="num_pasajeros" min="1" required>
        </div>

        <!-- Número de Noches -->
        <div class="form-group mb-3">
            <label for="num_noches">Número de noches:</label>
            <input type="number" class="form-control" id="num_noches" name="num_noches" min="1" required>
        </div>

        <!-- Botón de Enviar -->
        <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
    </form>
</div>
@endsection
