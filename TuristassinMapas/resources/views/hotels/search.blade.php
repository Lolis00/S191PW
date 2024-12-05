@extends('layout')

@section('title', 'Buscar Hoteles')

@section('content')
<h2>Resultados de Hoteles</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Ubicación</th>
            <th>Precio por Noche</th>
            <th>Estrellas</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($hotels as $hotel)
        <tr>
            <td>{{ $hotel->name }}</td>
            <td>{{ $hotel->location }}</td>
            <td>${{ $hotel->price_per_night }}</td>
            <td>{{ $hotel->stars }}</td>
            <td>
                <a href="#" class="btn btn-primary">Reservar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
