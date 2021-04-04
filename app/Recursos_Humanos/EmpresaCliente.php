<?php

namespace App\Recursos_Humanos;

use Illuminate\Database\Eloquent\Model;

class EmpresaCliente extends Model
{
    protected $table = "empresas_clientes";
    protected $guarded = [];

     public function cliente()
	{
    	return $this->belongsTo(Cliente::class, 'cliente_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
