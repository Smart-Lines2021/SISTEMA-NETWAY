<?php

namespace App\Recursos_Humanos;

use App\Recursos_Humanos\ContactoCliente;
use App\Recursos_Humanos\DomicilioCliente;
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
}
