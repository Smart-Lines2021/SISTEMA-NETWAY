<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\User;
use Illuminate\Http\Request;
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
        return view('admin.usuarios.create',[
            'usuario'=>$usuario,
            'roles'=>$roles,
            'permisosControlUsuarios'=>$permisosControlUsuarios]);
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
        return view('admin.usuarios.edit',[
            'usuario'=>$usuario,
            'roles'=>$roles,
            'permisosControlUsuarios'=>$permisosControlUsuarios]);
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
