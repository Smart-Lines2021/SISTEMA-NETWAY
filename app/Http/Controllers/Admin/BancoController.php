<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Banco;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BancoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BancoController extends Controller
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
      $this->authorize('view',new Banco);
      $bancos=Banco::where('activo','=',1)->get();
      return view('admin.bancos.index',[
        'bancos'=>$bancos]);
    }

    public function store(BancoRequest $request)
    {
      //Aplicamos Politica de Acceso al metodo correspondiente
      $this->authorize('create',new Banco);
      $banco=Banco::create($request->validated());
      return back()->with('mensaje','Se ha añadido un nuevo banco');
    }

    public function update(BancoRequest $request, $id)
    {
      $id= Crypt::decryptString($id);
      $banco=Banco::findOrFail($id);
      //Aplicamos Politica de Acceso al metodo correspondiente
      $this->authorize('update',$banco);
      $banco->update($request->validated());
      return back()->with('mensaje','Se ha actualizado el banco');
    }

    public function destroy($id)
    {
      $id=Crypt::decryptString($id);
      $banco=Banco::findOrFail($id);
      //Aplicamos Politica de Acceso al metodo correspondiente
      $this->authorize('delete',$banco);
      $banco->activo=0;
      $banco->update();
      return back()->with('mensaje','Se ha eliminado el banco');
    }
  }
