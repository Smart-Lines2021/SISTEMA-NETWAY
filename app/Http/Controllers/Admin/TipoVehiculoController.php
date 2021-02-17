<?php

namespace App\Http\Controllers\Admin;

use App\Admin\TipoVehiculo;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TipoVehiculoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TipoVehiculoController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }
    public function index()
    {
      //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('view',new TipoVehiculo);
        $tipoVehiculos=TipoVehiculo::where('activo','=',1)->get();
        return view('admin.tipo_vehiculos.index',[
            'tipoVehiculos'=>$tipoVehiculos]);
    }
    public function store(TipoVehiculoRequest $request)
    {
      //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new TipoVehiculo);
        $tipoVehiculo=TipoVehiculo::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo tipo de vehiculo');
    }

    public function update(TipoVehiculoRequest $request, $id)
    {
        $id= Crypt::decryptString($id);
        $tipoVehiculo=TipoVehiculo::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$tipoVehiculo);
        $tipoVehiculo->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el tipo de vehiculo');
    }
    public function destroy($id)
    {
       $id= Crypt::decryptString($id);
       $tipoVehiculo=TipoVehiculo::findOrFail($id);
       //Aplicamos Politica de Acceso al metodo correspondiente
       $this->authorize('delete',$tipoVehiculo);
       $tipoVehiculo->activo=0;
       $tipoVehiculo->update();
       return back()->with('mensaje','Se ha eliminado el tipo de vehiculo');
   }
}
