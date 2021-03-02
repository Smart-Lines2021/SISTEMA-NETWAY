<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use App\Recursos_Humanos\Factura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Factura::where('activo','=',1)->get();
        return view('recursos_humanos.facturas.index',[
            'facturas'=>$facturas]);
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
    public function store(Request $request)
    {
        $factura = new Factura();//Creamos una nueva factura en la base de datos
        //Almacenamos nuestra factura en el servidor
        $rutaFactura=$request->file('ruta_factura')->store('public\Facturas');
        //Almacenamos la ruta en la base de datos y obtenemos la id de nuestra nueva factura
        $factura->url=$rutaFactura;
        $factura->save();
        $idFactura=$factura->id;
        //Obtenemos la ruta donde se almaceno y le concatenamos app
        $url=storage_path('app/'.$rutaFactura);
        //Cambiamos todas las diagonales para que ninguna este incorrecta
        $urlFactura = str_replace('/', '\\', $url);
        //Mandamos todos los objetos
        cargarXml($urlFactura,$idFactura);
        return back()->with('mensaje','Se ha guardado una nueva factura');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
