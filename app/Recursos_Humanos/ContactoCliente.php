<?php

namespace App\Recursos_Humanos;

use App\Recursos_Humanos\Cliente;
use Illuminate\Database\Eloquent\Model;

class ContactoCliente extends Model
{
    protected $table = "contactos_clientes";
    protected $guarded = [];
    public function cliente()
	{
    	return $this->belongsTo(Cliente::class, 'cliente_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
