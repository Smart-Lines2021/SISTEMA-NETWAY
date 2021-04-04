<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recursos_Humanos\EmpresaCliente;
use App\Recursos_Humanos\Cliente;
use App\Http\Requests\Recursos_Humanos\EmpresaClienteRequest;
use Illuminate\Support\Facades\Crypt;

class EmpresaClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
  public function create()
  {

    return view('recursos_humanos.empresas_clientes.create');
}

    public function store(EmpresaClienteRequest $request)
    {
        EmpresaCliente::create($request->validated());
        return redirect()->route('rh.clientes.index')->with('mensaje','Se ha registrado la subempresa del cliente');
    }

    public function show($id)
    {
        $id=Crypt::decryptString($id);
        $cliente=Cliente::findOrFail($id);
        $empresasClientes=EmpresaCliente::where([['cliente_id',$cliente->id],['activo',1]])->get();
        return view('recursos_humanos.empresas_clientes.index',[
            'cliente'=>$cliente,
            'empresasClientes'=>$empresasClientes
        ]);
    }

    public function verEmpresasClientes($id)
    {
        $id=Crypt::decryptString($id);
        $cliente=Cliente::findOrFail($id);
        return view('recursos_humanos.empresas_clientes.create',[
            'cliente'=>$cliente
        ]);
    }

    public function edit($id)
    {
        $id=Crypt::decryptString($id);
        $empresa=EmpresaCliente::findOrFail($id);
        $cliente=Cliente::where('id','=',$empresa->cliente_id)->first();
        return view('recursos_humanos.empresas_clientes.edit',[
            'empresa'=>$empresa,
            'cliente'=>$cliente
        ]);
    }
    public function update(EmpresaClienteRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $empresa=EmpresaCliente::findOrFail($id);
        $empresa->update($request->validated());
        return redirect()->route('rh.clientes.index')->with('mensaje','Se ha actualizado la subempresa del cliente');
    }

    public function destroy($id)
    {
     $id=Crypt::decryptString($id);
     $empresa=EmpresaCliente::findOrFail($id);
     $empresa->activo=0;
     $empresa->update();
     return redirect()->route('rh.clientes.index')->with('mensaje','Se ha eliminado la subempresa del cliente');
 }
}
