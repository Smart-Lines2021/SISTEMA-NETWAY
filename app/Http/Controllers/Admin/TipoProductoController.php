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
    public function index()
    {
        $tipoProductos=TipoProducto::where('activo','=',1)->get();
        return view('admin.tipo_productos.index',[
            'tipoProductos'=>$tipoProductos]);
    }
    public function store(TipoProductoRequest $request)
    {
        $tipoProducto=TipoProducto::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo tipo de producto');
    }
    public function update(TipoProductoRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $tipoProducto=TipoProducto::findOrFail($id);
        $tipoProducto->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el tipo de producto');
    }
    public function destroy($id)
    {
        $id=Crypt::decryptString($id);
        $tipoProducto=TipoProducto::findOrFail($id);
        $tipoProducto->activo=0;
        $tipoProducto->update();
        return back()->with('mensaje','Se ha eliminado el tipo de producto');
    }
}
