<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Departamento;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DepartamentoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos=Departamento::where('activo','=',1)->get();
        return view('admin.departamentos.index',[
            'departamentos'=>$departamentos]);
    }
    public function store(DepartamentoRequest $request)
    {
        $departamento=Departamento::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo departamento');
    }
    public function update(DepartamentoRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $departamento=Departamento::findOrFail($id);
        $departamento->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el departamento');
    }
    public function destroy($id)
    {
       $id=Crypt::decryptString($id);
       $departamento=Departamento::findOrFail($id);
       $departamento->activo=0;
       $departamento->update();
       return back()->with('mensaje','Se ha eliminado el departamento');
   }
}
