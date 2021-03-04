<?php

namespace App\Recursos_Humanos;

use App\Recursos_Humanos\Cliente;
use App\Recursos_Humanos\Factura;
use Illuminate\Database\Eloquent\Model;

class FacturaCliente extends Model
{
    protected $table =  "facturas_clientes";
    protected $guarded = [];
    public function factura()
	{
    	return $this->belongsTo(Factura::class, 'factura_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
     public function cliente()
	{
    	return $this->belongsTo(Cliente::class, 'cliente_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }

}
