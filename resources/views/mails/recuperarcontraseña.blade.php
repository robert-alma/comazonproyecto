<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Hola para crearte una nueva contraseña has click al siguiente enlace
    </h1>
    <h3>Soy el Login tu correo es: {{$usuario->correo}}</h3>
    <button class="btn btn-primary" type="submit"><a class="text-light" href="{{route('vistarestaurar',$usuario->id)}}">Restaurar Contraseña</a></button>
</body>
</html>
