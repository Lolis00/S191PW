@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buscar Vuelos</h1>
    <form action="/flights/search" method="POST">
        @csrf
        <input type="text" name="origin" placeholder="Origen" required>
        <input type="text" name="destination" placeholder="Destino" required>
        <input type="date" name="departure_date" required>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</div>
@endsection
