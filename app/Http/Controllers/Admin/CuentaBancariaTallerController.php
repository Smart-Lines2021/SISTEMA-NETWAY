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
    public function index()
    {
        $cuentasBancariasTalleres=CuentaBancariaTaller::where('activo','=',1)->get();
        return view('admin.cuentas_bancarias_talleres.index',[
            'cuentasBancariasTalleres'=>$cuentasBancariasTalleres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $talleresMecanicos=TallerMecanico::where('activo','=',1)->get();
        $bancos=Banco::where('activo','=',1)->get();
        return view('admin.cuentas_bancarias_talleres.create',[
            'bancos'=>$bancos,
            'talleresMecanicos'=>$talleresMecanicos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CuentaBancariaTallerRequest $request)
    {
        $cuentaBancariaTaller = CuentaBancariaTaller::create($request->validated());
        return redirect()->route('admin.cuentas_bancarias_talleres.index')->with('mensaje','Se ha creado una nueva cuenta bancaria de taller');
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
        $id=Crypt::decryptString($id);
        $cuentaBancariaTaller=CuentaBancariaTaller::findOrFail($id);
        $talleresMecanicos=TallerMecanico::where('activo','=',1)->get();
        $bancos=Banco::where('activo','=',1)->get();
        return view('admin.cuentas_bancarias_talleres.edit',[
            'cuentaBancariaTaller'=>$cuentaBancariaTaller,
            'bancos'=>$bancos,
            'talleresMecanicos'=>$talleresMecanicos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CuentaBancariaTallerRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $cuentaBancariaTaller=CuentaBancariaTaller::findOrFail($id);
        $cuentaBancariaTaller->update($request->validated());
        return back()->with('mensaje','Se ha actualizado la cuenta bancaria del taller');
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
        $cuentaBancariaTaller=CuentaBancariaTaller::findOrFail($id);
        $cuentaBancariaTaller->activo=0;
        $cuentaBancariaTaller->update();
        return back()->with('mensaje','Se ha eliminado la cuenta bancaria del taller');
    }
}
