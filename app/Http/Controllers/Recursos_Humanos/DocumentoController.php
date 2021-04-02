<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Admin\Persona;
use App\Http\Controllers\Controller;
use App\Recursos_Humanos\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function store(Request $request){
         $persona=Persona::findOrFail($request->persona_id); //Obtenemos la persona a traves de la ruta
         $carpeta=$request->carpeta; //Obtenemos la persona a traves de la ruta
         $parametro=$request->parametro;
         //Guardamos el documento
         $documento = request()->file($parametro)->store('public/Documentos/'.$persona->nombre.' '.$persona->apellido.'/'.$carpeta."/");
         $documentoUrl= $documento;
         //Almacenamos en la Base de Datos
         Documento::create([
            'url' => $documentoUrl,
            'persona_id' => $request->persona_id,
            'tipo_documento_id' => $request->tipoDocumento
        ]);
     }
}
