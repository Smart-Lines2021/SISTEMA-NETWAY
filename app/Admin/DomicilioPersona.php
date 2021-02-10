<?php

namespace App\Admin;

use App\Admin\Estado;
use App\Admin\Municipio;
use App\Admin\Pais;
use App\Admin\Persona;
use Illuminate\Database\Eloquent\Model;

class DomicilioPersona extends Model
{
    protected $table = "domicilios_personas";
    protected $guarded = [];
     public function pais()
	{
    	return $this->belongsTo(Pais::class, 'pais_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function estado()
	{
    	return $this->belongsTo(Estado::class, 'estado_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function municipio()
	{
    	return $this->belongsTo(Municipio::class, 'municipio_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function persona()
	{
    	return $this->belongsTo(Persona::class, 'persona_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
