<?php

namespace App\Recursos_Humanos;

use App\Recursos_Humanos\ConceptoFactura;
use Illuminate\Database\Eloquent\Model;

class TrasladoFactura extends Model
{
    protected $table = "traslados_facturas";
    protected $guarded = [];
   /* public function concepto()
	{
    	return $this->belongsTo(ConceptoFactura::class, 'concepto_factura_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }*/
}
