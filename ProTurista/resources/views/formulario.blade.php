

@extends ('layouts.plantilla1')

@section('titulo', 'Formulario Clientes')
{{--para encerrar los contenidos y me de una buena estructura--}}

  @section('contenido')

{{--inicia tarjeta con formulario--}}
<div class="container mt-5 col-md-6">
{{--le pasamos la variable que queremos que imprima--}}
{{--@dump($id)--}}
{{--Para poner un componente debajo de alert--}}
{{--Tipo="" color que quiero para el alert--}}

{{--comprobar si hay algo en el alert--}}
@if(session('exito'))
<x-Alert tipo="success"> {{ session('exito') }} </x-Alert>
@endif
{{--Una sesión es una variable que esta disponible en todo el proceso--}}
@session('exito')
<x-Alert tipo="warning"> {{ $value }} </x-Alert>
@endsession

{{--Ponemos script ya que se esta trabajando con la ella--}}
@session('exito')
<script>
  Swal.fire({
  title: "Respuesta del servidor",
  text: '{{ $value }}',
  icon: "success"
});
</script>
@endsession


<div class="card font-monospace">
  <div class="card-header fs-5 text-center text-primary">
    {{__('Registro de Clientes')}}
 </div>
 <div class="card-body text-justify">
  <form method="POST"  action="{{ route('rutaenviar') }}">
    @csrf 
    
    <div class="mb-3">
      <label for="Nombre" class="form-label">{{__('Nombre:')}} </label>
      <input type="text" class="form-control" name="txtnombre" value="{{old('txtnombre')}}">
              {{--Trae todos los errores con errors pero le decimos que los traiga el 1 con el firts--}}
      <small class="text-danger fst-italic"> {{ $errors->first('txtnombre') }}</small>
  </div>
  <div class="mb-3">
      <label for="correo" class="form-label">{{__('Correo:')}} </label>
      <input type="text" class="form-control" name="txtcorreo" value="{{old('txtcorreo')}}">
      <small class="text-danger fst-italic"> {{ $errors->first('txtcorreo') }}</small>
  </div>
  
  

  <div class="card-footer text-muted">
    <div class="d-grid gap-2 mt-2 mb-1">
      <button type="submit" class="btn btn-success btn-sm"> {{__('Guardar Cliente')}}</button>
    </div>
  </form>
  </div>
</div>
</div>
{{--para delimitar el section--}}
@endsection('exito')