<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\ClienteModel;
use App\Models\CotizacionModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $cliente_id=ClienteModel::firstwhere('usuario_id',session('usuario_id'));
        $cotizaciones=CotizacionModel::where('cliente_id',$cliente_id->id)->where('fl_estado','Enviado')->get();

        return view('Cliente.Dashboard.index',compact('cotizaciones'));
    }
}
