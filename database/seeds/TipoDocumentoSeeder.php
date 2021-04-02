<?php

use App\Recursos_Humanos\TipoDocumento;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	TipoDocumento::truncate();
        $tipoDocumento = new TipoDocumento();//Creamos TipoDocumento
        $tipoDocumento->nombre = "Certificado de Altura";
        $tipoDocumento->clave = "certificadoAltura";
        $tipoDocumento->descripcion = "Certificados de Altura del Empleado";
        $tipoDocumento->carpeta = "Certificados de Altura";
        $tipoDocumento->formato = "pdf";
        $tipoDocumento->save();//Guardamos el tipo de documento

         $tipoDocumento = new TipoDocumento();//Creamos TipoDocumento
         $tipoDocumento->nombre = "Constancia del Seguro";
         $tipoDocumento->clave = "constanciaSeguro";
         $tipoDocumento->descripcion = "Constancias del seguro del Empleado";
         $tipoDocumento->carpeta = "Constancias del Seguro";
         $tipoDocumento->formato = "pdf";
         $tipoDocumento->save();//Guardamos el tipo de documento

         $tipoDocumento = new TipoDocumento();//Creamos TipoDocumento
         $tipoDocumento->nombre = "Curp";
         $tipoDocumento->clave = "curp";
         $tipoDocumento->descripcion = "Curp del Empleado";
         $tipoDocumento->carpeta = "Curps";
         $tipoDocumento->formato = "pdf";
         $tipoDocumento->save();//Guardamos el tipo de documento

         $tipoDocumento = new TipoDocumento();//Creamos TipoDocumento
         $tipoDocumento->nombre = "Identificación Oficial";
         $tipoDocumento->clave = "identificacionOficial";
         $tipoDocumento->descripcion = "Identificaciones Oficiales del Empleado";
         $tipoDocumento->carpeta = "Identificaciones Oficiales";
         $tipoDocumento->formato = "pdf";
         $tipoDocumento->save();//Guardamos el tipo de documento

         $tipoDocumento = new TipoDocumento();//Creamos TipoDocumento
         $tipoDocumento->nombre = "PCR";
         $tipoDocumento->clave = "pcr";
         $tipoDocumento->descripcion = "Pruebas de Covid 19 del Empleado";
         $tipoDocumento->carpeta = "PCR";
         $tipoDocumento->formato = "pdf";
         $tipoDocumento->save();//Guardamos el tipo de documento

    }
}
