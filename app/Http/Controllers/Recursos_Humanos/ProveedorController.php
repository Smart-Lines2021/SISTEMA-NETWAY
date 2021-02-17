<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recursos_Humanos\Proveedor;
use App\Admin\CategoriaProveedor;
use App\Http\Requests\Admin\ProveedorRequest;
use Illuminate\Support\Facades\Crypt;

class ProveedorController extends Controller
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
    $this->authorize('view',new Proveedor);
    $proveedores=Proveedor::where('activo','=',1)->get();
    return view('recursos_humanos.proveedores.index',[
        'proveedores'=>$proveedores]);
}

public function create()
{
        //Aplicamos Politica de Acceso al metodo correspondiente
   $this->authorize('create',new Proveedor);
   $categorias_proveedores=CategoriaProveedor::get()->all();
   return view('recursos_humanos.proveedores.create',[
    'categorias_proveedores'=>$categorias_proveedores]);
}
public function store(ProveedorRequest $request)
{
        //Aplicamos Politica de Acceso al metodo correspondiente
   $this->authorize('create',new Proveedor);
   Proveedor::create($request->validated());
   return redirect()->route('rh.proveedores.index')->with('mensaje','Se ha registrado un proveedor');
}
public function edit($id)
{
    $id=Crypt::decryptString($id);
    $proveedor=Proveedor::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
    $this->authorize('update',$proveedor);
    return view('recursos_humanos.proveedores.edit',[
        'proveedor'=>$proveedor]);
}
public function update(ProveedorRequest $request, $id)
{
    $id=Crypt::decryptString($id);
    $proveedor=Proveedor::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
    $this->authorize('update',$proveedor);
    $proveedor->update($request->validated());
    return redirect()->route('rh.proveedores.index')->with('mensaje','Se ha actualizado el proveedor');
}
public function destroy($id)
{
   $id=Crypt::decryptString($id);
   $proveedor=Proveedor::findOrFail($id);
      //Aplicamos Politica de Acceso al metodo correspondiente
   $this->authorize('delete',$proveedor);
   $proveedor->activo=0;
   $proveedor->update();
   return redirect()->route('rh.proveedores.index')->with('mensaje','Se ha eliminado el proveedor');
}
}
