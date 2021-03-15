<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\Flotillas\PolizaVehiculoDetalleRequest;
use App\Recursos_Humanos\PolizaVehiculo;


class PolizaVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Poliza de vehiculo";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PolizaVehiculoDetalleRequest $request)
    {
        $vehiculo_id = Crypt::decryptString($request->vehiculo_id);

        $poliza = PolizaVehiculo::create($request->validated());
        $poliza->vehiculo_id = $vehiculo_id;
        $poliza->save();

        return back()->with('mensaje', 'Se ha añadido una nueva aseguradora');
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
        $id = Crypt::decryptString($id);
        return $id;
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



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function storePorVistaDetalle(PolizaVehiculoDetalleRequest $request)
    {
        $vehiculo_id = Crypt::decryptString($request->vehiculo_id);
   

        $poliza = PolizaVehiculo::make($request->validated());
        $poliza->vehiculo_id = $vehiculo_id;
        $poliza->save();
        return back()->with('mensaje', 'Se ha añadido una nueva Poliza');


        
    }
}
