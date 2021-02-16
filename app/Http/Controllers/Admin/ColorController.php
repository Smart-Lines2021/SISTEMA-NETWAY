<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Color;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ColorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colores=Color::all();
        return view('admin.colores.index',[
            'colores'=>$colores]);
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
    public function store(ColorRequest $request)
    {
        $color=Color::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo color');
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
    public function update(ColorRequest $request, $id)
    {
        $id= Crypt::decryptString($id);
        $color=Color::findOrFail($id);
        $color->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el color');
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
       $color=Color::findOrFail($id);
       $color->delete();
       $color->update();
       return back()->with('mensaje','Se ha eliminado el color');
    }
}
