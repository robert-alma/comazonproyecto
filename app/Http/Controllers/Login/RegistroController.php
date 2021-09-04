<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistroRequest;
use App\Models\DatoModel;
use App\Models\ClienteModel;
use App\Models\EjecutivoModel;
use App\Models\UsuarioModel;
use GuzzleHttp\Psr7\Request;

class RegistroController extends Controller
{
    //
    public function index(){
        return view('login.registro');
    }

    public function RegistrarUsuario(RegistroRequest $request){

        if ($request->perfil_id==1) {
            $request->foto=$request->file('foto')->store('img/perfiles/cliente');
        }
        if ($request->perfil==2){
            $request->foto=$request->file('foto')->store('img/perfiles/ejecutivo');
        }
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
