

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{--Para que funcione bootstrap--}}
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{--Para que cambie el nombre--}}
    <title> @yield('titulo')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">{{__('Turista sin Maps')}}</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('cliente.create')?'text-warning':'' }}"aria-current="page" href="{{ route('cliente.create') }}">{{__('Registro Clientes')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{  request()->routeIs('cliente.index')?'text-warning':'' }}" href="{{ route('cliente.index') }}">{{__('Consultar Clientes')}}</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
{{--finaliza barra de navegación--}}

{{--renderiza la seccion que se le manda--}}
        @yield('contenido')
</body>
</html>