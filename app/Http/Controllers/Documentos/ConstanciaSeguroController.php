<?php

namespace App\Http\Controllers\Documentos;

use App\Admin\Persona;
use App\Documentos\ConstanciaSeguro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConstanciaSeguroController extends Controller
{
	public function store(Request $request){
    	 $persona=Persona::findOrFail($request->persona_id); //Obtenemos la persona a traves de la ruta
    	 //Guardamos el documento
    	 $constanciaSeguro = request()->file('constanciaSeguro')->store('public/Documentos/'.$persona->nombre.' '.$persona->apellido.'/Constancias del Seguro'."/");
    	 $constanciaSeguroUrl= $constanciaSeguro;
    	 //Almacenamos en la Base de Datos
    	 ConstanciaSeguro::create([
    	 	'url' => $constanciaSeguroUrl,
    	 	'persona_id' => $request->persona_id
    	 ]);
    	}
    }
