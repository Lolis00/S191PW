<h1>Detalles del Usuario</h1>
<p>Nombre: {{ $user->name }}</p>
<p>Apellido: {{ $user->surname }}</p>
<p>Email: {{ $user->email }}</p>
<p>Teléfono: {{ $user->phone }}</p>
<a href="{{ route('users.index') }}">Volver a la lista</a>
