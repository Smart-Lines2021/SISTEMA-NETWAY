<?php

use Illuminate\Database\Seeder;
use App\Admin\CategoriaProveedor;

class CategoriaProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaProveedor::truncate();

        $categoria_proveedor = new CategoriaProveedor();//Creamos cate$categoria_proveedor
        $categoria_proveedor->nombre = "Distribuidor de cómputo";
        $categoria_proveedor->save();//Guardamos cate$categoria_proveedor

        $categoria_proveedor = new CategoriaProveedor();//Creamos cate$categoria_proveedor
        $categoria_proveedor->nombre = "Consultores especializados";
        $categoria_proveedor->save();//Guardamos cate$categoria_proveedor

        $categoria_proveedor = new CategoriaProveedor();//Creamos cate$categoria_proveedor
        $categoria_proveedor->nombre = "Software";
        $categoria_proveedor->save();//Guardamos cate$categoria_proveedor
    }
}
