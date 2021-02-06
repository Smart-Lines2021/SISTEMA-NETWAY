<?php

namespace App\Admin;
use App\Admin\Pais;
use App\Admin\Municipio;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
     public function pais()
    {
    	return $this->belongsTo(Pais::class, 'pais_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
     public function municipios(){
        return $this->hasMany(Municipio::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
