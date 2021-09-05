<?php

namespace App\Http\Controllers\Ejecutivo;

use App\Http\Controllers\Controller;
use App\Models\ClienteModel;
use App\Models\SolicitudModel;
use Illuminate\Http\Request;

class ClienteInfoController extends Controller
{
    public function index($id){

        $solicitud=SolicitudModel::find($id);
        $cliente=ClienteModel::find($solicitud->cliente_id);

        return view('Ejecutivo.ClienteInfo.index',compact('cliente','solicitud'));
    }
}
