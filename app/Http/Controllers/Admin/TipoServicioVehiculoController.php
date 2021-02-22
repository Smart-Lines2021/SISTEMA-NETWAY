<?php

namespace App\Http\Controllers\Admin;

use App\Admin\TipoServicioVehiculo;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TipoServicioVehiculoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TipoServicioVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos_servicios_vehiculos=TipoServicioVehiculo::where('activo','=',1)->get();
        return view('admin.tipos_servicios_vehiculos.index',[
            'tipos_servicios_vehiculos'=>$tipos_servicios_vehiculos]);
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
    public function store(TipoServicioVehiculoRequest $request)
    {
        $tipo_servicio_vehiculo=TipoServicioVehiculo::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo tipo de servicio de vehiculo');
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
    public function update(TipoServicioVehiculoRequest $request, $id)
    {
        $id= Crypt::decryptString($id);
        $tipo_servicio_vehiculo=TipoServicioVehiculo::findOrFail($id);
        $tipo_servicio_vehiculo->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el tipo de servicio del vehiculo');
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
       $tipo_servicio_vehiculo=TipoServicioVehiculo::findOrFail($id);
       $tipo_servicio_vehiculo->activo=0;
       $tipo_servicio_vehiculo->update();
       return back()->with('mensaje','Se ha eliminado el tipo de servicio del vehiculo');
    }
}
