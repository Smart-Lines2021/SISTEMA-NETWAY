<?php

use App\Admin\TallerMecanico;
use Illuminate\Database\Seeder;

class TallerMecanicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TallerMecanico::truncate();
        $tallerMecanico = new TallerMecanico();//Creamos TallerMecanico
        $tallerMecanico->nombre = "El Arsenal";
        $tallerMecanico->telefono = "4922509012";
        $tallerMecanico->direccion = "Centro";
        $tallerMecanico->persona_contacto = "Jesus Martinez";
        $tallerMecanico->correo_electronico = "jesus@gmail.com";
        $tallerMecanico->save();//Guardamos TallerMecanico

        $tallerMecanico = new TallerMecanico();//Creamos TallerMecanico
        $tallerMecanico->nombre = "Vulcanizadora Mendez";
        $tallerMecanico->telefono = "4922509011";
        $tallerMecanico->direccion = "Centro de Zacatecas";
        $tallerMecanico->persona_contacto = "jorge Martinez";
        $tallerMecanico->correo_electronico = "jorge@gmail.com";
        $tallerMecanico->save();//Guardamos TallerMecanico

        $tallerMecanico = new TallerMecanico();//Creamos TallerMecanico
        $tallerMecanico->nombre = "San Jose";
        $tallerMecanico->telefono = "4922509020";
        $tallerMecanico->direccion = "Centro de Zacatecas";
        $tallerMecanico->persona_contacto = "jose Martinez";
        $tallerMecanico->correo_electronico = "jose@gmail.com";
        $tallerMecanico->save();//Guardamos TallerMecanico
    }
}
