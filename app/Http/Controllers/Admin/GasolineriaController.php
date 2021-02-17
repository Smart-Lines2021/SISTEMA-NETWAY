<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Gasolineria;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Gasolineriarequest;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class GasolineriaController extends Controller
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
        $this->authorize('view',new Gasolineria);
        $gasolinerias=Gasolineria::where('activo','=',1)->get();
        return view('admin.gasolinerias.index',[
            'gasolinerias'=>$gasolinerias]);
    }

    public function store(GasolineriaRequest $request)
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new Gasolineria);
        $gasolineria=Gasolineria::create($request->validated());
        return back()->with('mensaje','Se ha creado una nueva gasolineria');
    }

    public function update(GasolineriaRequest $request, $id)
    {
         $id= Crypt::decryptString($id);
         $gasolineria=Gasolineria::findOrFail($id);
         //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$gasolineria);
         $gasolineria->update($request->validated());
         return back()->with('mensaje','Se ha actualizado la gasolineria');
    }

    public function destroy($id)
    {
        $id= Crypt::decryptString($id);
        $gasolineria=Gasolineria::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('delete',$gasolineria);
        $gasolineria->activo=0;
        $gasolineria->update();
        return back()->with('mensaje','Se ha eliminado la gasolineria');
    }
}
