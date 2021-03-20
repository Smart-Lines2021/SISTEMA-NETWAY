<?php

namespace App\Http\Controllers\Recursos_Humanos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    public function index(){
    	return view('recursos_humanos.rutas.index');
    }


}
