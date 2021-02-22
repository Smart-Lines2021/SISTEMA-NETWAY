<?php

namespace App\Recursos_Humanos;

use App\Admin\Aseguradora;
use App\Recursos_Humanos\Vehiculo;
use Illuminate\Database\Eloquent\Model;

class PolizaVehiculo extends Model
{
    protected $table="poliza_vehiculos";
    protected $guarded = [];
     public function vehiculo()
	{
    	return $this->belongsTo(Vehiculo::class, 'vehiculo_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
     public function aseguradora()
	{
    	return $this->belongsTo(Aseguradora::class, 'aseguradora_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
