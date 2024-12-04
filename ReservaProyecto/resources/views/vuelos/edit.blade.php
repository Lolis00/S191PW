@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Vuelo</h1>
    <form method="POST" action="{{ route('vuelos.update', $vuelo->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="numero_vuelo">Número de vuelo</label>
            <input type="text" class="form-control" name="numero_vuelo" value="{{ $vuelo->numero_vuelo }}" required>
        </div>
        <div class="form-group">
            <label for="origen">Origen</label>
            <input type="text" class="form-control" name="origen" value="{{ $vuelo->origen }}" required>
        </div>
        <div class="form-group">
            <label for="destino">Destino</label>
            <input type="text" class="form-control" name="destino" value="{{ $vuelo->destino }}" required>
        </div>
        <!-- Más campos similares... -->
        <button type="submit"
