<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recursos_Humanos\TipoDocumentoRequest;
use App\Recursos_Humanos\TipoDocumento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposDocumentos=TipoDocumento::where('activo','=',1)->get();
        return view('recursos_humanos.tipos_documentos.index',[
            'tiposDocumentos'=>$tiposDocumentos]);
    }
    public function store(TipoDocumentoRequest $request)
    {
        $tipoDocumento=TipoDocumento::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo tipo de documento');
    }
    public function update(TipoDocumentoRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $tipoDocumento=TipoDocumento::findOrFail($id);
        $tipoDocumento->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el tipo de documento');
    }
    public function destroy($id)
    {
        $id=Crypt::decryptString($id);
        $tipoDocumento=TipoDocumento::findOrFail($id);
        $tipoDocumento->activo=0;
        $tipoDocumento->save();
        return back()->with('mensaje','Se ha eliminado el tipo de documento');
    }
}
