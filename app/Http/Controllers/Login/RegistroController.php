<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistroRequest;
use App\Models\DatoModel;
use App\Models\ClienteModel;
use App\Models\EjecutivoModel;
use App\Models\UsuarioModel;

class RegistroController extends Controller
{
    //
    public function index(){
        return view('login.registro');
    }

    public function RegistrarUsuario(RegistroRequest $request){

        $usuario= new UsuarioModel;
        $usuario->CrearUsuario($request);

        $dato= new DatoModel;
        $dato->CrearDato($request,$usuario);

        $cliente=new ClienteModel;
        $cliente->CrearCliente($request,$usuario);

        $cliente=new EjecutivoModel();
        $cliente->CrearEjecutivo($request,$usuario);


        return redirect()->route('login');

    }
}
