<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recursos_Humanos\ContactoCliente;
use App\Recursos_Humanos\Cliente;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\Admin\ContactoClienteRequest;

class ContactoClienteController extends Controller
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
        $this->authorize('view',new ContactoCliente);
        return view('recursos_humanos.contactos_clientes.index');
    }

     public function show($id)
    {
        $id=Crypt::decryptString($id);
        $cliente=Cliente::findOrFail($id);

        $contactosClientes=ContactoCliente::where([['cliente_id',$cliente->id],['activo',1]])->get();
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('view',$cliente);
        return view('recursos_humanos.contactos_clientes.index',[
            'cliente'=>$cliente,
            'contactosClientes'=>$contactosClientes
        ]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new ContactoCliente);
       return view('recursos_humanos.contactos_clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactoClienteRequest $request)
    {
         //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new ContactoCliente);
        ContactoCliente::create($request->validated());
        return redirect()->route('rh.clientes.index')->with('mensaje','Se ha registrado el contacto del cliente');
    }

    public function edit($id)
    {
        $id=Crypt::decryptString($id);
        $contacto=ContactoCliente::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$contacto);
        $cliente=Cliente::where('id','=',$contacto->cliente_id)->first();
        return view('recursos_humanos.contactos_clientes.edit',[
            'contacto'=>$contacto,
            'cliente'=>$cliente
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactoClienteRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $contacto=ContactoCliente::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$contacto);
        $contacto->update($request->validated());
        return redirect()->route('rh.clientes.index')->with('mensaje','Se ha actualizado el contacto del cliente');
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
       $contacto=ContactoCliente::findOrFail($id);
       //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('delete',$contacto);
       $contacto->activo=0;
       $contacto->update();
       return redirect()->route('rh.clientes.index')->with('mensaje','Se ha eliminado el contacto del cliente');
    }
}
