<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Admin\Aseguradora;
use App\Admin\Color;
use App\Admin\Marca;
use App\Admin\TipoVehiculo;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VehiculoRequest;

use App\Recursos_Humanos\Vehiculo;
use App\Recursos_Humanos\PolizaVehiculo;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;


class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $vehiculos = Vehiculo::where('activo', '=', 1)->get();
        return view(
            'flotillas.vehiculos.index',
            compact('vehiculos')
        );
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::where('categoria', '=', 'Vehiculos')->where('activo', '=', 1)->get();
        $tipos_vehiculos = TipoVehiculo::where('activo', '=', 1)->get();
        $colores = Color::get();
        $aseguradoras = Aseguradora::get();
        return view(
            'flotillas.vehiculos.create',
            compact('marcas', 'colores', 'tipos_vehiculos', 'aseguradoras')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculoRequest $request)
    {


        try {
            DB::beginTransaction();
            $vehiculo = Vehiculo::create($request->validated());
            if ($request->hasFile('foto_vehiculo')) {
                $vehiculo->foto_vehiculo = $request->file('foto_vehiculo')->store('public/vehiculos/' . $vehiculo->placa . "/"); //Guarda la imagen en la carpeta storage/app/public, y el link o ubicacion de la imagen se guarda a foto_vehiculo y a su vez se guarda en la variable $persona
            }
            $vehiculo->save(); //Se guradan los datos en la BD.

            $poliza = new PolizaVehiculo;
            $poliza->vehiculo_id = $vehiculo->id;
            $poliza->aseguradora_id = $request->aseguradora_id;
            $poliza->poliza = $request->poliza;
            $poliza->inicio_poliza = $request->inicio_poliza;
            $poliza->vigencia_poliza = $request->vigencia_poliza;
            $poliza->save(); //Se guradan los datos en la BD.
            DB::commit();
            return redirect()->route('rh.vehiculos.index')->with('mensaje', 'Se ha registrado un vehículo');
        } catch (ModelNotFoundException $e) {
            DB::rollBack();
            return redirect()->route('rh.vehiculos.index')->with('mensaje', 'Hubo un error al intentar hacer el registro');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Crypt::decryptString($id);
        $vehiculo = Vehiculo::findOrFail($id);
        $aseguradoras = Aseguradora::get();
       
        return view('flotillas.vehiculos.vista_detalle', [
            'vehiculo' => $vehiculo, 'aseguradoras'=> $aseguradoras
        ]);
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
        $vehiculo = Vehiculo::findOrFail($id);
        return view('flotillas.vehiculos.edit', [
            'vehiculo' => $vehiculo
        ]);
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
        $id = Crypt::decryptString($id);
        $vehiculo = Vehiculo::findOrFail($id);
        if ($request->hasFile('foto_vehiculo')) {
            Storage::delete($vehiculo->foto_vehiculo);
            $vehiculo->foto_vehiculo = $request->file('foto_vehiculo')->store('public/vehiculos/' . $vehiculo->placa . "/"); //Guarda la imagen en la carpeta storage/app/public, y el link o ubicacion de la imagen se guarda a foto_vehiculo y a su vez se guarda en la variable $persona
        }
        $vehiculo->update($request->validated());
        return redirect()->route('rh.vehiculos.index')->with('mensaje', 'Se ha actualizado el vehículo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Crypt::decryptString($id);
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->activo = 0;
        $vehiculo->update();
        return redirect()->route('rh.vehiculos.index')->with('mensaje', 'Se ha eliminado el vehículo');
    }
}
