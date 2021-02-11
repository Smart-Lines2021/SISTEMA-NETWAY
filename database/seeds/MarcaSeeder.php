<?php

use Illuminate\Database\Seeder;
use App\Admin\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Vaciamos la tabla
    	Marca::truncate();

        $marca = new Marca; //Creamos marca
        $marca->nombre = 'GreenLeaf';
        $marca->categoria = 'Computo y Tecnología';
        $marca->save();//Guardamos marca

        $marca = new Marca; //Creamos marca
        $marca->nombre = 'Kingston';
        $marca->categoria = 'Dispositivos de almacenamiento';
        $marca->save();//Guardamos marca

        $marca = new Marca; //Creamos marca
        $marca->nombre = 'PowerLink';
        $marca->categoria = 'Redes';
        $marca->save();//Guardamos marca
    }
}
