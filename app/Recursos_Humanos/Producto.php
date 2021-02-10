<?php

namespace App\Recursos_Humanos;

use App\Admin\CategoriaProducto;
use App\Admin\Marca;
use App\Admin\TipoProducto;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $guarded = [];
    public function marca()
	{
    	return $this->belongsTo(Marca::class, 'marca_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function categoriaProducto()
	{
    	return $this->belongsTo(CategoriaProducto::class, 'categoria_producto_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
    public function tipoProducto()
	{
    	return $this->belongsTo(TipoProducto::class, 'tipo_producto_id'); //Se relacionan los modelos implicitos en la tabla del modelo actual
    }
}
