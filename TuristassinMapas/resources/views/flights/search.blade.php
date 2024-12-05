@extends('layout')

@section('title', 'Buscar Vuelos')

@section('content')
<h2>Resultados de Vuelos</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Número</th>
            <th>Aerolínea</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Precio</th>
            <th>Duración</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($flights as $flight)
        <tr>
            <td>{{ $flight->number }}</td>
            <td>{{ $flight->airline }}</td>
            <td>{{ $flight->departure }}</td>
            <td>{{ $flight->arrival }}</td>
            <td>${{ $flight->price }}</td>
            <td>{{ $flight->duration }} mins</td>
            <td>
                <a href="#" class="btn btn-primary">Reservar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
