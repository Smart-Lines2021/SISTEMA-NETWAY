<?php

namespace App\Admin;
use App\Admin\Estado;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    public function estado()
    {
    	return $this->belongsTo(Estado::class, 'estado_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
