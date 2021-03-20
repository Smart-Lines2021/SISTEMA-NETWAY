<?php

namespace App\Documentos;

use App\Admin\Persona;
use Illuminate\Database\Eloquent\Model;

class IdentificacionOficial extends Model
{
	public function persona()
	{
    	return $this->belongsTo(Persona::class, 'persona_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
	protected $table="ines";
	protected $guarded = [];
}