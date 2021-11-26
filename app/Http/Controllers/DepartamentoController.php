<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    //
    public function obtener_ciudades (Request $request , $departamento_id){

        $departamentos = Municipio::where('departamento_id',$departamento_id)->get();

        return response()->json([
            'departamentos' => $departamentos,
            'mensaje' => 'Consulta exitosa'

        ]);
    }
}
