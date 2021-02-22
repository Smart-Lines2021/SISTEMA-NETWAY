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
    public function __construct(){
      $this->middleware('auth');
  }
  public function index()
  {
    //Aplicamos Politica de Acceso al metodo correspondiente
    $this->authorize('view',new TipoServicioVehiculo);
    $tipos_servicios_vehiculos=TipoServicioVehiculo::where('activo','=',1)->get();
    return view('admin.tipos_servicios_vehiculos.index',[
        'tipos_servicios_vehiculos'=>$tipos_servicios_vehiculos]);
}
    public function store(TipoServicioVehiculoRequest $request)
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new TipoServicioVehiculo);
        $tipo_servicio_vehiculo=TipoServicioVehiculo::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo tipo de servicio de vehiculo');
    }
    public function update(TipoServicioVehiculoRequest $request, $id)
    {
        $id= Crypt::decryptString($id);
        $tipo_servicio_vehiculo=TipoServicioVehiculo::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$tipo_servicio_vehiculo);
        $tipo_servicio_vehiculo->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el tipo de servicio del vehiculo');
    }

    public function destroy($id)
    {
     $id= Crypt::decryptString($id);
     $tipo_servicio_vehiculo=TipoServicioVehiculo::findOrFail($id);
     //Aplicamos Politica de Acceso al metodo correspondiente
     $this->authorize('delete',$tipo_servicio_vehiculo);
     $tipo_servicio_vehiculo->activo=0;
     $tipo_servicio_vehiculo->update();
     return back()->with('mensaje','Se ha eliminado el tipo de servicio del vehiculo');
 }
}
