<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recursos_Humanos\RazonPermisoRequest;
use App\Recursos_Humanos\RazonPermiso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RazonPermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $razonesPermisos=RazonPermiso::where('activo','=',1)->get();
        return view('recursos_humanos.razones_permisos.index',[
            'razonesPermisos'=>$razonesPermisos]);
    }
    public function store(RazonPermisoRequest $request)
    {
        $razonPermiso=RazonPermiso::create($request->validated());
        return back()->with('mensaje','Se ha insertado una nueva razón para extender permisos');
    }

    public function update(RazonPermisoRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $razonPermiso=RazonPermiso::findOrFail($id);
        $razonPermiso->update($request->validated());
        return back()->with('mensaje','Se ha actualizado la razón del permiso');

    }
    public function destroy($id)
    {
        $id=Crypt::decryptString($id);
        $razonPermiso=RazonPermiso::findOrFail($id);
        $razonPermiso->activo=0;
        $razonPermiso->update();
        return back()->with('mensaje','Se ha eliminado la razón del permiso');
    }
}
