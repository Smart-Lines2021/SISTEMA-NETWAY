<?php

namespace App\Http\Controllers\Documentos;

use App\Admin\Persona;
use App\Documentos\CertificadoAltura;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificadoAlturaController extends Controller
{
	public function store(Request $request){
    	 $persona=Persona::findOrFail($request->persona_id); //Obtenemos la persona a traves de la ruta
    	 //Guardamos el documento
    	 $certificadoAltura = request()->file('certificadoAltura')->store('public/Documentos/'.$persona->nombre.' '.$persona->apellido.'/Certificados de Altura'."/");
    	 $certificadoAlturaUrl= $certificadoAltura;
    	 //Almacenamos en la Base de Datos
    	 CertificadoAltura::create([
    	 	'url' => $certificadoAlturaUrl,
    	 	'persona_id' => $request->persona_id
    	 ]);
    	}
    }
