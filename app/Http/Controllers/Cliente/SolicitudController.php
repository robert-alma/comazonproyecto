<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Http\Requests\SolicitudRequest;
use App\Models\CotizacionModel;
use App\Models\SolicitudModel;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function index(){
        return view('Cliente.Solicitud.index');
    }
    public function registrarSolicitud(SolicitudRequest $request){
        $solicitud= new SolicitudModel();
        $solicitud->CrearSolicitud($request);
        return redirect(route('cliente.index'));
    }

    public function aceptarSolicitud($id){
        $cotizacion=CotizacionModel::find($id);
        $cotizacion->aprobarsolicitud();
        return redirect(route('cliente.index'));

    }

    public function rechazarSolicitud($id){
        $cotizacion=CotizacionModel::find($id);
        $cotizacion->desaprobarsolicitud();

        return redirect(route('cliente.index'));
    }
}
