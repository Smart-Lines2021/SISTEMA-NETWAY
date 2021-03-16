<?php

use App\Recursos_Humanos\Horario;
use Illuminate\Database\Seeder;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Horario::truncate();
        $horario = new Horario();//Creamos horario
        $horario->dias='Lunes-Viernes';
        $horario->hora_entrada='8:00';
        $horario->hora_salida='16:00';
        $horario->save();//Guardamos horario

        $horario = new Horario();//Creamos horario
        $horario->dias='Lunes-Sabado';
        $horario->hora_entrada='8:00';
        $horario->hora_salida='14:00';
        $horario->save();//Guardamos horario

        $horario = new Horario();//Creamos horario
        $horario->dias='Viernes-Domingo';
        $horario->hora_entrada='8:00';
        $horario->hora_salida='20:00';
        $horario->save();//Guardamos horario

        $horario = new Horario();//Creamos horario
        $horario->dias='Lunes-Jueves';
        $horario->hora_entrada='8:00';
        $horario->hora_salida='17:00';
        $horario->save();//Guardamos horario

        $horario = new Horario();//Creamos horario
        $horario->dias='Lunes-Miercoles';
        $horario->hora_entrada='8:00';
        $horario->hora_salida='20:00';
        $horario->save();//Guardamos horario
    }
}
