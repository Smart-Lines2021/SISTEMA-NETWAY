<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Admin\Color;
use App\Recursos_Humanos\Vehiculo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Marca;
use App\Admin\TipoVehiculo;


class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $vehiculos = Vehiculo::where('activo','=',1)->get();
        return view('flotillas.vehiculos.index',
        compact('vehiculos'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::where('categoria', '=','Vehiculos')->where('activo','=',1)->get();
        $tipos_vehiculos = TipoVehiculo::where('activo','=',1)->get();
        $colores = Color::get();
        return view('flotillas.vehiculos.create', compact('marcas','colores', 'tipos_vehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
