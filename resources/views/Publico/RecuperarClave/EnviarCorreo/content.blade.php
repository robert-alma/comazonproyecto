<form id="recuperarcontrasenaform" action="{{ route('recuperar') }}" method="post">
    @csrf
    <div class="form-group">
        <label class="form-label" for="correo">Correo</label>
        <input type="email" class="form-control" name="correo" id="correo">
    </div>
    <div class="row p-1">
        <div class="col-6 text-center ">
            <button form="recuperarcontrasenaform" type="submit" class="btn btn-primary">Ingresar Correo</button>
        </div>
    </div>

</form>
