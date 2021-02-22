<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Banco;
use App\Admin\CuentaBancariaTaller;
use App\Admin\TallerMecanico;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CuentaBancariaTallerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CuentaBancariaTallerController extends Controller
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
        $this->authorize('view',new CuentaBancariaTaller);
        $cuentasBancariasTalleres=CuentaBancariaTaller::where('activo','=',1)->get();
        return view('admin.cuentas_bancarias_talleres.index',[
            'cuentasBancariasTalleres'=>$cuentasBancariasTalleres]);
    }

    public function create()
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new CuentaBancariaTaller);
        $talleresMecanicos=TallerMecanico::where('activo','=',1)->get();
        $bancos=Banco::where('activo','=',1)->get();
        return view('admin.cuentas_bancarias_talleres.create',[
            'bancos'=>$bancos,
            'talleresMecanicos'=>$talleresMecanicos]);
    }

    public function store(CuentaBancariaTallerRequest $request)
    {
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('create',new CuentaBancariaTaller);
        $cuentaBancariaTaller = CuentaBancariaTaller::create($request->validated());
        return redirect()->route('admin.cuentas_bancarias_talleres.index')->with('mensaje','Se ha creado una nueva cuenta bancaria de taller');
    }
    public function edit($id)
    {
        $id=Crypt::decryptString($id);
        $cuentaBancariaTaller=CuentaBancariaTaller::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$cuentaBancariaTaller);
        $talleresMecanicos=TallerMecanico::where('activo','=',1)->get();
        $bancos=Banco::where('activo','=',1)->get();
        return view('admin.cuentas_bancarias_talleres.edit',[
            'cuentaBancariaTaller'=>$cuentaBancariaTaller,
            'bancos'=>$bancos,
            'talleresMecanicos'=>$talleresMecanicos]);
    }

    public function update(CuentaBancariaTallerRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $cuentaBancariaTaller=CuentaBancariaTaller::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('update',$cuentaBancariaTaller);
        $cuentaBancariaTaller->update($request->validated());
        return back()->with('mensaje','Se ha actualizado la cuenta bancaria del taller');
    }
    public function destroy($id)
    {
        $id=Crypt::decryptString($id);
        $cuentaBancariaTaller=CuentaBancariaTaller::findOrFail($id);
        //Aplicamos Politica de Acceso al metodo correspondiente
        $this->authorize('delete',$cuentaBancariaTaller);
        $cuentaBancariaTaller->activo=0;
        $cuentaBancariaTaller->update();
        return back()->with('mensaje','Se ha eliminado la cuenta bancaria del taller');
    }
}
