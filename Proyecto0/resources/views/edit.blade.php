@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Vuelo</h1>
    @include('flights.partials.form', ['flight' => $flight]) <!-- Incluir formulario con datos -->
</div>
@endsection
