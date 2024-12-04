@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Vuelo</h1>
    <form method="POST" action="{{ route('vuelos.store') }}">
        @csrf
        <div class="form-group">
            <label for="numero_vuelo">Número de vuelo</label>
            <input type="text" class="form-control" name="numero_vuelo" required>
        </div>
        <div class="form-group">
            <label for="origen">Origen</label>
            <input type="text" class="form-control" name="origen" required>
        </div>
        <div class="form-group">
            <label for="destino">Destino</label>
            <input type="text" class="form-control" name="destino" required>
        </div>
        <div class="form-group">
            <label for="fecha_salida">Fecha de salida</label>
            <input type="date" class="form-control" name="fecha_salida" required>
        </div>
        <div class="form-group">
            <label for="horario_salida">Horario de salida</label>
            <input type="time" class="form-control" name="horario_salida" required>
        </div>
        <div class="form-group">
            <label for="horario_llegada">Horario de llegada</label>
            <input type="time" class="form-control" name="horario_llegada" required>
        </div>
        <div class="form-group">
            <label for="duracion">Duración (en minutos)</label>
            <input type="number" class="form-control" name="duracion" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" class="form-control" name="precio" required>
        </div>
        <div class="form-group">
            <label for="aerolinea">Aerolinea</label>
            <input type="text" class="form-control" name="aerolinea" required>
        </div>
        <div class="form-group">
            <label for="escalas">Escalas</label>
            <select name="escalas" class="form-control" required>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="asientos_disponibles">Asientos disponibles</label>
            <input type="number" class="form-control" name="asientos_disponibles" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Vuelo</button>
    </form>
</div>
@endsection
