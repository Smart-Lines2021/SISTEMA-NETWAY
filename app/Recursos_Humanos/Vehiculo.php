<?php

namespace App\Recursos_Humanos;

use App\Admin\Marca;
use App\Admin\Color;
use App\Admin\TipoVehiculo;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $guarded = [];
    public function tipoVehiculo()
	{
    	return $this->belongsTo(TipoVehiculo::class, 'tipo_vehiculo_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function marca()
	{
    	return $this->belongsTo(Marca::class, 'marca_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }

    public function colorVehiculo()
	{
    	return $this->belongsTo(Color::class, 'color'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
