@extends('Ejecutivo.Templates.layout')
@section('titulo',"ClienteInfo")

@section('content')
    <h1>Revisión de Historial blablab de <strong>{{$cliente->usuario->dato->nombre}}</strong>  id: <strong>{{$cliente->id}}</strong></h1>
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center">Listado de Solicitudes</h4>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Empresa</th>
                                <th>Neto</th>
                                <th>Valor Anual</th>
                                <th>Valor Mensual</th>
                                <th>Puntuación de Cliente</th>
                                <th>Número de Referidos</th>
                                <th>Crear Cotización</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$cliente->usuario->usuario}}</td>
                                <td>{{$cliente->empresa->empresa}}</td>
                                <td>{{$cliente->valor_neto}}</td>
                                <td>{{$cliente->valor_anual}}</td>
                                <td>{{$cliente->valor_mensual}}</td>
                                <td>{{$cliente->valor_cliente}}</td>
                                <td>{{$cliente->numero_referidos}}</td>
                                <td class="text-center"><a href="{{route('ejecutivo.cotizacion',$solicitud->id)}}"><button class="btn btn-info" >Crear</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
