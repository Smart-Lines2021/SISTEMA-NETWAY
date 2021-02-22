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
    public function __construct(){
      $this->middleware('auth');
  }
    public function index()
    {
         //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('view',new Producto);
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
       //Aplicamos Politica de Acceso al metodo correspondiente
       $this->authorize('create',new Producto);
       $marcas=Marca::where('activo','=',1)->where('categoria','!=','Vehiculos')->get();
       $categoriasProductos=CategoriaProducto::where('activo','=',1)->get();
       $tiposProductos=TipoProducto::where('activo','=',1)->get();
       return view('recursos_humanos.productos.create',[
        'marcas'=>$marcas,
        'categoriasProductos'=>$categoriasProductos,
        'tiposProductos'=>$tiposProductos
    ]);
    }
    public function store(ProductoRequest $request)
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new Producto);
        Producto::create($request->validated());
        return redirect()->route('rh.productos.index')->with('mensaje','Se ha registrado un producto');
    }
    public function edit($id)
    {
        $id=Crypt::decryptString($id);
        $marcas=Marca::where('activo','=',1)->where('categoria','!=','Vehiculos')->get();
        $categoriasProductos=CategoriaProducto::where('activo','=',1)->get();
        $tiposProductos=TipoProducto::where('activo','=',1)->get();
        $producto=Producto::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$producto);
        return view('recursos_humanos.productos.edit',[
            'producto'=>$producto,
            'marcas'=>$marcas,
            'categoriasProductos'=>$categoriasProductos,
            'tiposProductos'=>$tiposProductos
          ]);
    }

    public function update(ProductoRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $producto=Producto::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$producto);
        $producto->update($request->validated());
        return redirect()->route('rh.productos.index')->with('mensaje','Se ha actualizado el producto');
    }
    public function destroy($id)
    {
       $id=Crypt::decryptString($id);
       $producto=Producto::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
       $this->authorize('delete',$producto);
       $producto->activo=0;
       $producto->update();
       return redirect()->route('rh.productos.index')->with('mensaje','Se ha eliminado el producto');
    }
}
