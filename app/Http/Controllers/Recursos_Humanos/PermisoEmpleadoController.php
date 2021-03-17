<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recursos_Humanos\PermisoEmpleadoRequest;
use App\Recursos_Humanos\Asistencia;
use App\Recursos_Humanos\PermisoEmpleado;
use App\Recursos_Humanos\RazonPermiso;
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
