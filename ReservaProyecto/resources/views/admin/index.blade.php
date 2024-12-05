@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Panel de Administración</h1>
    <p>Bienvenido, {{ Auth::user()->name }}. Aquí puedes gestionar los recursos.</p>
    <ul>
        <li><a href="{{ route('admin.vuelos.index') }}">Gestionar Vuelos</a></li>
        <li><a href="{{ route('admin.hoteles.index') }}">Gestionar Hoteles</a></li>
        <li><a href="{{ route('admin.destinos.index') }}">Gestionar Destinos</a></li>
        <li><a href="{{ route('admin.politicas.index') }}">Gestionar Políticas</a></li>
        <li><a href="{{ route('admin.reportes.index') }}">Generar Reportes</a></li>
    </ul>
</div>
@endsection
