<?php

namespace App\Admin;
use App\Admin\DomicilioPersona;
use App\Admin\Estado;
use App\Recursos_Humanos\DomicilioCliente;
use App\Recursos_Humanos\DomicilioProveedor;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
	protected $table = "paises";
	protected $guarded = [];
    public function estados(){
        return $this->hasMany(Estado::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
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
