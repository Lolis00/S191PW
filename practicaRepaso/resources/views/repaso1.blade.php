<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    
    <div class="container mt-5">
        <h2>Convertidor de Unidades</h2>
        <form action="{{ route('convertir') }}" method="POST">
        @csrf
        <label for="cantidad">Cantidad:</label>
        <input type="text" name="cantidad" id="cantidad" required>
    
    <label for="unidad">Convertir:</label>
    <select name="unidad" id="unidad" required>
        <option value="mb_to_gb">MB a GB</option>
        <option value="gb_to_mb">GB a MB</option>
        <option value="gb_to_tb">GB a TB</option>
        <option value="tb_to_gb">TB a GB</option>
    </select>
    
    <button type="submit">Convertir</button>
</form>
        @if(session('resultado'))
            <div>
                {{ session('resultado') }}
            </div>
        @endif
    </div>
</body>
</html>
