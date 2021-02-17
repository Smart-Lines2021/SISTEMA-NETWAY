<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Cargo;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CargoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos=Cargo::where('activo','=',1)->get();
        return view('admin.cargos.index',[
            'cargos'=>$cargos]);
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
    public function store(CargoRequest $request)
    {
        $cargo=Cargo::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo cargo');
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
    public function update(CargoRequest $request, $id)
    {
        $id= Crypt::decryptString($id);
        $cargo=Cargo::findOrFail($id);
        $cargo->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el cargo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $id= Crypt::decryptString($id);
       $cargo=Cargo::findOrFail($id);
       $cargo->activo=0;
       $cargo->update();
       return back()->with('mensaje','Se ha eliminado el cargo');
    }
}
