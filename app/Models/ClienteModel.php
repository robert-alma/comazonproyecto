<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $remember_token = false;
    protected $table = "clientes";
    protected $fillable = ['usuario_id',
                        'empresa_id',
                        'pago_id',
                        'valor_neto',
                        'valor_anual',
                        'valor_mensual',
                        'valor_cliente',
                        'numero_cotizaciones_aceptadas',
                        'satisfaccion',
                        'numero_referidos',
                        'numero_quejas'];
    protected $attributes = [];

    public function usuario()
    {
        return $this->belongsTo(UsuarioModel::class);
    }
    public function empresa()
    {
        return $this->belongsTo(EmpresaModel::class);
    }
    public function pago()
    {
        return $this->belongsTo(PagoModel::class);
    }



    public function CrearCliente($request,$usuario){
        // $this->valiClienter($request);
        if ($request->perfil_id==1) {
            $dataCliente = array(
            'usuario_id' => $usuario->id,
            'empresa_id' => $request->empresa_id,
            'pago_id' => $request->pago_id,);
            $this->fill($dataCliente);
            $this->save();
        }



    }
}
