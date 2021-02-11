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
    public function index()
    {
        $proveedores=Proveedor::where('activo','=',1)->get();
        return view('recursos_humanos.proveedores.index',[
            'proveedores'=>$proveedores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categorias_proveedores=CategoriaProveedor::get()->all();
       return view('recursos_humanos.proveedores.create',[
        'categorias_proveedores'=>$categorias_proveedores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProveedorRequest $request)
    {
         Proveedor::create($request->validated());
        return redirect()->route('rh.proveedores.index')->with('mensaje','Se ha registrado un proveedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id=Crypt::decryptString($id);
        $proveedor=Proveedor::findOrFail($id);
        return view('recursos_humanos.proveedores.edit',[
            'proveedor'=>$proveedor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProveedorRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $proveedor=Proveedor::findOrFail($id);
        $proveedor->update($request->validated());
        return redirect()->route('rh.proveedores.index')->with('mensaje','Se ha actualizado el proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $id=Crypt::decryptString($id);
       $proveedor=Proveedor::findOrFail($id);
       $proveedor->activo=0;
       $proveedor->update();
       return redirect()->route('rh.proveedores.index')->with('mensaje','Se ha eliminado el proveedor');
    }
}
