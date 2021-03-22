<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Flotillas\ServicioVehiculoRequest;
use App\Recursos_Humanos\ServicioVehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ServicioVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Servicio Vehiculo";
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
    public function store(ServicioVehiculoRequest $request)
    {
        $servicioVehiculo=ServicioVehiculo::make($request->validated());
        $servicioVehiculo->vehiculo_id=Crypt::decryptString($request->vehiculo_id);
        $servicioVehiculo->save();
        return back()->with('mensaje','Se ha programado un nuevo servicio al vehiculo actual');
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
    public function update(ServicioVehiculoRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $vehiculo_id=Crypt::decryptString($request->vehiculo_id);
        $servicio=ServicioVehiculo::findOrFail($id);
        $servicio->update($request->validated());
        $servicio->vehiculo_id=$vehiculo_id;
        $servicio->save();
        return back()->with('mensaje','Se ha actualizado el mantenimiento del vehiculo');
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
       $servicio=ServicioVehiculo::findOrFail($id);
       $servicio->delete();
       return back()->with('mensaje','Se ha eliminado el servicio');
   }
}
