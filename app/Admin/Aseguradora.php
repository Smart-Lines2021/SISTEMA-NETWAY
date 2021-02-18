<?php

namespace App\Admin;

use App\Recursos_Humanos\PolizaVehiculo;
use Illuminate\Database\Eloquent\Model;

class Aseguradora extends Model
{
    protected $table="aseguradoras";
    protected $guarded = [];
    public function polizasVehiculos(){
        return $this->hasMany(PolizaVehiculo::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
