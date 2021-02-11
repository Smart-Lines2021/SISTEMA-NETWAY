<?php

use Illuminate\Database\Seeder;
use App\Admin\CategoriaProducto;

class CategoriaProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //Vaciamos la tabla
    	CategoriaProducto::truncate();

        $categoriaProducto = new CategoriaProducto; //Creamos Categoria Producto
        $categoriaProducto->nombre = ' CAT5';
        $categoriaProducto->descripcion = 'Tipo de cable se extiende hasta un máximo de 100 metros y admite velocidades equivalentes a 100 mbts.';
        $categoriaProducto->save();//Guardamos Categoria Producto

        $categoriaProducto = new CategoriaProducto; //Creamos Categoria Producto
        $categoriaProducto->nombre = 'CAT5e';
        $categoriaProducto->descripcion = 'El estándar CAT5e transmite datos a una velocidad de 350mbts.';
        $categoriaProducto->save();//Guardamos Categoria Producto

        $categoriaProducto = new CategoriaProducto; //Creamos Categoria Producto
        $categoriaProducto->nombre = ' CAT6';
        $categoriaProducto->descripcion = 'Es un cable que es más capaz de transmitir datos a una frecuencia más alta.';
        $categoriaProducto->save();//Guardamos Categoria Producto
    }
    }
