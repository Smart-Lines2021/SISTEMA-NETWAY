<?php

namespace App\Recursos_Humanos;

use App\Recursos_Humanos\PermisoEmpleado;
use Illuminate\Database\Eloquent\Model;

class RazonPermiso extends Model
{
    protected $table = "razones_permisos";
    protected $guarded = [];
    public function permisos(){
        return $this->hasMany(PermisoEmpleado::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
