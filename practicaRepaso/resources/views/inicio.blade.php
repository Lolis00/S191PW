<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada</title>
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
        <h1>Hola Bienvenido</h1>
        <p>Nombre: Lolis ZP</p>
        <p>Proyecto: Practica Repasos</p>

        <a href="{{ route('repaso1') }}" class="btn btn-primary">REPASO 1</a>
        

    </div>
</body>
</html>
