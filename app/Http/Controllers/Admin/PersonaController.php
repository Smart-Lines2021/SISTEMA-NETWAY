<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Cargo;
use App\Admin\Departamento;
use App\Admin\DomicilioPersona;
use App\Admin\Estado;
use App\Admin\Persona;
use App\Http\Controllers\Controller;
use App\Http\Requests\Recursos_Humanos\EmpleadoRequest;
use App\Recursos_Humanos\InformacionLaboral;
use Illuminate\Http\Request;

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
    public function store(EmpleadoRequest $request)
    {
    $persona=Persona::create($request->validated());
    //En caso de ser necesario se agrega la foto del usuario
    if ($request->hasFile('foto_perfil')) {
        $persona->foto_perfil=$request->file('foto_perfil')->store('public/Empleados/'.$persona->curp."/");
    }
    $idPersona=$persona->id;
    //Validamos el domicilio
     $domicilio = request()->validate([
        'calle'=> 'required|regex:/^[\pL\s]+$/u|max:40',
        'codigo_postal'=> 'required|numeric|max:100000',
        'colonia'=> 'required|regex:/^[\pL\s]+$/u|max:40',
        'numero_interior'=> 'required|numeric|max:100000',
        'numero_exterior'=> 'required|numeric|max:100000',
        'estado'=> 'required|regex:/^[\pL\s]+$/u|max:40',
        'municipio'=> 'required|regex:/^[\pL\s]+$/u|max:40',
    ],[
        'calle.required'=>'Es obligatorio ingresar la caller del domicilio',
        'calle.regex'=>'El nombre de la calle solo puede incluir letras',
        'calle.max'=>'El nombre de la calle no debe exceder a 40 caracteres',
        'codigo_postal.numeric'=>'El codigo postal debe ser numerico',
        'codigo_postal.required'=>'Es necesario ingresar el codigo postal',
        'codigo_postal.max'=>'El codigo postal no debe exceder 5 caracteres',
        'colonia.required'=>'Es necesario ingresar el nombre de la colonia',
        'colonia.regex'=>'El nombre de la colonia debe contener solamente letras',
        'colonia.max'=>'El nombre de la colonia debe ser menor a 40 caracteres',
        'numero_interior.required'=>'Es necesario ingresar el número interior',
        'numero_interior.numeric'=>'El número interior debe ser de tipo numerico',
        'numero_interior.max'=>'El número interior debe contener menos de 5 caracteres',
        'numero_exterior.required'=>'Es necesario ingresar el número exterior',
        'numero_exterior.numeric'=>'El número exterior debe ser de tipo numerico',
        'numero_exterior.max'=>'El número exterior debe contener menos de 5 caracteres',
        'estado.required'=>'Es necesario ingresar el nombre del estado',
        'estado.regex'=>'El nombre del estado debe contener solamente letras',
        'estado.max'=>'El nombre del estado debe ser menor a 40 caracteres',
        'municipio.required'=>'Es necesario ingresar el nombre del municipio',
        'municipio.regex'=>'El nombre del municipio debe contener solamente letras',
        'municipio.max'=>'El nombre del municipio debe ser menor a 40 caracteres',
    ]);
   $domicilio += [ "persona_id" => $idPersona]; //Asignamos la Id de la Persona
    //Lo guardamos validado
    DomicilioPersona::create($domicilio);

    //Validamos la Información Laboral
    $informacionLaboral = request()->validate([
        'departamento_id' => 'required|integer',
        'cargo_id' => 'required|integer',
        'salario' => 'required|numeric',
        'fecha_ingreso' => 'required|date',
    ],[
        'departamento_id.required'=>'Es obligatorio seleccionar un departamento',
        'cargo_id.required'=>'Es obligatorio seleccionar un cargo',
        'salario.required'=>'Es obligatorio ingresar el salario del empleado',
        'salario.numeric'=>'El salario debe tener un valor numerico',
        'fecha_ingreso.required'=>'Es necesario seleccionar la fecha de ingreso',
        'fecha_ingreso'=>'La fecha de ingreso debe de ser una fecha valida',
    ]);
     $informacionLaboral += ["persona_id" => $idPersona];
     //Lo guardamos validado
    InformacionLaboral::create($informacionLaboral);
     return back()->with('mensaje','Se ha registrado un nuevo empleado');
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
