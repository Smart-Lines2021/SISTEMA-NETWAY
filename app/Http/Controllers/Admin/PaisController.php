<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Pais;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\Admin\PaisRequest;
use Illuminate\Http\Request;

class PaisController extends Controller
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
        $this->authorize('view',new Pais);
        $paises=Pais::where('activo','=',1)->get();
        return view('admin.paises.index',[
            'paises'=>$paises]);
    }
    public function store(PaisRequest $request)
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new pais);
        $pais=Pais::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo pais');
    }

    public function update(PaisRequest $request, $id)
    {
        $id = Crypt::decryptString($id);
        $pais=Pais::findOrFail($id);
         //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$pais);
        $pais->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el pais');
    }
    public function destroy($id)
    {
        $id = Crypt::decryptString($id);
        $pais=Pais::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('delete',$pais);
        $pais->activo=0;
        $pais->update();
        return back()->with('mensaje','Se ha eliminado el pais');
    }
}
