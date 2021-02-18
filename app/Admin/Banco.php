<?php

namespace App\Admin;

use App\Admin\CuentaBancariaTaller;
use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $table ="bancos";
    protected $guarded = [];
     public function cuentasBancariasTalleres(){
        return $this->hasMany(CuentaBancariaTaller::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
