<?php

namespace App\Http\Controllers\Documentos;

use App\Admin\Persona;
use App\Documentos\Pcr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PcrController extends Controller
{
	public function store(Request $request){
    	 $persona=Persona::findOrFail($request->persona_id); //Obtenemos la persona a traves de la ruta
    	 //Guardamos el documento
    	 $pcr = request()->file('pcr')->store('public/Documentos/'.$persona->nombre.' '.$persona->apellido.'/PCR'."/");
    	 $pcrUrl= $pcr;
    	 //Almacenamos en la Base de Datos
    	 Pcr::create([
    	 	'url' => $pcrUrl,
    	 	'persona_id' => $request->persona_id
    	 ]);
    	}
    }
