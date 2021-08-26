<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cotizacion</title>
</head>
<body>
    <h1>Crear cotización para {{$dato->nombre}}. Número de Cotización: {{$solicitud->id}} </h1>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Nombre de Cliente</th>
                <th>Empresa</th>
                <th>Asunto</th>
                <th>Comentario</th>
                <th>Presupuesto</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$dato->nombre}}</td>
                <td>{{$cliente->empresa_id}}</td>
                <td>{{$solicitud->asunto}}</td>
                <td>{{$solicitud->comentario}}</td>
                <td>{{$solicitud->presupuesto}}</td>
                <td>{{$solicitud->fecha_entrega}}</td>
            </tr>
        </tbody>
    </table>

    <h1>Elaborar Cotización</h1>

    <form action="{{route('ejecutivo.registrarcotizacion',$solicitud->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="servicio_id">Servicio</label>
        <select name="servicio_id" id="servicio_id" >
        <option value="1">Diseño web</option>
        <option value="2">Frnt</option>
        <option value="3">Back</option>
        <option value="4">Aplicación</option>
        </select>
        @foreach ($errors->get('servicio_id') as $message)
            {{$message}}
             @endforeach

        <label for="precio">precio</label>
        <input type="number" name="precio"  id="precio" value="{{old('precio')}}">
        @foreach ($errors->get('precio') as $message)
            {{$message}}
             @endforeach
        <br>
        <label for="cantidad">cantidad</label>
        <input type="number" name="cantidad"  id="cantidad" value="{{old('cantidad')}}">
        @foreach ($errors->get('cantidad') as $message)
            {{$message}}
             @endforeach
        <br>
        <label for="descuento">descuento</label>
        <input type="number" name="descuento"  id="descuento" value="{{old('descuento')}}">
        @foreach ($errors->get('descuento') as $message)
            {{$message}}
             @endforeach
        <br>
        <label for="total">total</label>
        <input type="number" name="total"  id="total" value="{{old('total')}}">
        @foreach ($errors->get('total') as $message)
            {{$message}}
             @endforeach
        <br>
        <label for="foto">foto</label>
        <input type="file" name="foto"  id="foto" value="{{old('foto')}}">
        @foreach ($errors->get('foto') as $message)
            {{$message}}
             @endforeach
        <br>
        <input type="submit" value="Insertar Cotización">


    </form>
</body>
</html>
