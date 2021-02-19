<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Admin\Municipio;
use App\Admin\Estado;
use App\Admin\Pais;
use App\Http\Requests\Admin\MunicipioRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
      $this->middleware('auth');
  }
  public function index()
  {
         //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('view',new Municipio);
        $estados = Estado::orderBy(DB::raw('FIELD(nombre, "Zacatecas")'),'desc')->where('activo','=',1)->get(); //Mandamos primero México
        $municipios=Municipio::where('activo','=',1)->get();
        return view('admin.municipios.index',[
            'municipios'=>$municipios,
            'estados'=>$estados]);
    }


    public function store(MunicipioRequest $request)
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new Municipio);
        $municipio=Municipio::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo municipio');
    }


    public function update(MunicipioRequest $request, $id)
    {
     $id=Crypt::decryptString($id);
     $municipio=Municipio::findOrFail($id);
     //Aplicamos Politica de Acceso al metodo correspondiente
     $this->authorize('update',$municipio);
     $municipio->update($request->validated());
     return back()->with('mensaje','Se ha actualizado el Municipio');
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
        $municipio=Municipio::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('delete',$municipio);
        $municipio->activo=0;
        $municipio->update();
        return back()->with('mensaje','Se ha eliminado el municipio');
    }
}
