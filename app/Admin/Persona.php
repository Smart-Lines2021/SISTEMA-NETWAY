<?php

namespace App\Admin;

use App\Admin\DomicilioPersona;
use App\Admin\PersonaUsuario;
use App\Recursos_Humanos\InformacionLaboral;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table= "personas";
    protected $guarded = [];
    public function domiciliosPersonas(){
        return $this->hasMany(DomicilioPersona::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function informacionesLaborales(){
        return $this->hasMany(InformacionLaboral::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function personasUsuarios(){
        return $this->hasMany(PersonaUsuario::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
