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
            <div class="mb-3">
                <label for="inputCantidad" class="form-label">Cantidad</label>
                <input type="number" name="cantidad" class="form-control" id="inputCantidad" required>
            </div>
            <div class="mb-3">
                <label for="inputUnidad" class="form-label">Convertir desde:</label>
                <select name="unidad" id="inputUnidad" class="form-select">
                    <option value="mb_to_gb">MB a GB</option>
                    <option value="gb_to_mb">GB a MB</option>
                    <option value="gb_to_tb">GB a TB</option>
                    <option value="tb_to_gb">TB a GB</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Convertir</button>
        </form>
        @if(session('resultado'))
            <div class="mt-3 alert alert-info">
                {{ session('resultado') }}
            </div>
        @endif
    </div>
</body>
</html>
