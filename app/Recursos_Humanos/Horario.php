<?php

namespace App\Recursos_Humanos;

use App\Recursos_Humanos\Asistencia;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = "horarios";
    protected $guarded = [];
    public function asistencias(){
        return $this->hasMany(Asistencia::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
