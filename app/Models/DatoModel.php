<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatoModel extends Model
{
    protected $remember_token = false;
    protected $table = "datos";
    protected $fillable = ['usuario_id',
                            'ubigeo_id',
                            'sexo_id',
                            'tipo_documento_id',
                            'documento',
                            'nombre',
                            'apellido_paterno',
                            'apellido_materno',
                            'fecha_nacimiento',
                            'direccion',
                            'celular'];
    protected $attributes = [
        'ubigeo_id'=>1,
    ];

    public function usuario()
    {
        return $this->belongsTo(UsuarioModel::class);
    }
    public function ubigeo()
    {
        return $this->belongsTo(UbigeoModel::class);
    }
    public function sexo()
    {
        return $this->belongsTo(SexoModel::class);
    }
    public function tipodocumento()
    {
        return $this->belongsTo(TipoDocumentoModel::class);
    }


    public function CrearDato($request,$usuario){
        // $this->validator($request);
        $dataDato = array(
            'usuario_id' => $usuario->id,
            'ubigeo_id' => $request->ubigeo_id,
            'sexo_id' => $request->sexo_id,
            'tipo_documento_id' => $request->tipo_documento_id,
            'documento' => $request->documento,
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'direccion' => $request->direccion,
            'celular' => $request->celular,
        );
        $this->fill($dataDato);
        $this->save();

    }
}
