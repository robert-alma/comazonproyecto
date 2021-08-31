@extends('Ejecutivo.Templates.layout')
@section('titulo',"Cotizaciones")

@section('content')

    <h1>Crear cotización para {{$dato->nombre}}. Número de Cotización: {{$solicitud->id}} </h1>
    <div class="container-lg col-md-8">
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
                    <td>{{$cliente->empresa->empresa}}</td>
                    <td>{{$solicitud->asunto}}</td>
                    <td>{{$solicitud->comentario}}</td>
                    <td>{{$solicitud->presupuesto}}</td>
                    <td>{{$solicitud->fecha_entrega}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container-lg col-md-6">
        <h1>Elaborar Cotización</h1>
        <div class="col">
            <form action="{{route('ejecutivo.registrarcotizacion',$solicitud->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="servicio_id">Servicio</label>
                <select name="servicio_id" id="servicio_id" >
                    <option value="1">Diseño web</option>
                    <option value="2">Frnt</option>
                    <option value="3">Back</option>
                    <option value="4">Aplicación</option>
                </select>
                <label for="precio">Precio</label>
                <input class="form-control" type="number" name="precio"  id="precio" value="{{old('precio')}}">
                @foreach ($errors->get('precio') as $message)
                    {{$message}}
                @endforeach
                <label for="cantidad">Cantidad</label>
                <input class="form-control" type="number" name="cantidad"  id="cantidad" value="{{old('cantidad')}}">
                @foreach ($errors->get('cantidad') as $message)
                    {{$message}}
                @endforeach
                <label for="descuento">Descuento</label>
                <input class="form-control" type="number" name="descuento"  id="descuento" value="{{old('descuento')}}">
                @foreach ($errors->get('descuento') as $message)
                    {{$message}}
                @endforeach
                <label for="total">Total</label>
                <input class="form-control" type="number" name="total"  id="total" value="{{old('total')}}">
                @foreach ($errors->get('total') as $message)
                    {{$message}}
                @endforeach
                <label for="foto">foto</label>
                <input class="form-control" type="file" name="foto"  id="foto" value="{{old('foto')}}">
                @foreach ($errors->get('foto') as $message)
                    {{$message}}
                @endforeach
                <input type="submit" class="btn btn-primary btn-xs mt-3" value="Insertar Cotización">
            </form>
        </div>

    </div>

@endsection
