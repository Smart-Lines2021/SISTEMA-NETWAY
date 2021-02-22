<?php

namespace App\Recursos_Humanos;

use App\Admin\TallerMecanico;
use App\Admin\TipoServicioVehiculo;
use App\Recursos_Humanos\Vehiculo;
use Illuminate\Database\Eloquent\Model;

class ServicioVehiculo extends Model
{
	protected $table="servicio_vehiculos";
    protected $guarded = [];
    public function taller()
	{
    	return $this->belongsTo(TallerMecanico::class, 'taller_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function vehiculo()
	{
    	return $this->belongsTo(Vehiculo::class, 'vehiculo_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function tipoServicio()
	{
    	return $this->belongsTo(TipoServicioVehiculo::class, 'tipo_servicio_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
