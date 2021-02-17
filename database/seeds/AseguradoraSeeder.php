<?php

use Illuminate\Database\Seeder;
use App\Admin\Aseguradora;

class AseguradoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aseguradora::truncate();
        $aseguradora = new Aseguradora();//Creamos aseguradora
        $aseguradora->nombre = "GNP";
        $aseguradora->save();//Guardamos aseguradora

        $aseguradora = new Aseguradora();//Creamos aseguradora
        $aseguradora->nombre = "AXA Seguros";
        $aseguradora->save();//Guardamos aseguradora

        $aseguradora = new Aseguradora();//Creamos aseguradora
        $aseguradora->nombre = "Qualitas";
        $aseguradora->save();//Guardamos aseguradora
        
    }
}
