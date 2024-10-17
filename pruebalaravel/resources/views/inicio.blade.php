<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    @vite(['resources/js/app.js'])

    <style>
        body, html {
            height: 100%;
        }
        .full-height {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center full-height">
        
        <h1 class="display-1">Bienvenido Turista! </h1>
        <p>Presione el botón para iniciar...</p>

        <a href="{{route('rutacacas')}}" class="btn btn-primary"> Ir al registro </a>
        <a href="{{route('rutaconsulta')}}" class="btn btn-danger"> Consultar Clientes </a>
        {{-- <a href="/formulario" class="btn btn-danger"> Consultar Clientes </a> --}}
</body>
</html>