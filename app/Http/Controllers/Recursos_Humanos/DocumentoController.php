<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Admin\Persona;
use App\Http\Controllers\Controller;
use App\Mail\EnviarDocumentos;
use App\Recursos_Humanos\Documento;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
     public function send(Request $request){
      if (auth()->user()->personasUsuarios->first() === null) {
        return back()->with('mensaje','No puedes enviar documentos si no tienes un perfil creado');
      }
        $documentos=array();
        $remitente=User::findOrFail(auth()->user()->id);
        //Almacenamos todos los documentos
        for ($i=0; $i < sizeof($request->documentos) ; $i++) {
           $documentos[]=Documento::findOrFail($request->documentos[$i]);
       }
       Mail::to($request->contactos)->send(new EnviarDocumentos($documentos,$remitente));
       return back()->with('mensaje','Se han enviado sus documentos');
   }
}
