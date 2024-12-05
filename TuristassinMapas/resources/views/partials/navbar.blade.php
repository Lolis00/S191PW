<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Turista Sin Maps</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/flights/search') }}">Buscar Vuelos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/hotels/search') }}">Buscar Hoteles</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Registrarse</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/reservations') }}">Mis Reservas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       Cerrar Sesión
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
