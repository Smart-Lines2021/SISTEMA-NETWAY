<?php

namespace App\Admin;

use App\Recursos_Humanos\ServicioVehiculo;
use Illuminate\Database\Eloquent\Model;

class TipoServicioVehiculo extends Model
{
    protected $table ="tipo_servicio_vehiculos";
    protected $guarded = [];
    public function serviciosVehiculos(){
        return $this->hasMany(ServicioVehiculo::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
