<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recursos_Humanos\DomicilioCliente;
use App\Recursos_Humanos\Cliente;
use App\Admin\Estado;
use App\Http\Requests\Recursos_Humanos\DomicilioClienteRequest;
use Illuminate\Support\Facades\Crypt;

class DomicilioClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::where('activo','=',1)->get();
        return view('recursos_humanos.domicilios_clientes.create'
            ,[
                'estados'=>$estados
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DomicilioClienteRequest $request)
    {
        DomicilioCliente::create($request->validated());
        return redirect()->route('rh.clientes.index')->with('mensaje','Se ha registrado el domicilio del cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id=Crypt::decryptString($id);
        $cliente=Cliente::findOrFail($id);
        $estados = Estado::where('activo','=',1)->get();
        $domiciliosClientes=DomicilioCliente::where([['cliente_id',$cliente->id],['activo',1]])->get();
        return view('recursos_humanos.domicilios_clientes.index',[
            'cliente'=>$cliente,
            'domiciliosClientes'=>$domiciliosClientes,
            'estados'=>$estados
        ]);
    }

 public function verDomiciliosClientes($id)
    {
        $id=Crypt::decryptString($id);
        $cliente=Cliente::findOrFail($id);
        $estados = Estado::where('activo','=',1)->get();
        return view('recursos_humanos.domicilios_clientes.create',[
            'cliente'=>$cliente,
            'estados'=>$estados
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id=Crypt::decryptString($id);
        $domicilio=DomicilioCliente::findOrFail($id);
        $cliente=Cliente::where('id','=',$domicilio->cliente_id)->first();
        $estados = Estado::where('activo','=',1)->get();
        return view('recursos_humanos.domicilios_clientes.edit',[
            'domicilio'=>$domicilio,
            'cliente'=>$cliente,
            'estados'=>$estados
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DomicilioClienteRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $domicilio=DomicilioCliente::findOrFail($id);
        $domicilio->update($request->validated());
        return redirect()->route('rh.clientes.index')->with('mensaje','Se ha actualizado el domicilio del cliente');
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
       $domicilio=DomicilioCliente::findOrFail($id);
       $domicilio->activo=0;
       $domicilio->update();
       return redirect()->route('rh.clientes.index')->with('mensaje','Se ha eliminado el domicilio del cliente');
    }
}
