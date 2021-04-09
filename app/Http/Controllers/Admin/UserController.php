<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\User;
use App\Admin\Persona;
use Illuminate\Http\Request;
use App\Admin\PersonaUsuario;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth',['except'=>['newPassword','showPassForm','storeSolicitante','showRedirect']]);
    }
    public function index()
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('view',new User);
        $usuarios = User::where('activo','=',1)->get();
        return view('admin.usuarios.index',[
            'usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario=new User;
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create', $usuario);
        $roles=Role::pluck('name','id');
        $permisosControlUsuarios=Permission::where('category', 'Control de Usuarios')->pluck('name','id'); //Clasificamos los permisos
        $permisosRecursosHumanos=Permission::where('category', 'Recursos Humanos')->pluck('name','id'); //Clasificamos los permisos
        $permisosUbicacionesGeograficas=Permission::where('category', 'Ubicación Geográfica')->pluck('name','id'); //Clasificamos los permisos
        $permisosProductos=Permission::where('category', 'Productos')->pluck('name','id'); //Clasificamos los permisos
        $permisosProveedoresVehiculos=Permission::where('category', 'Proveedores y Vehiculos')->pluck('name','id'); //Clasificamos los permisos
        $permisosGastos=Permission::where('category', 'Gastos e Información Bancaria')->pluck('name','id'); //Clasificamos los permisos
        $personas=Persona::where('activo','=',1)->where('cuenta','=','Sin Asignar')->get();
        return view('admin.usuarios.create',[
            'usuario'=>$usuario,
            'roles'=>$roles,
            'permisosControlUsuarios'=>$permisosControlUsuarios,
            'permisosRecursosHumanos'=>$permisosRecursosHumanos,
            'permisosUbicacionesGeograficas'=>$permisosUbicacionesGeograficas,
            'permisosProductos'=>$permisosProductos,
            'permisosProveedoresVehiculos'=>$permisosProveedoresVehiculos,
            'permisosGastos'=>$permisosGastos,
            'personas'=>$personas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create', new User);
        $usuario = User::create($request->validated());
        //asignamos roles
        if ($request->filled('roles')) {
           $usuario->assignRole($request->roles);
       }
        //asignamos permisos
       if ($request->filled('permissions')) {
        $usuario->givePermissionTo($request->permissions);
    }
    //Asignamos la persona al usuario
    $persona = Persona::findOrFail($request->persona_id);
    $asignarUsuario=new PersonaUsuario();
    $asignarUsuario->persona_id=$persona->id;
    $asignarUsuario->user_id=$usuario->id;
    $asignarUsuario->save();
    //Cambiamos el estatus de la cuenta del usuario para ya no mostrarlo de opcion
    $persona->cuenta="Asignada";
    $persona->update();
    return redirect()->route('admin.usuarios.index')->with('mensaje','Se ha creado un nuevo usuario');
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
        $id= Crypt::decryptString($id);
        $usuario=User::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update', $usuario);
        $roles=Role::pluck('name','id');
        $permisosControlUsuarios=Permission::where('category', 'Control de Usuarios')->pluck('name','id'); //Clasificamos los permisos
        $permisosRecursosHumanos=Permission::where('category', 'Recursos Humanos')->pluck('name','id'); //Clasificamos los permisos
        $permisosUbicacionesGeograficas=Permission::where('category', 'Ubicación Geográfica')->pluck('name','id'); //Clasificamos los permisos
        $permisosProductos=Permission::where('category', 'Productos')->pluck('name','id'); //Clasificamos los permisos
        $permisosProveedoresVehiculos=Permission::where('category', 'Proveedores y Vehiculos')->pluck('name','id'); //Clasificamos los permisos
        $permisosGastos=Permission::where('category', 'Gastos e Información Bancaria')->pluck('name','id'); //Clasificamos los permisos
        $personas=Persona::where('activo','=',1)->get();
        return view('admin.usuarios.edit',[
            'usuario'=>$usuario,
            'roles'=>$roles,
            'permisosControlUsuarios'=>$permisosControlUsuarios,
            'permisosRecursosHumanos'=>$permisosRecursosHumanos,
            'permisosUbicacionesGeograficas'=>$permisosUbicacionesGeograficas,
            'permisosProductos'=>$permisosProductos,
            'permisosProveedoresVehiculos'=>$permisosProveedoresVehiculos,
            'permisosGastos'=>$permisosGastos,
            'personas'=>$personas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $usuario)
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update', $usuario);
        $usuario->update($request->validated());
         //Asignamos la persona al usuario
        $persona = Persona::findOrFail($request->persona_id);
        $asignarUsuario=new PersonaUsuario();
        $asignarUsuario->persona_id=$persona->id;
        $asignarUsuario->user_id=$usuario->id;
        $asignarUsuario->save();
         //Cambiamos el estatus de la cuenta del usuario para ya no mostrarlo de opcion
        $persona->cuenta="Asignada";
        $persona->update();
        return back()->with('mensaje','Se ha Actualizado el usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id= Crypt::decryptString($id);
        $usuario=User::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('delete', $usuario);
        $usuario->activo=0;
        $usuario->update();
        return back()->with('mensaje','Se ha eliminado al usuario');
    }
}
