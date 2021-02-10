<?php

namespace App\Admin;

use App\Recursos_Humanos\Producto;
use App\Recursos_Humanos\Vehiculo;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $guarded = [];
    public function vehiculos(){
        return $this->hasMany(Vehiculo::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function productos(){
        return $this->hasMany(Producto::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
