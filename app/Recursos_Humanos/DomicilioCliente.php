<?php

namespace App\Recursos_Humanos;

use App\Admin\Estado;
use App\Admin\Municipio;
use App\Admin\Pais;
use Illuminate\Database\Eloquent\Model;

class DomicilioCliente extends Model
{
    protected $table = "domicilios_clientes";
    protected $guarded = [];
    public function pais()
	{
    	return $this->belongsTo(Pais::class, 'pais_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function estado()
	{
    	return $this->belongsTo(Estado::class, 'estado_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function municipio()
	{
    	return $this->belongsTo(Municipio::class, 'municipio_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function cliente()
	{
    	return $this->belongsTo(Cliente::class, 'cliente_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
