{{-- <h3>
    Usuario: cliente Contraseña: secret
</h3>
<br>
<h3>
    Usuario: ejecutivo Contraseña: secret
</h3> --}}

<div class="container ">
    <div class="row mt-5 justify-content-center align-items-center">
        <div class="col-10 col-sm-8 col-lg-4">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <h5 class="card-title">Bienvenido a la interfaz de Comazon</h5>
                    <p class="card-text">Ingresa con tu usuario y contraseña, si aún no estás registrado hazlo <a
                            href="{{ route('vistaregistro') }}">aquí</a>.</p>
                    <form id="loginform" action="{{ route('validar') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="form-group">
                                <label class="form-label" for="usuario">Usuario</label>
                                <input type="text" class="form-control" name="usuario" id="usuario"
                                    value="{{ old('usuario') }}">
                                @foreach ($errors->all() as $message)
                                    {{ $message }}
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <button form="loginform" type="submit" class="btn w-100 btn-primary">Login</button>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('vistacontraseña') }}"> ¿Olvidaste tu contraseña?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
