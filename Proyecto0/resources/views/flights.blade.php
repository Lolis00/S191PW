@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Listado de Vuelos</h1>
    <a href="{{ route('flights.create') }}" class="btn btn-primary mb-3">Crear Nuevo Vuelo</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Número de Vuelo</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Fecha de Salida</th>
                <th>Aerolínea</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flights as $flight)
                <tr>
                    <td>{{ $flight->flight_number }}</td>
                    <td>{{ $flight->origin }}</td>
                    <td>{{ $flight->destination }}</td>
                    <td>{{ $flight->departure_date }}</td>
                    <td>{{ $flight->airline }}</td>
                    <td>
                        <a href="{{ route('flights.edit', $flight->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('flights.destroy', $flight->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
