<?php

namespace App\Admin;

use App\Recursos_Humanos\InformacionLaboral;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = "cargos";
    protected $guarded = [];
     public function informacionesLaborales(){
        return $this->hasMany(InformacionLaboral::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }

}
