<?php

namespace App\Admin;

use App\Recursos_Humanos\Vehiculo;
use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    protected $table = "tipo_vehiculos";
    protected $guarded = [];
    public function vehiculos(){
        return $this->hasMany(Vehiculo::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
