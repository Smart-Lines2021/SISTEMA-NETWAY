<?php

use App\Admin\DomicilioPersona;
use App\Admin\Persona;
use App\Recursos_Humanos\InformacionLaboral;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Persona::truncate();
    	DomicilioPersona::truncate();
    	InformacionLaboral::truncate();
        $persona = new Persona();//Creamos persona
		$persona->nombre='Jesus';
		$persona->apellido='Ramirez';
		$persona->curp='MOTJ980612HZSKRN01';
		$persona->rfc='GEC850101401';
		$persona->correo='jesus@hotmail.com';
		$persona->nss='55555551';
		$persona->carrera='Ingenieria Informática';
		$persona->cuenta='Sin Asignar';
        $persona->save();//Guardamos persona
        $domicilioPersona=new DomicilioPersona();
		$domicilioPersona->calle='Familia Real';
		$domicilioPersona->codigo_postal='98615';
		$domicilioPersona->colonia='Guadalupe Colonial';
		$domicilioPersona->numero_interior='142';
		$domicilioPersona->numero_exterior='142';
		$domicilioPersona->estado='Zacatecas';
		$domicilioPersona->municipio='Guadalupe';
		$domicilioPersona->persona_id=$persona->id;
		$domicilioPersona->save();//Guardamos el domicilio del empleado
		$informacionLaboral=new InformacionLaboral();
		$informacionLaboral->persona_id=$persona->id;
		$informacionLaboral->cargo_id=4;
		$informacionLaboral->departamento_id=3;
		$informacionLaboral->salario=44545.00;
		$informacionLaboral->fecha_ingreso='2021-03-09';
		$informacionLaboral->save();//Guardamos la información laboral


        $persona = new Persona();//Creamos persona
		$persona->nombre='Angel';
		$persona->apellido='Molina De La Torre';
		$persona->curp='MOTJ980612HZSKRN02';
		$persona->rfc='GEC850202402';
		$persona->correo='angel@hotmail.com';
		$persona->nss='55555552';
		$persona->carrera='Ingenieria Informática';
		$persona->cuenta='Sin Asignar';
        $persona->save();//Guardamos persona
        $domicilioPersona=new DomicilioPersona();
		$domicilioPersona->calle='Familia Real';
		$domicilioPersona->codigo_postal='98615';
		$domicilioPersona->colonia='Guadalupe Colonial';
		$domicilioPersona->numero_interior='142';
		$domicilioPersona->numero_exterior='142';
		$domicilioPersona->estado='Zacatecas';
		$domicilioPersona->municipio='Guadalupe';
		$domicilioPersona->persona_id=$persona->id;
		$domicilioPersona->save();//Guardamos el domicilio del empleado
		$informacionLaboral=new InformacionLaboral();
		$informacionLaboral->persona_id=$persona->id;
		$informacionLaboral->cargo_id=3;
		$informacionLaboral->departamento_id=3;
		$informacionLaboral->salario=44545.00;
		$informacionLaboral->fecha_ingreso='2020-03-09';
		$informacionLaboral->save();//Guardamos la información laboral

        $persona = new Persona();//Creamos persona
		$persona->nombre='Deni';
		$persona->apellido='Alvarado Hernandez';
		$persona->curp='MOTJ980612HZSKRN03';
		$persona->rfc='GEC850303403';
		$persona->correo='deni@hotmail.com';
		$persona->nss='55555553';
		$persona->carrera='Ingenieria Informática';
		$persona->cuenta='Sin Asignar';
        $persona->save();//Guardamos persona
        $domicilioPersona=new DomicilioPersona();
		$domicilioPersona->calle='Familia Real';
		$domicilioPersona->codigo_postal='98615';
		$domicilioPersona->colonia='Guadalupe Colonial';
		$domicilioPersona->numero_interior='142';
		$domicilioPersona->numero_exterior='142';
		$domicilioPersona->estado='Zacatecas';
		$domicilioPersona->municipio='Guadalupe';
		$domicilioPersona->persona_id=$persona->id;
		$domicilioPersona->save();//Guardamos el domicilio del empleado
		$informacionLaboral=new InformacionLaboral();
		$informacionLaboral->persona_id=$persona->id;
		$informacionLaboral->cargo_id=2;
		$informacionLaboral->departamento_id=3;
		$informacionLaboral->salario=44545.00;
		$informacionLaboral->fecha_ingreso='2019-03-09';
		$informacionLaboral->save();//Guardamos la información laboral

        $persona = new Persona();//Creamos persona
		$persona->nombre='Brian';
		$persona->apellido='Gallardo Gonzalez';
		$persona->curp='MOTJ980612HZSKRN04';
		$persona->rfc='GEC850404404';
		$persona->correo='brian@hotmail.com';
		$persona->nss='55555554';
		$persona->carrera='Ingenieria Informática';
		$persona->cuenta='Sin Asignar';
        $persona->save();//Guardamos persona
        $domicilioPersona=new DomicilioPersona();
		$domicilioPersona->calle='Familia Real';
		$domicilioPersona->codigo_postal='98615';
		$domicilioPersona->colonia='Guadalupe Colonial';
		$domicilioPersona->numero_interior='142';
		$domicilioPersona->numero_exterior='142';
		$domicilioPersona->estado='Zacatecas';
		$domicilioPersona->municipio='Guadalupe';
		$domicilioPersona->persona_id=$persona->id;
		$domicilioPersona->save();//Guardamos el domicilio del empleado
		$informacionLaboral=new InformacionLaboral();
		$informacionLaboral->persona_id=$persona->id;
		$informacionLaboral->cargo_id=4;
		$informacionLaboral->departamento_id=1;
		$informacionLaboral->salario=44545.00;
		$informacionLaboral->fecha_ingreso='2018-03-09';
		$informacionLaboral->save();//Guardamos la información laboral

        $persona = new Persona();//Creamos persona
		$persona->nombre='Eduardo';
		$persona->apellido='Reyes Sanchez';
		$persona->curp='MOTJ980612HZSKRN05';
		$persona->rfc='GEC850505405';
		$persona->correo='eduardo@hotmail.com';
		$persona->nss='55555555';
		$persona->carrera='Ingenieria Informática';
		$persona->cuenta='Sin Asignar';
        $persona->save();//Guardamos persona
        $domicilioPersona=new DomicilioPersona();
		$domicilioPersona->calle='Familia Real';
		$domicilioPersona->codigo_postal='98615';
		$domicilioPersona->colonia='Guadalupe Colonial';
		$domicilioPersona->numero_interior='142';
		$domicilioPersona->numero_exterior='142';
		$domicilioPersona->estado='Zacatecas';
		$domicilioPersona->municipio='Guadalupe';
		$domicilioPersona->persona_id=$persona->id;
		$domicilioPersona->save();//Guardamos el domicilio del empleado
		$informacionLaboral=new InformacionLaboral();
		$informacionLaboral->persona_id=$persona->id;
		$informacionLaboral->cargo_id=3;
		$informacionLaboral->departamento_id=1;
		$informacionLaboral->salario=44545.00;
		$informacionLaboral->fecha_ingreso='2017-03-09';
		$informacionLaboral->save();//Guardamos la información laboral

        $persona = new Persona();//Creamos persona
		$persona->nombre='Fabian';
		$persona->apellido='Villa';
		$persona->curp='MOTJ980612HZSKRN06';
		$persona->rfc='GEC850606406';
		$persona->correo='fabian@hotmail.com';
		$persona->nss='55555556';
		$persona->carrera='Ingenieria Informática';
		$persona->cuenta='Sin Asignar';
        $persona->save();//Guardamos persona
        $domicilioPersona=new DomicilioPersona();
		$domicilioPersona->calle='Familia Real';
		$domicilioPersona->codigo_postal='98615';
		$domicilioPersona->colonia='Guadalupe Colonial';
		$domicilioPersona->numero_interior='142';
		$domicilioPersona->numero_exterior='142';
		$domicilioPersona->estado='Zacatecas';
		$domicilioPersona->municipio='Guadalupe';
		$domicilioPersona->persona_id=$persona->id;
		$domicilioPersona->save();//Guardamos el domicilio del empleado
		$informacionLaboral=new InformacionLaboral();
		$informacionLaboral->persona_id=$persona->id;
		$informacionLaboral->cargo_id=2;
		$informacionLaboral->departamento_id=1;
		$informacionLaboral->salario=44545.00;
		$informacionLaboral->fecha_ingreso='2017-03-09';
		$informacionLaboral->save();//Guardamos la información laboral

        $persona = new Persona();//Creamos persona
		$persona->nombre='Antonio';
		$persona->apellido='Duran';
		$persona->curp='MOTJ980612HZSKRN07';
		$persona->rfc='GEC850707407';
		$persona->correo='Antonio@hotmail.com';
		$persona->nss='55555557';
		$persona->carrera='Ingenieria Informática';
		$persona->cuenta='Sin Asignar';
        $persona->save();//Guardamos persona
        $domicilioPersona=new DomicilioPersona();
		$domicilioPersona->calle='Familia Real';
		$domicilioPersona->codigo_postal='98615';
		$domicilioPersona->colonia='Guadalupe Colonial';
		$domicilioPersona->numero_interior='142';
		$domicilioPersona->numero_exterior='142';
		$domicilioPersona->estado='Zacatecas';
		$domicilioPersona->municipio='Guadalupe';
		$domicilioPersona->persona_id=$persona->id;
		$domicilioPersona->save();//Guardamos el domicilio del empleado
		$informacionLaboral=new InformacionLaboral();
		$informacionLaboral->persona_id=$persona->id;
		$informacionLaboral->cargo_id=4;
		$informacionLaboral->departamento_id=2;
		$informacionLaboral->salario=44545.00;
		$informacionLaboral->fecha_ingreso='2016-03-09';
		$informacionLaboral->save();//Guardamos la información laboral

        $persona = new Persona();//Creamos persona
		$persona->nombre='Mariana';
		$persona->apellido='Garcia';
		$persona->curp='MOTJ980612HZSKRN08';
		$persona->rfc='GEC850808408';
		$persona->correo='mariana@hotmail.com';
		$persona->nss='55555558';
		$persona->carrera='Ingenieria Informática';
		$persona->cuenta='Sin Asignar';
        $persona->save();//Guardamos persona
        $domicilioPersona=new DomicilioPersona();
		$domicilioPersona->calle='Familia Real';
		$domicilioPersona->codigo_postal='98615';
		$domicilioPersona->colonia='Guadalupe Colonial';
		$domicilioPersona->numero_interior='142';
		$domicilioPersona->numero_exterior='142';
		$domicilioPersona->estado='Zacatecas';
		$domicilioPersona->municipio='Guadalupe';
		$domicilioPersona->persona_id=$persona->id;
		$domicilioPersona->save();//Guardamos el domicilio del empleado
		$informacionLaboral=new InformacionLaboral();
		$informacionLaboral->persona_id=$persona->id;
		$informacionLaboral->cargo_id=3;
		$informacionLaboral->departamento_id=2;
		$informacionLaboral->salario=44545.00;
		$informacionLaboral->fecha_ingreso='2015-03-09';
		$informacionLaboral->save();//Guardamos la información laboral

        $persona = new Persona();//Creamos persona
		$persona->nombre='Jorge';
		$persona->apellido='Medina';
		$persona->curp='MOTJ980612HZSKRN09';
		$persona->rfc='GEC850909409';
		$persona->correo='jorge@hotmail.com';
		$persona->nss='55555559';
		$persona->carrera='Ingenieria Informática';
		$persona->cuenta='Sin Asignar';
        $persona->save();//Guardamos persona
        $domicilioPersona=new DomicilioPersona();
		$domicilioPersona->calle='Familia Real';
		$domicilioPersona->codigo_postal='98615';
		$domicilioPersona->colonia='Guadalupe Colonial';
		$domicilioPersona->numero_interior='142';
		$domicilioPersona->numero_exterior='142';
		$domicilioPersona->estado='Zacatecas';
		$domicilioPersona->municipio='Guadalupe';
		$domicilioPersona->persona_id=$persona->id;
		$domicilioPersona->save();//Guardamos el domicilio del empleado
		$informacionLaboral=new InformacionLaboral();
		$informacionLaboral->persona_id=$persona->id;
		$informacionLaboral->cargo_id=1;
		$informacionLaboral->departamento_id=2;
		$informacionLaboral->salario=44545.00;
		$informacionLaboral->fecha_ingreso='2014-03-09';
		$informacionLaboral->save();//Guardamos la información laboral

        $persona = new Persona();//Creamos persona
		$persona->nombre='Julio';
		$persona->apellido='Mendez';
		$persona->curp='MOTJ980612HZSKRN10';
		$persona->rfc='GEC850202410';
		$persona->correo='julio@hotmail.com';
		$persona->nss='55555510';
		$persona->carrera='Ingenieria Informática';
		$persona->cuenta='Sin Asignar';
        $persona->save();//Guardamos persona
        $domicilioPersona=new DomicilioPersona();
		$domicilioPersona->calle='Familia Real';
		$domicilioPersona->codigo_postal='98615';
		$domicilioPersona->colonia='Guadalupe Colonial';
		$domicilioPersona->numero_interior='142';
		$domicilioPersona->numero_exterior='142';
		$domicilioPersona->estado='Zacatecas';
		$domicilioPersona->municipio='Guadalupe';
		$domicilioPersona->persona_id=$persona->id;
		$domicilioPersona->save();//Guardamos el domicilio del empleado
		$informacionLaboral=new InformacionLaboral();
		$informacionLaboral->persona_id=$persona->id;
		$informacionLaboral->cargo_id=4;
		$informacionLaboral->departamento_id=4;
		$informacionLaboral->salario=44545.00;
		$informacionLaboral->fecha_ingreso='2013-03-09';
		$informacionLaboral->save();//Guardamos la información laboral

        $persona = new Persona();//Creamos persona
		$persona->nombre='Alondra';
		$persona->apellido='Garcia';
		$persona->curp='MOTJ980612HZSKRN11';
		$persona->rfc='GEC850202411';
		$persona->correo='alondra@hotmail.com';
		$persona->nss='55555511';
		$persona->carrera='Ingenieria Informática';
		$persona->cuenta='Sin Asignar';
        $persona->save();//Guardamos persona
        $domicilioPersona=new DomicilioPersona();
		$domicilioPersona->calle='Familia Real';
		$domicilioPersona->codigo_postal='98615';
		$domicilioPersona->colonia='Guadalupe Colonial';
		$domicilioPersona->numero_interior='142';
		$domicilioPersona->numero_exterior='142';
		$domicilioPersona->estado='Zacatecas';
		$domicilioPersona->municipio='Guadalupe';
		$domicilioPersona->persona_id=$persona->id;
		$domicilioPersona->save();//Guardamos el domicilio del empleado
		$informacionLaboral=new InformacionLaboral();
		$informacionLaboral->persona_id=$persona->id;
		$informacionLaboral->cargo_id=3;
		$informacionLaboral->departamento_id=4;
		$informacionLaboral->salario=44545.00;
		$informacionLaboral->fecha_ingreso='2012-03-09';
		$informacionLaboral->save();//Guardamos la información laboral

        $persona = new Persona();//Creamos persona
		$persona->nombre='Mario';
		$persona->apellido='Mendez';
		$persona->curp='MOTJ980612HZSKRN12';
		$persona->rfc='GEC850202412';
		$persona->correo='mario@hotmail.com';
		$persona->nss='55555512';
		$persona->carrera='Ingenieria Informática';
		$persona->cuenta='Sin Asignar';
        $persona->save();//Guardamos persona
        $domicilioPersona=new DomicilioPersona();
		$domicilioPersona->calle='Familia Real';
		$domicilioPersona->codigo_postal='98615';
		$domicilioPersona->colonia='Guadalupe Colonial';
		$domicilioPersona->numero_interior='142';
		$domicilioPersona->numero_exterior='142';
		$domicilioPersona->estado='Zacatecas';
		$domicilioPersona->municipio='Guadalupe';
		$domicilioPersona->persona_id=$persona->id;
		$domicilioPersona->save();//Guardamos el domicilio del empleado
		$informacionLaboral=new InformacionLaboral();
		$informacionLaboral->persona_id=$persona->id;
		$informacionLaboral->cargo_id=1;
		$informacionLaboral->departamento_id=4;
		$informacionLaboral->salario=44545.00;
		$informacionLaboral->fecha_ingreso='2011-03-09';
		$informacionLaboral->save();//Guardamos la información laboral
    }
}
