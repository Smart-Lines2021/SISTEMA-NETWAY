<?php

namespace App\Admin;

use App\Recursos_Humanos\Producto;
use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
	protected $guarded = [];
    protected $table = "tipo_productos";
    public function productos(){
        return $this->hasMany(Producto::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
