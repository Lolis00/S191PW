@extends('layout')

@section('title', 'Registro de Nuevo Libro')

@section('content')


<div class="d-flex justify-content-center">

    <div class="card" style="width: 50%; background-color: #ffc0cb; padding: 20px; border-radius: 10px;">
        <div class="card-body">
            <h3 class="card-title text-center">Registro de Nuevo Libro</h3>
<!-- @session('exito')
<script> 
Swal.fire({
  title: "Good job!",
  text: "{{$value}}",
  icon: "success"
});
</script>
@endsession -->

            @if(session ('exito'))
                <script>alertify.success("{{session('exito')}}");</script>
            @endif

            <form method="POST" action= "libro_registro">
                @csrf
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" value="{{old('isbn')}}">
                    <small class="text-danger fst-italic"> {{ $errors->first('isbn') }}</small>
                </div>
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{old('titulo')}}">
                    <small class="text-danger fst-italic"> {{ $errors->first('titulo') }}</small>
                </div>
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" id="autor" name="autor" value="{{old('autor')}}">
                    <small class="text-danger fst-italic"> {{ $errors->first('autor') }}</small>
                </div>
                <div class="form-group">
                    <label for="editorial">Editorial</label>
                    <input type="text" class="form-control" id="editorial" name="editorial" value="{{old('editorial')}}">
                    <small class="text-danger fst-italic"> {{ $errors->first('editorial') }}</small>
                </div>
                <div class="form-group">
                    <label for="año">Año de Publicación</label>
                    <input type="text" class="form-control" id="año" name="año"  value="{{old('año')}}">
                    <small class="text-danger fst-italic"> {{ $errors->first('año') }}</small>
                </div>
                <div class="form-group">
                    <label for="email">Email de Editorial:</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                    <small class="text-danger fst-italic"> {{ $errors->first('email') }}</small>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Registrar Libro</button>
            </form>
                
        </div>
    </div>
</div>
@endsection

       
        
