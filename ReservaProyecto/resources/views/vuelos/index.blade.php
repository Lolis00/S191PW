@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buscar Vuelos</h1>

    <!-- Formulario de búsqueda de vuelos -->
    <form method="GET" action="{{ route('vuelos.index') }}">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="origen" class="form-control" placeholder="Origen" value="{{ request('origen') }}">
            </div>
            <div class="col-md-3">
                <input type="text" name="destino" class="form-control" placeholder="Destino" value="{{ request('destino') }}">
            </div>
            <div class="col-md-2">
                <input type="date" name="fecha_salida" class="form-control" value="{{ request('fecha_salida') }}">
            </div>
            <div class="col-md-2">
                <input type="date" name="fecha_regreso" class="form-control" value="{{ request('fecha_regreso') }}">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </form>

    <!-- Filtros de búsqueda -->
    <h3>Filtros</h3>
    <form method="GET" action="{{ route('vuelos.index') }}">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="aerolinea" class="form-control" placeholder="Aerolinea" value="{{ request('aerolinea') }}">
            </div>
            <div class="col-md-3">
                <input type="number" name="precio_min" class="form-control" placeholder="Precio mínimo" value="{{ request('precio_min') }}">
            </div>
            <div class="col-md-3">
                <input type="number" name="precio_max" class="form-control" placeholder="Precio máximo" value="{{ request('precio_max') }}">
            </div>
            <div class="col-md-3">
                <select name="escalas" class="form-control">
                    <option value="">Escalas</option>
                    <option value="1" {{ request('escalas') == '1' ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ request('escalas') == '0' ? 'selected' : '' }}>No</option>
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-3">
                <button type="submit" class="btn btn-secondary">Aplicar filtros</button>
            </div>
        </div>
    </form>

    <!-- Tabla de vuelos -->
    <h3 class="mt-4">Resultados de la búsqueda</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Número de vuelo</th>
                <th>Aerolínea</th>
                <th>Horario</th>
                <th>Duración</th>
                <th>Precio</th>
                <th>Escalas</th>
                <th>Disponibilidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vuelos as $vuelo)
            <tr>
                <td>{{ $vuelo->numero_vuelo }}</td>
                <td>{{ $vuelo->aerolinea }}</td>
                <td>{{ $vuelo->horario_salida }} - {{ $vuelo->horario_llegada }}</td>
                <td>{{ $vuelo->duracion }} mins</td>
                <td>${{ $vuelo->precio }}</td>
                <td>{{ $vuelo->escalas ? 'Sí' : 'No' }}</td>
                <td>{{ $vuelo->asientos_disponibles > 0 ? 'Disponible' : 'No Disponible' }}</td>
                <td>
                    <a href="{{ route('vuelos.show', $vuelo->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('vuelos.edit', $vuelo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('vuelos.destroy', $vuelo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
