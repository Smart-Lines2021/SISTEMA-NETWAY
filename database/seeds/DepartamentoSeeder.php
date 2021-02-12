<?php

use Illuminate\Database\Seeder;
use App\Admin\Departamento;
class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::truncate();
        
        $departamento = new Departamento;//Creamos departamento
        $departamento->nombre = "Metodologías y Estándares";
        $departamento->descripcion= "Incorporar estándares de calidad asociados a Tecnologías de Información y 
        Comunicación que permitan realizar mejoras continuas en los procesos de la Dirección del Trabajo.";
        $departamento->save();//Guardamos departamento

        $departamento = new Departamento;//Creamos departamento
        $departamento->nombre = "Desarrollo";
        $departamento->descripcion= "Analizar, diseñar y desarrollar sistemas informáticos que requiera la Dirección del Trabajo.
        Supervisar y participar en el desarrollo de sistemas informáticos que sean responsabilidad de contrapartes externas.";
        $departamento->save();//Guardamos departamento

        $departamento = new Departamento;//Creamos departamento
        $departamento->nombre = "Sistemas";
        $departamento->descripcion= "Administrar eficientemente las redes locales y extendidas, y servicios de telecomunicaciones.";
        $departamento->save();//Guardamos departamento

        $departamento = new Departamento;//Creamos departamento
        $departamento->nombre = "Soporte";
        $departamento->descripcion= "Asegurar el mantenimiento tanto preventivo, como correctivo, del hardware y software básico de la Dirección del Trabajo.";
        $departamento->save();//Guardamos departamento

    }
}
