<?php

use Illuminate\Database\Seeder;
use App\Admin\Cargo;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargo::truncate();
        $cargo = new Cargo;//Creamos cargo
        $cargo->nombre = "Analista de inteligencia de negocio";
        $cargo->save();//Guardamos cargo


        $cargo = new Cargo;//Creamos cargo
        $cargo->nombre = "Arquitecto cloud";
        $cargo->save();//Guardamos cargo


        $cargo = new Cargo;//Creamos cargo
        $cargo->nombre = "Especialistas en datos";
        $cargo->save();//Guardamos cargo


        $cargo = new Cargo;//Creamos cargo
        $cargo->nombre = "Desarrollador web, de software y para móviles";
        $cargo->save();//Guardamos cargo


        $cargo = new Cargo;//Creamos cargo
        $cargo->nombre = "Ingeniero DevOps";
        $cargo->save();//Guardamos cargo

        $cargo = new Cargo;//Creamos cargo
        $cargo->nombre = "Profesionales de asistencia y soporte técnico";
        $cargo->save();//Guardamos cargo

        $cargo = new Cargo;//Creamos cargo
        $cargo->nombre = "Administrador de red o cloud";
        $cargo->save();//Guardamos cargo

        $cargo = new Cargo;//Creamos cargo
        $cargo->nombre = "Profesional de seguridad";
        $cargo->save();//Guardamos cargo

        $cargo = new Cargo;//Creamos cargo
        $cargo->nombre = "Administrador de sistemas";
        $cargo->save();//Guardamos cargo
    }
}
