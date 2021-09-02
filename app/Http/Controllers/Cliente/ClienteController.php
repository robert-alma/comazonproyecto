<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Http\Requests\SolicitudRequest;
use App\Models\ClienteModel;
use App\Models\CotizacionModel;
use App\Models\SolicitudModel;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){


        $cliente_id=ClienteModel::firstwhere('usuario_id',session('usuario_id'));
        $cotizaciones=CotizacionModel::where('cliente_id',$cliente_id->id)->where('fl_estado','Enviado')->get();

        return view('Cliente.index',compact('cotizaciones'));
    }
    public function solicitud(){
        return view('Cliente.solicitud');
    }
    public function registrarsolicitud(SolicitudRequest $request){
        dd(1);
        $solicitud= new SolicitudModel();
        $solicitud->CrearSolicitud($request);
        return redirect(route('cliente.index'));
    }

    public function aceptarsolicitud($id){
        $cotizacion=CotizacionModel::find($id);
        $cotizacion->aprobarsolicitud();
        return redirect(route('cliente.index'));

    }

    public function rechazarsolicitud($id){
        $cotizacion=CotizacionModel::find($id);
        $cotizacion->desaprobarsolicitud();

        return redirect(route('cliente.index'));
    }
}
