<?php

namespace App\Admin;

use App\Admin\CuentaBancariaTaller;
use App\Recursos_Humanos\ServicioVehiculo;
use Illuminate\Database\Eloquent\Model;

class TallerMecanico extends Model
{
    protected $table="talleres_mecanicos";
    protected $guarded = [];
    public function cuentasBancariasTalleres(){
        return $this->hasMany(CuentaBancariaTaller::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function serviciosVehiculos(){
        return $this->hasMany(ServicioVehiculo::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
