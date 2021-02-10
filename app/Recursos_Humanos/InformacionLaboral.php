<?php

namespace App\Recursos_Humanos;

use App\Admin\Departamento;
use App\Admin\Persona;
use Illuminate\Database\Eloquent\Model;

class InformacionLaboral extends Model
{
    protected $table = "informaciones_laborales";
    protected $guarded = [];
     public function persona()
	{
    	return $this->belongsTo(Persona::class, 'persona_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function departamento()
	{
    	return $this->belongsTo(Departamento::class, 'departamento_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
