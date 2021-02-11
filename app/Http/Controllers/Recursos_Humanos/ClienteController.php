<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use App\Recursos_Humanos\Cliente;
use App\Http\Requests\Admin\ClienteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=Cliente::where('activo','=',1)->get();
        return view('recursos_humanos.clientes.index',[
            'cliente'=>$clientes]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        $cliente=Cliente::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo cliente');
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
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $cliente=Cliente::findOrFail($id);
        $cliente->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el cliente');
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
        $cliente=Cliente::findOrFail($id);
        $cliente->activo=0;
        $cliente->update();
        return back()->with('mensaje','Se ha eliminado el cliente');
    }
}
