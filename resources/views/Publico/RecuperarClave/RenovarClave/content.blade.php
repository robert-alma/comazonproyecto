<form action="{{ route('restaurar') }}" method="post">
    @csrf
    <input type="hidden" name="id" id="id" value="{{ $usuario->id }}">
    <label class="m-1" for="password">Nueva Contraseña</label>
    <input type="password" name="password" id="password">
    @foreach ($errors->get('password') as $message)
        {{ $message }}
    @endforeach
    <br>
    <label class="m-1" for="repassword">Repetir Contraseña</label>
    <input type="password" name="repassword" id="repassword">
    @foreach ($errors->get('repassword') as $message)
        {{ $message }}
    @endforeach
    <input type="submit" value="Restaurar">
</form>
