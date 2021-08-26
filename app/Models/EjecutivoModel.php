<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EjecutivoModel extends Model
{
    protected $remember_token = false;
    protected $table = "ejecutivos";
    protected $fillable = ['usuario_id','valor_neto','valor_anual','valor_mensual','valor_ejecutivo','numero_cotizaciones_aceptadas','numero_cotizaciones_enviadas','numero_quejas'];
    protected $attributes = [];

    public function usuario()
    {
        return $this->belongsTo(UsuarioModel::class);
    }
    public function CrearEjecutivo($request,$usuario){
        // $this->valiEjecutivor($request);

        if ($usuario->perfil_id==2) {
            $dataEjecutivo = array(
                'usuario_id' => $usuario->id,
            );
            $this->fill($dataEjecutivo);
            $this->save();
        }

    }
}
