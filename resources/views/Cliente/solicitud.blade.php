<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitud</title>
</head>
<body>
    <h1>Bienvenido {{Session::get('usuario')}}</h1>
    <h2>Registre su Solicitud</h2>
    <form action="{{route('cliente.registrarsolicitud')}}" method="post">
        @csrf
        <label for="asunto">Asunto</label>
        <input type="text" name="asunto"  id="asunto" value="{{old('asunto')}}">
        @foreach ($errors->get('asunto') as $message)
            {{$message}}
             @endforeach
        <br>
        <label for="comentario">Comentario</label>
        <textarea type="text" name="comentario"  id="comentario" cols="30" rows="10" value="{{old('comentario')}}"></textarea>
        @foreach ($errors->get('comentario') as $message)
            {{$message}}
             @endforeach
        <br>
        <label for="presupuesto">Presupuesto</label>
        <input type="number" name="presupuesto"  id="presupuesto" value="{{old('presupuesto')}}">
        @foreach ($errors->get('presupuesto') as $message)
            {{$message}}
             @endforeach
        <br>
        <label for="fecha_entrega">Fecha de Entrega</label>
        <input type="date" name="fecha_entrega"  id="fecha_entrega" value="{{old('fecha_entrega')}}">
        @foreach ($errors->get('fecha_entrega') as $message)
            {{$message}}
             @endforeach
        <br>
        <input type="submit" value="Registrar Solicitud">

    </form>
</body>
</html>
