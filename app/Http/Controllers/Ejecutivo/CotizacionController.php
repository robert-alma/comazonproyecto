<?php

namespace App\Http\Controllers\Ejecutivo;

use App\Http\Controllers\Controller;
use App\Http\Requests\CotizacionRequest;
use App\Models\ClienteModel;
use App\Models\CotizacionModel;
use App\Models\DatoModel;
use App\Models\SolicitudModel;
use Illuminate\Http\Request;

class CotizacionController extends Controller
{
    public function index($id){

        $solicitud=SolicitudModel::find($id);
        $cliente=ClienteModel::find($solicitud->cliente_id);
        $dato=DatoModel::firstwhere('usuario_id',$cliente->usuario_id);

        return view('Ejecutivo.Cotizacion.index',compact('solicitud','cliente','dato'));
    }

    public function registrarCotizacion(CotizacionRequest $request, $id){

        $request->foto=$request->file('foto')->store('cotizaciones');
        $cotizacion= new CotizacionModel();
        $cotizacion->CrearCotizacion($request,$id);
        $solicitud = SolicitudModel::find($id);
        $solicitud->solicitudAtendida($id);

        return redirect(route('ejecutivo.index'));
    }
}
