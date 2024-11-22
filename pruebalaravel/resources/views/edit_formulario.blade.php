

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
 <form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
    @csrf
    @method('PUT')
    <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre', $cliente->nombre) }}">
    <input type="text" class="form-control" name="txtapellido" value="{{ old('txtapellido', $cliente->apellido) }}">
    <input type="text" class="form-control" name="txtcorreo" value="{{ old('txtcorreo', $cliente->correo) }}">
    <input type="text" class="form-control" name="txttelefono" value="{{ old('txttelefono', $cliente->telefono) }}">
    <button type="submit" class="btn btn-primary">{{ __('Actualizar Cliente') }}</button>
</form>

  </div>
</div>
</div>
{{--para delimitar el section--}}
@endsection('exito')