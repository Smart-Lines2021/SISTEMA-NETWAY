<?php

namespace App\Recursos_Humanos;

use App\Admin\Persona;
use App\Recursos_Humanos\Asistencia;
use App\Recursos_Humanos\RazonPermiso;
use Illuminate\Database\Eloquent\Model;

class PermisoEmpleado extends Model
{
    protected $table = "permisos";
    protected $guarded = [];
     public function persona()
	{
    	return $this->belongsTo(Persona::class, 'persona_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
     public function asistencia()
	{
    	return $this->belongsTo(Asistencia::class, 'asistencia_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
     public function razonPermiso()
	{
    	return $this->belongsTo(RazonPermiso::class, 'razon_permiso_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
