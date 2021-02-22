<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Cargo;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CargoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CargoController extends Controller
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
    $this->authorize('view',new Cargo);
    $cargos=Cargo::where('activo','=',1)->get();
    return view('admin.cargos.index',[
        'cargos'=>$cargos]);
}
public function store(CargoRequest $request)
{
    //Aplicamos Politica de Acceso al metodo correspondiente
    $this->authorize('create',new Cargo);
    $cargo=Cargo::create($request->validated());
    return back()->with('mensaje','Se ha añadido un nuevo cargo');
}
public function update(CargoRequest $request, $id)
{
    $id= Crypt::decryptString($id);
    $cargo=Cargo::findOrFail($id);
    //Aplicamos Politica de Acceso al metodo correspondiente
    $this->authorize('update',$cargo);
    $cargo->update($request->validated());
    return back()->with('mensaje','Se ha actualizado el cargo');
}

public function destroy($id)
{
   $id= Crypt::decryptString($id);
   $cargo=Cargo::findOrFail($id);
     //Aplicamos Politica de Acceso al metodo correspondiente
   $this->authorize('delete',$cargo);
   $cargo->activo=0;
   $cargo->update();
   return back()->with('mensaje','Se ha eliminado el cargo');
}
}
