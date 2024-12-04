<h1>Editar Usuario</h1>
<form method="POST" action="{{ route('users.update', $user) }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $user->name }}" required>
    <input type="text" name="surname" value="{{ $user->surname }}" required>
    <input type="email" name="email" value="{{ $user->email }}" required>
    <input type="text" name="phone" value="{{ $user->phone }}" required>
    <button type="submit">Actualizar</button>
</form>
