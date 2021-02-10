<?php

namespace App\Admin;
use App\Admin\DomicilioPersona;
use App\Admin\Estado;
use App\Recursos_Humanos\DomicilioCliente;
use App\Recursos_Humanos\DomicilioProveedor;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
	protected $guarded = [];
    public function estado()
    {
    	return $this->belongsTo(Estado::class, 'estado_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function domiciliosClientes(){
        return $this->hasMany(DomicilioCliente::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function domiciliosProveedores(){
        return $this->hasMany(DomicilioProveedor::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function domiciliosPersonas(){
        return $this->hasMany(DomicilioPersona::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
