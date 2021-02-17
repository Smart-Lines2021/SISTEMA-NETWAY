<?php

namespace App\Http\Controllers\Admin;

use App\Admin\TipoProducto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TipoProductoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TipoProductoController extends Controller
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
        $this->authorize('view',new TipoProducto);
        $tipoProductos=TipoProducto::where('activo','=',1)->get();
        return view('admin.tipo_productos.index',[
            'tipoProductos'=>$tipoProductos]);
    }
    public function store(TipoProductoRequest $request)
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new TipoProducto);
        $tipoProducto=TipoProducto::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo tipo de producto');
    }
    public function update(TipoProductoRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $tipoProducto=TipoProducto::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$tipoProducto);
        $tipoProducto->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el tipo de producto');
    }
    public function destroy($id)
    {
        $id=Crypt::decryptString($id);
        $tipoProducto=TipoProducto::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('delete',$tipoProducto);
        $tipoProducto->activo=0;
        $tipoProducto->update();
        return back()->with('mensaje','Se ha eliminado el tipo de producto');
    }
}
