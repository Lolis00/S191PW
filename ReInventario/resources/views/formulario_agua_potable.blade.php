@extends('layouts.app')

@section('title', 'Formulario de Recorrido - ReInventario')

@section('content')
<div class="container mt-5">
    <h2>Formulario de Recorrido Agua Potable - {{ $tipo == 'diario' ? 'Recorrido Diario' : 'Recorrido Semanal' }}</h2>
    <form action="{{ route('guardar_recorrido') }}" method="POST">
        @csrf

        <div class="form-group mt-3">
            <label>Servicio de cisterna de WC</label>
            <select class="form-control" name="agua_potable" id="aguaPotableSelect">
                <option value="realizado">Realizado</option>
                <option value="pendiente">Pendiente</option>
                <option value="observacion">Observación</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Monitoreo de funcionamiento de bomba agua</label>
            <select class="form-control" name="agua_potable" id="aguaPotableSelect">
                <option value="realizado">Realizado</option>
                <option value="pendiente">Pendiente</option>
                <option value="observacion">Observación</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Monitoreo de nivel cárcamo agua cruda (%)</label>
            <select class="form-control" name="agua_potable" id="aguaPotableSelect">
                <option value="realizado">Realizado</option>
                <option value="pendiente">Pendiente</option>
                <option value="observacion">Observación</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Monitoreo de funcionamiento bomba agua osmosis 1</label>
            <select class="form-control" name="agua_potable" id="aguaPotableSelect">
                <option value="realizado">Realizado</option>
                <option value="pendiente">Pendiente</option>
                <option value="observacion">Observación</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Finalizar recorrido</button>
    </form>
</div>

<script>
    document.getElementById('aguaPotableSelect').addEventListener('change', function() {
        if (this.value === 'realizado' || this.value === 'pendiente' || this.value === 'observacion') {
            window.location.href = "{{ route('formulario_agua_potable') }}"; // Redirige a la vista de Agua Potable
        }
    });
</script>
@endsection
