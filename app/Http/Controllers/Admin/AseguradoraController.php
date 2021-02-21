<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Aseguradora;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AseguradoraRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AseguradoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aseguradoras=Aseguradora::where('activo','=',1)->get();
        return view('admin.aseguradoras.index',[
            'aseguradoras'=>$aseguradoras]);
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
    public function store(AseguradoraRequest $request)
    {
        $aseguradora=Aseguradora::create($request->validated());
        return back()->with('mensaje','Se ha añadido una nueva aseguradora');
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
    public function update(AseguradoraRequest $request, $id)
    {
        $id= Crypt::decryptString($id);
        $aseguradora=Aseguradora::findOrFail($id);
        $aseguradora->update($request->validated());
        return back()->with('mensaje','Se ha actualizado la aseguradora');
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
       $aseguradora=Aseguradora::findOrFail($id);
       $aseguradora->activo=0;
       $aseguradora->update();
       return back()->with('mensaje','Se ha eliminado la aseguradora');
    }
}
