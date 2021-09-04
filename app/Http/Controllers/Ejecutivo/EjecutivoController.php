<?php

namespace App\Http\Controllers\Ejecutivo;

use App\Http\Controllers\Controller;
use App\Http\Requests\CotizacionRequest;
use App\Models\ClienteModel;
use App\Models\CotizacionModel;
use App\Models\DatoModel;
use App\Models\SolicitudModel;
use Illuminate\Http\Request;

class EjecutivoController extends Controller
{
    public function index(){
        $solicitudes['solicitudes']=SolicitudModel::where('fl_estado','Enviado')->get();
        return view('Ejecutivo.index',$solicitudes);
    }

    public function cotizacion($id){

        $solicitud=SolicitudModel::find($id);
        $cliente=ClienteModel::find($solicitud->cliente_id);
        $dato=DatoModel::firstwhere('usuario_id',$cliente->usuario_id);

        return view('Ejecutivo.cotizacion',compact('solicitud','cliente','dato'));
    }

    public function registrarcotizacion(CotizacionRequest $request, $id){

        $request->foto=$request->file('foto')->store('cotizaciones');
        $cotizacion= new CotizacionModel();
        $cotizacion->CrearCotizacion($request,$id);
        $solicitud = SolicitudModel::find($id);
        $solicitud->solicitudAtendida($id);

        return redirect(route('ejecutivo.index'));
    }

    public function vistaclienteinfo($id){

        $solicitud=SolicitudModel::find($id);
        $cliente=ClienteModel::find($solicitud->cliente_id);

        return view('Ejecutivo.vistaclienteinfo',compact('cliente','solicitud'));
    }
}
