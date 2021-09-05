<h1>Bienvenido {{ session('usuario') }} </h1>
<div class="container-lg">
    <div class="row">
        <div class="col-lg-12">
            <h4>Listado de Cotizaciones</h4>
            <div class="table-responsive">
                <table id="mytable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <th>Id</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Descuento</th>
                        <th>Total</th>
                        <th>Acciones</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        @foreach ($cotizaciones as $cotizacion)
                            <tr>
                                <td>{{ $cotizacion->id }}</td>
                                <td>{{ $cotizacion->cantidad }}</td>
                                <td>{{ $cotizacion->precio }}</td>
                                <td>{{ $cotizacion->descuento }}</td>
                                <td>{{ $cotizacion->total }}</td>
                                <td><a href="{{ route('cliente.aceptarsolicitud', $cotizacion->id) }}"><button
                                            class="btn btn-primary btn-xs">Aceptar</button></a></td>
                                <td><a href="{{ route('cliente.rechazarsolicitud', $cotizacion->id) }}"><button
                                            class="btn btn-danger btn-xs">Rechazar</button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Descuento</th>
                            <th>Total</th>
                            <th>Acciones</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
</script>
