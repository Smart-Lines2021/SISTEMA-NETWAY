<?php

use App\Recursos_Humanos\RazonPermiso;
use Illuminate\Database\Seeder;

class JustificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RazonPermiso::truncate();
        $razonPermiso = new RazonPermiso();//Creamos Razon de Permiso
        $razonPermiso->descripcion='Enfermedad';
        $razonPermiso->duracion='5 dias';
        $razonPermiso->save();//Guardamos la razon del Permiso

        $razonPermiso = new RazonPermiso();//Creamos Razon de Permiso
        $razonPermiso->descripcion='Embarazo';
        $razonPermiso->duracion='2 semanas';
        $razonPermiso->save();//Guardamos la razon del Permiso

        $razonPermiso = new RazonPermiso();//Creamos Razon de Permiso
        $razonPermiso->descripcion='Covid 19';
        $razonPermiso->duracion='2 semanas';
        $razonPermiso->save();//Guardamos la razon del Permiso

        $razonPermiso = new RazonPermiso();//Creamos Razon de Permiso
        $razonPermiso->descripcion='Perdida Familiar';
        $razonPermiso->duracion='5 dias';
        $razonPermiso->save();//Guardamos la razon del Permiso

        $razonPermiso = new RazonPermiso();//Creamos Razon de Permiso
        $razonPermiso->descripcion='Permiso Economico';
        $razonPermiso->duracion='3 dias';
        $razonPermiso->save();//Guardamos la razon del Permiso
    }
}
