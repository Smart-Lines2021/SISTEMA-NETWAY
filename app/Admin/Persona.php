<?php

namespace App\Admin;

use App\Admin\DomicilioPersona;
use App\Admin\PersonaUsuario;
use App\Recursos_Humanos\Asistencia;
use App\Recursos_Humanos\Documento;
use App\Recursos_Humanos\InformacionLaboral;
use App\Recursos_Humanos\PermisoEmpleado;
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
    public function asistencias(){
        return $this->hasMany(Asistencia::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function permisos(){
        return $this->hasMany(PermisoEmpleado::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function documentos(){
        return $this->hasMany(Documento::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
