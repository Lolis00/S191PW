@extends('layout')

@section('title', 'Buscar Hoteles')

@section('content')
<h2>Buscar Hoteles</h2>
<form method="GET" action="{{ route('hotels.search') }}">
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="destination" class="form-label">Destino</label>
            <input type="text" class="form-control" name="destination" id="destination" required>
        </div>
        <div class="col-md-6">
            <label for="check_in" class="form-label">Check-In</label>
            <input type="date" class="form-control" name="check_in" id="check_in" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="check_out" class="form-label">Check-Out</label>
            <input type="date" class="form-control" name="check_out" id="check_out" required>
        </div>
        <div class="col-md-6">
            <label for="guests" class="form-label">Número de Huéspedes</label>
            <input type="number" class="form-control" name="guests" id="guests" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>
@endsection
