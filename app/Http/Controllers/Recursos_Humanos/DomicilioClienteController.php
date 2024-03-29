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
    public function __construct(){
      $this->middleware('auth');
  }
  public function create()
  {
        //Aplicamos Politica de Acceso al metodo correspondiente
    $this->authorize('view',new DomicilioCliente);
    $estados = Estado::where('activo','=',1)->get();
    return view('recursos_humanos.domicilios_clientes.create'
        ,[
            'estados'=>$estados
        ]);
}

    public function store(DomicilioClienteRequest $request)
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new DomicilioCliente);
        DomicilioCliente::create($request->validated());
        return redirect()->route('rh.clientes.index')->with('mensaje','Se ha registrado el domicilio del cliente');
    }

    public function show($id)
    {
        $id=Crypt::decryptString($id);
        $cliente=Cliente::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('view',$cliente);
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
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('view',$cliente);
        $estados = Estado::where('activo','=',1)->get();
        return view('recursos_humanos.domicilios_clientes.create',[
            'cliente'=>$cliente,
            'estados'=>$estados
        ]);
    }

    public function edit($id)
    {
        $id=Crypt::decryptString($id);
        $domicilio=DomicilioCliente::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$domicilio);
        $cliente=Cliente::where('id','=',$domicilio->cliente_id)->first();
        $estados = Estado::where('activo','=',1)->get();
        return view('recursos_humanos.domicilios_clientes.edit',[
            'domicilio'=>$domicilio,
            'cliente'=>$cliente,
            'estados'=>$estados
        ]);
    }
    public function update(DomicilioClienteRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $domicilio=DomicilioCliente::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$domicilio);
        $domicilio->update($request->validated());
        return redirect()->route('rh.clientes.index')->with('mensaje','Se ha actualizado el domicilio del cliente');
    }

    public function destroy($id)
    {
     $id=Crypt::decryptString($id);
     $domicilio=DomicilioCliente::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
     $this->authorize('delete',$domicilio);
     $domicilio->activo=0;
     $domicilio->update();
     return redirect()->route('rh.clientes.index')->with('mensaje','Se ha eliminado el domicilio del cliente');
 }
}
