<?php

namespace App\Http\Controllers\Ejecutivo;

use App\Http\Controllers\Controller;
use App\Models\SolicitudModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $solicitudes['solicitudes']=SolicitudModel::where('fl_estado','Enviado')->get();
        return view('Ejecutivo.Dashboard.index',$solicitudes);
    }
}
