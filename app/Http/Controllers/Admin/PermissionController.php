<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PermisoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos=Permission::all();
        return view('admin.permisos.index',[
            'permisos'=>$permisos]);
    }
    public function store(PermisoRequest $request)
    {
        $permiso=Permission::create($request->validated());
        return back()->with('mensaje','Se ha agregado un nuevo permiso');
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

    public function update(PermisoRequest $request, Permission $permiso)
    {
        $permiso->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el permiso correctamente');
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
        $permiso=Permission::findOrFail($id);
        $permiso->delete();
        return back()->with('mensaje','Se ha eliminado el permiso');
    }
}
