@extends('Login.Templates.layout')
@section('titulo',"Login")

@section('content')

<h3>
    Usuario: cliente Contraseña: secret
</h3>
<br>
<h3>
    Usuario: ejecutivo Contraseña: secret
</h3>

<div class="container ">
    <div class="row m-5 justify-content-center align-items-center">
        <div class="col-10 col-sm-8 col-lg-4 bg-light border border-primary   ">
            <div>
                <h1 class="text-center">Login General</h1>
            </div>
            <div>
                <form  id="loginform" action="{{route('validar')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="usuario">Usuario</label>
                        <input type="text" class="form-control" name="usuario"  id="usuario" value="{{old('usuario')}}">
                        <div id="emailHelp" class="form-text">Ingresa tu usuario</div>
                        @foreach ($errors->all() as $message)
                        {{$message}}
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password"  id="password">
                    </div>
                    <div class="row p-1">
                        <div class="col-6 text-center ">
                            <button form="loginform" type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="col-6 text-center ">
                            <button class="btn btn-primary" type="submit"><a class="text-light" href="{{route('vistaregistro')}}">Registrarse</a></button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
 </div>

@endsection
