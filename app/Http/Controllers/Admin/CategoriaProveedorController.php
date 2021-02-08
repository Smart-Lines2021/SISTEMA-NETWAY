<?php

namespace App\Http\Controllers\Admin;

use App\Admin\CategoriaProveedor;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoriaProveedorRequest;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class CategoriaProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categoriasProveedores=CategoriaProveedor::where('activo','=',1)->get();
       return view('admin.categorias_proveedores.index',[
        'categoriasProveedores'=>$categoriasProveedores]);
   }

   public function store(CategoriaProveedorRequest $request)
   {
    $categoriaProveedor=CategoriaProveedor::create($request->validated());
    return back()->with('mensaje','Se ha añadido una nueva categoría de proveedor');
}
    public function update(CategoriaProveedorRequest $request, $id)
    {
       $id= Crypt::decryptString($id);
       $categoriaProveedor=CategoriaProveedor::findOrFail($id);
       $categoriaProveedor->update($request->validated());
       return back()->with('mensaje','Se ha actualizado la categoría de proveedor');
   }
    public function destroy($id)
    {
        $id= Crypt::decryptString($id);
        $categoriaProveedor=CategoriaProveedor::findOrFail($id);
        $categoriaProveedor->activo=0;
        $categoriaProveedor->update();
        return back()->with('mensaje','Se ha elimiando la categoría del producto');
    }
}
