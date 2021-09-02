<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Session;
use App\Models\ClienteModel;

class SolicitudModel extends Model
{
    protected $remember_token = false;
    protected $table = "solicitudes";
    protected $fillable = ['cliente_id',
                        'asunto',
                        'comentario',
                        'presupuesto',
                        'fecha_entrega'];
    protected $attributes = [
    ];



    public function CrearSolicitud($request){
        $dataSolicitud = array(
            'cliente_id'=> ClienteModel::firstwhere('usuario_id',session('usuario_id'))->id,
            'asunto' => $request->asunto,
            'comentario' => $request->comentario,
            'presupuesto' => $request->presupuesto ,
            'fecha_entrega'=>$request->fecha_entrega,
            'fl_estado'=>'Enviado',
        );
        $this->fill($dataSolicitud);
        $this->save();

    }
    public function solicitudAtendida($id){

        $this->fl_estado='Atendida';
        $this->save();
    }
}
