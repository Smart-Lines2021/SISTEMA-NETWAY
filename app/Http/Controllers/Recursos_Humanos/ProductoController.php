<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use App\Recursos_Humanos\Producto;
use Illuminate\Http\Request;
use App\Admin\Marca;
use App\Admin\CategoriaProducto;
use App\Admin\TipoProducto;
use App\Http\Requests\Admin\ProductoRequest;
use Illuminate\Support\Facades\Crypt;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Producto::where('activo','=',1)->get();
        return view('recursos_humanos.productos.index',[
            'productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $marcas=Marca::where('activo','=',1)->where('categoria','!=','Vehiculos')->get();
       $categoriasProductos=CategoriaProducto::where('activo','=',1)->get();
       $tiposProductos=TipoProducto::where('activo','=',1)->get();
       return view('recursos_humanos.productos.create',[
        'marcas'=>$marcas,
        'categoriasProductos'=>$categoriasProductos,
        'tiposProductos'=>$tiposProductos
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequest $request)
    {
        Producto::create($request->validated());
        return redirect()->route('rh.productos.index')->with('mensaje','Se ha registrado un producto');
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
        $producto=Producto::findOrFail($id);
        return view('recursos_humanos.productos.edit',[
            'producto'=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $producto=Producto::findOrFail($id);
        $producto->update($request->validated());
        return redirect()->route('rh.productos.index')->with('mensaje','Se ha actualizado el producto');
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
       $producto=Producto::findOrFail($id);
       $producto->activo=0;
       $producto->update();
       return redirect()->route('rh.productos.index')->with('mensaje','Se ha eliminado el producto');
    }
}
