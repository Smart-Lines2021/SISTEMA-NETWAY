<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Aseguradora;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AseguradoraRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AseguradoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
      $this->middleware('auth');
  }
  public function index()
  {
        //Aplicamos Politica de Acceso al metodo correspondiente
      $this->authorize('view',new Aseguradora);
      $aseguradoras=Aseguradora::where('activo','=',1)->get();
      return view('admin.aseguradoras.index',[
        'aseguradoras'=>$aseguradoras]);
  }
    public function store(AseguradoraRequest $request)
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new Aseguradora);
        $aseguradora=Aseguradora::create($request->validated());
        return back()->with('mensaje','Se ha añadido una nueva aseguradora');
    }
    public function update(AseguradoraRequest $request, $id)
    {
        $id= Crypt::decryptString($id);
        $aseguradora=Aseguradora::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$aseguradora);
        $aseguradora->update($request->validated());
        return back()->with('mensaje','Se ha actualizado la aseguradora');
    }
    public function destroy($id)
    {
     $id= Crypt::decryptString($id);
     $aseguradora=Aseguradora::findOrFail($id);
     //Aplicamos Politica de Acceso al metodo correspondiente
     $this->authorize('delete',$aseguradora);
     $aseguradora->activo=0;
     $aseguradora->update();
     return back()->with('mensaje','Se ha eliminado la aseguradora');
 }
}
