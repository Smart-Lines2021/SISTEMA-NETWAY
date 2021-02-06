<?php

namespace App\Admin;
use App\Admin\Estado;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    public function estados(){
        return $this->hasMany(Estado::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}