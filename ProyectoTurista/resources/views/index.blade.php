@extends('layouts.layouts')

@section('title', 'Reservación de Servicios')

@section('content')
<h2 class="text-center mb-4">Reservación de Servicios</h2>

<form action="/reservar/calcular" method="POST">
    @csrf
    <div class="mb-3">
        <label for="flightSelect" class="form-label">Selecciona tu Vuelo</label>
        <select class="form-select" id="flightSelect" name="flight" >
            <option selected disabled>Elige un vuelo</option>
            <option value="vuelo1">Vuelo 1 - $200</option>
            <option value="vuelo2">Vuelo 2 - $250</option>
        </select>
        <small>{{$errors->first('flight')}}</small>
    </div>

    <div class="mb-3">
        <label for="hotelSelect" class="form-label">Selecciona tu Hotel</label>
        <select class="form-select" id="hotelSelect" name="hotel" >
            <option selected disabled>Elige un hotel</option>
            <option value="hotel1">Hotel 1 - $100/noche</option>
            <option value="hotel2">Hotel 2 - $150/noche</option>
        </select>
        <small>{{$errors->first('hotel')}}</small>
    </div>

    <div class="mb-3">
        <label for="passengers" class="form-label">Número de Pasajeros</label>
        <input type="text" class="form-control" id="passengers" name="passengers" min="1" >
        <small>{{$errors->first('passengers')}}</small>
    </div>

    <div class="mb-3">
        <label for="stayDuration" class="form-label">Duración de la estancia (número de noches)</label>
        <input type="text" class="form-control" id="stayDuration" name="stayDuration" min="1" >
        <small>{{$errors->first('stayDuration')}}</small>
    </div>

    <button type="submit" class="btn btn-primary">Calcular Total</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@session('reserva')
<script>
    Swal.fire({
  title: "Reservado!",
  text: "{{$value}}",
  icon: "success"
});
</script>
@endsession
@endsection
