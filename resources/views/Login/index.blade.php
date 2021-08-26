<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Usuario</title>
</head>
<body>
<h1>Login General</h1>
<div>

    <form action="{{route('validar')}}" method="post">
        @csrf
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario"  id="usuario">
        <br>

        <label for="password">Contraseña</label>
        <input type="password" name="password"  id="password">
        <br>
        <input type="submit" value="Login">
    </form>

    <a href="{{route('vistaregistro')}}">Registrarse</a>
</div>
</body>
</html>
