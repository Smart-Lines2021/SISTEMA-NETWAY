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
      public function __construct(){
          $this->middleware('auth');
      }
      public function store(DomicilioProveedorRequest $request)
      {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('view',new DomicilioProveedor);
        DomicilioProveedor::create($request->validated());
        return redirect()->route('rh.proveedores.index')->with('mensaje','Se ha registrado el domicilio del proveedor');
    }
    public function show($id)
    {
        $id=Crypt::decryptString($id);
        $proveedor=Proveedor::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('view',$proveedor);
        $estados = Estado::where('activo','=',1)->get();
        $domiciliosProveedores=DomicilioProveedor::where([['proveedor_id',$proveedor->id],['activo',1]])->get();
        return view('recursos_humanos.domicilios_proveedores.index',[
            'proveedor'=>$proveedor,
            'domiciliosProveedores'=>$domiciliosProveedores,
            'estados'=>$estados
        ]);
    }
    public function edit($id)
    {
        $id=Crypt::decryptString($id);
        $domicilio=DomicilioProveedor::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$domicilio);
        $proveedor=Proveedor::where('id','=',$domicilio->proveedor_id)->first();
        $estados = Estado::where('activo','=',1)->get();
        return view('recursos_humanos.domicilios_proveedores.edit',[
            'domicilio'=>$domicilio,
            'proveedor'=>$proveedor,
            'estados'=>$estados
        ]);
    }

    public function update(DomicilioProveedorRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $domicilio=DomicilioProveedor::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$domicilio);
        $domicilio->update($request->validated());
        return redirect()->route('rh.proveedores.index')->with('mensaje','Se ha actualizado el domicilio del proveedor');
    }

    public function destroy($id)
    {
       $id=Crypt::decryptString($id);
       $domicilio=DomicilioProveedor::findOrFail($id);
    //Aplicamos Politica de Acceso al metodo correspondiente
       $this->authorize('delete',$domicilio);
       $domicilio->activo=0;
       $domicilio->update();
       return redirect()->route('rh.proveedores.index')->with('mensaje','Se ha eliminado el domicilio del proveedor');
   }
}
