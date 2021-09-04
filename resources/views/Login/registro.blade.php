@extends('Login.Templates.layout')
@section('titulo', 'Registrar Usuario')


@section('content')

    <h1>Bienvenido al Registro</h1>


    <div class="container">
        <form action="{{ route('registro') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label class="m-1" for="perfil_id">Tipo de Perfil</label>
            <select name="perfil_id" id="perfil_id">
                <option value="1">Cliente</option>
                <option value="2">Ejecutivo</option>
            </select>
            @foreach ($errors->get('perfil_id') as $message)
                {{ $message }}
            @endforeach
            <br>
            <label class="m-1" for="usuario">Nombre de Usuario</label>
            <input type="text" name="usuario" id="usuario" value="{{ old('usuario') }}">
            @foreach ($errors->get('usuario') as $message)
                {{ $message }}
            @endforeach
            <br>

            <label class="m-1" for="correo">Correo Electrónico</label>
            <input type="text" name="correo" id="correo" value="{{ old('correo') }}">
            @foreach ($errors->get('correo') as $message)
                {{ $message }}
            @endforeach
            <br>

            <label class="m-1" for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            @foreach ($errors->get('password') as $message)
                {{ $message }}
            @endforeach
            <br>
            <label class="m-1" for="repassword">Repetir Contraseña</label>
            <input type="password" name="repassword" id="repassword">
            @foreach ($errors->get('repassword') as $message)
                {{ $message }}
            @endforeach
            <br>
            <label class="m-1" for="sexo_id">Sexo</label>
            <select name="sexo_id" id="sexo_id">
                <option value="1">Hombre</option>
                <option value="2">Mujer</option>
            </select>
            @foreach ($errors->get('sexo_id') as $message)
                {{ $message }}
            @endforeach
            <label class="m-1" for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
            @foreach ($errors->get('nombre') as $message)
                {{ $message }}
            @endforeach
            <br>
            <label class="m-1" for="apellido_paterno">Apellido Paterno</label>
            <input type="text" name="apellido_paterno" id="apellido_paterno" value="{{ old('apellido_paterno') }}">
            @foreach ($errors->get('apellido_paterno') as $message)
                {{ $message }}
            @endforeach
            <br>
            <label class="m-1" for="apellido_materno">Apellido Materno</label>
            <input type="text" name="apellido_materno" id="apellido_materno" value="{{ old('apellido_materno') }}">
            @foreach ($errors->get('apellido_materno') as $message)
                {{ $message }}
            @endforeach
            <br>
            <label class="m-1" for="tipo_documento_id">Tipo de Documento</label>
            <select name="tipo_documento_id" id="tipo_documento_id">
                <option value="1">DNI</option>
                <option value="2">Pasaporte</option>
                <option value="3">Carnet de Extranjería</option>
            </select>
            <br>
            @foreach ($errors->get('tipo_documento_id') as $message)
                {{ $message }}
            @endforeach
            <label class="m-1" for="documento">N°Documento</label>
            <input type="number" name="documento" id="documento" value="{{ old('documento') }}">
            @foreach ($errors->get('documento') as $message)
                {{ $message }}
            @endforeach
            <br>
            <label class="m-1" for="celular">N°celular</label>
            <input type="number" name="celular" id="celular" value="{{ old('celular') }}">
            @foreach ($errors->get('celular') as $message)
                {{ $message }}
            @endforeach
            <br>
            <label class="m-1" for="direccion">direccion</label>
            <input type="text" name="direccion" id="direccion" value="{{ old('direccion') }}">
            @foreach ($errors->get('direccion') as $message)
                {{ $message }}
            @endforeach
            <br>
            <label class="m-1" for="fecha_nacimiento">fecha_nacimiento</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
            @foreach ($errors->get('fecha_nacimiento') as $message)
                {{ $message }}
            @endforeach
            <br>
            <label class="m-1" for="empresa_id">Empresa </label>
            <select name="empresa_id" id="empresa_id">
                <option value="1">Comazon</option>
                <option value="2">Linio</option>
                <option value="3">Bcp</option>
            </select>
            @foreach ($errors->get('empresa_id') as $message)
                {{ $message }}
            @endforeach<br>
            <label class="m-1" for="pago_id">Tipo de Tarjeta </label>
            <select name="pago_id" id="pago_id">
                <option value="1">BCP</option>
                <option value="2">BBVA</option>
                <option value="3">BN</option>
            </select>
            @foreach ($errors->get('pago_id') as $message)
                {{ $message }}
            @endforeach
            <select name="ubigeo_id" id="ubigeo_id">
                <option value="1">Ubigeo1</option>
            </select>
            @foreach ($errors->get('ubigeo_id') as $message)
                {{ $message }}
            @endforeach
            <br>
            <label class="m-1" for="foto">Foto de Perfil</label>
            <input type="file" name="foto" id="foto" value="{{ old('foto') }}">
            @foreach ($errors->get('foto') as $message)
                {{ $message }}
            @endforeach

            <input type="submit" value="Guardar Datos">
        </form>


    </div>
@endsection
