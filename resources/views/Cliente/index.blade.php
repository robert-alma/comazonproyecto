<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliente DSBD</title>
</head>
<body>
<h1>Bienvenido {{session('usuario')}} </h1>
<h3>{{session('perfil_id')}}</h3>

<a href="{{route('cliente.solicitud')}}">Registrar Solicitud</a>

<h2>Listado de Cotizaciones</h2>

<table >
    <thead class="thead-light">
        <tr>
            <th>Servicio</th>
            <th>cantidad</th>
            <th>precio</th>
            <th>descuento</th>
            <th>total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cotizaciones as $cotizacion)
            <tr>
                <td>{{$cotizacion->servicio_id}}</td>
                <td>{{$cotizacion->cantidad}}</td>
                <td>{{$cotizacion->precio}}</td>
                <td>{{$cotizacion->descuento}}</td>
                <td>{{$cotizacion->total}}</td>
                <td><a href="{{route('cliente.aceptarsolicitud',$cotizacion->id)}}">Aceptar Cotización</a></td>
                <td><a href="{{route('cliente.rechazarsolicitud',$cotizacion->id)}}">Rechazar Cotización</a></td>
            </tr>
        @endforeach

    </tbody>
</table>


<form action="{{route('logout')}}" method="POST">
    @csrf
    <button type="submit">Cerrar Sesion</button>
</form>
</body>
</html>
