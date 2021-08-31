@extends('Cliente.Templates.layout')
@section('titulo',"Cotizaciones")

@section('content')
    <h1>Bienvenido {{session('usuario')}} </h1>
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-12">
                <h4>Listado de Cotizaciones</h4>
                <div class="table-responsive">
                <table id="mytable" class="table table-bordred table-striped">
                    <thead>
                            <th>Id</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Descuento</th>
                            <th>Total</th>
                            <th colspan="2" class="text-center">Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ($cotizaciones as $cotizacion)
                                <tr>
                                    <td>{{$cotizacion->id}}</td>
                                    <td>{{$cotizacion->cantidad}}</td>
                                    <td>{{$cotizacion->precio}}</td>
                                    <td>{{$cotizacion->descuento}}</td>
                                    <td>{{$cotizacion->total}}</td>
                                    <td><a href="{{route('cliente.aceptarsolicitud',$cotizacion->id)}}"><button class="btn btn-primary btn-xs" >Aceptar</button></a></td>
                                    <td><a href="{{route('cliente.rechazarsolicitud',$cotizacion->id)}}"><button class="btn btn-danger btn-xs" >Rechazar</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
