@extends('layout')

@section('title', 'Registro de Nuevo Libro')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 50%; background-color: #ffc0cb; padding: 20px; border-radius: 10px;">
        <div class="card-body">
            <h3 class="card-title text-center">Registro de Nuevo Libro</h3>
            <form action="{{ route('registro.libro') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" required>
                </div>
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" id="autor" name="autor" required>
                </div>
                <div class="form-group">
                    <label for="editorial">Editorial</label>
                    <input type="text" class="form-control" id="editorial" name="editorial">
                </div>
                <div class="form-group">
                    <label for="año">Año de Publicación</label>
                    <input type="text" class="form-control" id="año" name="año">
                </div>
                <div class="form-group">
                    <label for="email">Email de Editorial:</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Registrar Libro</button>
            </form>
        </div>
    </div>
</div>
@endsection

       
        
