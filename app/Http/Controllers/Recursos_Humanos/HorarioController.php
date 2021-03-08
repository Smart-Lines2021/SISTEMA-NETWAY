<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recursos_Humanos\HorarioRequest;
use App\Recursos_Humanos\Horario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios=Horario::where('activo','=',1)->get();
        return view('recursos_humanos.horarios.index',[
            'horarios'=>$horarios]);
    }
    public function store(HorarioRequest $request)
    {
        $horario=Horario::create($request->validated());
        return back()->with('mensaje','Se ha insertado un nuevo horario');
    }
    public function update(HorarioRequest $request, $id)
    {
        $id=Crypt::decryptString($id);
        $horario=Horario::findOrFail($id);
        $horario->update($request->validated());
        return back()->with('mensaje','Se ha actualizado el horario');
    }
    public function destroy($id)
    {
        $id=Crypt::decryptString($id);
        $horario=Horario::findOrFail($id);
        $horario->activo=0;
        $horario->update();
        return back()->with('mensaje','Se ha eliminado el horario de: '.$horario->dias.' de '.$horario->horas);
    }
}
