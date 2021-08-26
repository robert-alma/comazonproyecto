<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
    <h1>Bienvenido al Registro</h1>


    <div>
        <form action="{{route('registro')}}" method="post" >
            @csrf
            <label for="perfil_id">Tipo de Perfil</label>
            <select name="perfil_id" id="perfil_id">
                <option value="1">Cliente</option>
                <option value="2">Ejecutivo</option>
            </select>
            @foreach ($errors->get('perfil_id') as $message)
            {{$message}}
             @endforeach
            <br>
            <label for="usuario">Nombre de Usuario</label>
            <input type="text" name="usuario"  id="usuario">
            @foreach ($errors->get('usuario') as $message)
            {{$message}}
             @endforeach
            <br>

            <label for="correo">Correo Electrónico</label>
            <input type="text" name="correo"  id="correo">
            @foreach ($errors->get('correo') as $message)
            {{$message}}
             @endforeach
            <br>

            <label for="password">Contraseña</label>
            <input type="password" name="password"  id="password">
            @foreach ($errors->get('password') as $message)
            {{$message}}
             @endforeach
            <br>
            <br><br><br><br><br><br>

            <br>
            <label for="sexo_id">Tipo de Documento</label>
            <select name="sexo_id" id="sexo_id">
                <option value="1">Hombre</option>
                <option value="2">Mujer</option>
            </select>
            @foreach ($errors->get('sexo_id') as $message)
            {{$message}}
             @endforeach
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"  id="nombre">
            @foreach ($errors->get('nombre') as $message)
            {{$message}}
             @endforeach
            <br>
            <label for="apellido_paterno">Apellido Paterno</label>
            <input type="text" name="apellido_paterno"  id="apellido_paterno">
            @foreach ($errors->get('apellido_paterno') as $message)
            {{$message}}
             @endforeach
            <br>
            <label for="apellido_materno">Apellido Materno</label>
            <input type="text" name="apellido_materno"  id="apellido_materno">
            @foreach ($errors->get('apellido_materno') as $message)
            {{$message}}
             @endforeach
            <br>
            <label for="tipo_documento_id">Tipo de Documento</label>
            <select name="tipo_documento_id" id="tipo_documento_id">
                <option value="1">DNI</option>
                <option value="2">Pasaporte</option>
                <option value="3">Carnet de Extranjería</option>
            </select>
            @foreach ($errors->get('tipo_documento_id') as $message)
            {{$message}}
             @endforeach
            <label for="documento">N°Documento</label>
            <input type="number" name="documento"  id="documento">
            @foreach ($errors->get('documento') as $message)
            {{$message}}
             @endforeach
            <br>
            <label for="celular">N°celular</label>
            <input type="number" name="celular"  id="celular">
            @foreach ($errors->get('celular') as $message)
            {{$message}}
             @endforeach
            <br>
            <label for="direccion">direccion</label>
            <input type="text" name="direccion"  id="direccion">
            @foreach ($errors->get('direccion') as $message)
            {{$message}}
             @endforeach
            <br>
            <label for="fecha_nacimiento">fecha_nacimiento</label>
            <input type="date" name="fecha_nacimiento"  id="fecha_nacimiento">
            @foreach ($errors->get('fecha_nacimiento') as $message)
            {{$message}}
             @endforeach
            <br>
            <label for="empresa_id">Empresa </label>
            <select name="empresa_id" id="empresa_id">
                <option value="1">Comazon</option>
                <option value="2">Linio</option>
                <option value="3">Bcp</option>
            </select>
            @foreach ($errors->get('empresa_id') as $message)
            {{$message}}
             @endforeach<br>
            <label for="pago_id">Tipo de Tarjeta </label>
            <select name="pago_id" id="pago_id">
                <option value="1">BCP</option>
                <option value="2">BBVA</option>
                <option value="3">BN</option>
            </select>
            @foreach ($errors->get('pago_id') as $message)
            {{$message}}
             @endforeach
            <select name="ubigeo_id" id="ubigeo_id">
                <option value="1">Ubigeo1</option>
            </select>
            @foreach ($errors->get('ubigeo_id') as $message)
            {{$message}}
             @endforeach


            <input type="submit" value="Guardar Datos">
        </form>


    </div>
</body>
</html>
