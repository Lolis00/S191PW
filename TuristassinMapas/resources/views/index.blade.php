@extends('layout')

@section('title', 'Mis Reservas')

@section('content')
<h2>Mis Reservas</h2>
@if(isset($reservations) && count($reservations) > 0)
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Vuelo</th>
                <th>Hotel</th>
                <th>Precio Total</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->flight->number }}</td>
                    <td>{{ $reservation->hotel->name }}</td>
                    <td>${{ $reservation->total_price }}</td>
                    <td>{{ $reservation->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No tienes reservas actualmente.</p>
@endif
@endsection
