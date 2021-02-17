<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Marca;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MarcaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MarcaController extends Controller
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
        $this->authorize('view',new Marca);
        $marcas=Marca::where('activo','=',1)->get();
        return view('admin.marcas.index',[
            'marcas'=>$marcas]);
    }
    public function store(MarcaRequest $request)
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new Marca);
        $marca=Marca::create($request->validated());
        return back()->with('mensaje','Se ha añadido una nueva marca');
    }
    public function update(MarcaRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $marca=Marca::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$marca);
        $marca->update($request->validated());
        return back()->with('mensaje','Se ha actualizado la marca');
    }
    public function destroy($id)
    {
        $id=Crypt::decryptString($id);
        $marca=Marca::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('delete',$marca);
        $marca->activo=0;
        $marca->update();
        return back()->with('Se ha eliminado la marca');
    }
}
