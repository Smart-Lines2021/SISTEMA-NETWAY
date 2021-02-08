<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Gasolineria;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Gasolineriarequest;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class GasolineriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gasolinerias=Gasolineria::where('activo','=',1)->get();
        return view('admin.gasolinerias.index',[
            'gasolinerias'=>$gasolinerias]);
    }

    public function store(GasolineriaRequest $request)
    {
        $gasolineria=Gasolineria::create($request->validated());
        return back()->with('mensaje','Se ha creado una nueva gasolineria');
    }

    public function update(GasolineriaRequest $request, $id)
    {
         $id= Crypt::decryptString($id);
         $gasolineria=Gasolineria::findOrFail($id);
         $gasolineria->update($request->validated());
         return back()->with('mensaje','Se ha actualizado la gasolineria');
    }

    public function destroy($id)
    {
        $id= Crypt::decryptString($id);
        $gasolineria=Gasolineria::findOrFail($id);
        $gasolineria->activo=0;
        $gasolineria->update();
        return back()->with('mensaje','Se ha eliminado la gasolineria');
    }
}
