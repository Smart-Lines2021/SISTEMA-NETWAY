<?php

namespace App\Http\Controllers\Documentos;

use App\Admin\Persona;
use App\Documentos\Curp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurpController extends Controller
{
	public function store(Request $request){
    	 $persona=Persona::findOrFail($request->persona_id); //Obtenemos la persona a traves de la ruta
    	 //Guardamos el documento
    	 $curp = request()->file('curp')->store('public/Documentos/'.$persona->nombre.' '.$persona->apellido.'/Curps'."/");
    	 $curpUrl= $curp;
    	 //Almacenamos en la Base de Datos
    	 Curp::create([
    	 	'url' => $curpUrl,
    	 	'persona_id' => $request->persona_id
    	 ]);
    	}
    }
