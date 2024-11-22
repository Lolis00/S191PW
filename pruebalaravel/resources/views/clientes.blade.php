
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

    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary">{{ __('Actualizar') }}</a>
    <form id="form-delete-{{ $cliente->id }}" method="POST" action="{{ route('clientes.destroy', $cliente->id) }}" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $cliente->id }})">{{ __('Eliminar') }}</button>
    </form>
    </div>
    <script>
    function confirmDelete(id) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Esta acción no es revertible!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Si se confirma, envía el formulario
                document.getElementById(`form-delete-${id}`).submit();
            }
        });
    }
</script>
@if (session('exito'))
<script>
    Swal.fire({
        title: '¡Éxito!',
        text: '{{ session('exito') }}',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    });
</script>
@endif


</div>
@endforeach
</div>
{{--para delimitar el section--}}
@endsection