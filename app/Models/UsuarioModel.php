<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Session;

class UsuarioModel extends Authenticatable
{
    protected $remember_token = false;
    protected $table = "usuarios";
    protected $fillable = ['usuario','correo', 'password','perfil_id'];
    protected $attributes = [
        'perfil_id' => 2
    ];

    public function perfil()
    {
        return $this->belongsTo(PerfilModel::class);
    }

    public function dato()
    {
        return $this->hasOne(DatoModel::class,'usuario_id');
    }

    public function CrearUsuario($request){
        $dataUsuario = array(
            'perfil_id' => $request->perfil_id,
            'usuario' => $request->usuario,
            'correo' => $request->correo,
            'password' => bcrypt($request->password) ,
        );
        $this->fill($dataUsuario);
        $this->save();

    }

    public function nuevacontrasena($password){

        $this->password=bcrypt($password);
        $this->update();
    }

    public function setSession($role)
    {
        if ($role->flestado == 1) {

            Session::put(
                [
                    'usuario_id' => $this->id,
                    'correo' => $this->correo,
                    'perfil_id' => $this->perfil->id,
                    'perfil' => $this->perfil->perfil,
                    'usuario'=> $this->usuario,
                ]
            );
        }
    }
}

