<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Estado;
use App\Recursos_Humanos\Proveedor;
use App\Recursos_Humanos\DomicilioProveedor;
use App\Http\Requests\Recursos_Humanos\DomicilioProveedorRequest;
use Illuminate\Support\Facades\Crypt;

class DomicilioProveedorController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DomicilioProveedorRequest $request)
    {
        DomicilioProveedor::create($request->validated());
        return redirect()->route('rh.proveedores.index')->with('mensaje','Se ha registrado el domicilio del proveedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id=Crypt::decryptString($id);
        $proveedor=Proveedor::findOrFail($id);
        $estados = Estado::where('activo','=',1)->get();
        $domiciliosProveedores=DomicilioProveedor::where([['proveedor_id',$proveedor->id],['activo',1]])->get();
        return view('recursos_humanos.domicilios_proveedores.index',[
            'proveedor'=>$proveedor,
            'domiciliosProveedores'=>$domiciliosProveedores,
            'estados'=>$estados
        ]);
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
        $domicilio=DomicilioProveedor::findOrFail($id);
        $proveedor=Proveedor::where('id','=',$domicilio->proveedor_id)->first();
        $estados = Estado::where('activo','=',1)->get();
        return view('recursos_humanos.domicilios_proveedores.edit',[
            'domicilio'=>$domicilio,
            'proveedor'=>$proveedor,
            'estados'=>$estados
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DomicilioProveedorRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $domicilio=DomicilioProveedor::findOrFail($id);
        $domicilio->update($request->validated());
        return redirect()->route('rh.proveedores.index')->with('mensaje','Se ha actualizado el domicilio del proveedor');
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
       $domicilio=DomicilioProveedor::findOrFail($id);
       $domicilio->activo=0;
       $domicilio->update();
       return redirect()->route('rh.proveedores.index')->with('mensaje','Se ha eliminado el domicilio del proveedor');
    }
}
