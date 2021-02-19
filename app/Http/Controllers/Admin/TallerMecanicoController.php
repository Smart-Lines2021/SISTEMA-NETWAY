<?php

namespace App\Http\Controllers\Admin;

use App\Admin\TallerMecanico;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\TallerMecanicoRequest;
use Illuminate\Support\Facades\Crypt;


class TallerMecanicoController extends Controller
{
    
    public function index()
    {
        $talleresMecanicos=TallerMecanico::where('activo','=',1)->get();
         return view('admin.talleres_mecanicos.index',[
        'talleresMecanicos'=>$talleresMecanicos]);
    }

   
    public function store(TallerMecanicoRequest $request)
    {
         $tallerMecanico=TallerMecanico::create($request->validated());
        return back()->with('mensaje','Se ha añadido un nuevo taller mecanico');


    }

   
    public function update(TallerMecanicoRequest $request, $id)
    {
        $id= Crypt::decryptString($id);
        $tallerMecanico=TallerMecanico::findOrFail($id);
        $tallerMecanico->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el taller mecanico');
    }

    
    public function destroy($id)
    {
        $id= Crypt::decryptString($id);
        $tallerMecanico=TallerMecanico::findOrFail($id);
        $tallerMecanico->activo=0;
        $tallerMecanico->update();
        return back()->with('mensaje','Se ha eliminado el taller mecanico');
    }
}
