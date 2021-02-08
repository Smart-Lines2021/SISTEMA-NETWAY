<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admin\CategoriaProducto;
use App\Http\Requests\Admin\CategoriaProductoRequest;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class CategoriaProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriasProductos=CategoriaProducto::where('activo','=',1)->get();
        return view('admin.categorias_productos.index',[
            'categoriasProductos'=>$categoriasProductos]);
    }

    public function store(CategoriaProductoRequest $request)
    {
        $categoriaProducto=CategoriaProducto::create($request->validated());
        return back()->with('mensaje','Se ha añadido una nueva categoría');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaProductoRequest $request, $id)
    {
        $id= Crypt::decryptString($id);
        $categoriaProducto=CategoriaProducto::findOrFail($id);
        $categoriaProducto->update($request->validated());
        return back()->with('mensaje','Se ha actualizado la categoría del producto');
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
        $categoriaProducto=CategoriaProducto::findOrFail($id);
        $categoriaProducto->activo=0;
        $categoriaProducto->update();
        return back()->with('mensaje','Se ha eliminado la categoría del producto');
    }
}
