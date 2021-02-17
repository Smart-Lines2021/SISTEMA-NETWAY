<?php

namespace App\Http\Controllers\Documentos;

use App\Admin\Persona;
use App\Documentos\IdentificacionOficial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IdentificacionOficialController extends Controller
{
	public function store(Request $request){
    	 $persona=Persona::findOrFail($request->persona_id); //Obtenemos la persona a traves de la ruta
    	 //Guardamos el documento
    	 $ine = request()->file('ine')->store('public/Documentos/'.$persona->nombre.' '.$persona->apellido.'/Identificaciones Oficiales'."/");
    	 $ineUrl= $ine;
    	 //Almacenamos en la Base de Datos
    	 IdentificacionOficial::create([
    	 	'url' => $ineUrl,
    	 	'persona_id' => $request->persona_id
    	 ]);
    	}
    }
