
@extends ('layouts.plantilla1')

{{--para cambiar el titulo--}}
@section('titulo', 'Clientes')

{{--para encerrar los contenidos y me de una buena estructura--}}
  @section('contenido')

{{--inicia tarjeta con formulario--}}
<div class="container mt-5 col-md-8">
@foreach ($consultaClientes as $cliente)
<div class="card text-justify font-monospace mt-3" ></div>

<div class="card text-justify font-monospace">
    <div class="card-header fs-5 text-primary">
        {{ $cliente->nombre }} {{ $cliente->apellido }}
        
    </div>

    <div class="card-body">
        <h5 class="fw-bold"> {{ $cliente->correo }}</h5>
        <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
        <p class="card-text fw-lihgter"></p>
    </div>

    <div class="card-footer text-muted">

        <a href="{{route('rutaedit', $cliente)}}" class="btn btn-primary">{{__('Actualizar')}} </a>
        <button type="submit" class="btn btn-danger btn-sm">{{__('Eliminar')}}</button>
    </div>

</div>
@endforeach
</div>
{{--para delimitar el section--}}
@endsection