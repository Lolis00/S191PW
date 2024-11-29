@extends('layouts.app')

@section('title', 'Formulario de Recorrido - ReInventario')

@section('content')
<div class="container mt-5">
    <h2>Formulario de Recorrido Agua Caliente - {{ $tipo == 'diario' ? 'Recorrido Diario' : 'Recorrido Semanal' }}</h2>
    <form action="{{ route('guardar_recorrido') }}" method="POST">
        @csrf

        <div class="form-group mt-3">
            <label>Monitoreo de temperatura tanque A.C. 2 (°C)</label>
            <select class="form-control" name="agua_potable" id="aguaCalienteSelect">
                <option value="realizado">Realizado</option>
                <option value="pendiente">Pendiente</option>
                <option value="observacion">Observación</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Monitoreo de funcionamiento presión gas LP</label>
            <select class="form-control" name="agua_potable" id="aguaCalienteSelect">
                <option value="realizado">Realizado</option>
                <option value="pendiente">Pendiente</option>
                <option value="observacion">Observación</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Monitoreo de presión bancada izquierda (PSI)</label>
            <select class="form-control" name="agua_potable" id="aguaCalienteSelect">
                <option value="realizado">Realizado</option>
                <option value="pendiente">Pendiente</option>
                <option value="observacion">Observación</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Monitoreo de funcionamiento de extractor de gases (✓/ X)</label>
            <select class="form-control" name="agua_potable" id="aguaCalienteSelect">
                <option value="realizado">Realizado</option>
                <option value="pendiente">Pendiente</option>
                <option value="observacion">Observación</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Finalizar recorrido</button>
    </form>
</div>

<script>
    document.getElementById('aguaCalienteSelect').addEventListener('change', function() {
        if (this.value === 'realizado' || this.value === 'pendiente' || this.value === 'observacion') {
            window.location.href = "{{ route('formulario_agua_caliente') }}"; // Redirige a la vista de Agua Potable
        }
    });
</script>
@endsection
