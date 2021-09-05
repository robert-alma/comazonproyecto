<?php

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;
use App\Models\UsuarioModel;
use Illuminate\Http\Request;
use App\Mail\RecurperarContraseñaMail;
use Illuminate\Support\Facades\Mail;

class RecuperarClaveController extends Controller
{
    public function index()
    {
        return view('Publico.RecuperarClave.EnviarCorreo.index');
    }

    public function enviarCorreo(Request $request)
    {
        $correo = $request->correo;
        $usuario = UsuarioModel::firstwhere('correo', $correo);

        Mail::to($usuario->correo)->send(new RecurperarContraseñaMail($usuario));

        return redirect('/')->withErrors(['status' => 'Credenciales enviadas, revisa tu correo.']);;
    }

    public function vistaNuevaContrasena($id)
    {

        $usuario=UsuarioModel::find($id);
        return view('Publico.RecuperarClave.RenovarClave.index',compact('usuario'));
    }

    public function nuevaContrasena(Request $request)
    {

        $usuario = UsuarioModel::find($request->id);
        $usuario->nuevacontrasena($request->password);

        return redirect(route('login'));
    }


}
