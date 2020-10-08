<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pago;

class PagoController extends Controller
{
    public function pagocurso(Request $request)
    {   
          Pago::create($request->all())   ;
        
        

        return response()->json('pagos realizado');
    }
    public function listapagoscursos()
    {
        return response()->json(Pago::all());
    }

    public function listapagosporcursos($id_curso)
    {
        $cursos=Pago::where('curso_id',$id_curso)->get();
        
            return response()->json($cursos);
        
    }

}
