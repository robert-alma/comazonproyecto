<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CotizacionModel extends Model
{
    protected $remember_token = false;
    protected $table = "cotizaciones";
    protected $fillable = ['cliente_id',
                            'ejecutivo_id',
                            'empresa_id',
                            'servicio_id',
                            'cantidad',
                            'precio',
                            'descuento',
                            'total',
                            'foto',
                            'fl_estado',];
    protected $attributes = [
        'foto'=>'hola',
    ];

    public function CrearCotizacion($request,$id){
        $solicitud=SolicitudModel::find($id);
        $cliente=ClienteModel::find($solicitud->cliente_id);

        $dataCotizacion = array(
            'cliente_id' => $cliente->id,
            'ejecutivo_id'=> EjecutivoModel::firstwhere('usuario_id',session('usuario_id'),)->id,
            'empresa_id'=>$cliente->empresa_id ,
            'servicio_id'=> $request->servicio_id,
            'cantidad'=>$request->cantidad ,
            'precio'=> $request->precio,
            'descuento'=>$request->descuento,
            'total'=> $request->total,
            'foto'=>$request->foto,
            'fl_estado'=>1,
        );

        $this->fill($dataCotizacion);
        $this->save();


    }
    public function aprobarsolicitud(){
        $aceptarsolicitud= array('fl_estado'=>2);
        $this->fill($aceptarsolicitud);
        $this->save();

    }
    public function desaprobarsolicitud(){
        $rechazarsolicitud= array('fl_estado'=>3);
        $this->fill($rechazarsolicitud);
        $this->save();

    }
}
