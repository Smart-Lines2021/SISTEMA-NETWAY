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
        $horario->dia_inicio='Lunes';
        $horario->dia_final='Viernes';
        $horario->hora_entrada='8:00';
        $horario->hora_salida='15:00';
        $horario->save();//Guardamos horario

        $horario = new Horario();//Creamos horario
        $horario->dia_inicio='Lunes';
        $horario->dia_final='Miercoles';
        $horario->hora_entrada='8:00';
        $horario->hora_salida='18:00';
        $horario->save();//Guardamos horario

        $horario = new Horario();//Creamos horario
        $horario->dia_inicio='Lunes';
        $horario->dia_final='Sabado';
        $horario->hora_entrada='8:00';
        $horario->hora_salida='14:00';
        $horario->save();//Guardamos horario

        $horario = new Horario();//Creamos horario
        $horario->dia_inicio='Lunes';
        $horario->dia_final='Jueves';
        $horario->hora_entrada='8:00';
        $horario->hora_salida='16:00';
        $horario->save();//Guardamos horario

        $horario = new Horario();//Creamos horario
        $horario->dia_inicio='Viernes';
        $horario->dia_final='Lunes';
        $horario->hora_entrada='8:00';
        $horario->hora_salida='19:00';
        $horario->save();//Guardamos horario
    }
}
