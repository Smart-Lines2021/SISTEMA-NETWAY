<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RolRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index',[
            'roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role=new Role;
        $permisosControlUsuarios=Permission::where('category', 'Control de Usuarios')->pluck('name','id'); //Clasificamos los permisos
        return view('admin.roles.create',[
            'permisosControlUsuarios'=>$permisosControlUsuarios,
            'role'=>$role]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolRequest $request)
    {
        $rol=Role::create($request->validated());
        if ($request->has('permissions')) {
           $rol->givePermissionTo($request->permissions);
       }
       return redirect()->route('admin.roles.index')->with('mensaje','Se ha registrado un nuevo rol');
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
         $role=Role::findOrFail($id);
         $permisosControlUsuarios=Permission::where('category', 'Control de Usuarios')->pluck('name','id'); //Clasificamos los permisos
         return view('admin.roles.edit',[
            'role'=>$role,
            'permisosControlUsuarios'=>$permisosControlUsuarios]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RolRequest $request, Role $role)
    {
        $role->update($request->validated());
        $role->permissions()->detach();
        if ($request->has('permissions')) {
           $role->givePermissionTo($request->permissions);
       }
       return back()->with('mensaje','El rol fue actualizado correctamente');
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
       $rol=Role::findOrFail($id);
       $rol->delete();
       return back()->with('mensaje','Se ha eliminado el rol');
   }
}
