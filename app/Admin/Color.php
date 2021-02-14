<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Recursos_Humanos\Vehiculo;

class Color extends Model
{
    protected $table= "colores";
    protected $guarded = [];

    public function vehiculos(){
        return $this->hasMany(Vehiculo::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
