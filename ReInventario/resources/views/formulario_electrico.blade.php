@extends('layouts.app')

@section('title', 'Formulario de Recorrido - ReInventario')

@section('content')
<div class="container mt-5">
    <h2>Formulario de Recorrido Eléctrico - {{ $tipo == 'diario' ? 'Recorrido Diario' : 'Recorrido Semanal' }}</h2>
    <form action="{{ route('guardar_recorrido') }}" method="POST">
        @csrf

        <div class="form-group mt-3">
            <label>Revisión TAB-GN1</label>
            <select class="form-control" name="agua_potable" id="electricoSelect">
                <option value="realizado">Sí</option>
                <option value="pendiente">No</option>
                
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Revisión TAB-GSV</label>
            <select class="form-control" name="agua_potable" id="electricoSelect">
            <option value="realizado">Sí</option>
            <option value="pendiente">No</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Revisión TAB-GCR</label>
            <select class="form-control" name="agua_potable" id="electricoSelect">
            <option value="realizado">Sí</option>
            <option value="pendiente">No</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Revisión TAB-GSE</label>
            <select class="form-control" name="agua_potable" id="electricoSelect">
            <option value="realizado">Sí</option>
            <option value="pendiente">No</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Finalizar recorrido</button>
    </form>
</div>

<script>
    document.getElementById('electricoSelect').addEventListener('change', function() {
        if (this.value === 'realizado' || this.value === 'pendiente' || this.value === 'observacion') {
            window.location.href = "{{ route('formulario_electrico') }}"; // Redirige a la vista de Agua Potable
        }
    });
</script>
@endsection
