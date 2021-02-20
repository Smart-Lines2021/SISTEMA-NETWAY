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
    public function index()
    {
      $bancos=Banco::where('activo','=',1)->get();
    return view('admin.bancos.index',[
        'bancos'=>$bancos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(BancoRequest $request)
    {
        $banco=Banco::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo banco');
    }

    public function update(BancoRequest $request, $id)
    {
        $id= Crypt::decryptString($id);
        $banco=Banco::findOrFail($id);
        $banco->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el banco');
    }

    public function destroy($id)
    {
        $id=Crypt::decryptString($id);
        $banco=Banco::findOrFail($id);
        $banco->activo=0;
        $banco->update();
        return back()->with('mensaje','Se ha eliminado el banco');
    }
}
