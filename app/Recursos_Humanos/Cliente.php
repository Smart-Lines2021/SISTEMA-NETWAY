<?php

namespace App\Recursos_Humanos;

use App\Recursos_Humanos\ContactoCliente;
use App\Recursos_Humanos\DomicilioCliente;
use App\Recursos_Humanos\FacturaCliente;
use App\Recursos_Humanos\EmpresaCliente;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $guarded = [];
    public function domiciliosClientes(){
        return $this->hasMany(DomicilioCliente::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function contactosClientes(){
        return $this->hasMany(ContactoCliente::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function facturasClientes(){
        return $this->hasMany(FacturaCliente::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
     public function empresasClientes(){
        return $this->hasMany(EmpresaCliente::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
