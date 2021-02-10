<?php

namespace App\Admin;
use App\Admin\DomicilioPersona;
use App\Admin\Municipio;
use App\Admin\Pais;
use App\Recursos_Humanos\DomicilioCliente;
use App\Recursos_Humanos\DomicilioProveedor;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
	protected $guarded = [];
	public function pais()
	{
    	return $this->belongsTo(Pais::class, 'pais_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function municipios(){
        return $this->hasMany(Municipio::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
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
