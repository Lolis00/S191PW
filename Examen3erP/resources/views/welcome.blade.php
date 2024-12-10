<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utiles</title>
</head>
<body>
    <h1>
        Utiles 
    </h1>
    <form action="registro clientes" method="POST">
                @csrf
                <div class="form-group">
                    <label for="isbn">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="titulo">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" required>
                </div>
                <div class="form-group">
                    <label for="autor">Cantidad</label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad" required>
                    
                    <button type="submit" class="btn btn-success btn-sm"> Guardar</button>
                    <button type="submit" class="btn btn-success btn-sm"> Consultar</button>
                    <button type="submit" class="btn btn-success btn-sm"> Actualizar</button>
                    <button type="submit" class="btn btn-success btn-sm"> Eliminar</button>

                    </div>
    
</body>
</html>