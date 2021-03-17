<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recursos_Humanos\PermisoEmpleadoRequest;
use App\Recursos_Humanos\Asistencia;
use App\Recursos_Humanos\PermisoEmpleado;
use App\Recursos_Humanos\RazonPermiso;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class PermisoEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $consulta=$request->consulta;
        $asistencias=Asistencia::where('activo','=',1)->where('estado','=','ausente')->get(); //Mandamos listar los empleados ausentes, obtenemos la fecha y lo necesario
        $justificaciones = RazonPermiso::where('activo','=',1)->get();
        if (!isset($consulta)) { //Si no se hace ninguna consulta
              $permisosEmpleados=PermisoEmpleado::where('activo','=',1)->paginate(3);
        }else{
            $permisosEmpleados=PermisoEmpleado::where('activo','=',1)->paginate(4);
        }

        return view('recursos_humanos.permisos_empleados.index',[
            'asistencias'=>$asistencias,
            'justificaciones'=>$justificaciones,
            'permisosEmpleados'=>$permisosEmpleados,
            'consulta'=>$consulta]);
    }
    public function store(PermisoEmpleadoRequest $request)
    {
        $permisoEmpleado=PermisoEmpleado::create($request->validated());
        //Cambiamos el estado de la asistencia a Justificado
        $asistencia=Asistencia::findOrFail($permisoEmpleado->asistencia_id);
        $asistencia->estado='Justificado';
        $asistencia->update();
        return back()->with('mensaje','Se ha registrado un nuevo permiso');
    }
    public function edit($id)
    {
        $asistencias=Asistencia::where('activo','=',1)->where('estado','=','ausente')->get(); //Mandamos listar los empleados ausentes, obtenemos la fecha y lo necesario
        $justificaciones = RazonPermiso::where('activo','=',1)->get();
        $id=Crypt::decryptString($id);
        $permisoEmpleado=PermisoEmpleado::findOrFail($id);
        return view('recursos_humanos.permisos_empleados.edit',[
            'asistencias'=>$asistencias,
            'justificaciones'=>$justificaciones,
            'permisoEmpleado'=>$permisoEmpleado]);
    }

    public function update(PermisoEmpleadoRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $permisoEmpleado=PermisoEmpleado::findOrFail($id);
        $permisoEmpleado->update($request->validated());
        return redirect()->route('rh.permisos_empleados.index')->with('mensaje','Se ha actualizado el permiso del empleado '.$permisoEmpleado->persona->nombre.' '.$permisoEmpleado->persona->apellido);
    }

    public function destroy($id)
    {
        $id=Crypt::decryptString($id);
        $permisoEmpleado=PermisoEmpleado::findOrFail($id);
        $permisoEmpleado->delete();
        return back()->with('mensaje','Se ha eliminado el permiso del empleado '.$permisoEmpleado->persona->nombre.' '.$permisoEmpleado->persona->apellido);
    }
}
