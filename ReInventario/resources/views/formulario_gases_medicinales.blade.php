@extends('layouts.app')

@section('title', 'Formulario de Recorrido - ReInventario')

@section('content')
<div class="container mt-5">
    <h2>Formulario de Recorrido Gases Medicinales - {{ $tipo == 'diario' ? 'Recorrido Diario' : 'Recorrido Semanal' }}</h2>
    <form action="{{ route('guardar_recorrido') }}" method="POST">
        @csrf

        <div class="form-group mt-3">
            <label>Funcionamiento extractor de gases (✓/ X)</label>
            <select class="form-control" name="agua_potable" id="gasesMedicinalesSelect">
                <option value="realizado">Realizado</option>
                <option value="pendiente">Pendiente</option>
                <option value="observacion">Observación</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Cambio de bancada (Ok/ N/A)</label>
            <select class="form-control" name="agua_potable" id="gasesMedicinalesSelect">
                <option value="realizado">Realizado</option>
                <option value="pendiente">Pendiente</option>
                <option value="observacion">Observación</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Funcionamiento de compresora 1 de aire medicinal</label>
            <select class="form-control" name="agua_potable" id="gasesMedicinalesSelect">
                <option value="realizado">Realizado</option>
                <option value="pendiente">Pendiente</option>
                <option value="observacion">Observación</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Funcionamiento bomba de vacio 2</label>
            <select class="form-control" name="agua_potable" id="gasesMedicinalesSelect">
                <option value="realizado">Realizado</option>
                <option value="pendiente">Pendiente</option>
                <option value="observacion">Observación</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Finalizar recorrido</button>
    </form>
</div>

<script>
    document.getElementById('gasesMedicinalesSelect').addEventListener('change', function() {
        if (this.value === 'realizado' || this.value === 'pendiente' || this.value === 'observacion') {
            window.location.href = "{{ route('formulario_gases_medicinales') }}"; // Redirige a la vista de Agua Potable
        }
    });
</script>
@endsection
