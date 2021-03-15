<?php

namespace App\Recursos_Humanos;

use App\Admin\Persona;
use App\Recursos_Humanos\Horario;
use App\Recursos_Humanos\PermisoEmpleado;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table = "asistencias";
    protected $guarded = [];
     public function persona()
	{
    	return $this->belongsTo(Persona::class, 'persona_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
     public function horario()
	{
    	return $this->belongsTo(Horario::class, 'horario_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function permisos(){
        return $this->hasMany(PermisoEmpleado::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
