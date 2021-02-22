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
     public function __construct(){
      $this->middleware('auth');
  }
    public function index()
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('view',new Cliente);
        $clientes=Cliente::where('activo','=',1)->get();
        return view('recursos_humanos.clientes.index',[
            'cliente'=>$clientes]);
    }

     public function show($id)
    {
        $id=Crypt::decryptString($id);
        $cliente=Cliente::findOrFail($id);
        return view('recursos_humanos.contactos_clientes.create',[
            'cliente'=>$cliente,
        ]);
    }

    public function store(ClienteRequest $request)
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new Cliente);
        $cliente=Cliente::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo cliente');
    }
    public function update(ClienteRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $cliente=Cliente::findOrFail($id);
         //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$cliente);
        $cliente->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el cliente');
    }

    public function destroy($id)
    {
        $id=Crypt::decryptString($id);
        $cliente=Cliente::findOrFail($id);
         //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('delete',$cliente);
        $cliente->activo=0;
        $cliente->update();
        return back()->with('mensaje','Se ha eliminado el cliente');
    }
}
