<?php

namespace App\Recursos_Humanos;

use App\Recursos_Humanos\Factura;
use App\Recursos_Humanos\TrasladoFactura;
use Illuminate\Database\Eloquent\Model;

class ConceptoFactura extends Model
{
    protected $table = "conceptos_facturas";
    protected $guarded = [];
    public function factura()
	{
    	return $this->belongsTo(Factura::class, 'factura_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    /* public function trasladosFacturas(){
        return $this->hasMany(TrasladoFactura::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }*/
}
