@extends ('layouts.plantilla1')

@section('titulo','Componentes Blade')

@section('contenido')

    <x-Card encabezado="componente 1"  titulo="titulo 1" textoBoton="Guardar">Contenido de tarjeta 1</x-Card>

    <x-Card encabezado="componente 2"  titulo="titulo 2" textoBoton="No guardar">Contenido de tarjeta 2</x-Card>

@endsection