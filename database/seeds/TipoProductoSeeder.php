<?php

use Illuminate\Database\Seeder;
use App\Admin\TipoProducto;

class TipoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //Vaciamos la tabla
    	TipoProducto::truncate();

        $tipoProducto = new TipoProducto; //Creamos Categoria Producto
        $tipoProducto->nombre = 'Importado';
        $tipoProducto->descripcion = 'Son productos elaborados en el extranjero, cuyo precio a veces es muy alto';
        $tipoProducto->save();//Guardamos Categoria Producto

        $tipoProducto = new TipoProducto; //Creamos Categoria Producto
        $tipoProducto->nombre = 'Nacional';
        $tipoProducto->descripcion = 'Productos fabricados y elaborados en el país';
        $tipoProducto->save();//Guardamos Categoria Producto

        $tipoProducto = new TipoProducto; //Creamos Categoria Producto
        $tipoProducto->nombre = 'Alta rotación';
        $tipoProducto->descripcion = 'Son los que se producen en gran cantidad, rápidamente y para una temporada corta';
        $tipoProducto->save();//Guardamos Categoria Producto
    }
    }
