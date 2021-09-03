@extends('Ejecutivo.Templates.layout')
@section('titulo',"Cotizaciones")

@section('content')
    <h1>Bienvenido Ejecutivo {{session('usuario')}} </h1>
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-12">
                <h4>Listado de Solicitudes</h4>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Cliente</th>
                                <th>Asunto</th>
                                <th>Comentario</th>
                                <th>Presupuesto</th>
                                <th>Fecha</th>
                                <th>Crear Cotización</th>
                                <th>Ver Cliente</th>
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
                                    <td><a href="{{route('ejecutivo.cotizacion',$solicitud->id)}}"><button class="btn btn-primary btn-xs" >Crear</button></a></td>
                                    <td><a href="{{route('ejecutivo.vercliente',$solicitud->id)}}"><button class="btn btn-info" >Ver </button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
        $('#mytable').DataTable();
        } );
    </script>
@endsection
