<?php

namespace App\Recursos_Humanos;

use App\Recursos_Humanos\Factura;
use Illuminate\Database\Eloquent\Model;

class ComprobanteFactura extends Model
{
    protected $table = "comprobantes_facturas";
    protected $guarded = [];
    public function factura()
	{
    	return $this->belongsTo(Factura::class, 'factura_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
