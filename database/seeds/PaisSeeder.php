<?php

use Illuminate\Database\Seeder;
use App\Admin\Pais;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciamos la tabla paises
    	Pais::truncate();


    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Afganistán';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Albania';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Alemania';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Andorra';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Angola';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Antigua y Barbuda';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Arabia Saudí';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Argelia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Argentina';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Armenia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Australia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Austria';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Azerbaiyán';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Bahamas';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Bahréin';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Bangladesh';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Barbados';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Belarús';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Bélgica';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Belice';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Benin';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Bhután';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Bolivia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Bosnia y Herzegovina';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Botswana';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Brasil';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Brunei';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Bulgaria';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Burkina Faso';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Burundi';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Cabo Verde';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Camboya';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Camerún';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Canadá';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Chad';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Chile';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'China';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Chipre';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Colombia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Comores';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Congo';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Corea';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Corea del Norte';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Costa de Marfil';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Costa Rica';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Croacia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Cuba';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Dinamarca';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Djibouti';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Dominica';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Ecuador';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Egipto';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'El Salvador';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Emiratos Árabes Unidos';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Eritrea';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Eslovenia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'España';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Estados Unidos de América';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Estonia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Etiopía';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Fiji';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Filipinas';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Finlandia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Francia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Gabón';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Gambia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Georgia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Ghana';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Granada';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Grecia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Guatemala';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Guinea';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Guinea Ecuatorial';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Guinea-Bissau';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Guyana';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Haití';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Honduras';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Hungría';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'India';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Indonesia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Irán';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Iraq';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Irlanda';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Islandia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Islas Cook';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Islas Marshall';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Islas Salomón';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Israel';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Italia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Jamaica';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Japón';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Jordania';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Kazajstán';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Kenia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Kirguistán';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Kiribati';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Kuwait';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Laos';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Lesotho';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Letonia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Líbano';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Liberia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Libia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Liechtenstein';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Lituania';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Luxemburgo';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Macedonia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Madagascar';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Malasia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Malawi';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Maldivas';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Mali';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Malta';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Marruecos';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Mauricio';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Mauritania';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'México';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Micronesia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Moldavia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Mónaco';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Mongolia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Montenegro';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Mozambique';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Myanmar';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Namibia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Nauru';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Nepal';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Nicaragua';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Níger';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Nigeria';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Noruega';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Nueva Zelanda';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Omán';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Otros países de África';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Otros países de América';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Otros países de Asia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Otros países de Europa';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Otros países de Oceanía';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Países Bajos';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Pakistán';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Palaos';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Palestina';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Panamá';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Papúa Nueva Guinea';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Paraguay';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Perú';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Polonia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Portugal';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Qatar';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Reino Unido';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'República Centroafricana';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'República Checa';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'República Democrática del Congo';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'República Dominicana';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'República Eslovaca';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Ruanda';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Rumanía';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Rusia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Samoa';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'San Cristóbal y Nieves';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'San Marino';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'San Vicente y las Granadinas';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Santa Lucía';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Santa Sede';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Santo Tomé y Príncipe';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Senegal';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Serbia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Seychelles';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Sierra Leona';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Singapur';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Siria';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Somalia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Sri Lanka';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Sudáfrica';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Sudán';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Sudán del Sur';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Suecia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Suiza';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Surinam';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Swazilandia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Tailandia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Tanzania';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Tayikistán';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Timor Oriental';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Togo';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Tonga';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Trinidad y Tobago';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Túnez';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Turkmenistán';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Turquía';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Tuvalu';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Ucrania';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Uganda';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Uruguay';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Uzbekistán';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Vanuatu';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Venezuela';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Vietnam';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Yemen';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Zambia';
    	$pais->save();//Guardamos pais

    	$pais = new App\Admin\Pais; //Creamos pais
    	$pais->nombre = 'Zimbabue';
    	$pais->save();//Guardamos pais
    }
}
