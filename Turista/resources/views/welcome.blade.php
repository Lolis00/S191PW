<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utiles Escolares</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<h1>Utiles Escolares</h1>
</body>
</html>
<div class="card font-monospace">
  <div class="card-header fs-5 text-center text-primary">
  Formulario de Utiles
    {{__('Formulario de Utiles')}}
 </div>
 <div class="card-body text-justify">
  <form method="POST"  action="/enviarCliente">
    @csrf 
    <div class="mb-3">
      <label for="Nombre" class="form-label">Nombre: </label>
      <label for="Nombre" class="form-label">{{__('Nombre:')}} </label>
      <input type="text" class="form-control" name="txtnombre" value="{{old('txtnombre')}}">
              {{--Trae todos los errores con errors pero le decimos que los traiga el 1 con el firts--}}
      <small class="text-danger fst-italic"> {{ $errors->first('txtnombre') }}</small>
  </div>
  <div class="card-body text-justify">
  <form method="POST"  action="/enviarCliente">
    @csrf 
    <div class="mb-3">
      <label for="Marca" class="form-label">Marca: </label>
      <label for="Marca" class="form-label">{{__('Marca:')}} </label>
      <input type="text" class="form-control" name="txtMarca" value="{{old('txtMarca')}}">
              {{--Trae todos los errores con errors pero le decimos que los traiga el 1 con el firts--}}
      <small class="text-danger fst-italic"> {{ $errors->first('txtMarca') }}</small>
  </div>
  <div class="card-body text-justify">
  <form method="POST"  action="/enviarCliente">
    @csrf 
    <div class="mb-3">
      <label for="Cantidad" class="form-label">Cantidad: </label>
      <label for="Cantidad" class="form-label">{{__('Cantidad:')}} </label>
      <input type="text" class="form-control" name="txtCantidad" value="{{old('txtCantidad')}}">
              {{--Trae todos los errores con errors pero le decimos que los traiga el 1 con el firts--}}
      <small class="text-danger fst-italic"> {{ $errors->first('txtCantidad') }}</small>
  </div>
  <div class="card-footer text-muted">
    <div class="d-grid gap-2 mt-2 mb-1">
      <button type="submit" class="btn btn-success btn-sm"> Guardar Utiles</button>
      </div>
  </form>
  </div>
</div>
</div>