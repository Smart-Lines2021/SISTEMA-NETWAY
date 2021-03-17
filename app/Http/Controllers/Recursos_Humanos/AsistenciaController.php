<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Admin\Persona;
use App\Http\Controllers\Controller;
use App\Http\Requests\Recursos_Humanos\AsistenciaRequest;
use App\Recursos_Humanos\Asistencia;
use App\Recursos_Humanos\Horario;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Consulta desde el buscador
        $consulta=$request->consulta;
        //Obtener fecha actual
        $fecha=date('Y-m-d');
        $registroEmpleados=array();
        $empleados=Persona::where('activo','=',1)->orderBy('apellido','desc')->get();
        $horarios=Horario::where('activo','=',1)->get();
        $verificaAsistencias=Asistencia::where('activo','=',1)->where('fecha','=',$fecha)->get();
        $asistencias=filtroAsistencias($consulta,$fecha);
        $empleados= verificaAsistencias($verificaAsistencias,$empleados,$fecha,$registroEmpleados);
         return view('recursos_humanos.asistencias.index',[
            'empleados'=>$empleados,
            'horarios'=>$horarios,
            'asistencias'=>$asistencias,
            'consulta'=>$consulta]);
        }

    public function store(AsistenciaRequest $request)
    {
        $asistencia=Asistencia::create($request->validated());
        return back()->with('mensaje','Se ha registrado la asistencia del empleado');

    }
    public function edit($id)
    {
        $id=Crypt::decryptString($id);
        $asistencia=Asistencia::findOrFail($id);
        $empleados=Persona::where('activo','=',1)->orderBy('apellido','desc')->get();
        $horarios=Horario::where('activo','=',1)->get();
        return view('recursos_humanos.asistencias.edit',[
            'asistencia'=>$asistencia,
            'empleados'=>$empleados,
            'horarios'=>$horarios]);
    }

    public function update(AsistenciaRequest $request, $id)
    {
        $id =Crypt::decryptString($id);
        $asistencia=Asistencia::findOrFail($id);
        $asistencia->update($request->validated());
        return redirect()->route('rh.asistencias.index')->with('mensaje','Se ha actualizado la asistencia de '.$asistencia->persona->nombre.' '.$asistencia->persona->apellido);
    }
    public function destroy($id)
    {
        $id =Crypt::decryptString($id);
        $asistencia=Asistencia::findOrFail($id);
        $asistencia->delete();
        return back()->with('mensaje','Se ha eliminado la asistencia de '.$asistencia->persona->nombre.' '.$asistencia->persona->apellido);
    }
}
