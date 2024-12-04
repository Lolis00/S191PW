<h1>Crear Usuario</h1>
<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Nombre" required>
    <input type="text" name="surname" placeholder="Apellido" required>
    <input type="email" name="email" placeholder="Correo" required>
    <input type="text" name="phone" placeholder="Teléfono" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Crear</button>
</form>
