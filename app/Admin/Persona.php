<?php

namespace App\Admin;

use App\Admin\DomicilioPersona;
use App\Admin\PersonaUsuario;
use App\Documentos\CertificadoAltura;
use App\Documentos\ConstanciaSeguro;
use App\Documentos\Curp;
use App\Documentos\IdentificacionOficial;
use App\Documentos\Pcr;
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
    public function certificadosAltura(){
        return $this->hasMany(CertificadoAltura::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function constanciasSeguro(){
        return $this->hasMany(ConstanciaSeguro::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function curps(){
        return $this->hasMany(Curp::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function identificacionesOficiales(){
        return $this->hasMany(IdentificacionOficial::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function pcrs(){
        return $this->hasMany(Pcr::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
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
