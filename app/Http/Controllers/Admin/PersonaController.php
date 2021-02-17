<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Cargo;
use App\Admin\Departamento;
use App\Admin\DomicilioPersona;
use App\Admin\Estado;
use App\Admin\Persona;
use App\Http\Controllers\Controller;
use App\Http\Requests\Recursos_Humanos\DomicilioPersonaRequest;
use App\Http\Requests\Recursos_Humanos\EmpleadoRequest;
use App\Http\Requests\Recursos_Humanos\InformacionLaboralRequest;
use App\Recursos_Humanos\InformacionLaboral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Persona::where('activo','=',1)->get();
        return view('recursos_humanos.empleados.index',[
            'empleados'=>$empleados]);
    }
    public function show($id)
    {
        $id=Crypt::decryptString($id);
        $persona=Persona::findOrFail($id);
        $domicilio=$persona->domiciliosPersonas->last();
        $informacionLaboral=$persona->informacionesLaborales->last();
        return view('recursos_humanos.documentos.cargar_documentos',[
            'persona'=>$persona,
            'domicilio'=>$domicilio,
            'informacionLaboral'=>$informacionLaboral]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::where('activo','=',1)->get();
        $departamentos = Departamento::where('activo','=',1)->get();
        $cargos = Cargo::where('activo','=',1)->get();
        return view('recursos_humanos.empleados.create'
            ,[
                'estados'=>$estados,
                'departamentos' => $departamentos,
                'cargos' => $cargos
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadoRequest $request, DomicilioPersonaRequest $domicilioRequest, InformacionLaboralRequest $informacionLaboralRequest)
    {
        $persona=Persona::create($request->validated());
    //En caso de ser necesario se agrega la foto del usuario
        if ($request->hasFile('foto_perfil')) {
            $persona->foto_perfil=$request->file('foto_perfil')->store('public/Empleados/'.$persona->curp."/");
        }
    $persona->save();//Guardamos nuevamente la persona si se cumplio lo anterior
    $idPersona=$persona->id;
    $domicilioRequestValidado=$domicilioRequest->validated();
    $informacionLaboralRequestValidado=$informacionLaboralRequest->validated();
    $domicilioRequestValidado += ["persona_id" => $idPersona];
    $informacionLaboralRequestValidado += ["persona_id" => $idPersona];
    DomicilioPersona::create($domicilioRequestValidado);
    InformacionLaboral::create($informacionLaboralRequestValidado);
    return back()->with('mensaje','Se ha registrado un nuevo empleado');
}
    public function edit($id)
    {
        $id = Crypt::decryptString($id);
        $persona=Persona::findOrFail($id);
        $domicilio=$persona->domiciliosPersonas->last();
        $informacionLaboral=$persona->informacionesLaborales->last();
        $estados = Estado::where('activo','=',1)->get();
        $departamentos = Departamento::where('activo','=',1)->get();
        $cargos = Cargo::where('activo','=',1)->get();
        return view('recursos_humanos.empleados.edit',[
            'persona'=>$persona,
            'domicilio'=>$domicilio,
            'informacionLaboral'=>$informacionLaboral,
            'estados'=>$estados,
            'cargos'=>$cargos,
            'departamentos'=>$departamentos]);
    }
    public function update(EmpleadoRequest $request, DomicilioPersonaRequest $domicilioRequest, InformacionLaboralRequest $informacionLaboralRequest, $id){
        $persona=Persona::findOrFail($id);
        if ($request->hasFile('foto_perfil')) {
        Storage::delete($persona->foto_perfil);
        $persona->foto_perfil=$request->file('foto_perfil')->store('public/Empleados/'.$persona->curp."/");
    }
        $persona->update($request->validated());
        $domicilio=DomicilioPersona::where('persona_id','=',$persona->id)->get()->last();
        $informacionLaboral=InformacionLaboral::where('persona_id','=',$persona->id)->get()->last();
        $domicilio->update($domicilioRequest->validated());
        $informacionLaboral->update($informacionLaboralRequest->validated());
        return back()->with('mensaje','Se actualizo la información del empleado');
    }
    public function destroy($id)
    {
        $id=Crypt::decryptString($id);
        $persona=Persona::findOrFail($id);
        $persona->activo=0;
        $persona->update();
        return back()->with('mensaje','Se ha eliminado al empleado');
    }
}
