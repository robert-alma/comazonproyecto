<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejecutivo DSBD</title>
</head>
<body>
    <h1>Bienvenido Ejecutivo {{Session::get('usuario')}}</h1>

    <h2>Listado de Solicitudes</h2>

    <br>
    <table >
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Cliente</th>
                <th>Asunto</th>
                <th>Comentario</th>
                <th>Presupuesto</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($solicitudes as $solicitud)
                <tr>
                    <td>{{$solicitud->id}}</td>
                    <td>{{$solicitud->cliente_id}}</td>
                    <td>{{$solicitud->asunto}}</td>
                    <td>{{$solicitud->comentario}}</td>
                    <td>{{$solicitud->presupuesto}}</td>
                    <td>{{$solicitud->fecha_entrega}}</td>
                    <td><a href="{{route('ejecutivo.cotizacion',$solicitud->id)}}">Crear Cotización</a></td>
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
