<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Color;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ColorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class ColorController extends Controller
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
    $this->authorize('view',new Color);
    $colores=Color::all();
    return view('admin.colores.index',[
        'colores'=>$colores]);
}
public function store(ColorRequest $request)
{
        //Aplicamos Politica de Acceso al metodo correspondiente
    $this->authorize('create',new Color);
    $color=Color::create($request->validated());
    return back()->with('mensaje','Se ha añadido un nuevo color');
}
public function update(ColorRequest $request, $id)
{
    $id= Crypt::decryptString($id);
    $color=Color::findOrFail($id);
    //Aplicamos Politica de Acceso al metodo correspondiente
    $this->authorize('update',$color);
    $color->update($request->validated());
    return back()->with('mensaje','Se ha actualizado el color');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $id= Crypt::decryptString($id);
       $color=Color::findOrFail($id);
     //Aplicamos Politica de Acceso al metodo correspondiente
       $this->authorize('delete',$color);
       $color->delete();
       $color->update();
       return back()->with('mensaje','Se ha eliminado el color');
   }
}
