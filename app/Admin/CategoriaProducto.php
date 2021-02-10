<?php

namespace App\Admin;

use App\Recursos_Humanos\Producto;
use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
    protected $table = "categorias_productos";
    protected $guarded = [];
    public function productos(){
        return $this->hasMany(Producto::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
