<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Admin\Persona;
use App\Http\Controllers\Controller;
use App\Http\Requests\Recursos_Humanos\AsistenciaRequest;
use App\Recursos_Humanos\Asistencia;
use App\Recursos_Humanos\Horario;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencias=Asistencia::where('activo','=',1)->get();
        $horarios=Horario::where('activo','=',1)->get();
        $personas=Persona::where('activo','=',1)->get();
        $cantidadEmpleados= sizeof($personas); //Contamos la cantidad de empleados
        $empleados=Persona::where('activo','=',1)->orderBy('apellido','desc')->paginate($cantidadEmpleados);
        return view('recursos_humanos.asistencias.index',[
            'empleados'=>$empleados,
            'horarios'=>$horarios,
            'asistencias'=>$asistencias]);
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
    public function store(AsistenciaRequest $request)
    {
  /*      $persona=$_POST['persona'];
        $horario=$_POST['horario'];
        $estado=$_POST['estado'];
        $fecha=$_POST['fecha'];
        $asistencia= new Asistencia();
        $asistencia->persona_id=$persona;
        $asistencia->horario_id=$horario;
        $asistencia->estado=$estado;
        $asistencia->fecha=$fecha;
        $asistencia->save();*/
        $asistencia=Asistencia::create($request->validated());
        return back()->with('mensaje','Se ha registrado la asistencia del empleado');

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
