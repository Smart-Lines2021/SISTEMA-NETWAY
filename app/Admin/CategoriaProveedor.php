<?php

namespace App\Admin;

use App\Recursos_Humanos\Proveedor;
use Illuminate\Database\Eloquent\Model;

class CategoriaProveedor extends Model
{
    protected $table = "categorias_proveedores";
    protected $guarded = [];
    public function proveedores(){
        return $this->hasMany(Proveedor::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
}
