<?php

namespace App\Recursos_Humanos;

use App\Admin\CategoriaProveedor;
use App\Recursos_Humanos\DomicilioProveedor;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = "proveedores";
    protected $guarded = [];
    public function domiciliosProveedores(){
        return $this->hasMany(DomicilioProveedor::class); //Se relacionan las llaves foraneas que tiene el modelo en otras tablas
    }
    public function categoriaProveedor()
	{
    	return $this->belongsTo(CategoriaProveedor::class, 'categoria_proveedor_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
