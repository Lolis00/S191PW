@extends ('layouts.plantilla1')

@section('titulo', 'Gestión de Productos')
{{--para encerrar los contenidos y me de una buena estructura--}}

  @section('contenido')
  <div class="card font-monospace">
  <div class="card-header fs-5 text-center text-primary">
    Registro de Clientes
 </div>
 <div class="card-body text-justify">
 <form action="fomulario" method="get">
    @csrf 
    
    <div class="mb-3">
      <label for="Nombre" class="form-label">Nombre: </label>
      <input type="text" class="form-control" name="{{ old('txtnombre') }}">
  </div>
  
  <div class="mb-3">
      <label for="correo" class="form-label">Correo: </label>
      <input type="email" class="form-control" name="txtcorreo">
  </div>
  <div class="mb-3">
      <label for="telefono" class="form-label">Telefono: </label>
      <input type="text" class="form-control" name="txttelefono">
  </div>

  <div class="card-footer text-muted">
    <div class="d-grid gap-2 mt-2 mb-1">
      <button type="submit" class="btn btn-success btn-sm"> Guardar Cliente</button>
    </div>
  </form>
  </div>
</div>
</div>