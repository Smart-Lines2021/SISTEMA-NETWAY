<?php

namespace App\Http\Controllers\Admin;
use App\Admin\Estado;
use App\Admin\Pais;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EstadoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = Pais::orderBy(DB::raw('FIELD(nombre, "México")'),'desc')->where('activo','=',1)->get(); //Mandamos primero México
        $estados=Estado::where('activo','=',1)->get();
        return view('admin.estados.index',[
            'estados'=>$estados,
            'paises'=>$paises]);
    }
    public function store(EstadoRequest $request)
    {
        $estado=Estado::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo estado');
    }

    public function update(EstadoRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $estado=Estado::findOrFail($id);
        $estado->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el Estado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id=Crypt::decryptString($id);
        $estado=Estado::findOrFail($id);
        $estado->activo=0;
        $estado->update();
        return back()->with('mensaje','Se ha eliminado el pais');
    }
}
