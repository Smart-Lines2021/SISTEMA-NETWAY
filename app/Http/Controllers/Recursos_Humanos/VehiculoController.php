<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Admin\Color;
use App\Recursos_Humanos\Vehiculo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Marca;
use App\Admin\TipoVehiculo;
use App\Http\Requests\Admin\VehiculoRequest;
use Illuminate\Support\Facades\Crypt;


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
    public function store(VehiculoRequest $request)
    {
        $vehiculo=Vehiculo::create($request->validated());
        if ($request->hasFile('foto_vehiculo')) {
        $vehiculo->foto_vehiculo=$request->file('foto_vehiculo')->store('public');//Guarda la imagen en la carpeta storage/app/public, y el link o ubicacion de la imagen se guarda a foto_vehiculo y a su vez se guarda en la variable $persona
    }
        $vehiculo->save();//Se guradan los datos en la BD.
        return redirect()->route('rh.vehiculos.index')->with('mensaje','Se ha registrado un vehículo');
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
        $vehiculo=Vehiculo::findOrFail($id);
        return view('flotillas.vehiculos.edit',[
            'vehiculo'=>$vehiculo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehiculoRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $vehiculo=Vehiculo::findOrFail($id);
        $vehiculo->update($request->validated());
        return redirect()->route('rh.vehiculos.index')->with('mensaje','Se ha actualizado el vehículo');
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
       $vehiculo=Vehiculo::findOrFail($id);
       $vehiculo->activo=0;
       $vehiculo->update();
       return redirect()->route('rh.vehiculos.index')->with('mensaje','Se ha eliminado el vehículo');
    }
}
