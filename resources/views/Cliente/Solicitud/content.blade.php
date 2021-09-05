<div class="container justify-content-center mt-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="well well-sm">
                <form action="{{ route('cliente.registrarsolicitud') }}" method="post" class="form-horizontal"
                    method="post">
                    @csrf
                    <fieldset>
                        <legend class="text-center header">Registra tu Solicitud</legend>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col">
                                <label for="asunto">Asunto</label>
                                <input class="form-control" type="text" name="asunto" id="asunto"
                                    placeholder="Coloca aquí el asunto de tu solicitud" value="{{ old('asunto') }}">
                                @foreach ($errors->get('asunto') as $message)
                                    {{ $message }}
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col">
                                <label for="presupuesto">Presupuesto</label>
                                <input class="form-control" type="number" name="presupuesto"
                                    placeholder="Coloca aquí el presupuesto de proyectos" id="presupuesto"
                                    value="{{ old('presupuesto') }}">
                                @foreach ($errors->get('presupuesto') as $message)
                                    {{ $message }}
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i
                                    class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col">
                                <label for="fecha_entrega">Fecha de Entrega</label>
                                <input class="form-control" type="date" name="fecha_entrega"
                                    placeholder="La urgencia del proyecto" id="fecha_entrega"
                                    value="{{ old('fecha_entrega') }}">
                                @foreach ($errors->get('fecha_entrega') as $message)
                                    {{ $message }}
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i
                                    class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col">
                                <label for="comentario">Comentario</label>
                                <textarea class="form-control" type="text" name="comentario" id="comentario" cols="30"
                                    rows="7" value="{{ old('comentario') }}"
                                    placeholder="Ingresa el campo de tu solicitud aquí"></textarea>
                                @foreach ($errors->get('comentario') as $message)
                                    {{ $message }}
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar Solicitud</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
