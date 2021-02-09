<?php

use Illuminate\Database\Seeder;
use App\Admin\Municipio;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//Vaciamos la tabla
    	Municipio::truncate();

/*
       Municipio::create([
            'nombre' =>  'Aguascalientes',
            'estado_id' => '01',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Asientos',
            'estado_id' => '01',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Calvillo',
            'estado_id' => '01',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Cosío',
            'estado_id' => '01',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Jesús María',
            'estado_id' => '01',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Pabellón de Arteaga',
            'estado_id' => '01',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Rincón de Romos',
            'estado_id' => '01',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'San José de Gracia',
            'estado_id' => '01',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Tepezalá',
            'estado_id' => '01',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'El Llano',
            'estado_id' => '01',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco de los Romo',
            'estado_id' => '01',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Ensenada',
            'estado_id' => '02',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Mexicali',
            'estado_id' => '02',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Tecate',
            'estado_id' => '02',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Tijuana',
            'estado_id' => '02',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Playas de Rosarito',
            'estado_id' => '02',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Comondú',
            'estado_id' => '03',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Mulegé',
            'estado_id' => '03',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'La Paz',
            'estado_id' => '03',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Los Cabos',
            'estado_id' => '03',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Loreto',
            'estado_id' => '03',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Calkiní',
            'estado_id' => '04',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Campeche',
            'estado_id' => '04',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Carmen',
            'estado_id' => '04',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Champotón',
            'estado_id' => '04',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Hecelchakán',
            'estado_id' => '04',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Hopelchén',
            'estado_id' => '04',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Palizada',
            'estado_id' => '04',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Tenabo',
            'estado_id' => '04',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Escárcega',
            'estado_id' => '04',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Calakmul',
            'estado_id' => '04',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Candelaria',
            'estado_id' => '04',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Abasolo',
            'estado_id' => '05',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Acuña',
            'estado_id' => '05',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Allende',
            'estado_id' => '05',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Arteaga',
            'estado_id' => '05',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Candela',
            'estado_id' => '05',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Castaños',
            'estado_id' => '05',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Cuatro Ciénegas',
            'estado_id' => '05',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Escobedo',
            'estado_id' => '05',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Francisco I. Madero',
            'estado_id' => '05',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Frontera',
            'estado_id' => '05',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'General Cepeda',
            'estado_id' => '05',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Guerrero',
            'estado_id' => '05',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'Hidalgo',
            'estado_id' => '05',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'Jiménez',
            'estado_id' => '05',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Juárez',
            'estado_id' => '05',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'Lamadrid',
            'estado_id' => '05',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'Matamoros',
            'estado_id' => '05',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'Monclova',
            'estado_id' => '05',
            'numero' =>  '018',
        ]);
       Municipio::create([
            'nombre' =>  'Morelos',
            'estado_id' => '05',
            'numero' =>  '019',
        ]);
       Municipio::create([
            'nombre' =>  'Múzquiz',
            'estado_id' => '05',
            'numero' =>  '020',
        ]);
       Municipio::create([
            'nombre' =>  'Nadadores',
            'estado_id' => '05',
            'numero' =>  '021',
        ]);
       Municipio::create([
            'nombre' =>  'Nava',
            'estado_id' => '05',
            'numero' =>  '022',
        ]);
       Municipio::create([
            'nombre' =>  'Ocampo',
            'estado_id' => '05',
            'numero' =>  '023',
        ]);
       Municipio::create([
            'nombre' =>  'Parras',
            'estado_id' => '05',
            'numero' =>  '024',
        ]);
       Municipio::create([
            'nombre' =>  'Piedras Negras',
            'estado_id' => '05',
            'numero' =>  '025',
        ]);
       Municipio::create([
            'nombre' =>  'Progreso',
            'estado_id' => '05',
            'numero' =>  '026',
        ]);
       Municipio::create([
            'nombre' =>  'Ramos Arizpe',
            'estado_id' => '05',
            'numero' =>  '027',
        ]);
       Municipio::create([
            'nombre' =>  'Sabinas',
            'estado_id' => '05',
            'numero' =>  '028',
        ]);
       Municipio::create([
            'nombre' =>  'Sacramento',
            'estado_id' => '05',
            'numero' =>  '029',
        ]);
       Municipio::create([
            'nombre' =>  'Saltillo',
            'estado_id' => '05',
            'numero' =>  '030',
        ]);
       Municipio::create([
            'nombre' =>  'San Buenaventura',
            'estado_id' => '05',
            'numero' =>  '031',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan de Sabinas',
            'estado_id' => '05',
            'numero' =>  '032',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro',
            'estado_id' => '05',
            'numero' =>  '033',
        ]);
       Municipio::create([
            'nombre' =>  'Sierra Mojada',
            'estado_id' => '05',
            'numero' =>  '034',
        ]);
       Municipio::create([
            'nombre' =>  'Torreón',
            'estado_id' => '05',
            'numero' =>  '035',
        ]);
       Municipio::create([
            'nombre' =>  'Viesca',
            'estado_id' => '05',
            'numero' =>  '036',
        ]);
       Municipio::create([
            'nombre' =>  'Villa Unión',
            'estado_id' => '05',
            'numero' =>  '037',
        ]);
       Municipio::create([
            'nombre' =>  'Zaragoza',
            'estado_id' => '05',
            'numero' =>  '038',
        ]);
       Municipio::create([
            'nombre' =>  'Armería',
            'estado_id' => '06',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Colima',
            'estado_id' => '06',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Comala',
            'estado_id' => '06',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Coquimatlán',
            'estado_id' => '06',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Cuauhtémoc',
            'estado_id' => '06',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Ixtlahuacán',
            'estado_id' => '06',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Manzanillo',
            'estado_id' => '06',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Minatitlán',
            'estado_id' => '06',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Tecomán',
            'estado_id' => '06',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Villa de Álvarez',
            'estado_id' => '06',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Acacoyagua',
            'estado_id' => '07',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Acala',
            'estado_id' => '07',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Acapetahua',
            'estado_id' => '07',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Altamirano',
            'estado_id' => '07',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Amatán',
            'estado_id' => '07',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Amatenango de la Frontera',
            'estado_id' => '07',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Amatenango del Valle',
            'estado_id' => '07',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Angel Albino Corzo',
            'estado_id' => '07',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Arriaga',
            'estado_id' => '07',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Bejucal de Ocampo',
            'estado_id' => '07',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Bella Vista',
            'estado_id' => '07',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Berriozábal',
            'estado_id' => '07',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'Bochil',
            'estado_id' => '07',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'El Bosque',
            'estado_id' => '07',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Cacahoatán',
            'estado_id' => '07',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'Catazajá',
            'estado_id' => '07',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'Cintalapa',
            'estado_id' => '07',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'Coapilla',
            'estado_id' => '07',
            'numero' =>  '018',
        ]);
       Municipio::create([
            'nombre' =>  'Comitán de Domínguez',
            'estado_id' => '07',
            'numero' =>  '019',
        ]);
       Municipio::create([
            'nombre' =>  'La Concordia',
            'estado_id' => '07',
            'numero' =>  '020',
        ]);
       Municipio::create([
            'nombre' =>  'Copainalá',
            'estado_id' => '07',
            'numero' =>  '021',
        ]);
       Municipio::create([
            'nombre' =>  'Chalchihuitán',
            'estado_id' => '07',
            'numero' =>  '022',
        ]);
       Municipio::create([
            'nombre' =>  'Chamula',
            'estado_id' => '07',
            'numero' =>  '023',
        ]);
       Municipio::create([
            'nombre' =>  'Chanal',
            'estado_id' => '07',
            'numero' =>  '024',
        ]);
       Municipio::create([
            'nombre' =>  'Chapultenango',
            'estado_id' => '07',
            'numero' =>  '025',
        ]);
       Municipio::create([
            'nombre' =>  'Chenalhó',
            'estado_id' => '07',
            'numero' =>  '026',
        ]);
       Municipio::create([
            'nombre' =>  'Chiapa de Corzo',
            'estado_id' => '07',
            'numero' =>  '027',
        ]);
       Municipio::create([
            'nombre' =>  'Chiapilla',
            'estado_id' => '07',
            'numero' =>  '028',
        ]);
       Municipio::create([
            'nombre' =>  'Chicoasén',
            'estado_id' => '07',
            'numero' =>  '029',
        ]);
       Municipio::create([
            'nombre' =>  'Chicomuselo',
            'estado_id' => '07',
            'numero' =>  '030',
        ]);
       Municipio::create([
            'nombre' =>  'Chilón',
            'estado_id' => '07',
            'numero' =>  '031',
        ]);
       Municipio::create([
            'nombre' =>  'Escuintla',
            'estado_id' => '07',
            'numero' =>  '032',
        ]);
       Municipio::create([
            'nombre' =>  'Francisco León',
            'estado_id' => '07',
            'numero' =>  '033',
        ]);
       Municipio::create([
            'nombre' =>  'Frontera Comalapa',
            'estado_id' => '07',
            'numero' =>  '034',
        ]);
       Municipio::create([
            'nombre' =>  'Frontera Hidalgo',
            'estado_id' => '07',
            'numero' =>  '035',
        ]);
       Municipio::create([
            'nombre' =>  'La Grandeza',
            'estado_id' => '07',
            'numero' =>  '036',
        ]);
       Municipio::create([
            'nombre' =>  'Huehuetán',
            'estado_id' => '07',
            'numero' =>  '037',
        ]);
       Municipio::create([
            'nombre' =>  'Huixtán',
            'estado_id' => '07',
            'numero' =>  '038',
        ]);
       Municipio::create([
            'nombre' =>  'Huitiupán',
            'estado_id' => '07',
            'numero' =>  '039',
        ]);
       Municipio::create([
            'nombre' =>  'Huixtla',
            'estado_id' => '07',
            'numero' =>  '040',
        ]);
       Municipio::create([
            'nombre' =>  'La Independencia',
            'estado_id' => '07',
            'numero' =>  '041',
        ]);
       Municipio::create([
            'nombre' =>  'Ixhuatán',
            'estado_id' => '07',
            'numero' =>  '042',
        ]);
       Municipio::create([
            'nombre' =>  'Ixtacomitán',
            'estado_id' => '07',
            'numero' =>  '043',
        ]);
       Municipio::create([
            'nombre' =>  'Ixtapa',
            'estado_id' => '07',
            'numero' =>  '044',
        ]);
       Municipio::create([
            'nombre' =>  'Ixtapangajoya',
            'estado_id' => '07',
            'numero' =>  '045',
        ]);
       Municipio::create([
            'nombre' =>  'Jiquipilas',
            'estado_id' => '07',
            'numero' =>  '046',
        ]);
       Municipio::create([
            'nombre' =>  'Jitotol',
            'estado_id' => '07',
            'numero' =>  '047',
        ]);
       Municipio::create([
            'nombre' =>  'Juárez',
            'estado_id' => '07',
            'numero' =>  '048',
        ]);
       Municipio::create([
            'nombre' =>  'Larráinzar',
            'estado_id' => '07',
            'numero' =>  '049',
        ]);
       Municipio::create([
            'nombre' =>  'La Libertad',
            'estado_id' => '07',
            'numero' =>  '050',
        ]);
       Municipio::create([
            'nombre' =>  'Mapastepec',
            'estado_id' => '07',
            'numero' =>  '051',
        ]);
       Municipio::create([
            'nombre' =>  'Las Margaritas',
            'estado_id' => '07',
            'numero' =>  '052',
        ]);
       Municipio::create([
            'nombre' =>  'Mazapa de Madero',
            'estado_id' => '07',
            'numero' =>  '053',
        ]);
       Municipio::create([
            'nombre' =>  'Mazatán',
            'estado_id' => '07',
            'numero' =>  '054',
        ]);
       Municipio::create([
            'nombre' =>  'Metapa',
            'estado_id' => '07',
            'numero' =>  '055',
        ]);
       Municipio::create([
            'nombre' =>  'Mitontic',
            'estado_id' => '07',
            'numero' =>  '056',
        ]);
       Municipio::create([
            'nombre' =>  'Motozintla',
            'estado_id' => '07',
            'numero' =>  '057',
        ]);
       Municipio::create([
            'nombre' =>  'Nicolás Ruíz',
            'estado_id' => '07',
            'numero' =>  '058',
        ]);
       Municipio::create([
            'nombre' =>  'Ocosingo',
            'estado_id' => '07',
            'numero' =>  '059',
        ]);
       Municipio::create([
            'nombre' =>  'Ocotepec',
            'estado_id' => '07',
            'numero' =>  '060',
        ]);
       Municipio::create([
            'nombre' =>  'Ocozocoautla de Espinosa',
            'estado_id' => '07',
            'numero' =>  '061',
        ]);
       Municipio::create([
            'nombre' =>  'Ostuacán',
            'estado_id' => '07',
            'numero' =>  '062',
        ]);
       Municipio::create([
            'nombre' =>  'Osumacinta',
            'estado_id' => '07',
            'numero' =>  '063',
        ]);
       Municipio::create([
            'nombre' =>  'Oxchuc',
            'estado_id' => '07',
            'numero' =>  '064',
        ]);
       Municipio::create([
            'nombre' =>  'Palenque',
            'estado_id' => '07',
            'numero' =>  '065',
        ]);
       Municipio::create([
            'nombre' =>  'Pantelhó',
            'estado_id' => '07',
            'numero' =>  '066',
        ]);
       Municipio::create([
            'nombre' =>  'Pantepec',
            'estado_id' => '07',
            'numero' =>  '067',
        ]);
       Municipio::create([
            'nombre' =>  'Pichucalco',
            'estado_id' => '07',
            'numero' =>  '068',
        ]);
       Municipio::create([
            'nombre' =>  'Pijijiapan',
            'estado_id' => '07',
            'numero' =>  '069',
        ]);
       Municipio::create([
            'nombre' =>  'El Porvenir',
            'estado_id' => '07',
            'numero' =>  '070',
        ]);
       Municipio::create([
            'nombre' =>  'Villa Comaltitlán',
            'estado_id' => '07',
            'numero' =>  '071',
        ]);
       Municipio::create([
            'nombre' =>  'Pueblo Nuevo Solistahuacán',
            'estado_id' => '07',
            'numero' =>  '072',
        ]);
       Municipio::create([
            'nombre' =>  'Rayón',
            'estado_id' => '07',
            'numero' =>  '073',
        ]);
       Municipio::create([
            'nombre' =>  'Reforma',
            'estado_id' => '07',
            'numero' =>  '074',
        ]);
       Municipio::create([
            'nombre' =>  'Las Rosas',
            'estado_id' => '07',
            'numero' =>  '075',
        ]);
       Municipio::create([
            'nombre' =>  'Sabanilla',
            'estado_id' => '07',
            'numero' =>  '076',
        ]);
       Municipio::create([
            'nombre' =>  'Salto de Agua',
            'estado_id' => '07',
            'numero' =>  '077',
        ]);
       Municipio::create([
            'nombre' =>  'San Cristóbal de las Casas',
            'estado_id' => '07',
            'numero' =>  '078',
        ]);
       Municipio::create([
            'nombre' =>  'San Fernando',
            'estado_id' => '07',
            'numero' =>  '079',
        ]);
       Municipio::create([
            'nombre' =>  'Siltepec',
            'estado_id' => '07',
            'numero' =>  '080',
        ]);
       Municipio::create([
            'nombre' =>  'Simojovel',
            'estado_id' => '07',
            'numero' =>  '081',
        ]);
       Municipio::create([
            'nombre' =>  'Sitalá',
            'estado_id' => '07',
            'numero' =>  '082',
        ]);
       Municipio::create([
            'nombre' =>  'Socoltenango',
            'estado_id' => '07',
            'numero' =>  '083',
        ]);
       Municipio::create([
            'nombre' =>  'Solosuchiapa',
            'estado_id' => '07',
            'numero' =>  '084',
        ]);
       Municipio::create([
            'nombre' =>  'Soyaló',
            'estado_id' => '07',
            'numero' =>  '085',
        ]);
       Municipio::create([
            'nombre' =>  'Suchiapa',
            'estado_id' => '07',
            'numero' =>  '086',
        ]);
       Municipio::create([
            'nombre' =>  'Suchiate',
            'estado_id' => '07',
            'numero' =>  '087',
        ]);
       Municipio::create([
            'nombre' =>  'Sunuapa',
            'estado_id' => '07',
            'numero' =>  '088',
        ]);
       Municipio::create([
            'nombre' =>  'Tapachula',
            'estado_id' => '07',
            'numero' =>  '089',
        ]);
       Municipio::create([
            'nombre' =>  'Tapalapa',
            'estado_id' => '07',
            'numero' =>  '090',
        ]);
       Municipio::create([
            'nombre' =>  'Tapilula',
            'estado_id' => '07',
            'numero' =>  '091',
        ]);
       Municipio::create([
            'nombre' =>  'Tecpatán',
            'estado_id' => '07',
            'numero' =>  '092',
        ]);
       Municipio::create([
            'nombre' =>  'Tenejapa',
            'estado_id' => '07',
            'numero' =>  '093',
        ]);
       Municipio::create([
            'nombre' =>  'Teopisca',
            'estado_id' => '07',
            'numero' =>  '094',
        ]);
       Municipio::create([
            'nombre' =>  'Tila',
            'estado_id' => '07',
            'numero' =>  '096',
        ]);
       Municipio::create([
            'nombre' =>  'Tonalá',
            'estado_id' => '07',
            'numero' =>  '097',
        ]);
       Municipio::create([
            'nombre' =>  'Totolapa',
            'estado_id' => '07',
            'numero' =>  '098',
        ]);
       Municipio::create([
            'nombre' =>  'La Trinitaria',
            'estado_id' => '07',
            'numero' =>  '099',
        ]);
       Municipio::create([
            'nombre' =>  'Tumbalá',
            'estado_id' => '07',
            'numero' =>  '100',
        ]);
       Municipio::create([
            'nombre' =>  'Tuxtla Gutiérrez',
            'estado_id' => '07',
            'numero' =>  '101',
        ]);
       Municipio::create([
            'nombre' =>  'Tuxtla Chico',
            'estado_id' => '07',
            'numero' =>  '102',
        ]);
       Municipio::create([
            'nombre' =>  'Tuzantán',
            'estado_id' => '07',
            'numero' =>  '103',
        ]);
       Municipio::create([
            'nombre' =>  'Tzimol',
            'estado_id' => '07',
            'numero' =>  '104',
        ]);
       Municipio::create([
            'nombre' =>  'Unión Juárez',
            'estado_id' => '07',
            'numero' =>  '105',
        ]);
       Municipio::create([
            'nombre' =>  'Venustiano Carranza',
            'estado_id' => '07',
            'numero' =>  '106',
        ]);
       Municipio::create([
            'nombre' =>  'Villa Corzo',
            'estado_id' => '07',
            'numero' =>  '107',
        ]);
       Municipio::create([
            'nombre' =>  'Villaflores',
            'estado_id' => '07',
            'numero' =>  '108',
        ]);
       Municipio::create([
            'nombre' =>  'Yajalón',
            'estado_id' => '07',
            'numero' =>  '109',
        ]);
       Municipio::create([
            'nombre' =>  'San Lucas',
            'estado_id' => '07',
            'numero' =>  '110',
        ]);
       Municipio::create([
            'nombre' =>  'Zinacantán',
            'estado_id' => '07',
            'numero' =>  '111',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Cancuc',
            'estado_id' => '07',
            'numero' =>  '112',
        ]);
       Municipio::create([
            'nombre' =>  'Aldama',
            'estado_id' => '07',
            'numero' =>  '113',
        ]);
       Municipio::create([
            'nombre' =>  'Benemérito de las Américas',
            'estado_id' => '07',
            'numero' =>  '114',
        ]);
       Municipio::create([
            'nombre' =>  'Maravilla Tenejapa',
            'estado_id' => '07',
            'numero' =>  '115',
        ]);
       Municipio::create([
            'nombre' =>  'Marqués de Comillas',
            'estado_id' => '07',
            'numero' =>  '116',
        ]);
       Municipio::create([
            'nombre' =>  'Montecristo de Guerrero',
            'estado_id' => '07',
            'numero' =>  '117',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Duraznal',
            'estado_id' => '07',
            'numero' =>  '118',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago el Pinar',
            'estado_id' => '07',
            'numero' =>  '119',
        ]);
       Municipio::create([
            'nombre' =>  'Ahumada',
            'estado_id' => '08',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Aldama',
            'estado_id' => '08',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Allende',
            'estado_id' => '08',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Aquiles Serdán',
            'estado_id' => '08',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Ascensión',
            'estado_id' => '08',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Bachíniva',
            'estado_id' => '08',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Balleza',
            'estado_id' => '08',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Batopilas',
            'estado_id' => '08',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Bocoyna',
            'estado_id' => '08',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Buenaventura',
            'estado_id' => '08',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Camargo',
            'estado_id' => '08',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Carichí',
            'estado_id' => '08',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'Casas Grandes',
            'estado_id' => '08',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'Coronado',
            'estado_id' => '08',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Coyame del Sotol',
            'estado_id' => '08',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'La Cruz',
            'estado_id' => '08',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'Cuauhtémoc',
            'estado_id' => '08',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'Cusihuiriachi',
            'estado_id' => '08',
            'numero' =>  '018',
        ]);
       Municipio::create([
            'nombre' =>  'Chihuahua',
            'estado_id' => '08',
            'numero' =>  '019',
        ]);
       Municipio::create([
            'nombre' =>  'Chínipas',
            'estado_id' => '08',
            'numero' =>  '020',
        ]);
       Municipio::create([
            'nombre' =>  'Delicias',
            'estado_id' => '08',
            'numero' =>  '021',
        ]);
       Municipio::create([
            'nombre' =>  'Dr. Belisario Domínguez',
            'estado_id' => '08',
            'numero' =>  '022',
        ]);
       Municipio::create([
            'nombre' =>  'Galeana',
            'estado_id' => '08',
            'numero' =>  '023',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Isabel',
            'estado_id' => '08',
            'numero' =>  '024',
        ]);
       Municipio::create([
            'nombre' =>  'Gómez Farías',
            'estado_id' => '08',
            'numero' =>  '025',
        ]);
       Municipio::create([
            'nombre' =>  'Gran Morelos',
            'estado_id' => '08',
            'numero' =>  '026',
        ]);
       Municipio::create([
            'nombre' =>  'Guachochi',
            'estado_id' => '08',
            'numero' =>  '027',
        ]);
       Municipio::create([
            'nombre' =>  'Guadalupe',
            'estado_id' => '08',
            'numero' =>  '028',
        ]);
       Municipio::create([
            'nombre' =>  'Guadalupe y Calvo',
            'estado_id' => '08',
            'numero' =>  '029',
        ]);
       Municipio::create([
            'nombre' =>  'Guazapares',
            'estado_id' => '08',
            'numero' =>  '030',
        ]);
       Municipio::create([
            'nombre' =>  'Guerrero',
            'estado_id' => '08',
            'numero' =>  '031',
        ]);
       Municipio::create([
            'nombre' =>  'Hidalgo del Parral',
            'estado_id' => '08',
            'numero' =>  '032',
        ]);
       Municipio::create([
            'nombre' =>  'Huejotitán',
            'estado_id' => '08',
            'numero' =>  '033',
        ]);
       Municipio::create([
            'nombre' =>  'Ignacio Zaragoza',
            'estado_id' => '08',
            'numero' =>  '034',
        ]);
       Municipio::create([
            'nombre' =>  'Janos',
            'estado_id' => '08',
            'numero' =>  '035',
        ]);
       Municipio::create([
            'nombre' =>  'Jiménez',
            'estado_id' => '08',
            'numero' =>  '036',
        ]);
       Municipio::create([
            'nombre' =>  'Juárez',
            'estado_id' => '08',
            'numero' =>  '037',
        ]);
       Municipio::create([
            'nombre' =>  'Julimes',
            'estado_id' => '08',
            'numero' =>  '038',
        ]);
       Municipio::create([
            'nombre' =>  'López',
            'estado_id' => '08',
            'numero' =>  '039',
        ]);
       Municipio::create([
            'nombre' =>  'Madera',
            'estado_id' => '08',
            'numero' =>  '040',
        ]);
       Municipio::create([
            'nombre' =>  'Maguarichi',
            'estado_id' => '08',
            'numero' =>  '041',
        ]);
       Municipio::create([
            'nombre' =>  'Manuel Benavides',
            'estado_id' => '08',
            'numero' =>  '042',
        ]);
       Municipio::create([
            'nombre' =>  'Matachí',
            'estado_id' => '08',
            'numero' =>  '043',
        ]);
       Municipio::create([
            'nombre' =>  'Matamoros',
            'estado_id' => '08',
            'numero' =>  '044',
        ]);
       Municipio::create([
            'nombre' =>  'Meoqui',
            'estado_id' => '08',
            'numero' =>  '045',
        ]);
       Municipio::create([
            'nombre' =>  'Morelos',
            'estado_id' => '08',
            'numero' =>  '046',
        ]);
       Municipio::create([
            'nombre' =>  'Moris',
            'estado_id' => '08',
            'numero' =>  '047',
        ]);
       Municipio::create([
            'nombre' =>  'Namiquipa',
            'estado_id' => '08',
            'numero' =>  '048',
        ]);
       Municipio::create([
            'nombre' =>  'Nonoava',
            'estado_id' => '08',
            'numero' =>  '049',
        ]);
       Municipio::create([
            'nombre' =>  'Nuevo Casas Grandes',
            'estado_id' => '08',
            'numero' =>  '050',
        ]);
       Municipio::create([
            'nombre' =>  'Ocampo',
            'estado_id' => '08',
            'numero' =>  '051',
        ]);
       Municipio::create([
            'nombre' =>  'Ojinaga',
            'estado_id' => '08',
            'numero' =>  '052',
        ]);
       Municipio::create([
            'nombre' =>  'Praxedis G. Guerrero',
            'estado_id' => '08',
            'numero' =>  '053',
        ]);
       Municipio::create([
            'nombre' =>  'Riva Palacio',
            'estado_id' => '08',
            'numero' =>  '054',
        ]);
       Municipio::create([
            'nombre' =>  'Rosales',
            'estado_id' => '08',
            'numero' =>  '055',
        ]);
       Municipio::create([
            'nombre' =>  'Rosario',
            'estado_id' => '08',
            'numero' =>  '056',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco de Borja',
            'estado_id' => '08',
            'numero' =>  '057',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco de Conchos',
            'estado_id' => '08',
            'numero' =>  '058',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco del Oro',
            'estado_id' => '08',
            'numero' =>  '059',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Bárbara',
            'estado_id' => '08',
            'numero' =>  '060',
        ]);
       Municipio::create([
            'nombre' =>  'Satevó',
            'estado_id' => '08',
            'numero' =>  '061',
        ]);
       Municipio::create([
            'nombre' =>  'Saucillo',
            'estado_id' => '08',
            'numero' =>  '062',
        ]);
       Municipio::create([
            'nombre' =>  'Temósachic',
            'estado_id' => '08',
            'numero' =>  '063',
        ]);
       Municipio::create([
            'nombre' =>  'El Tule',
            'estado_id' => '08',
            'numero' =>  '064',
        ]);
       Municipio::create([
            'nombre' =>  'Urique',
            'estado_id' => '08',
            'numero' =>  '065',
        ]);
       Municipio::create([
            'nombre' =>  'Uruachi',
            'estado_id' => '08',
            'numero' =>  '066',
        ]);
       Municipio::create([
            'nombre' =>  'Valle de Zaragoza',
            'estado_id' => '08',
            'numero' =>  '067',
        ]);
       Municipio::create([
            'nombre' =>  'Azcapotzalco',
            'estado_id' => '09',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Coyoacán',
            'estado_id' => '09',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Cuajimalpa de Morelos',
            'estado_id' => '09',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Gustavo A. Madero',
            'estado_id' => '09',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Iztacalco',
            'estado_id' => '09',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Iztapalapa',
            'estado_id' => '09',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'La Magdalena Contreras',
            'estado_id' => '09',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Milpa Alta',
            'estado_id' => '09',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Álvaro Obregón',
            'estado_id' => '09',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Tláhuac',
            'estado_id' => '09',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Tlalpan',
            'estado_id' => '09',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'Xochimilco',
            'estado_id' => '09',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'Benito Juárez',
            'estado_id' => '09',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Cuauhtémoc',
            'estado_id' => '09',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'Miguel Hidalgo',
            'estado_id' => '09',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'Venustiano Carranza',
            'estado_id' => '09',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'Canatlán',
            'estado_id' => '10',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Canelas',
            'estado_id' => '10',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Coneto de Comonfort',
            'estado_id' => '10',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Cuencamé',
            'estado_id' => '10',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Durango',
            'estado_id' => '10',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'General Simón Bolívar',
            'estado_id' => '10',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Gómez Palacio',
            'estado_id' => '10',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Guadalupe Victoria',
            'estado_id' => '10',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Guanaceví',
            'estado_id' => '10',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Hidalgo',
            'estado_id' => '10',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Indé',
            'estado_id' => '10',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Lerdo',
            'estado_id' => '10',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'Mapimí',
            'estado_id' => '10',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'Mezquital',
            'estado_id' => '10',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Nazas',
            'estado_id' => '10',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'Nombre de Dios',
            'estado_id' => '10',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'Ocampo',
            'estado_id' => '10',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'El Oro',
            'estado_id' => '10',
            'numero' =>  '018',
        ]);
       Municipio::create([
            'nombre' =>  'Otáez',
            'estado_id' => '10',
            'numero' =>  '019',
        ]);
       Municipio::create([
            'nombre' =>  'Pánuco de Coronado',
            'estado_id' => '10',
            'numero' =>  '020',
        ]);
       Municipio::create([
            'nombre' =>  'Peñón Blanco',
            'estado_id' => '10',
            'numero' =>  '021',
        ]);
       Municipio::create([
            'nombre' =>  'Poanas',
            'estado_id' => '10',
            'numero' =>  '022',
        ]);
       Municipio::create([
            'nombre' =>  'Pueblo Nuevo',
            'estado_id' => '10',
            'numero' =>  '023',
        ]);
       Municipio::create([
            'nombre' =>  'Rodeo',
            'estado_id' => '10',
            'numero' =>  '024',
        ]);
       Municipio::create([
            'nombre' =>  'San Bernardo',
            'estado_id' => '10',
            'numero' =>  '025',
        ]);
       Municipio::create([
            'nombre' =>  'San Dimas',
            'estado_id' => '10',
            'numero' =>  '026',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan de Guadalupe',
            'estado_id' => '10',
            'numero' =>  '027',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan del Río',
            'estado_id' => '10',
            'numero' =>  '028',
        ]);
       Municipio::create([
            'nombre' =>  'San Luis del Cordero',
            'estado_id' => '10',
            'numero' =>  '029',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro del Gallo',
            'estado_id' => '10',
            'numero' =>  '030',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Clara',
            'estado_id' => '10',
            'numero' =>  '031',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Papasquiaro',
            'estado_id' => '10',
            'numero' =>  '032',
        ]);
       Municipio::create([
            'nombre' =>  'Súchil',
            'estado_id' => '10',
            'numero' =>  '033',
        ]);
       Municipio::create([
            'nombre' =>  'Tamazula',
            'estado_id' => '10',
            'numero' =>  '034',
        ]);
       Municipio::create([
            'nombre' =>  'Tepehuanes',
            'estado_id' => '10',
            'numero' =>  '035',
        ]);
       Municipio::create([
            'nombre' =>  'Tlahualilo',
            'estado_id' => '10',
            'numero' =>  '036',
        ]);
       Municipio::create([
            'nombre' =>  'Topia',
            'estado_id' => '10',
            'numero' =>  '037',
        ]);
       Municipio::create([
            'nombre' =>  'Vicente Guerrero',
            'estado_id' => '10',
            'numero' =>  '038',
        ]);
       Municipio::create([
            'nombre' =>  'Nuevo Ideal',
            'estado_id' => '10',
            'numero' =>  '039',
        ]);
       Municipio::create([
            'nombre' =>  'Abasolo',
            'estado_id' => '11',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Acámbaro',
            'estado_id' => '11',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel de Allende',
            'estado_id' => '11',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Apaseo el Alto',
            'estado_id' => '11',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Apaseo el Grande',
            'estado_id' => '11',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Atarjea',
            'estado_id' => '11',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Celaya',
            'estado_id' => '11',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Manuel Doblado',
            'estado_id' => '11',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Comonfort',
            'estado_id' => '11',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Coroneo',
            'estado_id' => '11',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Cortazar',
            'estado_id' => '11',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Cuerámaro',
            'estado_id' => '11',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'Doctor Mora',
            'estado_id' => '11',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'Dolores Hidalgo Cuna de la Independencia Nacional',
            'estado_id' => '11',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Guanajuato',
            'estado_id' => '11',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'Huanímaro',
            'estado_id' => '11',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'Irapuato',
            'estado_id' => '11',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'Jaral del Progreso',
            'estado_id' => '11',
            'numero' =>  '018',
        ]);
       Municipio::create([
            'nombre' =>  'Jerécuaro',
            'estado_id' => '11',
            'numero' =>  '019',
        ]);
       Municipio::create([
            'nombre' =>  'León',
            'estado_id' => '11',
            'numero' =>  '020',
        ]);
       Municipio::create([
            'nombre' =>  'Moroleón',
            'estado_id' => '11',
            'numero' =>  '021',
        ]);
       Municipio::create([
            'nombre' =>  'Ocampo',
            'estado_id' => '11',
            'numero' =>  '022',
        ]);
       Municipio::create([
            'nombre' =>  'Pénjamo',
            'estado_id' => '11',
            'numero' =>  '023',
        ]);
       Municipio::create([
            'nombre' =>  'Pueblo Nuevo',
            'estado_id' => '11',
            'numero' =>  '024',
        ]);
       Municipio::create([
            'nombre' =>  'Purísima del Rincón',
            'estado_id' => '11',
            'numero' =>  '025',
        ]);
       Municipio::create([
            'nombre' =>  'Romita',
            'estado_id' => '11',
            'numero' =>  '026',
        ]);
       Municipio::create([
            'nombre' =>  'Salamanca',
            'estado_id' => '11',
            'numero' =>  '027',
        ]);
       Municipio::create([
            'nombre' =>  'Salvatierra',
            'estado_id' => '11',
            'numero' =>  '028',
        ]);
       Municipio::create([
            'nombre' =>  'San Diego de la Unión',
            'estado_id' => '11',
            'numero' =>  '029',
        ]);
       Municipio::create([
            'nombre' =>  'San Felipe',
            'estado_id' => '11',
            'numero' =>  '030',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco del Rincón',
            'estado_id' => '11',
            'numero' =>  '031',
        ]);
       Municipio::create([
            'nombre' =>  'San José Iturbide',
            'estado_id' => '11',
            'numero' =>  '032',
        ]);
       Municipio::create([
            'nombre' =>  'San Luis de la Paz',
            'estado_id' => '11',
            'numero' =>  '033',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina',
            'estado_id' => '11',
            'numero' =>  '034',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Cruz de Juventino Rosas',
            'estado_id' => '11',
            'numero' =>  '035',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Maravatío',
            'estado_id' => '11',
            'numero' =>  '036',
        ]);
       Municipio::create([
            'nombre' =>  'Silao de la Victoria',
            'estado_id' => '11',
            'numero' =>  '037',
        ]);
       Municipio::create([
            'nombre' =>  'Tarandacuao',
            'estado_id' => '11',
            'numero' =>  '038',
        ]);
       Municipio::create([
            'nombre' =>  'Tarimoro',
            'estado_id' => '11',
            'numero' =>  '039',
        ]);
       Municipio::create([
            'nombre' =>  'Tierra Blanca',
            'estado_id' => '11',
            'numero' =>  '040',
        ]);
       Municipio::create([
            'nombre' =>  'Uriangato',
            'estado_id' => '11',
            'numero' =>  '041',
        ]);
       Municipio::create([
            'nombre' =>  'Valle de Santiago',
            'estado_id' => '11',
            'numero' =>  '042',
        ]);
       Municipio::create([
            'nombre' =>  'Victoria',
            'estado_id' => '11',
            'numero' =>  '043',
        ]);
       Municipio::create([
            'nombre' =>  'Villagrán',
            'estado_id' => '11',
            'numero' =>  '044',
        ]);
       Municipio::create([
            'nombre' =>  'Xichú',
            'estado_id' => '11',
            'numero' =>  '045',
        ]);
       Municipio::create([
            'nombre' =>  'Yuriria',
            'estado_id' => '11',
            'numero' =>  '046',
        ]);
       Municipio::create([
            'nombre' =>  'Acapulco de Juárez',
            'estado_id' => '12',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Ahuacuotzingo',
            'estado_id' => '12',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Ajuchitlán del Progreso',
            'estado_id' => '12',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Alcozauca de Guerrero',
            'estado_id' => '12',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Alpoyeca',
            'estado_id' => '12',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Apaxtla',
            'estado_id' => '12',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Arcelia',
            'estado_id' => '12',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Atenango del Río',
            'estado_id' => '12',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Atlamajalcingo del Monte',
            'estado_id' => '12',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Atlixtac',
            'estado_id' => '12',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Atoyac de Álvarez',
            'estado_id' => '12',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Ayutla de los Libres',
            'estado_id' => '12',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'Azoyú',
            'estado_id' => '12',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'Benito Juárez',
            'estado_id' => '12',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Buenavista de Cuéllar',
            'estado_id' => '12',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'Coahuayutla de José María Izazaga',
            'estado_id' => '12',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'Cocula',
            'estado_id' => '12',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'Copala',
            'estado_id' => '12',
            'numero' =>  '018',
        ]);
       Municipio::create([
            'nombre' =>  'Copalillo',
            'estado_id' => '12',
            'numero' =>  '019',
        ]);
       Municipio::create([
            'nombre' =>  'Copanatoyac',
            'estado_id' => '12',
            'numero' =>  '020',
        ]);
       Municipio::create([
            'nombre' =>  'Coyuca de Benítez',
            'estado_id' => '12',
            'numero' =>  '021',
        ]);
       Municipio::create([
            'nombre' =>  'Coyuca de Catalán',
            'estado_id' => '12',
            'numero' =>  '022',
        ]);
       Municipio::create([
            'nombre' =>  'Cuajinicuilapa',
            'estado_id' => '12',
            'numero' =>  '023',
        ]);
       Municipio::create([
            'nombre' =>  'Cualác',
            'estado_id' => '12',
            'numero' =>  '024',
        ]);
       Municipio::create([
            'nombre' =>  'Cuautepec',
            'estado_id' => '12',
            'numero' =>  '025',
        ]);
       Municipio::create([
            'nombre' =>  'Cuetzala del Progreso',
            'estado_id' => '12',
            'numero' =>  '026',
        ]);
       Municipio::create([
            'nombre' =>  'Cutzamala de Pinzón',
            'estado_id' => '12',
            'numero' =>  '027',
        ]);
       Municipio::create([
            'nombre' =>  'Chilapa de Álvarez',
            'estado_id' => '12',
            'numero' =>  '028',
        ]);
       Municipio::create([
            'nombre' =>  'Chilpancingo de los Bravo',
            'estado_id' => '12',
            'numero' =>  '029',
        ]);
       Municipio::create([
            'nombre' =>  'Florencio Villarreal',
            'estado_id' => '12',
            'numero' =>  '030',
        ]);
       Municipio::create([
            'nombre' =>  'General Canuto A. Neri',
            'estado_id' => '12',
            'numero' =>  '031',
        ]);
       Municipio::create([
            'nombre' =>  'General Heliodoro Castillo',
            'estado_id' => '12',
            'numero' =>  '032',
        ]);
       Municipio::create([
            'nombre' =>  'Huamuxtitlán',
            'estado_id' => '12',
            'numero' =>  '033',
        ]);
       Municipio::create([
            'nombre' =>  'Huitzuco de los Figueroa',
            'estado_id' => '12',
            'numero' =>  '034',
        ]);
       Municipio::create([
            'nombre' =>  'Iguala de la Independencia',
            'estado_id' => '12',
            'numero' =>  '035',
        ]);
       Municipio::create([
            'nombre' =>  'Igualapa',
            'estado_id' => '12',
            'numero' =>  '036',
        ]);
       Municipio::create([
            'nombre' =>  'Ixcateopan de Cuauhtémoc',
            'estado_id' => '12',
            'numero' =>  '037',
        ]);
       Municipio::create([
            'nombre' =>  'Zihuatanejo de Azueta',
            'estado_id' => '12',
            'numero' =>  '038',
        ]);
       Municipio::create([
            'nombre' =>  'Juan R. Escudero',
            'estado_id' => '12',
            'numero' =>  '039',
        ]);
       Municipio::create([
            'nombre' =>  'Leonardo Bravo',
            'estado_id' => '12',
            'numero' =>  '040',
        ]);
       Municipio::create([
            'nombre' =>  'Malinaltepec',
            'estado_id' => '12',
            'numero' =>  '041',
        ]);
       Municipio::create([
            'nombre' =>  'Mártir de Cuilapan',
            'estado_id' => '12',
            'numero' =>  '042',
        ]);
       Municipio::create([
            'nombre' =>  'Metlatónoc',
            'estado_id' => '12',
            'numero' =>  '043',
        ]);
       Municipio::create([
            'nombre' =>  'Mochitlán',
            'estado_id' => '12',
            'numero' =>  '044',
        ]);
       Municipio::create([
            'nombre' =>  'Olinalá',
            'estado_id' => '12',
            'numero' =>  '045',
        ]);
       Municipio::create([
            'nombre' =>  'Ometepec',
            'estado_id' => '12',
            'numero' =>  '046',
        ]);
       Municipio::create([
            'nombre' =>  'Pedro Ascencio Alquisiras',
            'estado_id' => '12',
            'numero' =>  '047',
        ]);
       Municipio::create([
            'nombre' =>  'Petatlán',
            'estado_id' => '12',
            'numero' =>  '048',
        ]);
       Municipio::create([
            'nombre' =>  'Pilcaya',
            'estado_id' => '12',
            'numero' =>  '049',
        ]);
       Municipio::create([
            'nombre' =>  'Pungarabato',
            'estado_id' => '12',
            'numero' =>  '050',
        ]);
       Municipio::create([
            'nombre' =>  'Quechultenango',
            'estado_id' => '12',
            'numero' =>  '051',
        ]);
       Municipio::create([
            'nombre' =>  'San Luis Acatlán',
            'estado_id' => '12',
            'numero' =>  '052',
        ]);
       Municipio::create([
            'nombre' =>  'San Marcos',
            'estado_id' => '12',
            'numero' =>  '053',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Totolapan',
            'estado_id' => '12',
            'numero' =>  '054',
        ]);
       Municipio::create([
            'nombre' =>  'Taxco de Alarcón',
            'estado_id' => '12',
            'numero' =>  '055',
        ]);
       Municipio::create([
            'nombre' =>  'Tecoanapa',
            'estado_id' => '12',
            'numero' =>  '056',
        ]);
       Municipio::create([
            'nombre' =>  'Técpan de Galeana',
            'estado_id' => '12',
            'numero' =>  '057',
        ]);
       Municipio::create([
            'nombre' =>  'Teloloapan',
            'estado_id' => '12',
            'numero' =>  '058',
        ]);
       Municipio::create([
            'nombre' =>  'Tepecoacuilco de Trujano',
            'estado_id' => '12',
            'numero' =>  '059',
        ]);
       Municipio::create([
            'nombre' =>  'Tetipac',
            'estado_id' => '12',
            'numero' =>  '060',
        ]);
       Municipio::create([
            'nombre' =>  'Tixtla de Guerrero',
            'estado_id' => '12',
            'numero' =>  '061',
        ]);
       Municipio::create([
            'nombre' =>  'Tlacoachistlahuaca',
            'estado_id' => '12',
            'numero' =>  '062',
        ]);
       Municipio::create([
            'nombre' =>  'Tlacoapa',
            'estado_id' => '12',
            'numero' =>  '063',
        ]);
       Municipio::create([
            'nombre' =>  'Tlalchapa',
            'estado_id' => '12',
            'numero' =>  '064',
        ]);
       Municipio::create([
            'nombre' =>  'Tlalixtaquilla de Maldonado',
            'estado_id' => '12',
            'numero' =>  '065',
        ]);
       Municipio::create([
            'nombre' =>  'Tlapa de Comonfort',
            'estado_id' => '12',
            'numero' =>  '066',
        ]);
       Municipio::create([
            'nombre' =>  'Tlapehuala',
            'estado_id' => '12',
            'numero' =>  '067',
        ]);
       Municipio::create([
            'nombre' =>  'La Unión de Isidoro Montes de Oca',
            'estado_id' => '12',
            'numero' =>  '068',
        ]);
       Municipio::create([
            'nombre' =>  'Xalpatláhuac',
            'estado_id' => '12',
            'numero' =>  '069',
        ]);
       Municipio::create([
            'nombre' =>  'Xochihuehuetlán',
            'estado_id' => '12',
            'numero' =>  '070',
        ]);
       Municipio::create([
            'nombre' =>  'Xochistlahuaca',
            'estado_id' => '12',
            'numero' =>  '071',
        ]);
       Municipio::create([
            'nombre' =>  'Zapotitlán Tablas',
            'estado_id' => '12',
            'numero' =>  '072',
        ]);
       Municipio::create([
            'nombre' =>  'Zirándaro',
            'estado_id' => '12',
            'numero' =>  '073',
        ]);
       Municipio::create([
            'nombre' =>  'Zitlala',
            'estado_id' => '12',
            'numero' =>  '074',
        ]);
       Municipio::create([
            'nombre' =>  'Eduardo Neri',
            'estado_id' => '12',
            'numero' =>  '075',
        ]);
       Municipio::create([
            'nombre' =>  'Acatepec',
            'estado_id' => '12',
            'numero' =>  '076',
        ]);
       Municipio::create([
            'nombre' =>  'Marquelia',
            'estado_id' => '12',
            'numero' =>  '077',
        ]);
       Municipio::create([
            'nombre' =>  'Cochoapa el Grande',
            'estado_id' => '12',
            'numero' =>  '078',
        ]);
       Municipio::create([
            'nombre' =>  'José Joaquín de Herrera',
            'estado_id' => '12',
            'numero' =>  '079',
        ]);
       Municipio::create([
            'nombre' =>  'Juchitán',
            'estado_id' => '12',
            'numero' =>  '080',
        ]);
       Municipio::create([
            'nombre' =>  'Iliatenco',
            'estado_id' => '12',
            'numero' =>  '081',
        ]);
       Municipio::create([
            'nombre' =>  'Acatlán',
            'estado_id' => '13',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Acaxochitlán',
            'estado_id' => '13',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Actopan',
            'estado_id' => '13',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Agua Blanca de Iturbide',
            'estado_id' => '13',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Ajacuba',
            'estado_id' => '13',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Alfajayucan',
            'estado_id' => '13',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Almoloya',
            'estado_id' => '13',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Apan',
            'estado_id' => '13',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'El Arenal',
            'estado_id' => '13',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Atitalaquia',
            'estado_id' => '13',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Atlapexco',
            'estado_id' => '13',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Atotonilco el Grande',
            'estado_id' => '13',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'Atotonilco de Tula',
            'estado_id' => '13',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'Calnali',
            'estado_id' => '13',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Cardonal',
            'estado_id' => '13',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'Cuautepec de Hinojosa',
            'estado_id' => '13',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'Chapantongo',
            'estado_id' => '13',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'Chapulhuacán',
            'estado_id' => '13',
            'numero' =>  '018',
        ]);
       Municipio::create([
            'nombre' =>  'Chilcuautla',
            'estado_id' => '13',
            'numero' =>  '019',
        ]);
       Municipio::create([
            'nombre' =>  'Eloxochitlán',
            'estado_id' => '13',
            'numero' =>  '020',
        ]);
       Municipio::create([
            'nombre' =>  'Emiliano Zapata',
            'estado_id' => '13',
            'numero' =>  '021',
        ]);
       Municipio::create([
            'nombre' =>  'Epazoyucan',
            'estado_id' => '13',
            'numero' =>  '022',
        ]);
       Municipio::create([
            'nombre' =>  'Francisco I. Madero',
            'estado_id' => '13',
            'numero' =>  '023',
        ]);
       Municipio::create([
            'nombre' =>  'Huasca de Ocampo',
            'estado_id' => '13',
            'numero' =>  '024',
        ]);
       Municipio::create([
            'nombre' =>  'Huautla',
            'estado_id' => '13',
            'numero' =>  '025',
        ]);
       Municipio::create([
            'nombre' =>  'Huazalingo',
            'estado_id' => '13',
            'numero' =>  '026',
        ]);
       Municipio::create([
            'nombre' =>  'Huehuetla',
            'estado_id' => '13',
            'numero' =>  '027',
        ]);
       Municipio::create([
            'nombre' =>  'Huejutla de Reyes',
            'estado_id' => '13',
            'numero' =>  '028',
        ]);
       Municipio::create([
            'nombre' =>  'Huichapan',
            'estado_id' => '13',
            'numero' =>  '029',
        ]);
       Municipio::create([
            'nombre' =>  'Ixmiquilpan',
            'estado_id' => '13',
            'numero' =>  '030',
        ]);
       Municipio::create([
            'nombre' =>  'Jacala de Ledezma',
            'estado_id' => '13',
            'numero' =>  '031',
        ]);
       Municipio::create([
            'nombre' =>  'Jaltocán',
            'estado_id' => '13',
            'numero' =>  '032',
        ]);
       Municipio::create([
            'nombre' =>  'Juárez Hidalgo',
            'estado_id' => '13',
            'numero' =>  '033',
        ]);
       Municipio::create([
            'nombre' =>  'Lolotla',
            'estado_id' => '13',
            'numero' =>  '034',
        ]);
       Municipio::create([
            'nombre' =>  'Metepec',
            'estado_id' => '13',
            'numero' =>  '035',
        ]);
       Municipio::create([
            'nombre' =>  'San Agustín Metzquititlán',
            'estado_id' => '13',
            'numero' =>  '036',
        ]);
       Municipio::create([
            'nombre' =>  'Metztitlán',
            'estado_id' => '13',
            'numero' =>  '037',
        ]);
       Municipio::create([
            'nombre' =>  'Mineral del Chico',
            'estado_id' => '13',
            'numero' =>  '038',
        ]);
       Municipio::create([
            'nombre' =>  'Mineral del Monte',
            'estado_id' => '13',
            'numero' =>  '039',
        ]);
       Municipio::create([
            'nombre' =>  'La Misión',
            'estado_id' => '13',
            'numero' =>  '040',
        ]);
       Municipio::create([
            'nombre' =>  'Mixquiahuala de Juárez',
            'estado_id' => '13',
            'numero' =>  '041',
        ]);
       Municipio::create([
            'nombre' =>  'Molango de Escamilla',
            'estado_id' => '13',
            'numero' =>  '042',
        ]);
       Municipio::create([
            'nombre' =>  'Nicolás Flores',
            'estado_id' => '13',
            'numero' =>  '043',
        ]);
       Municipio::create([
            'nombre' =>  'Nopala de Villagrán',
            'estado_id' => '13',
            'numero' =>  '044',
        ]);
       Municipio::create([
            'nombre' =>  'Omitlán de Juárez',
            'estado_id' => '13',
            'numero' =>  '045',
        ]);
       Municipio::create([
            'nombre' =>  'San Felipe Orizatlán',
            'estado_id' => '13',
            'numero' =>  '046',
        ]);
       Municipio::create([
            'nombre' =>  'Pacula',
            'estado_id' => '13',
            'numero' =>  '047',
        ]);
       Municipio::create([
            'nombre' =>  'Pachuca de Soto',
            'estado_id' => '13',
            'numero' =>  '048',
        ]);
       Municipio::create([
            'nombre' =>  'Pisaflores',
            'estado_id' => '13',
            'numero' =>  '049',
        ]);
       Municipio::create([
            'nombre' =>  'Progreso de Obregón',
            'estado_id' => '13',
            'numero' =>  '050',
        ]);
       Municipio::create([
            'nombre' =>  'Mineral de la Reforma',
            'estado_id' => '13',
            'numero' =>  '051',
        ]);
       Municipio::create([
            'nombre' =>  'San Agustín Tlaxiaca',
            'estado_id' => '13',
            'numero' =>  '052',
        ]);
       Municipio::create([
            'nombre' =>  'San Bartolo Tutotepec',
            'estado_id' => '13',
            'numero' =>  '053',
        ]);
       Municipio::create([
            'nombre' =>  'San Salvador',
            'estado_id' => '13',
            'numero' =>  '054',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago de Anaya',
            'estado_id' => '13',
            'numero' =>  '055',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Tulantepec de Lugo Guerrero',
            'estado_id' => '13',
            'numero' =>  '056',
        ]);
       Municipio::create([
            'nombre' =>  'Singuilucan',
            'estado_id' => '13',
            'numero' =>  '057',
        ]);
       Municipio::create([
            'nombre' =>  'Tasquillo',
            'estado_id' => '13',
            'numero' =>  '058',
        ]);
       Municipio::create([
            'nombre' =>  'Tecozautla',
            'estado_id' => '13',
            'numero' =>  '059',
        ]);
       Municipio::create([
            'nombre' =>  'Tenango de Doria',
            'estado_id' => '13',
            'numero' =>  '060',
        ]);
       Municipio::create([
            'nombre' =>  'Tepeapulco',
            'estado_id' => '13',
            'numero' =>  '061',
        ]);
       Municipio::create([
            'nombre' =>  'Tepehuacán de Guerrero',
            'estado_id' => '13',
            'numero' =>  '062',
        ]);
       Municipio::create([
            'nombre' =>  'Tepeji del Río de Ocampo',
            'estado_id' => '13',
            'numero' =>  '063',
        ]);
       Municipio::create([
            'nombre' =>  'Tepetitlán',
            'estado_id' => '13',
            'numero' =>  '064',
        ]);
       Municipio::create([
            'nombre' =>  'Tetepango',
            'estado_id' => '13',
            'numero' =>  '065',
        ]);
       Municipio::create([
            'nombre' =>  'Villa de Tezontepec',
            'estado_id' => '13',
            'numero' =>  '066',
        ]);
       Municipio::create([
            'nombre' =>  'Tezontepec de Aldama',
            'estado_id' => '13',
            'numero' =>  '067',
        ]);
       Municipio::create([
            'nombre' =>  'Tianguistengo',
            'estado_id' => '13',
            'numero' =>  '068',
        ]);
       Municipio::create([
            'nombre' =>  'Tizayuca',
            'estado_id' => '13',
            'numero' =>  '069',
        ]);
       Municipio::create([
            'nombre' =>  'Tlahuelilpan',
            'estado_id' => '13',
            'numero' =>  '070',
        ]);
       Municipio::create([
            'nombre' =>  'Tlahuiltepa',
            'estado_id' => '13',
            'numero' =>  '071',
        ]);
       Municipio::create([
            'nombre' =>  'Tlanalapa',
            'estado_id' => '13',
            'numero' =>  '072',
        ]);
       Municipio::create([
            'nombre' =>  'Tlanchinol',
            'estado_id' => '13',
            'numero' =>  '073',
        ]);
       Municipio::create([
            'nombre' =>  'Tlaxcoapan',
            'estado_id' => '13',
            'numero' =>  '074',
        ]);
       Municipio::create([
            'nombre' =>  'Tolcayuca',
            'estado_id' => '13',
            'numero' =>  '075',
        ]);
       Municipio::create([
            'nombre' =>  'Tula de Allende',
            'estado_id' => '13',
            'numero' =>  '076',
        ]);
       Municipio::create([
            'nombre' =>  'Tulancingo de Bravo',
            'estado_id' => '13',
            'numero' =>  '077',
        ]);
       Municipio::create([
            'nombre' =>  'Xochiatipan',
            'estado_id' => '13',
            'numero' =>  '078',
        ]);
       Municipio::create([
            'nombre' =>  'Xochicoatlán',
            'estado_id' => '13',
            'numero' =>  '079',
        ]);
       Municipio::create([
            'nombre' =>  'Yahualica',
            'estado_id' => '13',
            'numero' =>  '080',
        ]);
       Municipio::create([
            'nombre' =>  'Zacualtipán de Ángeles',
            'estado_id' => '13',
            'numero' =>  '081',
        ]);
       Municipio::create([
            'nombre' =>  'Zapotlán de Juárez',
            'estado_id' => '13',
            'numero' =>  '082',
        ]);
       Municipio::create([
            'nombre' =>  'Zempoala',
            'estado_id' => '13',
            'numero' =>  '083',
        ]);
       Municipio::create([
            'nombre' =>  'Zimapán',
            'estado_id' => '13',
            'numero' =>  '084',
        ]);
       Municipio::create([
            'nombre' =>  'Acatic',
            'estado_id' => '14',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Acatlán de Juárez',
            'estado_id' => '14',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Ahualulco de Mercado',
            'estado_id' => '14',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Amacueca',
            'estado_id' => '14',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Amatitán',
            'estado_id' => '14',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Ameca',
            'estado_id' => '14',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'San Juanito de Escobedo',
            'estado_id' => '14',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Arandas',
            'estado_id' => '14',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'El Arenal',
            'estado_id' => '14',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Atemajac de Brizuela',
            'estado_id' => '14',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Atengo',
            'estado_id' => '14',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Atenguillo',
            'estado_id' => '14',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'Atotonilco el Alto',
            'estado_id' => '14',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'Atoyac',
            'estado_id' => '14',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Autlán de Navarro',
            'estado_id' => '14',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'Ayotlán',
            'estado_id' => '14',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'Ayutla',
            'estado_id' => '14',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'La Barca',
            'estado_id' => '14',
            'numero' =>  '018',
        ]);
       Municipio::create([
            'nombre' =>  'Bolaños',
            'estado_id' => '14',
            'numero' =>  '019',
        ]);
       Municipio::create([
            'nombre' =>  'Cabo Corrientes',
            'estado_id' => '14',
            'numero' =>  '020',
        ]);
       Municipio::create([
            'nombre' =>  'Casimiro Castillo',
            'estado_id' => '14',
            'numero' =>  '021',
        ]);
       Municipio::create([
            'nombre' =>  'Cihuatlán',
            'estado_id' => '14',
            'numero' =>  '022',
        ]);
       Municipio::create([
            'nombre' =>  'Zapotlán el Grande',
            'estado_id' => '14',
            'numero' =>  '023',
        ]);
       Municipio::create([
            'nombre' =>  'Cocula',
            'estado_id' => '14',
            'numero' =>  '024',
        ]);
       Municipio::create([
            'nombre' =>  'Colotlán',
            'estado_id' => '14',
            'numero' =>  '025',
        ]);
       Municipio::create([
            'nombre' =>  'Concepción de Buenos Aires',
            'estado_id' => '14',
            'numero' =>  '026',
        ]);
       Municipio::create([
            'nombre' =>  'Cuautitlán de García Barragán',
            'estado_id' => '14',
            'numero' =>  '027',
        ]);
       Municipio::create([
            'nombre' =>  'Cuautla',
            'estado_id' => '14',
            'numero' =>  '028',
        ]);
       Municipio::create([
            'nombre' =>  'Cuquío',
            'estado_id' => '14',
            'numero' =>  '029',
        ]);
       Municipio::create([
            'nombre' =>  'Chapala',
            'estado_id' => '14',
            'numero' =>  '030',
        ]);
       Municipio::create([
            'nombre' =>  'Chimaltitán',
            'estado_id' => '14',
            'numero' =>  '031',
        ]);
       Municipio::create([
            'nombre' =>  'Chiquilistlán',
            'estado_id' => '14',
            'numero' =>  '032',
        ]);
       Municipio::create([
            'nombre' =>  'Degollado',
            'estado_id' => '14',
            'numero' =>  '033',
        ]);
       Municipio::create([
            'nombre' =>  'Ejutla',
            'estado_id' => '14',
            'numero' =>  '034',
        ]);
       Municipio::create([
            'nombre' =>  'Encarnación de Díaz',
            'estado_id' => '14',
            'numero' =>  '035',
        ]);
       Municipio::create([
            'nombre' =>  'Etzatlán',
            'estado_id' => '14',
            'numero' =>  '036',
        ]);
       Municipio::create([
            'nombre' =>  'El Grullo',
            'estado_id' => '14',
            'numero' =>  '037',
        ]);
       Municipio::create([
            'nombre' =>  'Guachinango',
            'estado_id' => '14',
            'numero' =>  '038',
        ]);
       Municipio::create([
            'nombre' =>  'Guadalajara',
            'estado_id' => '14',
            'numero' =>  '039',
        ]);
       Municipio::create([
            'nombre' =>  'Hostotipaquillo',
            'estado_id' => '14',
            'numero' =>  '040',
        ]);
       Municipio::create([
            'nombre' =>  'Huejúcar',
            'estado_id' => '14',
            'numero' =>  '041',
        ]);
       Municipio::create([
            'nombre' =>  'Huejuquilla el Alto',
            'estado_id' => '14',
            'numero' =>  '042',
        ]);
       Municipio::create([
            'nombre' =>  'La Huerta',
            'estado_id' => '14',
            'numero' =>  '043',
        ]);
       Municipio::create([
            'nombre' =>  'Ixtlahuacán de los Membrillos',
            'estado_id' => '14',
            'numero' =>  '044',
        ]);
       Municipio::create([
            'nombre' =>  'Ixtlahuacán del Río',
            'estado_id' => '14',
            'numero' =>  '045',
        ]);
       Municipio::create([
            'nombre' =>  'Jalostotitlán',
            'estado_id' => '14',
            'numero' =>  '046',
        ]);
       Municipio::create([
            'nombre' =>  'Jamay',
            'estado_id' => '14',
            'numero' =>  '047',
        ]);
       Municipio::create([
            'nombre' =>  'Jesús María',
            'estado_id' => '14',
            'numero' =>  '048',
        ]);
       Municipio::create([
            'nombre' =>  'Jilotlán de los Dolores',
            'estado_id' => '14',
            'numero' =>  '049',
        ]);
       Municipio::create([
            'nombre' =>  'Jocotepec',
            'estado_id' => '14',
            'numero' =>  '050',
        ]);
       Municipio::create([
            'nombre' =>  'Juanacatlán',
            'estado_id' => '14',
            'numero' =>  '051',
        ]);
       Municipio::create([
            'nombre' =>  'Juchitlán',
            'estado_id' => '14',
            'numero' =>  '052',
        ]);
       Municipio::create([
            'nombre' =>  'Lagos de Moreno',
            'estado_id' => '14',
            'numero' =>  '053',
        ]);
       Municipio::create([
            'nombre' =>  'El Limón',
            'estado_id' => '14',
            'numero' =>  '054',
        ]);
       Municipio::create([
            'nombre' =>  'Magdalena',
            'estado_id' => '14',
            'numero' =>  '055',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María del Oro',
            'estado_id' => '14',
            'numero' =>  '056',
        ]);
       Municipio::create([
            'nombre' =>  'La Manzanilla de la Paz',
            'estado_id' => '14',
            'numero' =>  '057',
        ]);
       Municipio::create([
            'nombre' =>  'Mascota',
            'estado_id' => '14',
            'numero' =>  '058',
        ]);
       Municipio::create([
            'nombre' =>  'Mazamitla',
            'estado_id' => '14',
            'numero' =>  '059',
        ]);
       Municipio::create([
            'nombre' =>  'Mexticacán',
            'estado_id' => '14',
            'numero' =>  '060',
        ]);
       Municipio::create([
            'nombre' =>  'Mezquitic',
            'estado_id' => '14',
            'numero' =>  '061',
        ]);
       Municipio::create([
            'nombre' =>  'Mixtlán',
            'estado_id' => '14',
            'numero' =>  '062',
        ]);
       Municipio::create([
            'nombre' =>  'Ocotlán',
            'estado_id' => '14',
            'numero' =>  '063',
        ]);
       Municipio::create([
            'nombre' =>  'Ojuelos de Jalisco',
            'estado_id' => '14',
            'numero' =>  '064',
        ]);
       Municipio::create([
            'nombre' =>  'Pihuamo',
            'estado_id' => '14',
            'numero' =>  '065',
        ]);
       Municipio::create([
            'nombre' =>  'Poncitlán',
            'estado_id' => '14',
            'numero' =>  '066',
        ]);
       Municipio::create([
            'nombre' =>  'Puerto Vallarta',
            'estado_id' => '14',
            'numero' =>  '067',
        ]);
       Municipio::create([
            'nombre' =>  'Villa Purificación',
            'estado_id' => '14',
            'numero' =>  '068',
        ]);
       Municipio::create([
            'nombre' =>  'Quitupan',
            'estado_id' => '14',
            'numero' =>  '069',
        ]);
       Municipio::create([
            'nombre' =>  'El Salto',
            'estado_id' => '14',
            'numero' =>  '070',
        ]);
       Municipio::create([
            'nombre' =>  'San Cristóbal de la Barranca',
            'estado_id' => '14',
            'numero' =>  '071',
        ]);
       Municipio::create([
            'nombre' =>  'San Diego de Alejandría',
            'estado_id' => '14',
            'numero' =>  '072',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan de los Lagos',
            'estado_id' => '14',
            'numero' =>  '073',
        ]);
       Municipio::create([
            'nombre' =>  'San Julián',
            'estado_id' => '14',
            'numero' =>  '074',
        ]);
       Municipio::create([
            'nombre' =>  'San Marcos',
            'estado_id' => '14',
            'numero' =>  '075',
        ]);
       Municipio::create([
            'nombre' =>  'San Martín de Bolaños',
            'estado_id' => '14',
            'numero' =>  '076',
        ]);
       Municipio::create([
            'nombre' =>  'San Martín Hidalgo',
            'estado_id' => '14',
            'numero' =>  '077',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel el Alto',
            'estado_id' => '14',
            'numero' =>  '078',
        ]);
       Municipio::create([
            'nombre' =>  'Gómez Farías',
            'estado_id' => '14',
            'numero' =>  '079',
        ]);
       Municipio::create([
            'nombre' =>  'San Sebastián del Oeste',
            'estado_id' => '14',
            'numero' =>  '080',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María de los Ángeles',
            'estado_id' => '14',
            'numero' =>  '081',
        ]);
       Municipio::create([
            'nombre' =>  'Sayula',
            'estado_id' => '14',
            'numero' =>  '082',
        ]);
       Municipio::create([
            'nombre' =>  'Tala',
            'estado_id' => '14',
            'numero' =>  '083',
        ]);
       Municipio::create([
            'nombre' =>  'Talpa de Allende',
            'estado_id' => '14',
            'numero' =>  '084',
        ]);
       Municipio::create([
            'nombre' =>  'Tamazula de Gordiano',
            'estado_id' => '14',
            'numero' =>  '085',
        ]);
       Municipio::create([
            'nombre' =>  'Tapalpa',
            'estado_id' => '14',
            'numero' =>  '086',
        ]);
       Municipio::create([
            'nombre' =>  'Tecalitlán',
            'estado_id' => '14',
            'numero' =>  '087',
        ]);
       Municipio::create([
            'nombre' =>  'Tecolotlán',
            'estado_id' => '14',
            'numero' =>  '088',
        ]);
       Municipio::create([
            'nombre' =>  'Techaluta de Montenegro',
            'estado_id' => '14',
            'numero' =>  '089',
        ]);
       Municipio::create([
            'nombre' =>  'Tenamaxtlán',
            'estado_id' => '14',
            'numero' =>  '090',
        ]);
       Municipio::create([
            'nombre' =>  'Teocaltiche',
            'estado_id' => '14',
            'numero' =>  '091',
        ]);
       Municipio::create([
            'nombre' =>  'Teocuitatlán de Corona',
            'estado_id' => '14',
            'numero' =>  '092',
        ]);
       Municipio::create([
            'nombre' =>  'Tepatitlán de Morelos',
            'estado_id' => '14',
            'numero' =>  '093',
        ]);
       Municipio::create([
            'nombre' =>  'Tequila',
            'estado_id' => '14',
            'numero' =>  '094',
        ]);
       Municipio::create([
            'nombre' =>  'Teuchitlán',
            'estado_id' => '14',
            'numero' =>  '095',
        ]);
       Municipio::create([
            'nombre' =>  'Tizapán el Alto',
            'estado_id' => '14',
            'numero' =>  '096',
        ]);
       Municipio::create([
            'nombre' =>  'Tlajomulco de Zúñiga',
            'estado_id' => '14',
            'numero' =>  '097',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Tlaquepaque',
            'estado_id' => '14',
            'numero' =>  '098',
        ]);
       Municipio::create([
            'nombre' =>  'Tolimán',
            'estado_id' => '14',
            'numero' =>  '099',
        ]);
       Municipio::create([
            'nombre' =>  'Tomatlán',
            'estado_id' => '14',
            'numero' =>  '100',
        ]);
       Municipio::create([
            'nombre' =>  'Tonalá',
            'estado_id' => '14',
            'numero' =>  '101',
        ]);
       Municipio::create([
            'nombre' =>  'Tonaya',
            'estado_id' => '14',
            'numero' =>  '102',
        ]);
       Municipio::create([
            'nombre' =>  'Tonila',
            'estado_id' => '14',
            'numero' =>  '103',
        ]);
       Municipio::create([
            'nombre' =>  'Totatiche',
            'estado_id' => '14',
            'numero' =>  '104',
        ]);
       Municipio::create([
            'nombre' =>  'Tototlán',
            'estado_id' => '14',
            'numero' =>  '105',
        ]);
       Municipio::create([
            'nombre' =>  'Tuxcacuesco',
            'estado_id' => '14',
            'numero' =>  '106',
        ]);
       Municipio::create([
            'nombre' =>  'Tuxcueca',
            'estado_id' => '14',
            'numero' =>  '107',
        ]);
       Municipio::create([
            'nombre' =>  'Tuxpan',
            'estado_id' => '14',
            'numero' =>  '108',
        ]);
       Municipio::create([
            'nombre' =>  'Unión de San Antonio',
            'estado_id' => '14',
            'numero' =>  '109',
        ]);
       Municipio::create([
            'nombre' =>  'Unión de Tula',
            'estado_id' => '14',
            'numero' =>  '110',
        ]);
       Municipio::create([
            'nombre' =>  'Valle de Guadalupe',
            'estado_id' => '14',
            'numero' =>  '111',
        ]);
       Municipio::create([
            'nombre' =>  'Valle de Juárez',
            'estado_id' => '14',
            'numero' =>  '112',
        ]);
       Municipio::create([
            'nombre' =>  'San Gabriel',
            'estado_id' => '14',
            'numero' =>  '113',
        ]);
       Municipio::create([
            'nombre' =>  'Villa Corona',
            'estado_id' => '14',
            'numero' =>  '114',
        ]);
       Municipio::create([
            'nombre' =>  'Villa Guerrero',
            'estado_id' => '14',
            'numero' =>  '115',
        ]);
       Municipio::create([
            'nombre' =>  'Villa Hidalgo',
            'estado_id' => '14',
            'numero' =>  '116',
        ]);
       Municipio::create([
            'nombre' =>  'Cañadas de Obregón',
            'estado_id' => '14',
            'numero' =>  '117',
        ]);
       Municipio::create([
            'nombre' =>  'Yahualica de González Gallo',
            'estado_id' => '14',
            'numero' =>  '118',
        ]);
       Municipio::create([
            'nombre' =>  'Zacoalco de Torres',
            'estado_id' => '14',
            'numero' =>  '119',
        ]);
       Municipio::create([
            'nombre' =>  'Zapopan',
            'estado_id' => '14',
            'numero' =>  '120',
        ]);
       Municipio::create([
            'nombre' =>  'Zapotiltic',
            'estado_id' => '14',
            'numero' =>  '121',
        ]);
       Municipio::create([
            'nombre' =>  'Zapotitlán de Vadillo',
            'estado_id' => '14',
            'numero' =>  '122',
        ]);
       Municipio::create([
            'nombre' =>  'Zapotlán del Rey',
            'estado_id' => '14',
            'numero' =>  '123',
        ]);
       Municipio::create([
            'nombre' =>  'Zapotlanejo',
            'estado_id' => '14',
            'numero' =>  '124',
        ]);
       Municipio::create([
            'nombre' =>  'San Ignacio Cerro Gordo',
            'estado_id' => '14',
            'numero' =>  '125',
        ]);
       Municipio::create([
            'nombre' =>  'Acambay de Ruíz Castañeda',
            'estado_id' => '15',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Acolman',
            'estado_id' => '15',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Aculco',
            'estado_id' => '15',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Almoloya de Alquisiras',
            'estado_id' => '15',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Almoloya de Juárez',
            'estado_id' => '15',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Almoloya del Río',
            'estado_id' => '15',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Amanalco',
            'estado_id' => '15',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Amatepec',
            'estado_id' => '15',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Amecameca',
            'estado_id' => '15',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Apaxco',
            'estado_id' => '15',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Atenco',
            'estado_id' => '15',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Atizapán',
            'estado_id' => '15',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'Atizapán de Zaragoza',
            'estado_id' => '15',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'Atlacomulco',
            'estado_id' => '15',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Atlautla',
            'estado_id' => '15',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'Axapusco',
            'estado_id' => '15',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'Ayapango',
            'estado_id' => '15',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'Calimaya',
            'estado_id' => '15',
            'numero' =>  '018',
        ]);
       Municipio::create([
            'nombre' =>  'Capulhuac',
            'estado_id' => '15',
            'numero' =>  '019',
        ]);
       Municipio::create([
            'nombre' =>  'Coacalco de Berriozábal',
            'estado_id' => '15',
            'numero' =>  '020',
        ]);
       Municipio::create([
            'nombre' =>  'Coatepec Harinas',
            'estado_id' => '15',
            'numero' =>  '021',
        ]);
       Municipio::create([
            'nombre' =>  'Cocotitlán',
            'estado_id' => '15',
            'numero' =>  '022',
        ]);
       Municipio::create([
            'nombre' =>  'Coyotepec',
            'estado_id' => '15',
            'numero' =>  '023',
        ]);
       Municipio::create([
            'nombre' =>  'Cuautitlán',
            'estado_id' => '15',
            'numero' =>  '024',
        ]);
       Municipio::create([
            'nombre' =>  'Chalco',
            'estado_id' => '15',
            'numero' =>  '025',
        ]);
       Municipio::create([
            'nombre' =>  'Chapa de Mota',
            'estado_id' => '15',
            'numero' =>  '026',
        ]);
       Municipio::create([
            'nombre' =>  'Chapultepec',
            'estado_id' => '15',
            'numero' =>  '027',
        ]);
       Municipio::create([
            'nombre' =>  'Chiautla',
            'estado_id' => '15',
            'numero' =>  '028',
        ]);
       Municipio::create([
            'nombre' =>  'Chicoloapan',
            'estado_id' => '15',
            'numero' =>  '029',
        ]);
       Municipio::create([
            'nombre' =>  'Chiconcuac',
            'estado_id' => '15',
            'numero' =>  '030',
        ]);
       Municipio::create([
            'nombre' =>  'Chimalhuacán',
            'estado_id' => '15',
            'numero' =>  '031',
        ]);
       Municipio::create([
            'nombre' =>  'Donato Guerra',
            'estado_id' => '15',
            'numero' =>  '032',
        ]);
       Municipio::create([
            'nombre' =>  'Ecatepec de Morelos',
            'estado_id' => '15',
            'numero' =>  '033',
        ]);
       Municipio::create([
            'nombre' =>  'Ecatzingo',
            'estado_id' => '15',
            'numero' =>  '034',
        ]);
       Municipio::create([
            'nombre' =>  'Huehuetoca',
            'estado_id' => '15',
            'numero' =>  '035',
        ]);
       Municipio::create([
            'nombre' =>  'Hueypoxtla',
            'estado_id' => '15',
            'numero' =>  '036',
        ]);
       Municipio::create([
            'nombre' =>  'Huixquilucan',
            'estado_id' => '15',
            'numero' =>  '037',
        ]);
       Municipio::create([
            'nombre' =>  'Isidro Fabela',
            'estado_id' => '15',
            'numero' =>  '038',
        ]);
       Municipio::create([
            'nombre' =>  'Ixtapaluca',
            'estado_id' => '15',
            'numero' =>  '039',
        ]);
       Municipio::create([
            'nombre' =>  'Ixtapan de la Sal',
            'estado_id' => '15',
            'numero' =>  '040',
        ]);
       Municipio::create([
            'nombre' =>  'Ixtapan del Oro',
            'estado_id' => '15',
            'numero' =>  '041',
        ]);
       Municipio::create([
            'nombre' =>  'Ixtlahuaca',
            'estado_id' => '15',
            'numero' =>  '042',
        ]);
       Municipio::create([
            'nombre' =>  'Xalatlaco',
            'estado_id' => '15',
            'numero' =>  '043',
        ]);
       Municipio::create([
            'nombre' =>  'Jaltenco',
            'estado_id' => '15',
            'numero' =>  '044',
        ]);
       Municipio::create([
            'nombre' =>  'Jilotepec',
            'estado_id' => '15',
            'numero' =>  '045',
        ]);
       Municipio::create([
            'nombre' =>  'Jilotzingo',
            'estado_id' => '15',
            'numero' =>  '046',
        ]);
       Municipio::create([
            'nombre' =>  'Jiquipilco',
            'estado_id' => '15',
            'numero' =>  '047',
        ]);
       Municipio::create([
            'nombre' =>  'Jocotitlán',
            'estado_id' => '15',
            'numero' =>  '048',
        ]);
       Municipio::create([
            'nombre' =>  'Joquicingo',
            'estado_id' => '15',
            'numero' =>  '049',
        ]);
       Municipio::create([
            'nombre' =>  'Juchitepec',
            'estado_id' => '15',
            'numero' =>  '050',
        ]);
       Municipio::create([
            'nombre' =>  'Lerma',
            'estado_id' => '15',
            'numero' =>  '051',
        ]);
       Municipio::create([
            'nombre' =>  'Malinalco',
            'estado_id' => '15',
            'numero' =>  '052',
        ]);
       Municipio::create([
            'nombre' =>  'Melchor Ocampo',
            'estado_id' => '15',
            'numero' =>  '053',
        ]);
       Municipio::create([
            'nombre' =>  'Metepec',
            'estado_id' => '15',
            'numero' =>  '054',
        ]);
       Municipio::create([
            'nombre' =>  'Mexicaltzingo',
            'estado_id' => '15',
            'numero' =>  '055',
        ]);
       Municipio::create([
            'nombre' =>  'Morelos',
            'estado_id' => '15',
            'numero' =>  '056',
        ]);
       Municipio::create([
            'nombre' =>  'Naucalpan de Juárez',
            'estado_id' => '15',
            'numero' =>  '057',
        ]);
       Municipio::create([
            'nombre' =>  'Nezahualcóyotl',
            'estado_id' => '15',
            'numero' =>  '058',
        ]);
       Municipio::create([
            'nombre' =>  'Nextlalpan',
            'estado_id' => '15',
            'numero' =>  '059',
        ]);
       Municipio::create([
            'nombre' =>  'Nicolás Romero',
            'estado_id' => '15',
            'numero' =>  '060',
        ]);
       Municipio::create([
            'nombre' =>  'Nopaltepec',
            'estado_id' => '15',
            'numero' =>  '061',
        ]);
       Municipio::create([
            'nombre' =>  'Ocoyoacac',
            'estado_id' => '15',
            'numero' =>  '062',
        ]);
       Municipio::create([
            'nombre' =>  'Ocuilan',
            'estado_id' => '15',
            'numero' =>  '063',
        ]);
       Municipio::create([
            'nombre' =>  'El Oro',
            'estado_id' => '15',
            'numero' =>  '064',
        ]);
       Municipio::create([
            'nombre' =>  'Otumba',
            'estado_id' => '15',
            'numero' =>  '065',
        ]);
       Municipio::create([
            'nombre' =>  'Otzoloapan',
            'estado_id' => '15',
            'numero' =>  '066',
        ]);
       Municipio::create([
            'nombre' =>  'Otzolotepec',
            'estado_id' => '15',
            'numero' =>  '067',
        ]);
       Municipio::create([
            'nombre' =>  'Ozumba',
            'estado_id' => '15',
            'numero' =>  '068',
        ]);
       Municipio::create([
            'nombre' =>  'Papalotla',
            'estado_id' => '15',
            'numero' =>  '069',
        ]);
       Municipio::create([
            'nombre' =>  'La Paz',
            'estado_id' => '15',
            'numero' =>  '070',
        ]);
       Municipio::create([
            'nombre' =>  'Polotitlán',
            'estado_id' => '15',
            'numero' =>  '071',
        ]);
       Municipio::create([
            'nombre' =>  'Rayón',
            'estado_id' => '15',
            'numero' =>  '072',
        ]);
       Municipio::create([
            'nombre' =>  'San Antonio la Isla',
            'estado_id' => '15',
            'numero' =>  '073',
        ]);
       Municipio::create([
            'nombre' =>  'San Felipe del Progreso',
            'estado_id' => '15',
            'numero' =>  '074',
        ]);
       Municipio::create([
            'nombre' =>  'San Martín de las Pirámides',
            'estado_id' => '15',
            'numero' =>  '075',
        ]);
       Municipio::create([
            'nombre' =>  'San Mateo Atenco',
            'estado_id' => '15',
            'numero' =>  '076',
        ]);
       Municipio::create([
            'nombre' =>  'San Simón de Guerrero',
            'estado_id' => '15',
            'numero' =>  '077',
        ]);
       Municipio::create([
            'nombre' =>  'Santo Tomás',
            'estado_id' => '15',
            'numero' =>  '078',
        ]);
       Municipio::create([
            'nombre' =>  'Soyaniquilpan de Juárez',
            'estado_id' => '15',
            'numero' =>  '079',
        ]);
       Municipio::create([
            'nombre' =>  'Sultepec',
            'estado_id' => '15',
            'numero' =>  '080',
        ]);
       Municipio::create([
            'nombre' =>  'Tecámac',
            'estado_id' => '15',
            'numero' =>  '081',
        ]);
       Municipio::create([
            'nombre' =>  'Tejupilco',
            'estado_id' => '15',
            'numero' =>  '082',
        ]);
       Municipio::create([
            'nombre' =>  'Temamatla',
            'estado_id' => '15',
            'numero' =>  '083',
        ]);
       Municipio::create([
            'nombre' =>  'Temascalapa',
            'estado_id' => '15',
            'numero' =>  '084',
        ]);
       Municipio::create([
            'nombre' =>  'Temascalcingo',
            'estado_id' => '15',
            'numero' =>  '085',
        ]);
       Municipio::create([
            'nombre' =>  'Temascaltepec',
            'estado_id' => '15',
            'numero' =>  '086',
        ]);
       Municipio::create([
            'nombre' =>  'Temoaya',
            'estado_id' => '15',
            'numero' =>  '087',
        ]);
       Municipio::create([
            'nombre' =>  'Tenancingo',
            'estado_id' => '15',
            'numero' =>  '088',
        ]);
       Municipio::create([
            'nombre' =>  'Tenango del Aire',
            'estado_id' => '15',
            'numero' =>  '089',
        ]);
       Municipio::create([
            'nombre' =>  'Tenango del Valle',
            'estado_id' => '15',
            'numero' =>  '090',
        ]);
       Municipio::create([
            'nombre' =>  'Teoloyucan',
            'estado_id' => '15',
            'numero' =>  '091',
        ]);
       Municipio::create([
            'nombre' =>  'Teotihuacán',
            'estado_id' => '15',
            'numero' =>  '092',
        ]);
       Municipio::create([
            'nombre' =>  'Tepetlaoxtoc',
            'estado_id' => '15',
            'numero' =>  '093',
        ]);
       Municipio::create([
            'nombre' =>  'Tepetlixpa',
            'estado_id' => '15',
            'numero' =>  '094',
        ]);
       Municipio::create([
            'nombre' =>  'Tepotzotlán',
            'estado_id' => '15',
            'numero' =>  '095',
        ]);
       Municipio::create([
            'nombre' =>  'Tequixquiac',
            'estado_id' => '15',
            'numero' =>  '096',
        ]);
       Municipio::create([
            'nombre' =>  'Texcaltitlán',
            'estado_id' => '15',
            'numero' =>  '097',
        ]);
       Municipio::create([
            'nombre' =>  'Texcalyacac',
            'estado_id' => '15',
            'numero' =>  '098',
        ]);
       Municipio::create([
            'nombre' =>  'Texcoco',
            'estado_id' => '15',
            'numero' =>  '099',
        ]);
       Municipio::create([
            'nombre' =>  'Tezoyuca',
            'estado_id' => '15',
            'numero' =>  '100',
        ]);
       Municipio::create([
            'nombre' =>  'Tianguistenco',
            'estado_id' => '15',
            'numero' =>  '101',
        ]);
       Municipio::create([
            'nombre' =>  'Timilpan',
            'estado_id' => '15',
            'numero' =>  '102',
        ]);
       Municipio::create([
            'nombre' =>  'Tlalmanalco',
            'estado_id' => '15',
            'numero' =>  '103',
        ]);
       Municipio::create([
            'nombre' =>  'Tlalnepantla de Baz',
            'estado_id' => '15',
            'numero' =>  '104',
        ]);
       Municipio::create([
            'nombre' =>  'Tlatlaya',
            'estado_id' => '15',
            'numero' =>  '105',
        ]);
       Municipio::create([
            'nombre' =>  'Toluca',
            'estado_id' => '15',
            'numero' =>  '106',
        ]);
       Municipio::create([
            'nombre' =>  'Tonatico',
            'estado_id' => '15',
            'numero' =>  '107',
        ]);
       Municipio::create([
            'nombre' =>  'Tultepec',
            'estado_id' => '15',
            'numero' =>  '108',
        ]);
       Municipio::create([
            'nombre' =>  'Tultitlán',
            'estado_id' => '15',
            'numero' =>  '109',
        ]);
       Municipio::create([
            'nombre' =>  'Valle de Bravo',
            'estado_id' => '15',
            'numero' =>  '110',
        ]);
       Municipio::create([
            'nombre' =>  'Villa de Allende',
            'estado_id' => '15',
            'numero' =>  '111',
        ]);
       Municipio::create([
            'nombre' =>  'Villa del Carbón',
            'estado_id' => '15',
            'numero' =>  '112',
        ]);
       Municipio::create([
            'nombre' =>  'Villa Guerrero',
            'estado_id' => '15',
            'numero' =>  '113',
        ]);
       Municipio::create([
            'nombre' =>  'Villa Victoria',
            'estado_id' => '15',
            'numero' =>  '114',
        ]);
       Municipio::create([
            'nombre' =>  'Xonacatlán',
            'estado_id' => '15',
            'numero' =>  '115',
        ]);
       Municipio::create([
            'nombre' =>  'Zacazonapan',
            'estado_id' => '15',
            'numero' =>  '116',
        ]);
       Municipio::create([
            'nombre' =>  'Zacualpan',
            'estado_id' => '15',
            'numero' =>  '117',
        ]);
       Municipio::create([
            'nombre' =>  'Zinacantepec',
            'estado_id' => '15',
            'numero' =>  '118',
        ]);
       Municipio::create([
            'nombre' =>  'Zumpahuacán',
            'estado_id' => '15',
            'numero' =>  '119',
        ]);
       Municipio::create([
            'nombre' =>  'Zumpango',
            'estado_id' => '15',
            'numero' =>  '120',
        ]);
       Municipio::create([
            'nombre' =>  'Cuautitlán Izcalli',
            'estado_id' => '15',
            'numero' =>  '121',
        ]);
       Municipio::create([
            'nombre' =>  'Valle de Chalco Solidaridad',
            'estado_id' => '15',
            'numero' =>  '122',
        ]);
       Municipio::create([
            'nombre' =>  'Luvianos',
            'estado_id' => '15',
            'numero' =>  '123',
        ]);
       Municipio::create([
            'nombre' =>  'San José del Rincón',
            'estado_id' => '15',
            'numero' =>  '124',
        ]);
       Municipio::create([
            'nombre' =>  'Tonanitla',
            'estado_id' => '15',
            'numero' =>  '125',
        ]);
       Municipio::create([
            'nombre' =>  'Acuitzio',
            'estado_id' => '16',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Aguililla',
            'estado_id' => '16',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Álvaro Obregón',
            'estado_id' => '16',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Angamacutiro',
            'estado_id' => '16',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Angangueo',
            'estado_id' => '16',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Apatzingán',
            'estado_id' => '16',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Aporo',
            'estado_id' => '16',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Aquila',
            'estado_id' => '16',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Ario',
            'estado_id' => '16',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Arteaga',
            'estado_id' => '16',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Briseñas',
            'estado_id' => '16',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Buenavista',
            'estado_id' => '16',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'Carácuaro',
            'estado_id' => '16',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'Coahuayana',
            'estado_id' => '16',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Coalcomán de Vázquez Pallares',
            'estado_id' => '16',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'Coeneo',
            'estado_id' => '16',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'Contepec',
            'estado_id' => '16',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'Copándaro',
            'estado_id' => '16',
            'numero' =>  '018',
        ]);
       Municipio::create([
            'nombre' =>  'Cotija',
            'estado_id' => '16',
            'numero' =>  '019',
        ]);
       Municipio::create([
            'nombre' =>  'Cuitzeo',
            'estado_id' => '16',
            'numero' =>  '020',
        ]);
       Municipio::create([
            'nombre' =>  'Charapan',
            'estado_id' => '16',
            'numero' =>  '021',
        ]);
       Municipio::create([
            'nombre' =>  'Charo',
            'estado_id' => '16',
            'numero' =>  '022',
        ]);
       Municipio::create([
            'nombre' =>  'Chavinda',
            'estado_id' => '16',
            'numero' =>  '023',
        ]);
       Municipio::create([
            'nombre' =>  'Cherán',
            'estado_id' => '16',
            'numero' =>  '024',
        ]);
       Municipio::create([
            'nombre' =>  'Chilchota',
            'estado_id' => '16',
            'numero' =>  '025',
        ]);
       Municipio::create([
            'nombre' =>  'Chinicuila',
            'estado_id' => '16',
            'numero' =>  '026',
        ]);
       Municipio::create([
            'nombre' =>  'Chucándiro',
            'estado_id' => '16',
            'numero' =>  '027',
        ]);
       Municipio::create([
            'nombre' =>  'Churintzio',
            'estado_id' => '16',
            'numero' =>  '028',
        ]);
       Municipio::create([
            'nombre' =>  'Churumuco',
            'estado_id' => '16',
            'numero' =>  '029',
        ]);
       Municipio::create([
            'nombre' =>  'Ecuandureo',
            'estado_id' => '16',
            'numero' =>  '030',
        ]);
       Municipio::create([
            'nombre' =>  'Epitacio Huerta',
            'estado_id' => '16',
            'numero' =>  '031',
        ]);
       Municipio::create([
            'nombre' =>  'Erongarícuaro',
            'estado_id' => '16',
            'numero' =>  '032',
        ]);
       Municipio::create([
            'nombre' =>  'Gabriel Zamora',
            'estado_id' => '16',
            'numero' =>  '033',
        ]);
       Municipio::create([
            'nombre' =>  'Hidalgo',
            'estado_id' => '16',
            'numero' =>  '034',
        ]);
       Municipio::create([
            'nombre' =>  'La Huacana',
            'estado_id' => '16',
            'numero' =>  '035',
        ]);
       Municipio::create([
            'nombre' =>  'Huandacareo',
            'estado_id' => '16',
            'numero' =>  '036',
        ]);
       Municipio::create([
            'nombre' =>  'Huaniqueo',
            'estado_id' => '16',
            'numero' =>  '037',
        ]);
       Municipio::create([
            'nombre' =>  'Huetamo',
            'estado_id' => '16',
            'numero' =>  '038',
        ]);
       Municipio::create([
            'nombre' =>  'Huiramba',
            'estado_id' => '16',
            'numero' =>  '039',
        ]);
       Municipio::create([
            'nombre' =>  'Indaparapeo',
            'estado_id' => '16',
            'numero' =>  '040',
        ]);
       Municipio::create([
            'nombre' =>  'Irimbo',
            'estado_id' => '16',
            'numero' =>  '041',
        ]);
       Municipio::create([
            'nombre' =>  'Ixtlán',
            'estado_id' => '16',
            'numero' =>  '042',
        ]);
       Municipio::create([
            'nombre' =>  'Jacona',
            'estado_id' => '16',
            'numero' =>  '043',
        ]);
       Municipio::create([
            'nombre' =>  'Jiménez',
            'estado_id' => '16',
            'numero' =>  '044',
        ]);
       Municipio::create([
            'nombre' =>  'Jiquilpan',
            'estado_id' => '16',
            'numero' =>  '045',
        ]);
       Municipio::create([
            'nombre' =>  'Juárez',
            'estado_id' => '16',
            'numero' =>  '046',
        ]);
       Municipio::create([
            'nombre' =>  'Jungapeo',
            'estado_id' => '16',
            'numero' =>  '047',
        ]);
       Municipio::create([
            'nombre' =>  'Lagunillas',
            'estado_id' => '16',
            'numero' =>  '048',
        ]);
       Municipio::create([
            'nombre' =>  'Madero',
            'estado_id' => '16',
            'numero' =>  '049',
        ]);
       Municipio::create([
            'nombre' =>  'Maravatío',
            'estado_id' => '16',
            'numero' =>  '050',
        ]);
       Municipio::create([
            'nombre' =>  'Marcos Castellanos',
            'estado_id' => '16',
            'numero' =>  '051',
        ]);
       Municipio::create([
            'nombre' =>  'Lázaro Cárdenas',
            'estado_id' => '16',
            'numero' =>  '052',
        ]);
       Municipio::create([
            'nombre' =>  'Morelia',
            'estado_id' => '16',
            'numero' =>  '053',
        ]);
       Municipio::create([
            'nombre' =>  'Morelos',
            'estado_id' => '16',
            'numero' =>  '054',
        ]);
       Municipio::create([
            'nombre' =>  'Múgica',
            'estado_id' => '16',
            'numero' =>  '055',
        ]);
       Municipio::create([
            'nombre' =>  'Nahuatzen',
            'estado_id' => '16',
            'numero' =>  '056',
        ]);
       Municipio::create([
            'nombre' =>  'Nocupétaro',
            'estado_id' => '16',
            'numero' =>  '057',
        ]);
       Municipio::create([
            'nombre' =>  'Nuevo Parangaricutiro',
            'estado_id' => '16',
            'numero' =>  '058',
        ]);
       Municipio::create([
            'nombre' =>  'Nuevo Urecho',
            'estado_id' => '16',
            'numero' =>  '059',
        ]);
       Municipio::create([
            'nombre' =>  'Numarán',
            'estado_id' => '16',
            'numero' =>  '060',
        ]);
       Municipio::create([
            'nombre' =>  'Ocampo',
            'estado_id' => '16',
            'numero' =>  '061',
        ]);
       Municipio::create([
            'nombre' =>  'Pajacuarán',
            'estado_id' => '16',
            'numero' =>  '062',
        ]);
       Municipio::create([
            'nombre' =>  'Panindícuaro',
            'estado_id' => '16',
            'numero' =>  '063',
        ]);
       Municipio::create([
            'nombre' =>  'Parácuaro',
            'estado_id' => '16',
            'numero' =>  '064',
        ]);
       Municipio::create([
            'nombre' =>  'Paracho',
            'estado_id' => '16',
            'numero' =>  '065',
        ]);
       Municipio::create([
            'nombre' =>  'Pátzcuaro',
            'estado_id' => '16',
            'numero' =>  '066',
        ]);
       Municipio::create([
            'nombre' =>  'Penjamillo',
            'estado_id' => '16',
            'numero' =>  '067',
        ]);
       Municipio::create([
            'nombre' =>  'Peribán',
            'estado_id' => '16',
            'numero' =>  '068',
        ]);
       Municipio::create([
            'nombre' =>  'La Piedad',
            'estado_id' => '16',
            'numero' =>  '069',
        ]);
       Municipio::create([
            'nombre' =>  'Purépero',
            'estado_id' => '16',
            'numero' =>  '070',
        ]);
       Municipio::create([
            'nombre' =>  'Puruándiro',
            'estado_id' => '16',
            'numero' =>  '071',
        ]);
       Municipio::create([
            'nombre' =>  'Queréndaro',
            'estado_id' => '16',
            'numero' =>  '072',
        ]);
       Municipio::create([
            'nombre' =>  'Quiroga',
            'estado_id' => '16',
            'numero' =>  '073',
        ]);
       Municipio::create([
            'nombre' =>  'Cojumatlán de Régules',
            'estado_id' => '16',
            'numero' =>  '074',
        ]);
       Municipio::create([
            'nombre' =>  'Los Reyes',
            'estado_id' => '16',
            'numero' =>  '075',
        ]);
       Municipio::create([
            'nombre' =>  'Sahuayo',
            'estado_id' => '16',
            'numero' =>  '076',
        ]);
       Municipio::create([
            'nombre' =>  'San Lucas',
            'estado_id' => '16',
            'numero' =>  '077',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Ana Maya',
            'estado_id' => '16',
            'numero' =>  '078',
        ]);
       Municipio::create([
            'nombre' =>  'Salvador Escalante',
            'estado_id' => '16',
            'numero' =>  '079',
        ]);
       Municipio::create([
            'nombre' =>  'Senguio',
            'estado_id' => '16',
            'numero' =>  '080',
        ]);
       Municipio::create([
            'nombre' =>  'Susupuato',
            'estado_id' => '16',
            'numero' =>  '081',
        ]);
       Municipio::create([
            'nombre' =>  'Tacámbaro',
            'estado_id' => '16',
            'numero' =>  '082',
        ]);
       Municipio::create([
            'nombre' =>  'Tancítaro',
            'estado_id' => '16',
            'numero' =>  '083',
        ]);
       Municipio::create([
            'nombre' =>  'Tangamandapio',
            'estado_id' => '16',
            'numero' =>  '084',
        ]);
       Municipio::create([
            'nombre' =>  'Tangancícuaro',
            'estado_id' => '16',
            'numero' =>  '085',
        ]);
       Municipio::create([
            'nombre' =>  'Tanhuato',
            'estado_id' => '16',
            'numero' =>  '086',
        ]);
       Municipio::create([
            'nombre' =>  'Taretan',
            'estado_id' => '16',
            'numero' =>  '087',
        ]);
       Municipio::create([
            'nombre' =>  'Tarímbaro',
            'estado_id' => '16',
            'numero' =>  '088',
        ]);
       Municipio::create([
            'nombre' =>  'Tepalcatepec',
            'estado_id' => '16',
            'numero' =>  '089',
        ]);
       Municipio::create([
            'nombre' =>  'Tingambato',
            'estado_id' => '16',
            'numero' =>  '090',
        ]);
       Municipio::create([
            'nombre' =>  'Tingüindín',
            'estado_id' => '16',
            'numero' =>  '091',
        ]);
       Municipio::create([
            'nombre' =>  'Tiquicheo de Nicolás Romero',
            'estado_id' => '16',
            'numero' =>  '092',
        ]);
       Municipio::create([
            'nombre' =>  'Tlalpujahua',
            'estado_id' => '16',
            'numero' =>  '093',
        ]);
       Municipio::create([
            'nombre' =>  'Tlazazalca',
            'estado_id' => '16',
            'numero' =>  '094',
        ]);
       Municipio::create([
            'nombre' =>  'Tocumbo',
            'estado_id' => '16',
            'numero' =>  '095',
        ]);
       Municipio::create([
            'nombre' =>  'Tumbiscatío',
            'estado_id' => '16',
            'numero' =>  '096',
        ]);
       Municipio::create([
            'nombre' =>  'Turicato',
            'estado_id' => '16',
            'numero' =>  '097',
        ]);
       Municipio::create([
            'nombre' =>  'Tuxpan',
            'estado_id' => '16',
            'numero' =>  '098',
        ]);
       Municipio::create([
            'nombre' =>  'Tuzantla',
            'estado_id' => '16',
            'numero' =>  '099',
        ]);
       Municipio::create([
            'nombre' =>  'Tzintzuntzan',
            'estado_id' => '16',
            'numero' =>  '100',
        ]);
       Municipio::create([
            'nombre' =>  'Tzitzio',
            'estado_id' => '16',
            'numero' =>  '101',
        ]);
       Municipio::create([
            'nombre' =>  'Uruapan',
            'estado_id' => '16',
            'numero' =>  '102',
        ]);
       Municipio::create([
            'nombre' =>  'Venustiano Carranza',
            'estado_id' => '16',
            'numero' =>  '103',
        ]);
       Municipio::create([
            'nombre' =>  'Villamar',
            'estado_id' => '16',
            'numero' =>  '104',
        ]);
       Municipio::create([
            'nombre' =>  'Vista Hermosa',
            'estado_id' => '16',
            'numero' =>  '105',
        ]);
       Municipio::create([
            'nombre' =>  'Yurécuaro',
            'estado_id' => '16',
            'numero' =>  '106',
        ]);
       Municipio::create([
            'nombre' =>  'Zacapu',
            'estado_id' => '16',
            'numero' =>  '107',
        ]);
       Municipio::create([
            'nombre' =>  'Zamora',
            'estado_id' => '16',
            'numero' =>  '108',
        ]);
       Municipio::create([
            'nombre' =>  'Zináparo',
            'estado_id' => '16',
            'numero' =>  '109',
        ]);
       Municipio::create([
            'nombre' =>  'Zinapécuaro',
            'estado_id' => '16',
            'numero' =>  '110',
        ]);
       Municipio::create([
            'nombre' =>  'Ziracuaretiro',
            'estado_id' => '16',
            'numero' =>  '111',
        ]);
       Municipio::create([
            'nombre' =>  'Zitácuaro',
            'estado_id' => '16',
            'numero' =>  '112',
        ]);
       Municipio::create([
            'nombre' =>  'José Sixto Verduzco',
            'estado_id' => '16',
            'numero' =>  '113',
        ]);
       Municipio::create([
            'nombre' =>  'Amacuzac',
            'estado_id' => '17',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Atlatlahucan',
            'estado_id' => '17',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Axochiapan',
            'estado_id' => '17',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Ayala',
            'estado_id' => '17',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Coatlán del Río',
            'estado_id' => '17',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Cuautla',
            'estado_id' => '17',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Cuernavaca',
            'estado_id' => '17',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Emiliano Zapata',
            'estado_id' => '17',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Huitzilac',
            'estado_id' => '17',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Jantetelco',
            'estado_id' => '17',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Jiutepec',
            'estado_id' => '17',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Jojutla',
            'estado_id' => '17',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'Jonacatepec',
            'estado_id' => '17',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'Mazatepec',
            'estado_id' => '17',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Miacatlán',
            'estado_id' => '17',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'Ocuituco',
            'estado_id' => '17',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'Puente de Ixtla',
            'estado_id' => '17',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'Temixco',
            'estado_id' => '17',
            'numero' =>  '018',
        ]);
       Municipio::create([
            'nombre' =>  'Tepalcingo',
            'estado_id' => '17',
            'numero' =>  '019',
        ]);
       Municipio::create([
            'nombre' =>  'Tepoztlán',
            'estado_id' => '17',
            'numero' =>  '020',
        ]);
       Municipio::create([
            'nombre' =>  'Tetecala',
            'estado_id' => '17',
            'numero' =>  '021',
        ]);
       Municipio::create([
            'nombre' =>  'Tetela del Volcán',
            'estado_id' => '17',
            'numero' =>  '022',
        ]);
       Municipio::create([
            'nombre' =>  'Tlalnepantla',
            'estado_id' => '17',
            'numero' =>  '023',
        ]);
       Municipio::create([
            'nombre' =>  'Tlaltizapán de Zapata',
            'estado_id' => '17',
            'numero' =>  '024',
        ]);
       Municipio::create([
            'nombre' =>  'Tlaquiltenango',
            'estado_id' => '17',
            'numero' =>  '025',
        ]);
       Municipio::create([
            'nombre' =>  'Tlayacapan',
            'estado_id' => '17',
            'numero' =>  '026',
        ]);
       Municipio::create([
            'nombre' =>  'Totolapan',
            'estado_id' => '17',
            'numero' =>  '027',
        ]);
       Municipio::create([
            'nombre' =>  'Xochitepec',
            'estado_id' => '17',
            'numero' =>  '028',
        ]);
       Municipio::create([
            'nombre' =>  'Yautepec',
            'estado_id' => '17',
            'numero' =>  '029',
        ]);
       Municipio::create([
            'nombre' =>  'Yecapixtla',
            'estado_id' => '17',
            'numero' =>  '030',
        ]);
       Municipio::create([
            'nombre' =>  'Zacatepec',
            'estado_id' => '17',
            'numero' =>  '031',
        ]);
       Municipio::create([
            'nombre' =>  'Zacualpan de Amilpas',
            'estado_id' => '17',
            'numero' =>  '032',
        ]);
       Municipio::create([
            'nombre' =>  'Temoac',
            'estado_id' => '17',
            'numero' =>  '033',
        ]);
       Municipio::create([
            'nombre' =>  'Acaponeta',
            'estado_id' => '18',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Ahuacatlán',
            'estado_id' => '18',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Amatlán de Cañas',
            'estado_id' => '18',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Compostela',
            'estado_id' => '18',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Huajicori',
            'estado_id' => '18',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Ixtlán del Río',
            'estado_id' => '18',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Jala',
            'estado_id' => '18',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Xalisco',
            'estado_id' => '18',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Del Nayar',
            'estado_id' => '18',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'Rosamorada',
            'estado_id' => '18',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Ruíz',
            'estado_id' => '18',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'San Blas',
            'estado_id' => '18',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Lagunillas',
            'estado_id' => '18',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María del Oro',
            'estado_id' => '18',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Ixcuintla',
            'estado_id' => '18',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'Tecuala',
            'estado_id' => '18',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'Tepic',
            'estado_id' => '18',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'Tuxpan',
            'estado_id' => '18',
            'numero' =>  '018',
        ]);
       Municipio::create([
            'nombre' =>  'La Yesca',
            'estado_id' => '18',
            'numero' =>  '019',
        ]);
       Municipio::create([
            'nombre' =>  'Bahía de Banderas',
            'estado_id' => '18',
            'numero' =>  '020',
        ]);
       Municipio::create([
            'nombre' =>  'Abasolo',
            'estado_id' => '19',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Agualeguas',
            'estado_id' => '19',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Los Aldamas',
            'estado_id' => '19',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Allende',
            'estado_id' => '19',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Anáhuac',
            'estado_id' => '19',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Apodaca',
            'estado_id' => '19',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Aramberri',
            'estado_id' => '19',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Bustamante',
            'estado_id' => '19',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Cadereyta Jiménez',
            'estado_id' => '19',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'El Carmen',
            'estado_id' => '19',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Cerralvo',
            'estado_id' => '19',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Ciénega de Flores',
            'estado_id' => '19',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'China',
            'estado_id' => '19',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'Doctor Arroyo',
            'estado_id' => '19',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Doctor Coss',
            'estado_id' => '19',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'Doctor González',
            'estado_id' => '19',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'Galeana',
            'estado_id' => '19',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'García',
            'estado_id' => '19',
            'numero' =>  '018',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Garza García',
            'estado_id' => '19',
            'numero' =>  '019',
        ]);
       Municipio::create([
            'nombre' =>  'General Bravo',
            'estado_id' => '19',
            'numero' =>  '020',
        ]);
       Municipio::create([
            'nombre' =>  'General Escobedo',
            'estado_id' => '19',
            'numero' =>  '021',
        ]);
       Municipio::create([
            'nombre' =>  'General Terán',
            'estado_id' => '19',
            'numero' =>  '022',
        ]);
       Municipio::create([
            'nombre' =>  'General Treviño',
            'estado_id' => '19',
            'numero' =>  '023',
        ]);
       Municipio::create([
            'nombre' =>  'General Zaragoza',
            'estado_id' => '19',
            'numero' =>  '024',
        ]);
       Municipio::create([
            'nombre' =>  'General Zuazua',
            'estado_id' => '19',
            'numero' =>  '025',
        ]);
       Municipio::create([
            'nombre' =>  'Guadalupe',
            'estado_id' => '19',
            'numero' =>  '026',
        ]);
       Municipio::create([
            'nombre' =>  'Los Herreras',
            'estado_id' => '19',
            'numero' =>  '027',
        ]);
       Municipio::create([
            'nombre' =>  'Higueras',
            'estado_id' => '19',
            'numero' =>  '028',
        ]);
       Municipio::create([
            'nombre' =>  'Hualahuises',
            'estado_id' => '19',
            'numero' =>  '029',
        ]);
       Municipio::create([
            'nombre' =>  'Iturbide',
            'estado_id' => '19',
            'numero' =>  '030',
        ]);
       Municipio::create([
            'nombre' =>  'Juárez',
            'estado_id' => '19',
            'numero' =>  '031',
        ]);
       Municipio::create([
            'nombre' =>  'Lampazos de Naranjo',
            'estado_id' => '19',
            'numero' =>  '032',
        ]);
       Municipio::create([
            'nombre' =>  'Linares',
            'estado_id' => '19',
            'numero' =>  '033',
        ]);
       Municipio::create([
            'nombre' =>  'Marín',
            'estado_id' => '19',
            'numero' =>  '034',
        ]);
       Municipio::create([
            'nombre' =>  'Melchor Ocampo',
            'estado_id' => '19',
            'numero' =>  '035',
        ]);
       Municipio::create([
            'nombre' =>  'Mier y Noriega',
            'estado_id' => '19',
            'numero' =>  '036',
        ]);
       Municipio::create([
            'nombre' =>  'Mina',
            'estado_id' => '19',
            'numero' =>  '037',
        ]);
       Municipio::create([
            'nombre' =>  'Montemorelos',
            'estado_id' => '19',
            'numero' =>  '038',
        ]);
       Municipio::create([
            'nombre' =>  'Monterrey',
            'estado_id' => '19',
            'numero' =>  '039',
        ]);
       Municipio::create([
            'nombre' =>  'Parás',
            'estado_id' => '19',
            'numero' =>  '040',
        ]);
       Municipio::create([
            'nombre' =>  'Pesquería',
            'estado_id' => '19',
            'numero' =>  '041',
        ]);
       Municipio::create([
            'nombre' =>  'Los Ramones',
            'estado_id' => '19',
            'numero' =>  '042',
        ]);
       Municipio::create([
            'nombre' =>  'Rayones',
            'estado_id' => '19',
            'numero' =>  '043',
        ]);
       Municipio::create([
            'nombre' =>  'Sabinas Hidalgo',
            'estado_id' => '19',
            'numero' =>  '044',
        ]);
       Municipio::create([
            'nombre' =>  'Salinas Victoria',
            'estado_id' => '19',
            'numero' =>  '045',
        ]);
       Municipio::create([
            'nombre' =>  'San Nicolás de los Garza',
            'estado_id' => '19',
            'numero' =>  '046',
        ]);
       Municipio::create([
            'nombre' =>  'Hidalgo',
            'estado_id' => '19',
            'numero' =>  '047',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina',
            'estado_id' => '19',
            'numero' =>  '048',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago',
            'estado_id' => '19',
            'numero' =>  '049',
        ]);
       Municipio::create([
            'nombre' =>  'Vallecillo',
            'estado_id' => '19',
            'numero' =>  '050',
        ]);
       Municipio::create([
            'nombre' =>  'Villaldama',
            'estado_id' => '19',
            'numero' =>  '051',
        ]);
       Municipio::create([
            'nombre' =>  'Abejones',
            'estado_id' => '20',
            'numero' =>  '001',
        ]);
       Municipio::create([
            'nombre' =>  'Acatlán de Pérez Figueroa',
            'estado_id' => '20',
            'numero' =>  '002',
        ]);
       Municipio::create([
            'nombre' =>  'Asunción Cacalotepec',
            'estado_id' => '20',
            'numero' =>  '003',
        ]);
       Municipio::create([
            'nombre' =>  'Asunción Cuyotepeji',
            'estado_id' => '20',
            'numero' =>  '004',
        ]);
       Municipio::create([
            'nombre' =>  'Asunción Ixtaltepec',
            'estado_id' => '20',
            'numero' =>  '005',
        ]);
       Municipio::create([
            'nombre' =>  'Asunción Nochixtlán',
            'estado_id' => '20',
            'numero' =>  '006',
        ]);
       Municipio::create([
            'nombre' =>  'Asunción Ocotlán',
            'estado_id' => '20',
            'numero' =>  '007',
        ]);
       Municipio::create([
            'nombre' =>  'Asunción Tlacolulita',
            'estado_id' => '20',
            'numero' =>  '008',
        ]);
       Municipio::create([
            'nombre' =>  'Ayotzintepec',
            'estado_id' => '20',
            'numero' =>  '009',
        ]);
       Municipio::create([
            'nombre' =>  'El Barrio de la Soledad',
            'estado_id' => '20',
            'numero' =>  '010',
        ]);
       Municipio::create([
            'nombre' =>  'Calihualá',
            'estado_id' => '20',
            'numero' =>  '011',
        ]);
       Municipio::create([
            'nombre' =>  'Candelaria Loxicha',
            'estado_id' => '20',
            'numero' =>  '012',
        ]);
       Municipio::create([
            'nombre' =>  'Ciénega de Zimatlán',
            'estado_id' => '20',
            'numero' =>  '013',
        ]);
       Municipio::create([
            'nombre' =>  'Ciudad Ixtepec',
            'estado_id' => '20',
            'numero' =>  '014',
        ]);
       Municipio::create([
            'nombre' =>  'Coatecas Altas',
            'estado_id' => '20',
            'numero' =>  '015',
        ]);
       Municipio::create([
            'nombre' =>  'Coicoyán de las Flores',
            'estado_id' => '20',
            'numero' =>  '016',
        ]);
       Municipio::create([
            'nombre' =>  'La Compañía',
            'estado_id' => '20',
            'numero' =>  '017',
        ]);
       Municipio::create([
            'nombre' =>  'Concepción Buenavista',
            'estado_id' => '20',
            'numero' =>  '018',
        ]);
       Municipio::create([
            'nombre' =>  'Concepción Pápalo',
            'estado_id' => '20',
            'numero' =>  '019',
        ]);
       Municipio::create([
            'nombre' =>  'Constancia del Rosario',
            'estado_id' => '20',
            'numero' =>  '020',
        ]);
       Municipio::create([
            'nombre' =>  'Cosolapa',
            'estado_id' => '20',
            'numero' =>  '021',
        ]);
       Municipio::create([
            'nombre' =>  'Cosoltepec',
            'estado_id' => '20',
            'numero' =>  '022',
        ]);
       Municipio::create([
            'nombre' =>  'Cuilápam de Guerrero',
            'estado_id' => '20',
            'numero' =>  '023',
        ]);
       Municipio::create([
            'nombre' =>  'Cuyamecalco Villa de Zaragoza',
            'estado_id' => '20',
            'numero' =>  '024',
        ]);
       Municipio::create([
            'nombre' =>  'Chahuites',
            'estado_id' => '20',
            'numero' =>  '025',
        ]);
       Municipio::create([
            'nombre' =>  'Chalcatongo de Hidalgo',
            'estado_id' => '20',
            'numero' =>  '026',
        ]);
       Municipio::create([
            'nombre' =>  'Chiquihuitlán de Benito Juárez',
            'estado_id' => '20',
            'numero' =>  '027',
        ]);
       Municipio::create([
            'nombre' =>  'Heroica Ciudad de Ejutla de Crespo',
            'estado_id' => '20',
            'numero' =>  '028',
        ]);
       Municipio::create([
            'nombre' =>  'Eloxochitlán de Flores Magón',
            'estado_id' => '20',
            'numero' =>  '029',
        ]);
       Municipio::create([
            'nombre' =>  'El Espinal',
            'estado_id' => '20',
            'numero' =>  '030',
        ]);
       Municipio::create([
            'nombre' =>  'Tamazulápam del Espíritu Santo',
            'estado_id' => '20',
            'numero' =>  '031',
        ]);
       Municipio::create([
            'nombre' =>  'Fresnillo de Trujano',
            'estado_id' => '20',
            'numero' =>  '032',
        ]);
       Municipio::create([
            'nombre' =>  'Guadalupe Etla',
            'estado_id' => '20',
            'numero' =>  '033',
        ]);
       Municipio::create([
            'nombre' =>  'Guadalupe de Ramírez',
            'estado_id' => '20',
            'numero' =>  '034',
        ]);
       Municipio::create([
            'nombre' =>  'Guelatao de Juárez',
            'estado_id' => '20',
            'numero' =>  '035',
        ]);
       Municipio::create([
            'nombre' =>  'Guevea de Humboldt',
            'estado_id' => '20',
            'numero' =>  '036',
        ]);
       Municipio::create([
            'nombre' =>  'Mesones Hidalgo',
            'estado_id' => '20',
            'numero' =>  '037',
        ]);
       Municipio::create([
            'nombre' =>  'Villa Hidalgo',
            'estado_id' => '20',
            'numero' =>  '038',
        ]);
       Municipio::create([
            'nombre' =>  'Heroica Ciudad de Huajuapan de León',
            'estado_id' => '20',
            'numero' =>  '039',
        ]);
       Municipio::create([
            'nombre' =>  'Huautepec',
            'estado_id' => '20',
            'numero' =>  '040',
        ]);
       Municipio::create([
            'nombre' =>  'Huautla de Jiménez',
            'estado_id' => '20',
            'numero' =>  '041',
        ]);
       Municipio::create([
            'nombre' =>  'Ixtlán de Juárez',
            'estado_id' => '20',
            'numero' =>  '042',
        ]);
       Municipio::create([
            'nombre' =>  'Heroica Ciudad de Juchitán de Zaragoza',
            'estado_id' => '20',
            'numero' =>  '043',
        ]);
       Municipio::create([
            'nombre' =>  'Loma Bonita',
            'estado_id' => '20',
            'numero' =>  '044',
        ]);
       Municipio::create([
            'nombre' =>  'Magdalena Apasco',
            'estado_id' => '20',
            'numero' =>  '045',
        ]);
       Municipio::create([
            'nombre' =>  'Magdalena Jaltepec',
            'estado_id' => '20',
            'numero' =>  '046',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Magdalena Jicotlán',
            'estado_id' => '20',
            'numero' =>  '047',
        ]);
       Municipio::create([
            'nombre' =>  'Magdalena Mixtepec',
            'estado_id' => '20',
            'numero' =>  '048',
        ]);
       Municipio::create([
            'nombre' =>  'Magdalena Ocotlán',
            'estado_id' => '20',
            'numero' =>  '049',
        ]);
       Municipio::create([
            'nombre' =>  'Magdalena Peñasco',
            'estado_id' => '20',
            'numero' =>  '050',
        ]);
       Municipio::create([
            'nombre' =>  'Magdalena Teitipac',
            'estado_id' => '20',
            'numero' =>  '051',
        ]);
       Municipio::create([
            'nombre' =>  'Magdalena Tequisistlán',
            'estado_id' => '20',
            'numero' =>  '052',
        ]);
       Municipio::create([
            'nombre' =>  'Magdalena Tlacotepec',
            'estado_id' => '20',
            'numero' =>  '053',
        ]);
       Municipio::create([
            'nombre' =>  'Magdalena Zahuatlán',
            'estado_id' => '20',
            'numero' =>  '054',
        ]);
       Municipio::create([
            'nombre' =>  'Mariscala de Juárez',
            'estado_id' => '20',
            'numero' =>  '055',
        ]);
       Municipio::create([
            'nombre' =>  'Mártires de Tacubaya',
            'estado_id' => '20',
            'numero' =>  '056',
        ]);
       Municipio::create([
            'nombre' =>  'Matías Romero Avendaño',
            'estado_id' => '20',
            'numero' =>  '057',
        ]);
       Municipio::create([
            'nombre' =>  'Mazatlán Villa de Flores',
            'estado_id' => '20',
            'numero' =>  '058',
        ]);
       Municipio::create([
            'nombre' =>  'Miahuatlán de Porfirio Díaz',
            'estado_id' => '20',
            'numero' =>  '059',
        ]);
       Municipio::create([
            'nombre' =>  'Mixistlán de la Reforma',
            'estado_id' => '20',
            'numero' =>  '060',
        ]);
       Municipio::create([
            'nombre' =>  'Monjas',
            'estado_id' => '20',
            'numero' =>  '061',
        ]);
       Municipio::create([
            'nombre' =>  'Natividad',
            'estado_id' => '20',
            'numero' =>  '062',
        ]);
       Municipio::create([
            'nombre' =>  'Nazareno Etla',
            'estado_id' => '20',
            'numero' =>  '063',
        ]);
       Municipio::create([
            'nombre' =>  'Nejapa de Madero',
            'estado_id' => '20',
            'numero' =>  '064',
        ]);
       Municipio::create([
            'nombre' =>  'Ixpantepec Nieves',
            'estado_id' => '20',
            'numero' =>  '065',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Niltepec',
            'estado_id' => '20',
            'numero' =>  '066',
        ]);
       Municipio::create([
            'nombre' =>  'Oaxaca de Juárez',
            'estado_id' => '20',
            'numero' =>  '067',
        ]);
       Municipio::create([
            'nombre' =>  'Ocotlán de Morelos',
            'estado_id' => '20',
            'numero' =>  '068',
        ]);
       Municipio::create([
            'nombre' =>  'La Pe',
            'estado_id' => '20',
            'numero' =>  '069',
        ]);
       Municipio::create([
            'nombre' =>  'Pinotepa de Don Luis',
            'estado_id' => '20',
            'numero' =>  '070',
        ]);
       Municipio::create([
            'nombre' =>  'Pluma Hidalgo',
            'estado_id' => '20',
            'numero' =>  '071',
        ]);
       Municipio::create([
            'nombre' =>  'San José del Progreso',
            'estado_id' => '20',
            'numero' =>  '072',
        ]);
       Municipio::create([
            'nombre' =>  'Putla Villa de Guerrero',
            'estado_id' => '20',
            'numero' =>  '073',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina Quioquitani',
            'estado_id' => '20',
            'numero' =>  '074',
        ]);
       Municipio::create([
            'nombre' =>  'Reforma de Pineda',
            'estado_id' => '20',
            'numero' =>  '075',
        ]);
       Municipio::create([
            'nombre' =>  'La Reforma',
            'estado_id' => '20',
            'numero' =>  '076',
        ]);
       Municipio::create([
            'nombre' =>  'Reyes Etla',
            'estado_id' => '20',
            'numero' =>  '077',
        ]);
       Municipio::create([
            'nombre' =>  'Rojas de Cuauhtémoc',
            'estado_id' => '20',
            'numero' =>  '078',
        ]);
       Municipio::create([
            'nombre' =>  'Salina Cruz',
            'estado_id' => '20',
            'numero' =>  '079',
        ]);
       Municipio::create([
            'nombre' =>  'San Agustín Amatengo',
            'estado_id' => '20',
            'numero' =>  '080',
        ]);
       Municipio::create([
            'nombre' =>  'San Agustín Atenango',
            'estado_id' => '20',
            'numero' =>  '081',
        ]);
       Municipio::create([
            'nombre' =>  'San Agustín Chayuco',
            'estado_id' => '20',
            'numero' =>  '082',
        ]);
       Municipio::create([
            'nombre' =>  'San Agustín de las Juntas',
            'estado_id' => '20',
            'numero' =>  '083',
        ]);
       Municipio::create([
            'nombre' =>  'San Agustín Etla',
            'estado_id' => '20',
            'numero' =>  '084',
        ]);
       Municipio::create([
            'nombre' =>  'San Agustín Loxicha',
            'estado_id' => '20',
            'numero' =>  '085',
        ]);
       Municipio::create([
            'nombre' =>  'San Agustín Tlacotepec',
            'estado_id' => '20',
            'numero' =>  '086',
        ]);
       Municipio::create([
            'nombre' =>  'San Agustín Yatareni',
            'estado_id' => '20',
            'numero' =>  '087',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Cabecera Nueva',
            'estado_id' => '20',
            'numero' =>  '088',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Dinicuiti',
            'estado_id' => '20',
            'numero' =>  '089',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Huaxpaltepec',
            'estado_id' => '20',
            'numero' =>  '090',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Huayápam',
            'estado_id' => '20',
            'numero' =>  '091',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Ixtlahuaca',
            'estado_id' => '20',
            'numero' =>  '092',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Lagunas',
            'estado_id' => '20',
            'numero' =>  '093',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Nuxiño',
            'estado_id' => '20',
            'numero' =>  '094',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Paxtlán',
            'estado_id' => '20',
            'numero' =>  '095',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Sinaxtla',
            'estado_id' => '20',
            'numero' =>  '096',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Solaga',
            'estado_id' => '20',
            'numero' =>  '097',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Teotilálpam',
            'estado_id' => '20',
            'numero' =>  '098',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Tepetlapa',
            'estado_id' => '20',
            'numero' =>  '099',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Yaá',
            'estado_id' => '20',
            'numero' =>  '100',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Zabache',
            'estado_id' => '20',
            'numero' =>  '101',
        ]);
       Municipio::create([
            'nombre' =>  'San Andrés Zautla',
            'estado_id' => '20',
            'numero' =>  '102',
        ]);
       Municipio::create([
            'nombre' =>  'San Antonino Castillo Velasco',
            'estado_id' => '20',
            'numero' =>  '103',
        ]);
       Municipio::create([
            'nombre' =>  'San Antonino el Alto',
            'estado_id' => '20',
            'numero' =>  '104',
        ]);
       Municipio::create([
            'nombre' =>  'San Antonino Monte Verde',
            'estado_id' => '20',
            'numero' =>  '105',
        ]);
       Municipio::create([
            'nombre' =>  'San Antonio Acutla',
            'estado_id' => '20',
            'numero' =>  '106',
        ]);
       Municipio::create([
            'nombre' =>  'San Antonio de la Cal',
            'estado_id' => '20',
            'numero' =>  '107',
        ]);
       Municipio::create([
            'nombre' =>  'San Antonio Huitepec',
            'estado_id' => '20',
            'numero' =>  '108',
        ]);
       Municipio::create([
            'nombre' =>  'San Antonio Nanahuatípam',
            'estado_id' => '20',
            'numero' =>  '109',
        ]);
       Municipio::create([
            'nombre' =>  'San Antonio Sinicahua',
            'estado_id' => '20',
            'numero' =>  '110',
        ]);
       Municipio::create([
            'nombre' =>  'San Antonio Tepetlapa',
            'estado_id' => '20',
            'numero' =>  '111',
        ]);
       Municipio::create([
            'nombre' =>  'San Baltazar Chichicápam',
            'estado_id' => '20',
            'numero' =>  '112',
        ]);
       Municipio::create([
            'nombre' =>  'San Baltazar Loxicha',
            'estado_id' => '20',
            'numero' =>  '113',
        ]);
       Municipio::create([
            'nombre' =>  'San Baltazar Yatzachi el Bajo',
            'estado_id' => '20',
            'numero' =>  '114',
        ]);
       Municipio::create([
            'nombre' =>  'San Bartolo Coyotepec',
            'estado_id' => '20',
            'numero' =>  '115',
        ]);
       Municipio::create([
            'nombre' =>  'San Bartolomé Ayautla',
            'estado_id' => '20',
            'numero' =>  '116',
        ]);
       Municipio::create([
            'nombre' =>  'San Bartolomé Loxicha',
            'estado_id' => '20',
            'numero' =>  '117',
        ]);
       Municipio::create([
            'nombre' =>  'San Bartolomé Quialana',
            'estado_id' => '20',
            'numero' =>  '118',
        ]);
       Municipio::create([
            'nombre' =>  'San Bartolomé Yucuañe',
            'estado_id' => '20',
            'numero' =>  '119',
        ]);
       Municipio::create([
            'nombre' =>  'San Bartolomé Zoogocho',
            'estado_id' => '20',
            'numero' =>  '120',
        ]);
       Municipio::create([
            'nombre' =>  'San Bartolo Soyaltepec',
            'estado_id' => '20',
            'numero' =>  '121',
        ]);
       Municipio::create([
            'nombre' =>  'San Bartolo Yautepec',
            'estado_id' => '20',
            'numero' =>  '122',
        ]);
       Municipio::create([
            'nombre' =>  'San Bernardo Mixtepec',
            'estado_id' => '20',
            'numero' =>  '123',
        ]);
       Municipio::create([
            'nombre' =>  'San Blas Atempa',
            'estado_id' => '20',
            'numero' =>  '124',
        ]);
       Municipio::create([
            'nombre' =>  'San Carlos Yautepec',
            'estado_id' => '20',
            'numero' =>  '125',
        ]);
       Municipio::create([
            'nombre' =>  'San Cristóbal Amatlán',
            'estado_id' => '20',
            'numero' =>  '126',
        ]);
       Municipio::create([
            'nombre' =>  'San Cristóbal Amoltepec',
            'estado_id' => '20',
            'numero' =>  '127',
        ]);
       Municipio::create([
            'nombre' =>  'San Cristóbal Lachirioag',
            'estado_id' => '20',
            'numero' =>  '128',
        ]);
       Municipio::create([
            'nombre' =>  'San Cristóbal Suchixtlahuaca',
            'estado_id' => '20',
            'numero' =>  '129',
        ]);
       Municipio::create([
            'nombre' =>  'San Dionisio del Mar',
            'estado_id' => '20',
            'numero' =>  '130',
        ]);
       Municipio::create([
            'nombre' =>  'San Dionisio Ocotepec',
            'estado_id' => '20',
            'numero' =>  '131',
        ]);
       Municipio::create([
            'nombre' =>  'San Dionisio Ocotlán',
            'estado_id' => '20',
            'numero' =>  '132',
        ]);
       Municipio::create([
            'nombre' =>  'San Esteban Atatlahuca',
            'estado_id' => '20',
            'numero' =>  '133',
        ]);
       Municipio::create([
            'nombre' =>  'San Felipe Jalapa de Díaz',
            'estado_id' => '20',
            'numero' =>  '134',
        ]);
       Municipio::create([
            'nombre' =>  'San Felipe Tejalápam',
            'estado_id' => '20',
            'numero' =>  '135',
        ]);
       Municipio::create([
            'nombre' =>  'San Felipe Usila',
            'estado_id' => '20',
            'numero' =>  '136',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Cahuacuá',
            'estado_id' => '20',
            'numero' =>  '137',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Cajonos',
            'estado_id' => '20',
            'numero' =>  '138',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Chapulapa',
            'estado_id' => '20',
            'numero' =>  '139',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Chindúa',
            'estado_id' => '20',
            'numero' =>  '140',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco del Mar',
            'estado_id' => '20',
            'numero' =>  '141',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Huehuetlán',
            'estado_id' => '20',
            'numero' =>  '142',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Ixhuatán',
            'estado_id' => '20',
            'numero' =>  '143',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Jaltepetongo',
            'estado_id' => '20',
            'numero' =>  '144',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Lachigoló',
            'estado_id' => '20',
            'numero' =>  '145',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Logueche',
            'estado_id' => '20',
            'numero' =>  '146',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Nuxaño',
            'estado_id' => '20',
            'numero' =>  '147',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Ozolotepec',
            'estado_id' => '20',
            'numero' =>  '148',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Sola',
            'estado_id' => '20',
            'numero' =>  '149',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Telixtlahuaca',
            'estado_id' => '20',
            'numero' =>  '150',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Teopan',
            'estado_id' => '20',
            'numero' =>  '151',
        ]);
       Municipio::create([
            'nombre' =>  'San Francisco Tlapancingo',
            'estado_id' => '20',
            'numero' =>  '152',
        ]);
       Municipio::create([
            'nombre' =>  'San Gabriel Mixtepec',
            'estado_id' => '20',
            'numero' =>  '153',
        ]);
       Municipio::create([
            'nombre' =>  'San Ildefonso Amatlán',
            'estado_id' => '20',
            'numero' =>  '154',
        ]);
       Municipio::create([
            'nombre' =>  'San Ildefonso Sola',
            'estado_id' => '20',
            'numero' =>  '155',
        ]);
       Municipio::create([
            'nombre' =>  'San Ildefonso Villa Alta',
            'estado_id' => '20',
            'numero' =>  '156',
        ]);
       Municipio::create([
            'nombre' =>  'San Jacinto Amilpas',
            'estado_id' => '20',
            'numero' =>  '157',
        ]);
       Municipio::create([
            'nombre' =>  'San Jacinto Tlacotepec',
            'estado_id' => '20',
            'numero' =>  '158',
        ]);
       Municipio::create([
            'nombre' =>  'San Jerónimo Coatlán',
            'estado_id' => '20',
            'numero' =>  '159',
        ]);
       Municipio::create([
            'nombre' =>  'San Jerónimo Silacayoapilla',
            'estado_id' => '20',
            'numero' =>  '160',
        ]);
       Municipio::create([
            'nombre' =>  'San Jerónimo Sosola',
            'estado_id' => '20',
            'numero' =>  '161',
        ]);
       Municipio::create([
            'nombre' =>  'San Jerónimo Taviche',
            'estado_id' => '20',
            'numero' =>  '162',
        ]);
       Municipio::create([
            'nombre' =>  'San Jerónimo Tecóatl',
            'estado_id' => '20',
            'numero' =>  '163',
        ]);
       Municipio::create([
            'nombre' =>  'San Jorge Nuchita',
            'estado_id' => '20',
            'numero' =>  '164',
        ]);
       Municipio::create([
            'nombre' =>  'San José Ayuquila',
            'estado_id' => '20',
            'numero' =>  '165',
        ]);
       Municipio::create([
            'nombre' =>  'San José Chiltepec',
            'estado_id' => '20',
            'numero' =>  '166',
        ]);
       Municipio::create([
            'nombre' =>  'San José del Peñasco',
            'estado_id' => '20',
            'numero' =>  '167',
        ]);
       Municipio::create([
            'nombre' =>  'San José Estancia Grande',
            'estado_id' => '20',
            'numero' =>  '168',
        ]);
       Municipio::create([
            'nombre' =>  'San José Independencia',
            'estado_id' => '20',
            'numero' =>  '169',
        ]);
       Municipio::create([
            'nombre' =>  'San José Lachiguiri',
            'estado_id' => '20',
            'numero' =>  '170',
        ]);
       Municipio::create([
            'nombre' =>  'San José Tenango',
            'estado_id' => '20',
            'numero' =>  '171',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Achiutla',
            'estado_id' => '20',
            'numero' =>  '172',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Atepec',
            'estado_id' => '20',
            'numero' =>  '173',
        ]);
       Municipio::create([
            'nombre' =>  'Ánimas Trujano',
            'estado_id' => '20',
            'numero' =>  '174',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Bautista Atatlahuca',
            'estado_id' => '20',
            'numero' =>  '175',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Bautista Coixtlahuaca',
            'estado_id' => '20',
            'numero' =>  '176',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Bautista Cuicatlán',
            'estado_id' => '20',
            'numero' =>  '177',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Bautista Guelache',
            'estado_id' => '20',
            'numero' =>  '178',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Bautista Jayacatlán',
            'estado_id' => '20',
            'numero' =>  '179',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Bautista Lo de Soto',
            'estado_id' => '20',
            'numero' =>  '180',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Bautista Suchitepec',
            'estado_id' => '20',
            'numero' =>  '181',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Bautista Tlacoatzintepec',
            'estado_id' => '20',
            'numero' =>  '182',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Bautista Tlachichilco',
            'estado_id' => '20',
            'numero' =>  '183',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Bautista Tuxtepec',
            'estado_id' => '20',
            'numero' =>  '184',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Cacahuatepec',
            'estado_id' => '20',
            'numero' =>  '185',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Cieneguilla',
            'estado_id' => '20',
            'numero' =>  '186',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Coatzóspam',
            'estado_id' => '20',
            'numero' =>  '187',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Colorado',
            'estado_id' => '20',
            'numero' =>  '188',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Comaltepec',
            'estado_id' => '20',
            'numero' =>  '189',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Cotzocón',
            'estado_id' => '20',
            'numero' =>  '190',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Chicomezúchil',
            'estado_id' => '20',
            'numero' =>  '191',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Chilateca',
            'estado_id' => '20',
            'numero' =>  '192',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan del Estado',
            'estado_id' => '20',
            'numero' =>  '193',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan del Río',
            'estado_id' => '20',
            'numero' =>  '194',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Diuxi',
            'estado_id' => '20',
            'numero' =>  '195',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Evangelista Analco',
            'estado_id' => '20',
            'numero' =>  '196',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Guelavía',
            'estado_id' => '20',
            'numero' =>  '197',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Guichicovi',
            'estado_id' => '20',
            'numero' =>  '198',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Ihualtepec',
            'estado_id' => '20',
            'numero' =>  '199',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Juquila Mixes',
            'estado_id' => '20',
            'numero' =>  '200',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Juquila Vijanos',
            'estado_id' => '20',
            'numero' =>  '201',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Lachao',
            'estado_id' => '20',
            'numero' =>  '202',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Lachigalla',
            'estado_id' => '20',
            'numero' =>  '203',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Lajarcia',
            'estado_id' => '20',
            'numero' =>  '204',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Lalana',
            'estado_id' => '20',
            'numero' =>  '205',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan de los Cués',
            'estado_id' => '20',
            'numero' =>  '206',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Mazatlán',
            'estado_id' => '20',
            'numero' =>  '207',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Mixtepec',
            'estado_id' => '20',
            'numero' =>  '208',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Mixtepec',
            'estado_id' => '20',
            'numero' =>  '209',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Ñumí',
            'estado_id' => '20',
            'numero' =>  '210',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Ozolotepec',
            'estado_id' => '20',
            'numero' =>  '211',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Petlapa',
            'estado_id' => '20',
            'numero' =>  '212',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Quiahije',
            'estado_id' => '20',
            'numero' =>  '213',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Quiotepec',
            'estado_id' => '20',
            'numero' =>  '214',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Sayultepec',
            'estado_id' => '20',
            'numero' =>  '215',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Tabaá',
            'estado_id' => '20',
            'numero' =>  '216',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Tamazola',
            'estado_id' => '20',
            'numero' =>  '217',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Teita',
            'estado_id' => '20',
            'numero' =>  '218',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Teitipac',
            'estado_id' => '20',
            'numero' =>  '219',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Tepeuxila',
            'estado_id' => '20',
            'numero' =>  '220',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Teposcolula',
            'estado_id' => '20',
            'numero' =>  '221',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Yaeé',
            'estado_id' => '20',
            'numero' =>  '222',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Yatzona',
            'estado_id' => '20',
            'numero' =>  '223',
        ]);
       Municipio::create([
            'nombre' =>  'San Juan Yucuita',
            'estado_id' => '20',
            'numero' =>  '224',
        ]);
       Municipio::create([
            'nombre' =>  'San Lorenzo',
            'estado_id' => '20',
            'numero' =>  '225',
        ]);
       Municipio::create([
            'nombre' =>  'San Lorenzo Albarradas',
            'estado_id' => '20',
            'numero' =>  '226',
        ]);
       Municipio::create([
            'nombre' =>  'San Lorenzo Cacaotepec',
            'estado_id' => '20',
            'numero' =>  '227',
        ]);
       Municipio::create([
            'nombre' =>  'San Lorenzo Cuaunecuiltitla',
            'estado_id' => '20',
            'numero' =>  '228',
        ]);
       Municipio::create([
            'nombre' =>  'San Lorenzo Texmelúcan',
            'estado_id' => '20',
            'numero' =>  '229',
        ]);
       Municipio::create([
            'nombre' =>  'San Lorenzo Victoria',
            'estado_id' => '20',
            'numero' =>  '230',
        ]);
       Municipio::create([
            'nombre' =>  'San Lucas Camotlán',
            'estado_id' => '20',
            'numero' =>  '231',
        ]);
       Municipio::create([
            'nombre' =>  'San Lucas Ojitlán',
            'estado_id' => '20',
            'numero' =>  '232',
        ]);
       Municipio::create([
            'nombre' =>  'San Lucas Quiaviní',
            'estado_id' => '20',
            'numero' =>  '233',
        ]);
       Municipio::create([
            'nombre' =>  'San Lucas Zoquiápam',
            'estado_id' => '20',
            'numero' =>  '234',
        ]);
       Municipio::create([
            'nombre' =>  'San Luis Amatlán',
            'estado_id' => '20',
            'numero' =>  '235',
        ]);
       Municipio::create([
            'nombre' =>  'San Marcial Ozolotepec',
            'estado_id' => '20',
            'numero' =>  '236',
        ]);
       Municipio::create([
            'nombre' =>  'San Marcos Arteaga',
            'estado_id' => '20',
            'numero' =>  '237',
        ]);
       Municipio::create([
            'nombre' =>  'San Martín de los Cansecos',
            'estado_id' => '20',
            'numero' =>  '238',
        ]);
       Municipio::create([
            'nombre' =>  'San Martín Huamelúlpam',
            'estado_id' => '20',
            'numero' =>  '239',
        ]);
       Municipio::create([
            'nombre' =>  'San Martín Itunyoso',
            'estado_id' => '20',
            'numero' =>  '240',
        ]);
       Municipio::create([
            'nombre' =>  'San Martín Lachilá',
            'estado_id' => '20',
            'numero' =>  '241',
        ]);
       Municipio::create([
            'nombre' =>  'San Martín Peras',
            'estado_id' => '20',
            'numero' =>  '242',
        ]);
       Municipio::create([
            'nombre' =>  'San Martín Tilcajete',
            'estado_id' => '20',
            'numero' =>  '243',
        ]);
       Municipio::create([
            'nombre' =>  'San Martín Toxpalan',
            'estado_id' => '20',
            'numero' =>  '244',
        ]);
       Municipio::create([
            'nombre' =>  'San Martín Zacatepec',
            'estado_id' => '20',
            'numero' =>  '245',
        ]);
       Municipio::create([
            'nombre' =>  'San Mateo Cajonos',
            'estado_id' => '20',
            'numero' =>  '246',
        ]);
       Municipio::create([
            'nombre' =>  'Capulálpam de Méndez',
            'estado_id' => '20',
            'numero' =>  '247',
        ]);
       Municipio::create([
            'nombre' =>  'San Mateo del Mar',
            'estado_id' => '20',
            'numero' =>  '248',
        ]);
       Municipio::create([
            'nombre' =>  'San Mateo Yoloxochitlán',
            'estado_id' => '20',
            'numero' =>  '249',
        ]);
       Municipio::create([
            'nombre' =>  'San Mateo Etlatongo',
            'estado_id' => '20',
            'numero' =>  '250',
        ]);
       Municipio::create([
            'nombre' =>  'San Mateo Nejápam',
            'estado_id' => '20',
            'numero' =>  '251',
        ]);
       Municipio::create([
            'nombre' =>  'San Mateo Peñasco',
            'estado_id' => '20',
            'numero' =>  '252',
        ]);
       Municipio::create([
            'nombre' =>  'San Mateo Piñas',
            'estado_id' => '20',
            'numero' =>  '253',
        ]);
       Municipio::create([
            'nombre' =>  'San Mateo Río Hondo',
            'estado_id' => '20',
            'numero' =>  '254',
        ]);
       Municipio::create([
            'nombre' =>  'San Mateo Sindihui',
            'estado_id' => '20',
            'numero' =>  '255',
        ]);
       Municipio::create([
            'nombre' =>  'San Mateo Tlapiltepec',
            'estado_id' => '20',
            'numero' =>  '256',
        ]);
       Municipio::create([
            'nombre' =>  'San Melchor Betaza',
            'estado_id' => '20',
            'numero' =>  '257',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Achiutla',
            'estado_id' => '20',
            'numero' =>  '258',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Ahuehuetitlán',
            'estado_id' => '20',
            'numero' =>  '259',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Aloápam',
            'estado_id' => '20',
            'numero' =>  '260',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Amatitlán',
            'estado_id' => '20',
            'numero' =>  '261',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Amatlán',
            'estado_id' => '20',
            'numero' =>  '262',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Coatlán',
            'estado_id' => '20',
            'numero' =>  '263',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Chicahua',
            'estado_id' => '20',
            'numero' =>  '264',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Chimalapa',
            'estado_id' => '20',
            'numero' =>  '265',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel del Puerto',
            'estado_id' => '20',
            'numero' =>  '266',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel del Río',
            'estado_id' => '20',
            'numero' =>  '267',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Ejutla',
            'estado_id' => '20',
            'numero' =>  '268',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel el Grande',
            'estado_id' => '20',
            'numero' =>  '269',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Huautla',
            'estado_id' => '20',
            'numero' =>  '270',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Mixtepec',
            'estado_id' => '20',
            'numero' =>  '271',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Panixtlahuaca',
            'estado_id' => '20',
            'numero' =>  '272',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Peras',
            'estado_id' => '20',
            'numero' =>  '273',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Piedras',
            'estado_id' => '20',
            'numero' =>  '274',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Quetzaltepec',
            'estado_id' => '20',
            'numero' =>  '275',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Santa Flor',
            'estado_id' => '20',
            'numero' =>  '276',
        ]);
       Municipio::create([
            'nombre' =>  'Villa Sola de Vega',
            'estado_id' => '20',
            'numero' =>  '277',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Soyaltepec',
            'estado_id' => '20',
            'numero' =>  '278',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Suchixtepec',
            'estado_id' => '20',
            'numero' =>  '279',
        ]);
       Municipio::create([
            'nombre' =>  'Villa Talea de Castro',
            'estado_id' => '20',
            'numero' =>  '280',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Tecomatlán',
            'estado_id' => '20',
            'numero' =>  '281',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Tenango',
            'estado_id' => '20',
            'numero' =>  '282',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Tequixtepec',
            'estado_id' => '20',
            'numero' =>  '283',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Tilquiápam',
            'estado_id' => '20',
            'numero' =>  '284',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Tlacamama',
            'estado_id' => '20',
            'numero' =>  '285',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Tlacotepec',
            'estado_id' => '20',
            'numero' =>  '286',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Tulancingo',
            'estado_id' => '20',
            'numero' =>  '287',
        ]);
       Municipio::create([
            'nombre' =>  'San Miguel Yotao',
            'estado_id' => '20',
            'numero' =>  '288',
        ]);
       Municipio::create([
            'nombre' =>  'San Nicolás',
            'estado_id' => '20',
            'numero' =>  '289',
        ]);
       Municipio::create([
            'nombre' =>  'San Nicolás Hidalgo',
            'estado_id' => '20',
            'numero' =>  '290',
        ]);
       Municipio::create([
            'nombre' =>  'San Pablo Coatlán',
            'estado_id' => '20',
            'numero' =>  '291',
        ]);
       Municipio::create([
            'nombre' =>  'San Pablo Cuatro Venados',
            'estado_id' => '20',
            'numero' =>  '292',
        ]);
       Municipio::create([
            'nombre' =>  'San Pablo Etla',
            'estado_id' => '20',
            'numero' =>  '293',
        ]);
       Municipio::create([
            'nombre' =>  'San Pablo Huitzo',
            'estado_id' => '20',
            'numero' =>  '294',
        ]);
       Municipio::create([
            'nombre' =>  'San Pablo Huixtepec',
            'estado_id' => '20',
            'numero' =>  '295',
        ]);
       Municipio::create([
            'nombre' =>  'San Pablo Macuiltianguis',
            'estado_id' => '20',
            'numero' =>  '296',
        ]);
       Municipio::create([
            'nombre' =>  'San Pablo Tijaltepec',
            'estado_id' => '20',
            'numero' =>  '297',
        ]);
       Municipio::create([
            'nombre' =>  'San Pablo Villa de Mitla',
            'estado_id' => '20',
            'numero' =>  '298',
        ]);
       Municipio::create([
            'nombre' =>  'San Pablo Yaganiza',
            'estado_id' => '20',
            'numero' =>  '299',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Amuzgos',
            'estado_id' => '20',
            'numero' =>  '300',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Apóstol',
            'estado_id' => '20',
            'numero' =>  '301',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Atoyac',
            'estado_id' => '20',
            'numero' =>  '302',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Cajonos',
            'estado_id' => '20',
            'numero' =>  '303',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Coxcaltepec Cántaros',
            'estado_id' => '20',
            'numero' =>  '304',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Comitancillo',
            'estado_id' => '20',
            'numero' =>  '305',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro el Alto',
            'estado_id' => '20',
            'numero' =>  '306',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Huamelula',
            'estado_id' => '20',
            'numero' =>  '307',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Huilotepec',
            'estado_id' => '20',
            'numero' =>  '308',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Ixcatlán',
            'estado_id' => '20',
            'numero' =>  '309',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Ixtlahuaca',
            'estado_id' => '20',
            'numero' =>  '310',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Jaltepetongo',
            'estado_id' => '20',
            'numero' =>  '311',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Jicayán',
            'estado_id' => '20',
            'numero' =>  '312',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Jocotipac',
            'estado_id' => '20',
            'numero' =>  '313',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Juchatengo',
            'estado_id' => '20',
            'numero' =>  '314',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Mártir',
            'estado_id' => '20',
            'numero' =>  '315',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Mártir Quiechapa',
            'estado_id' => '20',
            'numero' =>  '316',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Mártir Yucuxaco',
            'estado_id' => '20',
            'numero' =>  '317',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Mixtepec',
            'estado_id' => '20',
            'numero' =>  '318',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Mixtepec',
            'estado_id' => '20',
            'numero' =>  '319',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Molinos',
            'estado_id' => '20',
            'numero' =>  '320',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Nopala',
            'estado_id' => '20',
            'numero' =>  '321',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Ocopetatillo',
            'estado_id' => '20',
            'numero' =>  '322',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Ocotepec',
            'estado_id' => '20',
            'numero' =>  '323',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Pochutla',
            'estado_id' => '20',
            'numero' =>  '324',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Quiatoni',
            'estado_id' => '20',
            'numero' =>  '325',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Sochiápam',
            'estado_id' => '20',
            'numero' =>  '326',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Tapanatepec',
            'estado_id' => '20',
            'numero' =>  '327',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Taviche',
            'estado_id' => '20',
            'numero' =>  '328',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Teozacoalco',
            'estado_id' => '20',
            'numero' =>  '329',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Teutila',
            'estado_id' => '20',
            'numero' =>  '330',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Tidaá',
            'estado_id' => '20',
            'numero' =>  '331',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Topiltepec',
            'estado_id' => '20',
            'numero' =>  '332',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Totolápam',
            'estado_id' => '20',
            'numero' =>  '333',
        ]);
       Municipio::create([
            'nombre' =>  'Villa de Tututepec de Melchor Ocampo',
            'estado_id' => '20',
            'numero' =>  '334',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Yaneri',
            'estado_id' => '20',
            'numero' =>  '335',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Yólox',
            'estado_id' => '20',
            'numero' =>  '336',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro y San Pablo Ayutla',
            'estado_id' => '20',
            'numero' =>  '337',
        ]);
       Municipio::create([
            'nombre' =>  'Villa de Etla',
            'estado_id' => '20',
            'numero' =>  '338',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro y San Pablo Teposcolula',
            'estado_id' => '20',
            'numero' =>  '339',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro y San Pablo Tequixtepec',
            'estado_id' => '20',
            'numero' =>  '340',
        ]);
       Municipio::create([
            'nombre' =>  'San Pedro Yucunama',
            'estado_id' => '20',
            'numero' =>  '341',
        ]);
       Municipio::create([
            'nombre' =>  'San Raymundo Jalpan',
            'estado_id' => '20',
            'numero' =>  '342',
        ]);
       Municipio::create([
            'nombre' =>  'San Sebastián Abasolo',
            'estado_id' => '20',
            'numero' =>  '343',
        ]);
       Municipio::create([
            'nombre' =>  'San Sebastián Coatlán',
            'estado_id' => '20',
            'numero' =>  '344',
        ]);
       Municipio::create([
            'nombre' =>  'San Sebastián Ixcapa',
            'estado_id' => '20',
            'numero' =>  '345',
        ]);
       Municipio::create([
            'nombre' =>  'San Sebastián Nicananduta',
            'estado_id' => '20',
            'numero' =>  '346',
        ]);
       Municipio::create([
            'nombre' =>  'San Sebastián Río Hondo',
            'estado_id' => '20',
            'numero' =>  '347',
        ]);
       Municipio::create([
            'nombre' =>  'San Sebastián Tecomaxtlahuaca',
            'estado_id' => '20',
            'numero' =>  '348',
        ]);
       Municipio::create([
            'nombre' =>  'San Sebastián Teitipac',
            'estado_id' => '20',
            'numero' =>  '349',
        ]);
       Municipio::create([
            'nombre' =>  'San Sebastián Tutla',
            'estado_id' => '20',
            'numero' =>  '350',
        ]);
       Municipio::create([
            'nombre' =>  'San Simón Almolongas',
            'estado_id' => '20',
            'numero' =>  '351',
        ]);
       Municipio::create([
            'nombre' =>  'San Simón Zahuatlán',
            'estado_id' => '20',
            'numero' =>  '352',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Ana',
            'estado_id' => '20',
            'numero' =>  '353',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Ana Ateixtlahuaca',
            'estado_id' => '20',
            'numero' =>  '354',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Ana Cuauhtémoc',
            'estado_id' => '20',
            'numero' =>  '355',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Ana del Valle',
            'estado_id' => '20',
            'numero' =>  '356',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Ana Tavela',
            'estado_id' => '20',
            'numero' =>  '357',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Ana Tlapacoyan',
            'estado_id' => '20',
            'numero' =>  '358',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Ana Yareni',
            'estado_id' => '20',
            'numero' =>  '359',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Ana Zegache',
            'estado_id' => '20',
            'numero' =>  '360',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catalina Quierí',
            'estado_id' => '20',
            'numero' =>  '361',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina Cuixtla',
            'estado_id' => '20',
            'numero' =>  '362',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina Ixtepeji',
            'estado_id' => '20',
            'numero' =>  '363',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina Juquila',
            'estado_id' => '20',
            'numero' =>  '364',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina Lachatao',
            'estado_id' => '20',
            'numero' =>  '365',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina Loxicha',
            'estado_id' => '20',
            'numero' =>  '366',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina Mechoacán',
            'estado_id' => '20',
            'numero' =>  '367',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina Minas',
            'estado_id' => '20',
            'numero' =>  '368',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina Quiané',
            'estado_id' => '20',
            'numero' =>  '369',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina Tayata',
            'estado_id' => '20',
            'numero' =>  '370',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina Ticuá',
            'estado_id' => '20',
            'numero' =>  '371',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina Yosonotú',
            'estado_id' => '20',
            'numero' =>  '372',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Catarina Zapoquila',
            'estado_id' => '20',
            'numero' =>  '373',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Cruz Acatepec',
            'estado_id' => '20',
            'numero' =>  '374',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Cruz Amilpas',
            'estado_id' => '20',
            'numero' =>  '375',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Cruz de Bravo',
            'estado_id' => '20',
            'numero' =>  '376',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Cruz Itundujia',
            'estado_id' => '20',
            'numero' =>  '377',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Cruz Mixtepec',
            'estado_id' => '20',
            'numero' =>  '378',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Cruz Nundaco',
            'estado_id' => '20',
            'numero' =>  '379',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Cruz Papalutla',
            'estado_id' => '20',
            'numero' =>  '380',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Cruz Tacache de Mina',
            'estado_id' => '20',
            'numero' =>  '381',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Cruz Tacahua',
            'estado_id' => '20',
            'numero' =>  '382',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Cruz Tayata',
            'estado_id' => '20',
            'numero' =>  '383',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Cruz Xitla',
            'estado_id' => '20',
            'numero' =>  '384',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Cruz Xoxocotlán',
            'estado_id' => '20',
            'numero' =>  '385',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Cruz Zenzontepec',
            'estado_id' => '20',
            'numero' =>  '386',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Gertrudis',
            'estado_id' => '20',
            'numero' =>  '387',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Inés del Monte',
            'estado_id' => '20',
            'numero' =>  '388',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Inés Yatzeche',
            'estado_id' => '20',
            'numero' =>  '389',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Lucía del Camino',
            'estado_id' => '20',
            'numero' =>  '390',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Lucía Miahuatlán',
            'estado_id' => '20',
            'numero' =>  '391',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Lucía Monteverde',
            'estado_id' => '20',
            'numero' =>  '392',
        ]);
       Municipio::create([
            'nombre' =>  'Santa Lucía Ocotlán',
            'estado_id' => '20',
            'numero' =>  '393',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Alotepec',
            'estado_id' => '20',
            'numero' =>  '394',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Apazco',
            'estado_id' => '20',
            'numero' =>  '395',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María la Asunción',
            'estado_id' => '20',
            'numero' =>  '396',
        ]);
       Municipio::create([
            'nombre' =>  'Heroica Ciudad de Tlaxiaco',
            'estado_id' => '20',
            'numero' =>  '397',
        ]);
       Municipio::create([
            'nombre' =>  'Ayoquezco de Aldama',
            'estado_id' => '20',
            'numero' =>  '398',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Atzompa',
            'estado_id' => '20',
            'numero' =>  '399',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Camotlán',
            'estado_id' => '20',
            'numero' =>  '400',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Colotepec',
            'estado_id' => '20',
            'numero' =>  '401',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Cortijo',
            'estado_id' => '20',
            'numero' =>  '402',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Coyotepec',
            'estado_id' => '20',
            'numero' =>  '403',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Chachoápam',
            'estado_id' => '20',
            'numero' =>  '404',
        ]);
       Municipio::create([
            'nombre' =>  'Villa de Chilapa de Díaz',
            'estado_id' => '20',
            'numero' =>  '405',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Chilchotla',
            'estado_id' => '20',
            'numero' =>  '406',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Chimalapa',
            'estado_id' => '20',
            'numero' =>  '407',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María del Rosario',
            'estado_id' => '20',
            'numero' =>  '408',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María del Tule',
            'estado_id' => '20',
            'numero' =>  '409',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Ecatepec',
            'estado_id' => '20',
            'numero' =>  '410',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Guelacé',
            'estado_id' => '20',
            'numero' =>  '411',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Guienagati',
            'estado_id' => '20',
            'numero' =>  '412',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Huatulco',
            'estado_id' => '20',
            'numero' =>  '413',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Huazolotitlán',
            'estado_id' => '20',
            'numero' =>  '414',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Ipalapa',
            'estado_id' => '20',
            'numero' =>  '415',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Ixcatlán',
            'estado_id' => '20',
            'numero' =>  '416',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Jacatepec',
            'estado_id' => '20',
            'numero' =>  '417',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Jalapa del Marqués',
            'estado_id' => '20',
            'numero' =>  '418',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Jaltianguis',
            'estado_id' => '20',
            'numero' =>  '419',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Lachixío',
            'estado_id' => '20',
            'numero' =>  '420',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Mixtequilla',
            'estado_id' => '20',
            'numero' =>  '421',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Nativitas',
            'estado_id' => '20',
            'numero' =>  '422',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Nduayaco',
            'estado_id' => '20',
            'numero' =>  '423',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Ozolotepec',
            'estado_id' => '20',
            'numero' =>  '424',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Pápalo',
            'estado_id' => '20',
            'numero' =>  '425',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Peñoles',
            'estado_id' => '20',
            'numero' =>  '426',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Petapa',
            'estado_id' => '20',
            'numero' =>  '427',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Quiegolani',
            'estado_id' => '20',
            'numero' =>  '428',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Sola',
            'estado_id' => '20',
            'numero' =>  '429',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Tataltepec',
            'estado_id' => '20',
            'numero' =>  '430',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Tecomavaca',
            'estado_id' => '20',
            'numero' =>  '431',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Temaxcalapa',
            'estado_id' => '20',
            'numero' =>  '432',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Temaxcaltepec',
            'estado_id' => '20',
            'numero' =>  '433',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Teopoxco',
            'estado_id' => '20',
            'numero' =>  '434',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Tepantlali',
            'estado_id' => '20',
            'numero' =>  '435',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Texcatitlán',
            'estado_id' => '20',
            'numero' =>  '436',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Tlahuitoltepec',
            'estado_id' => '20',
            'numero' =>  '437',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Tlalixtac',
            'estado_id' => '20',
            'numero' =>  '438',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Tonameca',
            'estado_id' => '20',
            'numero' =>  '439',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Totolapilla',
            'estado_id' => '20',
            'numero' =>  '440',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Xadani',
            'estado_id' => '20',
            'numero' =>  '441',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Yalina',
            'estado_id' => '20',
            'numero' =>  '442',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Yavesía',
            'estado_id' => '20',
            'numero' =>  '443',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Yolotepec',
            'estado_id' => '20',
            'numero' =>  '444',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Yosoyúa',
            'estado_id' => '20',
            'numero' =>  '445',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Yucuhiti',
            'estado_id' => '20',
            'numero' =>  '446',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Zacatepec',
            'estado_id' => '20',
            'numero' =>  '447',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Zaniza',
            'estado_id' => '20',
            'numero' =>  '448',
        ]);
       Municipio::create([
            'nombre' =>  'Santa María Zoquitlán',
            'estado_id' => '20',
            'numero' =>  '449',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Amoltepec',
            'estado_id' => '20',
            'numero' =>  '450',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Apoala',
            'estado_id' => '20',
            'numero' =>  '451',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Apóstol',
            'estado_id' => '20',
            'numero' =>  '452',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Astata',
            'estado_id' => '20',
            'numero' =>  '453',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Atitlán',
            'estado_id' => '20',
            'numero' =>  '454',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Ayuquililla',
            'estado_id' => '20',
            'numero' =>  '455',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Cacaloxtepec',
            'estado_id' => '20',
            'numero' =>  '456',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Camotlán',
            'estado_id' => '20',
            'numero' =>  '457',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Comaltepec',
            'estado_id' => '20',
            'numero' =>  '458',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Chazumba',
            'estado_id' => '20',
            'numero' =>  '459',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Choápam',
            'estado_id' => '20',
            'numero' =>  '460',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago del Río',
            'estado_id' => '20',
            'numero' =>  '461',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Huajolotitlán',
            'estado_id' => '20',
            'numero' =>  '462',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Huauclilla',
            'estado_id' => '20',
            'numero' =>  '463',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Ihuitlán Plumas',
            'estado_id' => '20',
            'numero' =>  '464',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Ixcuintepec',
            'estado_id' => '20',
            'numero' =>  '465',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Ixtayutla',
            'estado_id' => '20',
            'numero' =>  '466',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Jamiltepec',
            'estado_id' => '20',
            'numero' =>  '467',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Jocotepec',
            'estado_id' => '20',
            'numero' =>  '468',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Juxtlahuaca',
            'estado_id' => '20',
            'numero' =>  '469',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Lachiguiri',
            'estado_id' => '20',
            'numero' =>  '470',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Lalopa',
            'estado_id' => '20',
            'numero' =>  '471',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Laollaga',
            'estado_id' => '20',
            'numero' =>  '472',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Laxopa',
            'estado_id' => '20',
            'numero' =>  '473',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Llano Grande',
            'estado_id' => '20',
            'numero' =>  '474',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Matatlán',
            'estado_id' => '20',
            'numero' =>  '475',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Miltepec',
            'estado_id' => '20',
            'numero' =>  '476',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Minas',
            'estado_id' => '20',
            'numero' =>  '477',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Nacaltepec',
            'estado_id' => '20',
            'numero' =>  '478',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Nejapilla',
            'estado_id' => '20',
            'numero' =>  '479',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Nundiche',
            'estado_id' => '20',
            'numero' =>  '480',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Nuyoó',
            'estado_id' => '20',
            'numero' =>  '481',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Pinotepa Nacional',
            'estado_id' => '20',
            'numero' =>  '482',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Suchilquitongo',
            'estado_id' => '20',
            'numero' =>  '483',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Tamazola',
            'estado_id' => '20',
            'numero' =>  '484',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Tapextla',
            'estado_id' => '20',
            'numero' =>  '485',
        ]);
       Municipio::create([
            'nombre' =>  'Villa Tejúpam de la Unión',
            'estado_id' => '20',
            'numero' =>  '486',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Tenango',
            'estado_id' => '20',
            'numero' =>  '487',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Tepetlapa',
            'estado_id' => '20',
            'numero' =>  '488',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Tetepec',
            'estado_id' => '20',
            'numero' =>  '489',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Texcalcingo',
            'estado_id' => '20',
            'numero' =>  '490',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Textitlán',
            'estado_id' => '20',
            'numero' =>  '491',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Tilantongo',
            'estado_id' => '20',
            'numero' =>  '492',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Tillo',
            'estado_id' => '20',
            'numero' =>  '493',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Tlazoyaltepec',
            'estado_id' => '20',
            'numero' =>  '494',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Xanica',
            'estado_id' => '20',
            'numero' =>  '495',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Xiacuí',
            'estado_id' => '20',
            'numero' =>  '496',
        ]);
       Municipio::create([
            'nombre' =>  'Santiago Yaitepec',
            'estado_id' => '20',
            'numero' =>  '497',
        ]);
        Municipio::create([
            'nombre' =>  'Santiago Yaveo',
            'estado_id' => '20',
            'numero' =>  '498',
        ]);
        Municipio::create([
            'nombre' =>  'Santiago Yolomécatl',
            'estado_id' => '20',
            'numero' =>  '499',
        ]);
        Municipio::create([
            'nombre' =>  'Santiago Yosondúa',
            'estado_id' => '20',
            'numero' =>  '500',
        ]);
        Municipio::create([
            'nombre' =>  'Santiago Yucuyachi',
            'estado_id' => '20',
            'numero' =>  '501',
        ]);
        Municipio::create([
            'nombre' =>  'Santiago Zacatepec',
            'estado_id' => '20',
            'numero' =>  '502',
        ]);
        Municipio::create([
            'nombre' =>  'Santiago Zoochila',
            'estado_id' => '20',
            'numero' =>  '503',
        ]);
        Municipio::create([
            'nombre' =>  'Nuevo Zoquiápam',
            'estado_id' => '20',
            'numero' =>  '504',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Ingenio',
            'estado_id' => '20',
            'numero' =>  '505',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Albarradas',
            'estado_id' => '20',
            'numero' =>  '506',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Armenta',
            'estado_id' => '20',
            'numero' =>  '507',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Chihuitán',
            'estado_id' => '20',
            'numero' =>  '508',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo de Morelos',
            'estado_id' => '20',
            'numero' =>  '509',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Ixcatlán',
            'estado_id' => '20',
            'numero' =>  '510',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Nuxaá',
            'estado_id' => '20',
            'numero' =>  '511',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Ozolotepec',
            'estado_id' => '20',
            'numero' =>  '512',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Petapa',
            'estado_id' => '20',
            'numero' =>  '513',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Roayaga',
            'estado_id' => '20',
            'numero' =>  '514',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Tehuantepec',
            'estado_id' => '20',
            'numero' =>  '515',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Teojomulco',
            'estado_id' => '20',
            'numero' =>  '516',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Tepuxtepec',
            'estado_id' => '20',
            'numero' =>  '517',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Tlatayápam',
            'estado_id' => '20',
            'numero' =>  '518',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Tomaltepec',
            'estado_id' => '20',
            'numero' =>  '519',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Tonalá',
            'estado_id' => '20',
            'numero' =>  '520',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Tonaltepec',
            'estado_id' => '20',
            'numero' =>  '521',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Xagacía',
            'estado_id' => '20',
            'numero' =>  '522',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Yanhuitlán',
            'estado_id' => '20',
            'numero' =>  '523',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Yodohino',
            'estado_id' => '20',
            'numero' =>  '524',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo Zanatepec',
            'estado_id' => '20',
            'numero' =>  '525',
        ]);
        Municipio::create([
            'nombre' =>  'Santos Reyes Nopala',
            'estado_id' => '20',
            'numero' =>  '526',
        ]);
        Municipio::create([
            'nombre' =>  'Santos Reyes Pápalo',
            'estado_id' => '20',
            'numero' =>  '527',
        ]);
        Municipio::create([
            'nombre' =>  'Santos Reyes Tepejillo',
            'estado_id' => '20',
            'numero' =>  '528',
        ]);
        Municipio::create([
            'nombre' =>  'Santos Reyes Yucuná',
            'estado_id' => '20',
            'numero' =>  '529',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Tomás Jalieza',
            'estado_id' => '20',
            'numero' =>  '530',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Tomás Mazaltepec',
            'estado_id' => '20',
            'numero' =>  '531',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Tomás Ocotepec',
            'estado_id' => '20',
            'numero' =>  '532',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Tomás Tamazulapan',
            'estado_id' => '20',
            'numero' =>  '533',
        ]);
        Municipio::create([
            'nombre' =>  'San Vicente Coatlán',
            'estado_id' => '20',
            'numero' =>  '534',
        ]);
        Municipio::create([
            'nombre' =>  'San Vicente Lachixío',
            'estado_id' => '20',
            'numero' =>  '535',
        ]);
        Municipio::create([
            'nombre' =>  'San Vicente Nuñú',
            'estado_id' => '20',
            'numero' =>  '536',
        ]);
        Municipio::create([
            'nombre' =>  'Silacayoápam',
            'estado_id' => '20',
            'numero' =>  '537',
        ]);
        Municipio::create([
            'nombre' =>  'Sitio de Xitlapehua',
            'estado_id' => '20',
            'numero' =>  '538',
        ]);
        Municipio::create([
            'nombre' =>  'Soledad Etla',
            'estado_id' => '20',
            'numero' =>  '539',
        ]);
        Municipio::create([
            'nombre' =>  'Villa de Tamazulápam del Progreso',
            'estado_id' => '20',
            'numero' =>  '540',
        ]);
        Municipio::create([
            'nombre' =>  'Tanetze de Zaragoza',
            'estado_id' => '20',
            'numero' =>  '541',
        ]);
        Municipio::create([
            'nombre' =>  'Taniche',
            'estado_id' => '20',
            'numero' =>  '542',
        ]);
        Municipio::create([
            'nombre' =>  'Tataltepec de Valdés',
            'estado_id' => '20',
            'numero' =>  '543',
        ]);
        Municipio::create([
            'nombre' =>  'Teococuilco de Marcos Pérez',
            'estado_id' => '20',
            'numero' =>  '544',
        ]);
        Municipio::create([
            'nombre' =>  'Teotitlán de Flores Magón',
            'estado_id' => '20',
            'numero' =>  '545',
        ]);
        Municipio::create([
            'nombre' =>  'Teotitlán del Valle',
            'estado_id' => '20',
            'numero' =>  '546',
        ]);
        Municipio::create([
            'nombre' =>  'Teotongo',
            'estado_id' => '20',
            'numero' =>  '547',
        ]);
        Municipio::create([
            'nombre' =>  'Tepelmeme Villa de Morelos',
            'estado_id' => '20',
            'numero' =>  '548',
        ]);
        Municipio::create([
            'nombre' =>  'Heroica Villa Tezoatlán de Segura y Luna. Cuna de la Independencia de Oaxaca',
            'estado_id' => '20',
            'numero' =>  '549',
        ]);
        Municipio::create([
            'nombre' =>  'San Jerónimo Tlacochahuaya',
            'estado_id' => '20',
            'numero' =>  '550',
        ]);
        Municipio::create([
            'nombre' =>  'Tlacolula de Matamoros',
            'estado_id' => '20',
            'numero' =>  '551',
        ]);
        Municipio::create([
            'nombre' =>  'Tlacotepec Plumas',
            'estado_id' => '20',
            'numero' =>  '552',
        ]);
        Municipio::create([
            'nombre' =>  'Tlalixtac de Cabrera',
            'estado_id' => '20',
            'numero' =>  '553',
        ]);
        Municipio::create([
            'nombre' =>  'Totontepec Villa de Morelos',
            'estado_id' => '20',
            'numero' =>  '554',
        ]);
        Municipio::create([
            'nombre' =>  'Trinidad Zaachila',
            'estado_id' => '20',
            'numero' =>  '555',
        ]);
        Municipio::create([
            'nombre' =>  'La Trinidad Vista Hermosa',
            'estado_id' => '20',
            'numero' =>  '556',
        ]);
        Municipio::create([
            'nombre' =>  'Unión Hidalgo',
            'estado_id' => '20',
            'numero' =>  '557',
        ]);
        Municipio::create([
            'nombre' =>  'Valerio Trujano',
            'estado_id' => '20',
            'numero' =>  '558',
        ]);
        Municipio::create([
            'nombre' =>  'San Juan Bautista Valle Nacional',
            'estado_id' => '20',
            'numero' =>  '559',
        ]);
        Municipio::create([
            'nombre' =>  'Villa Díaz Ordaz',
            'estado_id' => '20',
            'numero' =>  '560',
        ]);
        Municipio::create([
            'nombre' =>  'Yaxe',
            'estado_id' => '20',
            'numero' =>  '561',
        ]);
        Municipio::create([
            'nombre' =>  'Magdalena Yodocono de Porfirio Díaz',
            'estado_id' => '20',
            'numero' =>  '562',
        ]);
        Municipio::create([
            'nombre' =>  'Yogana',
            'estado_id' => '20',
            'numero' =>  '563',
        ]);
        Municipio::create([
            'nombre' =>  'Yutanduchi de Guerrero',
            'estado_id' => '20',
            'numero' =>  '564',
        ]);
        Municipio::create([
            'nombre' =>  'Villa de Zaachila',
            'estado_id' => '20',
            'numero' =>  '565',
        ]);
        Municipio::create([
            'nombre' =>  'San Mateo Yucutindoo',
            'estado_id' => '20',
            'numero' =>  '566',
        ]);
        Municipio::create([
            'nombre' =>  'Zapotitlán Lagunas',
            'estado_id' => '20',
            'numero' =>  '567',
        ]);
        Municipio::create([
            'nombre' =>  'Zapotitlán Palmas',
            'estado_id' => '20',
            'numero' =>  '568',
        ]);
        Municipio::create([
            'nombre' =>  'Santa Inés de Zaragoza',
            'estado_id' => '20',
            'numero' =>  '569',
        ]);
        Municipio::create([
            'nombre' =>  'Zimatlán de Álvarez',
            'estado_id' => '20',
            'numero' =>  '570',
        ]);
        Municipio::create([
            'nombre' =>  'Acajete',
            'estado_id' => '21',
            'numero' =>  '001',
        ]);
        Municipio::create([
            'nombre' =>  'Acateno',
            'estado_id' => '21',
            'numero' =>  '002',
        ]);
        Municipio::create([
            'nombre' =>  'Acatlán',
            'estado_id' => '21',
            'numero' =>  '003',
        ]);
        Municipio::create([
            'nombre' =>  'Acatzingo',
            'estado_id' => '21',
            'numero' =>  '004',
        ]);
        Municipio::create([
            'nombre' =>  'Acteopan',
            'estado_id' => '21',
            'numero' =>  '005',
        ]);
        Municipio::create([
            'nombre' =>  'Ahuacatlán',
            'estado_id' => '21',
            'numero' =>  '006',
        ]);
        Municipio::create([
            'nombre' =>  'Ahuatlán',
            'estado_id' => '21',
            'numero' =>  '007',
        ]);
        Municipio::create([
            'nombre' =>  'Ahuazotepec',
            'estado_id' => '21',
            'numero' =>  '008',
        ]);
        Municipio::create([
            'nombre' =>  'Ahuehuetitla',
            'estado_id' => '21',
            'numero' =>  '009',
        ]);
        Municipio::create([
            'nombre' =>  'Ajalpan',
            'estado_id' => '21',
            'numero' =>  '010',
        ]);
        Municipio::create([
            'nombre' =>  'Albino Zertuche',
            'estado_id' => '21',
            'numero' =>  '011',
        ]);
        Municipio::create([
            'nombre' =>  'Aljojuca',
            'estado_id' => '21',
            'numero' =>  '012',
        ]);
        Municipio::create([
            'nombre' =>  'Altepexi',
            'estado_id' => '21',
            'numero' =>  '013',
        ]);
        Municipio::create([
            'nombre' =>  'Amixtlán',
            'estado_id' => '21',
            'numero' =>  '014',
        ]);
        Municipio::create([
            'nombre' =>  'Amozoc',
            'estado_id' => '21',
            'numero' =>  '015',
        ]);
        Municipio::create([
            'nombre' =>  'Aquixtla',
            'estado_id' => '21',
            'numero' =>  '016',
        ]);
        Municipio::create([
            'nombre' =>  'Atempan',
            'estado_id' => '21',
            'numero' =>  '017',
        ]);
        Municipio::create([
            'nombre' =>  'Atexcal',
            'estado_id' => '21',
            'numero' =>  '018',
        ]);
        Municipio::create([
            'nombre' =>  'Atlixco',
            'estado_id' => '21',
            'numero' =>  '019',
        ]);
        Municipio::create([
            'nombre' =>  'Atoyatempan',
            'estado_id' => '21',
            'numero' =>  '020',
        ]);
        Municipio::create([
            'nombre' =>  'Atzala',
            'estado_id' => '21',
            'numero' =>  '021',
        ]);
        Municipio::create([
            'nombre' =>  'Atzitzihuacán',
            'estado_id' => '21',
            'numero' =>  '022',
        ]);
        Municipio::create([
            'nombre' =>  'Atzitzintla',
            'estado_id' => '21',
            'numero' =>  '023',
        ]);
        Municipio::create([
            'nombre' =>  'Axutla',
            'estado_id' => '21',
            'numero' =>  '024',
        ]);
        Municipio::create([
            'nombre' =>  'Ayotoxco de Guerrero',
            'estado_id' => '21',
            'numero' =>  '025',
        ]);
        Municipio::create([
            'nombre' =>  'Calpan',
            'estado_id' => '21',
            'numero' =>  '026',
        ]);
        Municipio::create([
            'nombre' =>  'Caltepec',
            'estado_id' => '21',
            'numero' =>  '027',
        ]);
        Municipio::create([
            'nombre' =>  'Camocuautla',
            'estado_id' => '21',
            'numero' =>  '028',
        ]);
        Municipio::create([
            'nombre' =>  'Caxhuacan',
            'estado_id' => '21',
            'numero' =>  '029',
        ]);
        Municipio::create([
            'nombre' =>  'Coatepec',
            'estado_id' => '21',
            'numero' =>  '030',
        ]);
        Municipio::create([
            'nombre' =>  'Coatzingo',
            'estado_id' => '21',
            'numero' =>  '031',
        ]);
        Municipio::create([
            'nombre' =>  'Cohetzala',
            'estado_id' => '21',
            'numero' =>  '032',
        ]);
        Municipio::create([
            'nombre' =>  'Cohuecan',
            'estado_id' => '21',
            'numero' =>  '033',
        ]);
        Municipio::create([
            'nombre' =>  'Coronango',
            'estado_id' => '21',
            'numero' =>  '034',
        ]);
        Municipio::create([
            'nombre' =>  'Coxcatlán',
            'estado_id' => '21',
            'numero' =>  '035',
        ]);
        Municipio::create([
            'nombre' =>  'Coyomeapan',
            'estado_id' => '21',
            'numero' =>  '036',
        ]);
        Municipio::create([
            'nombre' =>  'Coyotepec',
            'estado_id' => '21',
            'numero' =>  '037',
        ]);
        Municipio::create([
            'nombre' =>  'Cuapiaxtla de Madero',
            'estado_id' => '21',
            'numero' =>  '038',
        ]);
        Municipio::create([
            'nombre' =>  'Cuautempan',
            'estado_id' => '21',
            'numero' =>  '039',
        ]);
        Municipio::create([
            'nombre' =>  'Cuautinchán',
            'estado_id' => '21',
            'numero' =>  '040',
        ]);
        Municipio::create([
            'nombre' =>  'Cuautlancingo',
            'estado_id' => '21',
            'numero' =>  '041',
        ]);
        Municipio::create([
            'nombre' =>  'Cuayuca de Andrade',
            'estado_id' => '21',
            'numero' =>  '042',
        ]);
        Municipio::create([
            'nombre' =>  'Cuetzalan del Progreso',
            'estado_id' => '21',
            'numero' =>  '043',
        ]);
        Municipio::create([
            'nombre' =>  'Cuyoaco',
            'estado_id' => '21',
            'numero' =>  '044',
        ]);
        Municipio::create([
            'nombre' =>  'Chalchicomula de Sesma',
            'estado_id' => '21',
            'numero' =>  '045',
        ]);
        Municipio::create([
            'nombre' =>  'Chapulco',
            'estado_id' => '21',
            'numero' =>  '046',
        ]);
        Municipio::create([
            'nombre' =>  'Chiautla',
            'estado_id' => '21',
            'numero' =>  '047',
        ]);
        Municipio::create([
            'nombre' =>  'Chiautzingo',
            'estado_id' => '21',
            'numero' =>  '048',
        ]);
        Municipio::create([
            'nombre' =>  'Chiconcuautla',
            'estado_id' => '21',
            'numero' =>  '049',
        ]);
        Municipio::create([
            'nombre' =>  'Chichiquila',
            'estado_id' => '21',
            'numero' =>  '050',
        ]);
        Municipio::create([
            'nombre' =>  'Chietla',
            'estado_id' => '21',
            'numero' =>  '051',
        ]);
        Municipio::create([
            'nombre' =>  'Chigmecatitlán',
            'estado_id' => '21',
            'numero' =>  '052',
        ]);
        Municipio::create([
            'nombre' =>  'Chignahuapan',
            'estado_id' => '21',
            'numero' =>  '053',
        ]);
        Municipio::create([
            'nombre' =>  'Chignautla',
            'estado_id' => '21',
            'numero' =>  '054',
        ]);
        Municipio::create([
            'nombre' =>  'Chila',
            'estado_id' => '21',
            'numero' =>  '055',
        ]);
        Municipio::create([
            'nombre' =>  'Chila de la Sal',
            'estado_id' => '21',
            'numero' =>  '056',
        ]);
        Municipio::create([
            'nombre' =>  'Honey',
            'estado_id' => '21',
            'numero' =>  '057',
        ]);
        Municipio::create([
            'nombre' =>  'Chilchotla',
            'estado_id' => '21',
            'numero' =>  '058',
        ]);
        Municipio::create([
            'nombre' =>  'Chinantla',
            'estado_id' => '21',
            'numero' =>  '059',
        ]);
        Municipio::create([
            'nombre' =>  'Domingo Arenas',
            'estado_id' => '21',
            'numero' =>  '060',
        ]);
        Municipio::create([
            'nombre' =>  'Eloxochitlán',
            'estado_id' => '21',
            'numero' =>  '061',
        ]);
        Municipio::create([
            'nombre' =>  'Epatlán',
            'estado_id' => '21',
            'numero' =>  '062',
        ]);
        Municipio::create([
            'nombre' =>  'Esperanza',
            'estado_id' => '21',
            'numero' =>  '063',
        ]);
        Municipio::create([
            'nombre' =>  'Francisco Z. Mena',
            'estado_id' => '21',
            'numero' =>  '064',
        ]);
        Municipio::create([
            'nombre' =>  'General Felipe Ángeles',
            'estado_id' => '21',
            'numero' =>  '065',
        ]);
        Municipio::create([
            'nombre' =>  'Guadalupe',
            'estado_id' => '21',
            'numero' =>  '066',
        ]);
        Municipio::create([
            'nombre' =>  'Guadalupe Victoria',
            'estado_id' => '21',
            'numero' =>  '067',
        ]);
        Municipio::create([
            'nombre' =>  'Hermenegildo Galeana',
            'estado_id' => '21',
            'numero' =>  '068',
        ]);
        Municipio::create([
            'nombre' =>  'Huaquechula',
            'estado_id' => '21',
            'numero' =>  '069',
        ]);
        Municipio::create([
            'nombre' =>  'Huatlatlauca',
            'estado_id' => '21',
            'numero' =>  '070',
        ]);
        Municipio::create([
            'nombre' =>  'Huauchinango',
            'estado_id' => '21',
            'numero' =>  '071',
        ]);
        Municipio::create([
            'nombre' =>  'Huehuetla',
            'estado_id' => '21',
            'numero' =>  '072',
        ]);
        Municipio::create([
            'nombre' =>  'Huehuetlán el Chico',
            'estado_id' => '21',
            'numero' =>  '073',
        ]);
        Municipio::create([
            'nombre' =>  'Huejotzingo',
            'estado_id' => '21',
            'numero' =>  '074',
        ]);
        Municipio::create([
            'nombre' =>  'Hueyapan',
            'estado_id' => '21',
            'numero' =>  '075',
        ]);
        Municipio::create([
            'nombre' =>  'Hueytamalco',
            'estado_id' => '21',
            'numero' =>  '076',
        ]);
        Municipio::create([
            'nombre' =>  'Hueytlalpan',
            'estado_id' => '21',
            'numero' =>  '077',
        ]);
        Municipio::create([
            'nombre' =>  'Huitzilan de Serdán',
            'estado_id' => '21',
            'numero' =>  '078',
        ]);
        Municipio::create([
            'nombre' =>  'Huitziltepec',
            'estado_id' => '21',
            'numero' =>  '079',
        ]);
        Municipio::create([
            'nombre' =>  'Atlequizayan',
            'estado_id' => '21',
            'numero' =>  '080',
        ]);
        Municipio::create([
            'nombre' =>  'Ixcamilpa de Guerrero',
            'estado_id' => '21',
            'numero' =>  '081',
        ]);
        Municipio::create([
            'nombre' =>  'Ixcaquixtla',
            'estado_id' => '21',
            'numero' =>  '082',
        ]);
        Municipio::create([
            'nombre' =>  'Ixtacamaxtitlán',
            'estado_id' => '21',
            'numero' =>  '083',
        ]);
        Municipio::create([
            'nombre' =>  'Ixtepec',
            'estado_id' => '21',
            'numero' =>  '084',
        ]);
        Municipio::create([
            'nombre' =>  'Izúcar de Matamoros',
            'estado_id' => '21',
            'numero' =>  '085',
        ]);
        Municipio::create([
            'nombre' =>  'Jalpan',
            'estado_id' => '21',
            'numero' =>  '086',
        ]);
        Municipio::create([
            'nombre' =>  'Jolalpan',
            'estado_id' => '21',
            'numero' =>  '087',
        ]);
        Municipio::create([
            'nombre' =>  'Jonotla',
            'estado_id' => '21',
            'numero' =>  '088',
        ]);
        Municipio::create([
            'nombre' =>  'Jopala',
            'estado_id' => '21',
            'numero' =>  '089',
        ]);
        Municipio::create([
            'nombre' =>  'Juan C. Bonilla',
            'estado_id' => '21',
            'numero' =>  '090',
        ]);
        Municipio::create([
            'nombre' =>  'Juan Galindo',
            'estado_id' => '21',
            'numero' =>  '091',
        ]);
        Municipio::create([
            'nombre' =>  'Juan N. Méndez',
            'estado_id' => '21',
            'numero' =>  '092',
        ]);
        Municipio::create([
            'nombre' =>  'Lafragua',
            'estado_id' => '21',
            'numero' =>  '093',
        ]);
        Municipio::create([
            'nombre' =>  'Libres',
            'estado_id' => '21',
            'numero' =>  '094',
        ]);
        Municipio::create([
            'nombre' =>  'La Magdalena Tlatlauquitepec',
            'estado_id' => '21',
            'numero' =>  '095',
        ]);
        Municipio::create([
            'nombre' =>  'Mazapiltepec de Juárez',
            'estado_id' => '21',
            'numero' =>  '096',
        ]);
        Municipio::create([
            'nombre' =>  'Mixtla',
            'estado_id' => '21',
            'numero' =>  '097',
        ]);
        Municipio::create([
            'nombre' =>  'Molcaxac',
            'estado_id' => '21',
            'numero' =>  '098',
        ]);
        Municipio::create([
            'nombre' =>  'Cañada Morelos',
            'estado_id' => '21',
            'numero' =>  '099',
        ]);
        Municipio::create([
            'nombre' =>  'Naupan',
            'estado_id' => '21',
            'numero' =>  '100',
        ]);
        Municipio::create([
            'nombre' =>  'Nauzontla',
            'estado_id' => '21',
            'numero' =>  '101',
        ]);
        Municipio::create([
            'nombre' =>  'Nealtican',
            'estado_id' => '21',
            'numero' =>  '102',
        ]);
        Municipio::create([
            'nombre' =>  'Nicolás Bravo',
            'estado_id' => '21',
            'numero' =>  '103',
        ]);
        Municipio::create([
            'nombre' =>  'Nopalucan',
            'estado_id' => '21',
            'numero' =>  '104',
        ]);
        Municipio::create([
            'nombre' =>  'Ocotepec',
            'estado_id' => '21',
            'numero' =>  '105',
        ]);
        Municipio::create([
            'nombre' =>  'Ocoyucan',
            'estado_id' => '21',
            'numero' =>  '106',
        ]);
        Municipio::create([
            'nombre' =>  'Olintla',
            'estado_id' => '21',
            'numero' =>  '107',
        ]);
        Municipio::create([
            'nombre' =>  'Oriental',
            'estado_id' => '21',
            'numero' =>  '108',
        ]);
        Municipio::create([
            'nombre' =>  'Pahuatlán',
            'estado_id' => '21',
            'numero' =>  '109',
        ]);
        Municipio::create([
            'nombre' =>  'Palmar de Bravo',
            'estado_id' => '21',
            'numero' =>  '110',
        ]);
        Municipio::create([
            'nombre' =>  'Pantepec',
            'estado_id' => '21',
            'numero' =>  '111',
        ]);
        Municipio::create([
            'nombre' =>  'Petlalcingo',
            'estado_id' => '21',
            'numero' =>  '112',
        ]);
        Municipio::create([
            'nombre' =>  'Piaxtla',
            'estado_id' => '21',
            'numero' =>  '113',
        ]);
        Municipio::create([
            'nombre' =>  'Puebla',
            'estado_id' => '21',
            'numero' =>  '114',
        ]);
        Municipio::create([
            'nombre' =>  'Quecholac',
            'estado_id' => '21',
            'numero' =>  '115',
        ]);
        Municipio::create([
            'nombre' =>  'Quimixtlán',
            'estado_id' => '21',
            'numero' =>  '116',
        ]);
        Municipio::create([
            'nombre' =>  'Rafael Lara Grajales',
            'estado_id' => '21',
            'numero' =>  '117',
        ]);
        Municipio::create([
            'nombre' =>  'Los Reyes de Juárez',
            'estado_id' => '21',
            'numero' =>  '118',
        ]);
        Municipio::create([
            'nombre' =>  'San Andrés Cholula',
            'estado_id' => '21',
            'numero' =>  '119',
        ]);
        Municipio::create([
            'nombre' =>  'San Antonio Cañada',
            'estado_id' => '21',
            'numero' =>  '120',
        ]);
        Municipio::create([
            'nombre' =>  'San Diego la Mesa Tochimiltzingo',
            'estado_id' => '21',
            'numero' =>  '121',
        ]);
        Municipio::create([
            'nombre' =>  'San Felipe Teotlalcingo',
            'estado_id' => '21',
            'numero' =>  '122',
        ]);
        Municipio::create([
            'nombre' =>  'San Felipe Tepatlán',
            'estado_id' => '21',
            'numero' =>  '123',
        ]);
        Municipio::create([
            'nombre' =>  'San Gabriel Chilac',
            'estado_id' => '21',
            'numero' =>  '124',
        ]);
        Municipio::create([
            'nombre' =>  'San Gregorio Atzompa',
            'estado_id' => '21',
            'numero' =>  '125',
        ]);
        Municipio::create([
            'nombre' =>  'San Jerónimo Tecuanipan',
            'estado_id' => '21',
            'numero' =>  '126',
        ]);
        Municipio::create([
            'nombre' =>  'San Jerónimo Xayacatlán',
            'estado_id' => '21',
            'numero' =>  '127',
        ]);
        Municipio::create([
            'nombre' =>  'San José Chiapa',
            'estado_id' => '21',
            'numero' =>  '128',
        ]);
        Municipio::create([
            'nombre' =>  'San José Miahuatlán',
            'estado_id' => '21',
            'numero' =>  '129',
        ]);
        Municipio::create([
            'nombre' =>  'San Juan Atenco',
            'estado_id' => '21',
            'numero' =>  '130',
        ]);
        Municipio::create([
            'nombre' =>  'San Juan Atzompa',
            'estado_id' => '21',
            'numero' =>  '131',
        ]);
        Municipio::create([
            'nombre' =>  'San Martín Texmelucan',
            'estado_id' => '21',
            'numero' =>  '132',
        ]);
        Municipio::create([
            'nombre' =>  'San Martín Totoltepec',
            'estado_id' => '21',
            'numero' =>  '133',
        ]);
        Municipio::create([
            'nombre' =>  'San Matías Tlalancaleca',
            'estado_id' => '21',
            'numero' =>  '134',
        ]);
        Municipio::create([
            'nombre' =>  'San Miguel Ixitlán',
            'estado_id' => '21',
            'numero' =>  '135',
        ]);
        Municipio::create([
            'nombre' =>  'San Miguel Xoxtla',
            'estado_id' => '21',
            'numero' =>  '136',
        ]);
        Municipio::create([
            'nombre' =>  'San Nicolás Buenos Aires',
            'estado_id' => '21',
            'numero' =>  '137',
        ]);
        Municipio::create([
            'nombre' =>  'San Nicolás de los Ranchos',
            'estado_id' => '21',
            'numero' =>  '138',
        ]);
        Municipio::create([
            'nombre' =>  'San Pablo Anicano',
            'estado_id' => '21',
            'numero' =>  '139',
        ]);
        Municipio::create([
            'nombre' =>  'San Pedro Cholula',
            'estado_id' => '21',
            'numero' =>  '140',
        ]);
        Municipio::create([
            'nombre' =>  'San Pedro Yeloixtlahuaca',
            'estado_id' => '21',
            'numero' =>  '141',
        ]);
        Municipio::create([
            'nombre' =>  'San Salvador el Seco',
            'estado_id' => '21',
            'numero' =>  '142',
        ]);
        Municipio::create([
            'nombre' =>  'San Salvador el Verde',
            'estado_id' => '21',
            'numero' =>  '143',
        ]);
        Municipio::create([
            'nombre' =>  'San Salvador Huixcolotla',
            'estado_id' => '21',
            'numero' =>  '144',
        ]);
        Municipio::create([
            'nombre' =>  'San Sebastián Tlacotepec',
            'estado_id' => '21',
            'numero' =>  '145',
        ]);
        Municipio::create([
            'nombre' =>  'Santa Catarina Tlaltempan',
            'estado_id' => '21',
            'numero' =>  '146',
        ]);
        Municipio::create([
            'nombre' =>  'Santa Inés Ahuatempan',
            'estado_id' => '21',
            'numero' =>  '147',
        ]);
        Municipio::create([
            'nombre' =>  'Santa Isabel Cholula',
            'estado_id' => '21',
            'numero' =>  '148',
        ]);
        Municipio::create([
            'nombre' =>  'Santiago Miahuatlán',
            'estado_id' => '21',
            'numero' =>  '149',
        ]);
        Municipio::create([
            'nombre' =>  'Huehuetlán el Grande',
            'estado_id' => '21',
            'numero' =>  '150',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Tomás Hueyotlipan',
            'estado_id' => '21',
            'numero' =>  '151',
        ]);
        Municipio::create([
            'nombre' =>  'Soltepec',
            'estado_id' => '21',
            'numero' =>  '152',
        ]);
        Municipio::create([
            'nombre' =>  'Tecali de Herrera',
            'estado_id' => '21',
            'numero' =>  '153',
        ]);
        Municipio::create([
            'nombre' =>  'Tecamachalco',
            'estado_id' => '21',
            'numero' =>  '154',
        ]);
        Municipio::create([
            'nombre' =>  'Tecomatlán',
            'estado_id' => '21',
            'numero' =>  '155',
        ]);
        Municipio::create([
            'nombre' =>  'Tehuacán',
            'estado_id' => '21',
            'numero' =>  '156',
        ]);
        Municipio::create([
            'nombre' =>  'Tehuitzingo',
            'estado_id' => '21',
            'numero' =>  '157',
        ]);
        Municipio::create([
            'nombre' =>  'Tenampulco',
            'estado_id' => '21',
            'numero' =>  '158',
        ]);
        Municipio::create([
            'nombre' =>  'Teopantlán',
            'estado_id' => '21',
            'numero' =>  '159',
        ]);
        Municipio::create([
            'nombre' =>  'Teotlalco',
            'estado_id' => '21',
            'numero' =>  '160',
        ]);
        Municipio::create([
            'nombre' =>  'Tepanco de López',
            'estado_id' => '21',
            'numero' =>  '161',
        ]);
        Municipio::create([
            'nombre' =>  'Tepango de Rodríguez',
            'estado_id' => '21',
            'numero' =>  '162',
        ]);
        Municipio::create([
            'nombre' =>  'Tepatlaxco de Hidalgo',
            'estado_id' => '21',
            'numero' =>  '163',
        ]);
        Municipio::create([
            'nombre' =>  'Tepeaca',
            'estado_id' => '21',
            'numero' =>  '164',
        ]);
        Municipio::create([
            'nombre' =>  'Tepemaxalco',
            'estado_id' => '21',
            'numero' =>  '165',
        ]);
        Municipio::create([
            'nombre' =>  'Tepeojuma',
            'estado_id' => '21',
            'numero' =>  '166',
        ]);
        Municipio::create([
            'nombre' =>  'Tepetzintla',
            'estado_id' => '21',
            'numero' =>  '167',
        ]);
        Municipio::create([
            'nombre' =>  'Tepexco',
            'estado_id' => '21',
            'numero' =>  '168',
        ]);
        Municipio::create([
            'nombre' =>  'Tepexi de Rodríguez',
            'estado_id' => '21',
            'numero' =>  '169',
        ]);
        Municipio::create([
            'nombre' =>  'Tepeyahualco',
            'estado_id' => '21',
            'numero' =>  '170',
        ]);
        Municipio::create([
            'nombre' =>  'Tepeyahualco de Cuauhtémoc',
            'estado_id' => '21',
            'numero' =>  '171',
        ]);
        Municipio::create([
            'nombre' =>  'Tetela de Ocampo',
            'estado_id' => '21',
            'numero' =>  '172',
        ]);
        Municipio::create([
            'nombre' =>  'Teteles de Avila Castillo',
            'estado_id' => '21',
            'numero' =>  '173',
        ]);
        Municipio::create([
            'nombre' =>  'Teziutlán',
            'estado_id' => '21',
            'numero' =>  '174',
        ]);
        Municipio::create([
            'nombre' =>  'Tianguismanalco',
            'estado_id' => '21',
            'numero' =>  '175',
        ]);
        Municipio::create([
            'nombre' =>  'Tilapa',
            'estado_id' => '21',
            'numero' =>  '176',
        ]);
        Municipio::create([
            'nombre' =>  'Tlacotepec de Benito Juárez',
            'estado_id' => '21',
            'numero' =>  '177',
        ]);
        Municipio::create([
            'nombre' =>  'Tlacuilotepec',
            'estado_id' => '21',
            'numero' =>  '178',
        ]);
        Municipio::create([
            'nombre' =>  'Tlachichuca',
            'estado_id' => '21',
            'numero' =>  '179',
        ]);
        Municipio::create([
            'nombre' =>  'Tlahuapan',
            'estado_id' => '21',
            'numero' =>  '180',
        ]);
        Municipio::create([
            'nombre' =>  'Tlaltenango',
            'estado_id' => '21',
            'numero' =>  '181',
        ]);
        Municipio::create([
            'nombre' =>  'Tlanepantla',
            'estado_id' => '21',
            'numero' =>  '182',
        ]);
        Municipio::create([
            'nombre' =>  'Tlaola',
            'estado_id' => '21',
            'numero' =>  '183',
        ]);
        Municipio::create([
            'nombre' =>  'Tlapacoya',
            'estado_id' => '21',
            'numero' =>  '184',
        ]);
        Municipio::create([
            'nombre' =>  'Tlapanalá',
            'estado_id' => '21',
            'numero' =>  '185',
        ]);
        Municipio::create([
            'nombre' =>  'Tlatlauquitepec',
            'estado_id' => '21',
            'numero' =>  '186',
        ]);
        Municipio::create([
            'nombre' =>  'Tlaxco',
            'estado_id' => '21',
            'numero' =>  '187',
        ]);
        Municipio::create([
            'nombre' =>  'Tochimilco',
            'estado_id' => '21',
            'numero' =>  '188',
        ]);
        Municipio::create([
            'nombre' =>  'Tochtepec',
            'estado_id' => '21',
            'numero' =>  '189',
        ]);
        Municipio::create([
            'nombre' =>  'Totoltepec de Guerrero',
            'estado_id' => '21',
            'numero' =>  '190',
        ]);
        Municipio::create([
            'nombre' =>  'Tulcingo',
            'estado_id' => '21',
            'numero' =>  '191',
        ]);
        Municipio::create([
            'nombre' =>  'Tuzamapan de Galeana',
            'estado_id' => '21',
            'numero' =>  '192',
        ]);
        Municipio::create([
            'nombre' =>  'Tzicatlacoyan',
            'estado_id' => '21',
            'numero' =>  '193',
        ]);
        Municipio::create([
            'nombre' =>  'Venustiano Carranza',
            'estado_id' => '21',
            'numero' =>  '194',
        ]);
        Municipio::create([
            'nombre' =>  'Vicente Guerrero',
            'estado_id' => '21',
            'numero' =>  '195',
        ]);
        Municipio::create([
            'nombre' =>  'Xayacatlán de Bravo',
            'estado_id' => '21',
            'numero' =>  '196',
        ]);
        Municipio::create([
            'nombre' =>  'Xicotepec',
            'estado_id' => '21',
            'numero' =>  '197',
        ]);
        Municipio::create([
            'nombre' =>  'Xicotlán',
            'estado_id' => '21',
            'numero' =>  '198',
        ]);
        Municipio::create([
            'nombre' =>  'Xiutetelco',
            'estado_id' => '21',
            'numero' =>  '199',
        ]);
        Municipio::create([
            'nombre' =>  'Xochiapulco',
            'estado_id' => '21',
            'numero' =>  '200',
        ]);
        Municipio::create([
            'nombre' =>  'Xochiltepec',
            'estado_id' => '21',
            'numero' =>  '201',
        ]);
        Municipio::create([
            'nombre' =>  'Xochitlán de Vicente Suárez',
            'estado_id' => '21',
            'numero' =>  '202',
        ]);
        Municipio::create([
            'nombre' =>  'Xochitlán Todos Santos',
            'estado_id' => '21',
            'numero' =>  '203',
        ]);
        Municipio::create([
            'nombre' =>  'Yaonáhuac',
            'estado_id' => '21',
            'numero' =>  '204',
        ]);
        Municipio::create([
            'nombre' =>  'Yehualtepec',
            'estado_id' => '21',
            'numero' =>  '205',
        ]);
        Municipio::create([
            'nombre' =>  'Zacapala',
            'estado_id' => '21',
            'numero' =>  '206',
        ]);
        Municipio::create([
            'nombre' =>  'Zacapoaxtla',
            'estado_id' => '21',
            'numero' =>  '207',
        ]);
        Municipio::create([
            'nombre' =>  'Zacatlán',
            'estado_id' => '21',
            'numero' =>  '208',
        ]);
        Municipio::create([
            'nombre' =>  'Zapotitlán',
            'estado_id' => '21',
            'numero' =>  '209',
        ]);
        Municipio::create([
            'nombre' =>  'Zapotitlán de Méndez',
            'estado_id' => '21',
            'numero' =>  '210',
        ]);
        Municipio::create([
            'nombre' =>  'Zaragoza',
            'estado_id' => '21',
            'numero' =>  '211',
        ]);
        Municipio::create([
            'nombre' =>  'Zautla',
            'estado_id' => '21',
            'numero' =>  '212',
        ]);
        Municipio::create([
            'nombre' =>  'Zihuateutla',
            'estado_id' => '21',
            'numero' =>  '213',
        ]);
        Municipio::create([
            'nombre' =>  'Zinacatepec',
            'estado_id' => '21',
            'numero' =>  '214',
        ]);
        Municipio::create([
            'nombre' =>  'Zongozotla',
            'estado_id' => '21',
            'numero' =>  '215',
        ]);
        Municipio::create([
            'nombre' =>  'Zoquiapan',
            'estado_id' => '21',
            'numero' =>  '216',
        ]);
        Municipio::create([
            'nombre' =>  'Zoquitlán',
            'estado_id' => '21',
            'numero' =>  '217',
        ]);
        Municipio::create([
            'nombre' =>  'Amealco de Bonfil',
            'estado_id' => '22',
            'numero' =>  '001',
        ]);
        Municipio::create([
            'nombre' =>  'Pinal de Amoles',
            'estado_id' => '22',
            'numero' =>  '002',
        ]);
        Municipio::create([
            'nombre' =>  'Arroyo Seco',
            'estado_id' => '22',
            'numero' =>  '003',
        ]);
        Municipio::create([
            'nombre' =>  'Cadereyta de Montes',
            'estado_id' => '22',
            'numero' =>  '004',
        ]);
        Municipio::create([
            'nombre' =>  'Colón',
            'estado_id' => '22',
            'numero' =>  '005',
        ]);
        Municipio::create([
            'nombre' =>  'Corregidora',
            'estado_id' => '22',
            'numero' =>  '006',
        ]);
        Municipio::create([
            'nombre' =>  'Ezequiel Montes',
            'estado_id' => '22',
            'numero' =>  '007',
        ]);
        Municipio::create([
            'nombre' =>  'Huimilpan',
            'estado_id' => '22',
            'numero' =>  '008',
        ]);
        Municipio::create([
            'nombre' =>  'Jalpan de Serra',
            'estado_id' => '22',
            'numero' =>  '009',
        ]);
        Municipio::create([
            'nombre' =>  'Landa de Matamoros',
            'estado_id' => '22',
            'numero' =>  '010',
        ]);
        Municipio::create([
            'nombre' =>  'El Marqués',
            'estado_id' => '22',
            'numero' =>  '011',
        ]);
        Municipio::create([
            'nombre' =>  'Pedro Escobedo',
            'estado_id' => '22',
            'numero' =>  '012',
        ]);
        Municipio::create([
            'nombre' =>  'Peñamiller',
            'estado_id' => '22',
            'numero' =>  '013',
        ]);
        Municipio::create([
            'nombre' =>  'Querétaro',
            'estado_id' => '22',
            'numero' =>  '014',
        ]);
        Municipio::create([
            'nombre' =>  'San Joaquín',
            'estado_id' => '22',
            'numero' =>  '015',
        ]);
        Municipio::create([
            'nombre' =>  'San Juan del Río',
            'estado_id' => '22',
            'numero' =>  '016',
        ]);
        Municipio::create([
            'nombre' =>  'Tequisquiapan',
            'estado_id' => '22',
            'numero' =>  '017',
        ]);
        Municipio::create([
            'nombre' =>  'Tolimán',
            'estado_id' => '22',
            'numero' =>  '018',
        ]);
        Municipio::create([
            'nombre' =>  'Cozumel',
            'estado_id' => '23',
            'numero' =>  '001',
        ]);
        Municipio::create([
            'nombre' =>  'Felipe Carrillo Puerto',
            'estado_id' => '23',
            'numero' =>  '002',
        ]);
        Municipio::create([
            'nombre' =>  'Isla Mujeres',
            'estado_id' => '23',
            'numero' =>  '003',
        ]);
        Municipio::create([
            'nombre' =>  'Othón P. Blanco',
            'estado_id' => '23',
            'numero' =>  '004',
        ]);
        Municipio::create([
            'nombre' =>  'Benito Juárez',
            'estado_id' => '23',
            'numero' =>  '005',
        ]);
        Municipio::create([
            'nombre' =>  'José María Morelos',
            'estado_id' => '23',
            'numero' =>  '006',
        ]);
        Municipio::create([
            'nombre' =>  'Lázaro Cárdenas',
            'estado_id' => '23',
            'numero' =>  '007',
        ]);
        Municipio::create([
            'nombre' =>  'Solidaridad',
            'estado_id' => '23',
            'numero' =>  '008',
        ]);
        Municipio::create([
            'nombre' =>  'Tulum',
            'estado_id' => '23',
            'numero' =>  '009',
        ]);
        Municipio::create([
            'nombre' =>  'Bacalar',
            'estado_id' => '23',
            'numero' =>  '010',
        ]);
        Municipio::create([
            'nombre' =>  'Ahualulco',
            'estado_id' => '24',
            'numero' =>  '001',
        ]);
        Municipio::create([
            'nombre' =>  'Alaquines',
            'estado_id' => '24',
            'numero' =>  '002',
        ]);
        Municipio::create([
            'nombre' =>  'Aquismón',
            'estado_id' => '24',
            'numero' =>  '003',
        ]);
        Municipio::create([
            'nombre' =>  'Armadillo de los Infante',
            'estado_id' => '24',
            'numero' =>  '004',
        ]);
        Municipio::create([
            'nombre' =>  'Cárdenas',
            'estado_id' => '24',
            'numero' =>  '005',
        ]);
        Municipio::create([
            'nombre' =>  'Catorce',
            'estado_id' => '24',
            'numero' =>  '006',
        ]);
        Municipio::create([
            'nombre' =>  'Cedral',
            'estado_id' => '24',
            'numero' =>  '007',
        ]);
        Municipio::create([
            'nombre' =>  'Cerritos',
            'estado_id' => '24',
            'numero' =>  '008',
        ]);
        Municipio::create([
            'nombre' =>  'Cerro de San Pedro',
            'estado_id' => '24',
            'numero' =>  '009',
        ]);
        Municipio::create([
            'nombre' =>  'Ciudad del Maíz',
            'estado_id' => '24',
            'numero' =>  '010',
        ]);
        Municipio::create([
            'nombre' =>  'Ciudad Fernández',
            'estado_id' => '24',
            'numero' =>  '011',
        ]);
        Municipio::create([
            'nombre' =>  'Tancanhuitz',
            'estado_id' => '24',
            'numero' =>  '012',
        ]);
        Municipio::create([
            'nombre' =>  'Ciudad Valles',
            'estado_id' => '24',
            'numero' =>  '013',
        ]);
        Municipio::create([
            'nombre' =>  'Coxcatlán',
            'estado_id' => '24',
            'numero' =>  '014',
        ]);
        Municipio::create([
            'nombre' =>  'Charcas',
            'estado_id' => '24',
            'numero' =>  '015',
        ]);
        Municipio::create([
            'nombre' =>  'Ebano',
            'estado_id' => '24',
            'numero' =>  '016',
        ]);
        Municipio::create([
            'nombre' =>  'Guadalcázar',
            'estado_id' => '24',
            'numero' =>  '017',
        ]);
        Municipio::create([
            'nombre' =>  'Huehuetlán',
            'estado_id' => '24',
            'numero' =>  '018',
        ]);
        Municipio::create([
            'nombre' =>  'Lagunillas',
            'estado_id' => '24',
            'numero' =>  '019',
        ]);
        Municipio::create([
            'nombre' =>  'Matehuala',
            'estado_id' => '24',
            'numero' =>  '020',
        ]);
        Municipio::create([
            'nombre' =>  'Mexquitic de Carmona',
            'estado_id' => '24',
            'numero' =>  '021',
        ]);
        Municipio::create([
            'nombre' =>  'Moctezuma',
            'estado_id' => '24',
            'numero' =>  '022',
        ]);
        Municipio::create([
            'nombre' =>  'Rayón',
            'estado_id' => '24',
            'numero' =>  '023',
        ]);
        Municipio::create([
            'nombre' =>  'Rioverde',
            'estado_id' => '24',
            'numero' =>  '024',
        ]);
        Municipio::create([
            'nombre' =>  'Salinas',
            'estado_id' => '24',
            'numero' =>  '025',
        ]);
        Municipio::create([
            'nombre' =>  'San Antonio',
            'estado_id' => '24',
            'numero' =>  '026',
        ]);
        Municipio::create([
            'nombre' =>  'San Ciro de Acosta',
            'estado_id' => '24',
            'numero' =>  '027',
        ]);
        Municipio::create([
            'nombre' =>  'San Luis Potosí',
            'estado_id' => '24',
            'numero' =>  '028',
        ]);
        Municipio::create([
            'nombre' =>  'San Martín Chalchicuautla',
            'estado_id' => '24',
            'numero' =>  '029',
        ]);
        Municipio::create([
            'nombre' =>  'San Nicolás Tolentino',
            'estado_id' => '24',
            'numero' =>  '030',
        ]);
        Municipio::create([
            'nombre' =>  'Santa Catarina',
            'estado_id' => '24',
            'numero' =>  '031',
        ]);
        Municipio::create([
            'nombre' =>  'Santa María del Río',
            'estado_id' => '24',
            'numero' =>  '032',
        ]);
        Municipio::create([
            'nombre' =>  'Santo Domingo',
            'estado_id' => '24',
            'numero' =>  '033',
        ]);
        Municipio::create([
            'nombre' =>  'San Vicente Tancuayalab',
            'estado_id' => '24',
            'numero' =>  '034',
        ]);
        Municipio::create([
            'nombre' =>  'Soledad de Graciano Sánchez',
            'estado_id' => '24',
            'numero' =>  '035',
        ]);
        Municipio::create([
            'nombre' =>  'Tamasopo',
            'estado_id' => '24',
            'numero' =>  '036',
        ]);
        Municipio::create([
            'nombre' =>  'Tamazunchale',
            'estado_id' => '24',
            'numero' =>  '037',
        ]);
        Municipio::create([
            'nombre' =>  'Tampacán',
            'estado_id' => '24',
            'numero' =>  '038',
        ]);
        Municipio::create([
            'nombre' =>  'Tampamolón Corona',
            'estado_id' => '24',
            'numero' =>  '039',
        ]);
        Municipio::create([
            'nombre' =>  'Tamuín',
            'estado_id' => '24',
            'numero' =>  '040',
        ]);
        Municipio::create([
            'nombre' =>  'Tanlajás',
            'estado_id' => '24',
            'numero' =>  '041',
        ]);
        Municipio::create([
            'nombre' =>  'Tanquián de Escobedo',
            'estado_id' => '24',
            'numero' =>  '042',
        ]);
        Municipio::create([
            'nombre' =>  'Tierra Nueva',
            'estado_id' => '24',
            'numero' =>  '043',
        ]);
        Municipio::create([
            'nombre' =>  'Vanegas',
            'estado_id' => '24',
            'numero' =>  '044',
        ]);
        Municipio::create([
            'nombre' =>  'Venado',
            'estado_id' => '24',
            'numero' =>  '045',
        ]);
        Municipio::create([
            'nombre' =>  'Villa de Arriaga',
            'estado_id' => '24',
            'numero' =>  '046',
        ]);
        Municipio::create([
            'nombre' =>  'Villa de Guadalupe',
            'estado_id' => '24',
            'numero' =>  '047',
        ]);
        Municipio::create([
            'nombre' =>  'Villa de la Paz',
            'estado_id' => '24',
            'numero' =>  '048',
        ]);
        Municipio::create([
            'nombre' =>  'Villa de Ramos',
            'estado_id' => '24',
            'numero' =>  '049',
        ]);
        Municipio::create([
            'nombre' =>  'Villa de Reyes',
            'estado_id' => '24',
            'numero' =>  '050',
        ]);
        Municipio::create([
            'nombre' =>  'Villa Hidalgo',
            'estado_id' => '24',
            'numero' =>  '051',
        ]);
        Municipio::create([
            'nombre' =>  'Villa Juárez',
            'estado_id' => '24',
            'numero' =>  '052',
        ]);
        Municipio::create([
            'nombre' =>  'Axtla de Terrazas',
            'estado_id' => '24',
            'numero' =>  '053',
        ]);
        Municipio::create([
            'nombre' =>  'Xilitla',
            'estado_id' => '24',
            'numero' =>  '054',
        ]);
        Municipio::create([
            'nombre' =>  'Zaragoza',
            'estado_id' => '24',
            'numero' =>  '055',
        ]);
        Municipio::create([
            'nombre' =>  'Villa de Arista',
            'estado_id' => '24',
            'numero' =>  '056',
        ]);
        Municipio::create([
            'nombre' =>  'Matlapa',
            'estado_id' => '24',
            'numero' =>  '057',
        ]);
        Municipio::create([
            'nombre' =>  'El Naranjo',
            'estado_id' => '24',
            'numero' =>  '058',
        ]);
        Municipio::create([
            'nombre' =>  'Ahome',
            'estado_id' => '25',
            'numero' =>  '001',
        ]);
        Municipio::create([
            'nombre' =>  'Angostura',
            'estado_id' => '25',
            'numero' =>  '002',
        ]);
        Municipio::create([
            'nombre' =>  'Badiraguato',
            'estado_id' => '25',
            'numero' =>  '003',
        ]);
        Municipio::create([
            'nombre' =>  'Concordia',
            'estado_id' => '25',
            'numero' =>  '004',
        ]);
        Municipio::create([
            'nombre' =>  'Cosalá',
            'estado_id' => '25',
            'numero' =>  '005',
        ]);
        Municipio::create([
            'nombre' =>  'Culiacán',
            'estado_id' => '25',
            'numero' =>  '006',
        ]);
        Municipio::create([
            'nombre' =>  'Choix',
            'estado_id' => '25',
            'numero' =>  '007',
        ]);
        Municipio::create([
            'nombre' =>  'Elota',
            'estado_id' => '25',
            'numero' =>  '008',
        ]);
        Municipio::create([
            'nombre' =>  'Escuinapa',
            'estado_id' => '25',
            'numero' =>  '009',
        ]);
        Municipio::create([
            'nombre' =>  'El Fuerte',
            'estado_id' => '25',
            'numero' =>  '010',
        ]);
        Municipio::create([
            'nombre' =>  'Guasave',
            'estado_id' => '25',
            'numero' =>  '011',
        ]);
        Municipio::create([
            'nombre' =>  'Mazatlán',
            'estado_id' => '25',
            'numero' =>  '012',
        ]);
        Municipio::create([
            'nombre' =>  'Mocorito',
            'estado_id' => '25',
            'numero' =>  '013',
        ]);
        Municipio::create([
            'nombre' =>  'Rosario',
            'estado_id' => '25',
            'numero' =>  '014',
        ]);
        Municipio::create([
            'nombre' =>  'Salvador Alvarado',
            'estado_id' => '25',
            'numero' =>  '015',
        ]);
        Municipio::create([
            'nombre' =>  'San Ignacio',
            'estado_id' => '25',
            'numero' =>  '016',
        ]);
        Municipio::create([
            'nombre' =>  'Sinaloa',
            'estado_id' => '25',
            'numero' =>  '017',
        ]);
        Municipio::create([
            'nombre' =>  'Navolato',
            'estado_id' => '25',
            'numero' =>  '018',
        ]);
        Municipio::create([
            'nombre' =>  'Aconchi',
            'estado_id' => '26',
            'numero' =>  '001',
        ]);
        Municipio::create([
            'nombre' =>  'Agua Prieta',
            'estado_id' => '26',
            'numero' =>  '002',
        ]);
        Municipio::create([
            'nombre' =>  'Alamos',
            'estado_id' => '26',
            'numero' =>  '003',
        ]);
        Municipio::create([
            'nombre' =>  'Altar',
            'estado_id' => '26',
            'numero' =>  '004',
        ]);
        Municipio::create([
            'nombre' =>  'Arivechi',
            'estado_id' => '26',
            'numero' =>  '005',
        ]);
        Municipio::create([
            'nombre' =>  'Arizpe',
            'estado_id' => '26',
            'numero' =>  '006',
        ]);
        Municipio::create([
            'nombre' =>  'Atil',
            'estado_id' => '26',
            'numero' =>  '007',
        ]);
        Municipio::create([
            'nombre' =>  'Bacadéhuachi',
            'estado_id' => '26',
            'numero' =>  '008',
        ]);
        Municipio::create([
            'nombre' =>  'Bacanora',
            'estado_id' => '26',
            'numero' =>  '009',
        ]);
        Municipio::create([
            'nombre' =>  'Bacerac',
            'estado_id' => '26',
            'numero' =>  '010',
        ]);
        Municipio::create([
            'nombre' =>  'Bacoachi',
            'estado_id' => '26',
            'numero' =>  '011',
        ]);
        Municipio::create([
            'nombre' =>  'Bácum',
            'estado_id' => '26',
            'numero' =>  '012',
        ]);
        Municipio::create([
            'nombre' =>  'Banámichi',
            'estado_id' => '26',
            'numero' =>  '013',
        ]);
        Municipio::create([
            'nombre' =>  'Baviácora',
            'estado_id' => '26',
            'numero' =>  '014',
        ]);
        Municipio::create([
            'nombre' =>  'Bavispe',
            'estado_id' => '26',
            'numero' =>  '015',
        ]);
        Municipio::create([
            'nombre' =>  'Benjamín Hill',
            'estado_id' => '26',
            'numero' =>  '016',
        ]);
        Municipio::create([
            'nombre' =>  'Caborca',
            'estado_id' => '26',
            'numero' =>  '017',
        ]);
        Municipio::create([
            'nombre' =>  'Cajeme',
            'estado_id' => '26',
            'numero' =>  '018',
        ]);
        Municipio::create([
            'nombre' =>  'Cananea',
            'estado_id' => '26',
            'numero' =>  '019',
        ]);
        Municipio::create([
            'nombre' =>  'Carbó',
            'estado_id' => '26',
            'numero' =>  '020',
        ]);
        Municipio::create([
            'nombre' =>  'La Colorada',
            'estado_id' => '26',
            'numero' =>  '021',
        ]);
        Municipio::create([
            'nombre' =>  'Cucurpe',
            'estado_id' => '26',
            'numero' =>  '022',
        ]);
        Municipio::create([
            'nombre' =>  'Cumpas',
            'estado_id' => '26',
            'numero' =>  '023',
        ]);
        Municipio::create([
            'nombre' =>  'Divisaderos',
            'estado_id' => '26',
            'numero' =>  '024',
        ]);
        Municipio::create([
            'nombre' =>  'Empalme',
            'estado_id' => '26',
            'numero' =>  '025',
        ]);
        Municipio::create([
            'nombre' =>  'Etchojoa',
            'estado_id' => '26',
            'numero' =>  '026',
        ]);
        Municipio::create([
            'nombre' =>  'Fronteras',
            'estado_id' => '26',
            'numero' =>  '027',
        ]);
        Municipio::create([
            'nombre' =>  'Granados',
            'estado_id' => '26',
            'numero' =>  '028',
        ]);
        Municipio::create([
            'nombre' =>  'Guaymas',
            'estado_id' => '26',
            'numero' =>  '029',
        ]);
        Municipio::create([
            'nombre' =>  'Hermosillo',
            'estado_id' => '26',
            'numero' =>  '030',
        ]);
        Municipio::create([
            'nombre' =>  'Huachinera',
            'estado_id' => '26',
            'numero' =>  '031',
        ]);
        Municipio::create([
            'nombre' =>  'Huásabas',
            'estado_id' => '26',
            'numero' =>  '032',
        ]);
        Municipio::create([
            'nombre' =>  'Huatabampo',
            'estado_id' => '26',
            'numero' =>  '033',
        ]);
        Municipio::create([
            'nombre' =>  'Huépac',
            'estado_id' => '26',
            'numero' =>  '034',
        ]);
        Municipio::create([
            'nombre' =>  'Imuris',
            'estado_id' => '26',
            'numero' =>  '035',
        ]);
        Municipio::create([
            'nombre' =>  'Magdalena',
            'estado_id' => '26',
            'numero' =>  '036',
        ]);
        Municipio::create([
            'nombre' =>  'Mazatán',
            'estado_id' => '26',
            'numero' =>  '037',
        ]);
        Municipio::create([
            'nombre' =>  'Moctezuma',
            'estado_id' => '26',
            'numero' =>  '038',
        ]);
        Municipio::create([
            'nombre' =>  'Naco',
            'estado_id' => '26',
            'numero' =>  '039',
        ]);
        Municipio::create([
            'nombre' =>  'Nácori Chico',
            'estado_id' => '26',
            'numero' =>  '040',
        ]);
        Municipio::create([
            'nombre' =>  'Nacozari de García',
            'estado_id' => '26',
            'numero' =>  '041',
        ]);
        Municipio::create([
            'nombre' =>  'Navojoa',
            'estado_id' => '26',
            'numero' =>  '042',
        ]);
        Municipio::create([
            'nombre' =>  'Nogales',
            'estado_id' => '26',
            'numero' =>  '043',
        ]);
        Municipio::create([
            'nombre' =>  'Onavas',
            'estado_id' => '26',
            'numero' =>  '044',
        ]);
        Municipio::create([
            'nombre' =>  'Opodepe',
            'estado_id' => '26',
            'numero' =>  '045',
        ]);
        Municipio::create([
            'nombre' =>  'Oquitoa',
            'estado_id' => '26',
            'numero' =>  '046',
        ]);
        Municipio::create([
            'nombre' =>  'Pitiquito',
            'estado_id' => '26',
            'numero' =>  '047',
        ]);
        Municipio::create([
            'nombre' =>  'Puerto Peñasco',
            'estado_id' => '26',
            'numero' =>  '048',
        ]);
        Municipio::create([
            'nombre' =>  'Quiriego',
            'estado_id' => '26',
            'numero' =>  '049',
        ]);
        Municipio::create([
            'nombre' =>  'Rayón',
            'estado_id' => '26',
            'numero' =>  '050',
        ]);
        Municipio::create([
            'nombre' =>  'Rosario',
            'estado_id' => '26',
            'numero' =>  '051',
        ]);
        Municipio::create([
            'nombre' =>  'Sahuaripa',
            'estado_id' => '26',
            'numero' =>  '052',
        ]);
        Municipio::create([
            'nombre' =>  'San Felipe de Jesús',
            'estado_id' => '26',
            'numero' =>  '053',
        ]);
        Municipio::create([
            'nombre' =>  'San Javier',
            'estado_id' => '26',
            'numero' =>  '054',
        ]);
        Municipio::create([
            'nombre' =>  'San Luis Río Colorado',
            'estado_id' => '26',
            'numero' =>  '055',
        ]);
        Municipio::create([
            'nombre' =>  'San Miguel de Horcasitas',
            'estado_id' => '26',
            'numero' =>  '056',
        ]);
        Municipio::create([
            'nombre' =>  'San Pedro de la Cueva',
            'estado_id' => '26',
            'numero' =>  '057',
        ]);
        Municipio::create([
            'nombre' =>  'Santa Ana',
            'estado_id' => '26',
            'numero' =>  '058',
        ]);
        Municipio::create([
            'nombre' =>  'Santa Cruz',
            'estado_id' => '26',
            'numero' =>  '059',
        ]);
        Municipio::create([
            'nombre' =>  'Sáric',
            'estado_id' => '26',
            'numero' =>  '060',
        ]);
        Municipio::create([
            'nombre' =>  'Soyopa',
            'estado_id' => '26',
            'numero' =>  '061',
        ]);
        Municipio::create([
            'nombre' =>  'Suaqui Grande',
            'estado_id' => '26',
            'numero' =>  '062',
        ]);
        Municipio::create([
            'nombre' =>  'Tepache',
            'estado_id' => '26',
            'numero' =>  '063',
        ]);
        Municipio::create([
            'nombre' =>  'Trincheras',
            'estado_id' => '26',
            'numero' =>  '064',
        ]);
        Municipio::create([
            'nombre' =>  'Tubutama',
            'estado_id' => '26',
            'numero' =>  '065',
        ]);
        Municipio::create([
            'nombre' =>  'Ures',
            'estado_id' => '26',
            'numero' =>  '066',
        ]);
        Municipio::create([
            'nombre' =>  'Villa Hidalgo',
            'estado_id' => '26',
            'numero' =>  '067',
        ]);
        Municipio::create([
            'nombre' =>  'Villa Pesqueira',
            'estado_id' => '26',
            'numero' =>  '068',
        ]);
        Municipio::create([
            'nombre' =>  'Yécora',
            'estado_id' => '26',
            'numero' =>  '069',
        ]);
        Municipio::create([
            'nombre' =>  'General Plutarco Elías Calles',
            'estado_id' => '26',
            'numero' =>  '070',
        ]);
        Municipio::create([
            'nombre' =>  'Benito Juárez',
            'estado_id' => '26',
            'numero' =>  '071',
        ]);
        Municipio::create([
            'nombre' =>  'San Ignacio Río Muerto',
            'estado_id' => '26',
            'numero' =>  '072',
        ]);
        Municipio::create([
            'nombre' =>  'Balancán',
            'estado_id' => '27',
            'numero' =>  '001',
        ]);
        Municipio::create([
            'nombre' =>  'Cárdenas',
            'estado_id' => '27',
            'numero' =>  '002',
        ]);
        Municipio::create([
            'nombre' =>  'Centla',
            'estado_id' => '27',
            'numero' =>  '003',
        ]);
        Municipio::create([
            'nombre' =>  'Centro',
            'estado_id' => '27',
            'numero' =>  '004',
        ]);
        Municipio::create([
            'nombre' =>  'Comalcalco',
            'estado_id' => '27',
            'numero' =>  '005',
        ]);
        Municipio::create([
            'nombre' =>  'Cunduacán',
            'estado_id' => '27',
            'numero' =>  '006',
        ]);
        Municipio::create([
            'nombre' =>  'Emiliano Zapata',
            'estado_id' => '27',
            'numero' =>  '007',
        ]);
        Municipio::create([
            'nombre' =>  'Huimanguillo',
            'estado_id' => '27',
            'numero' =>  '008',
        ]);
        Municipio::create([
            'nombre' =>  'Jalapa',
            'estado_id' => '27',
            'numero' =>  '009',
        ]);
        Municipio::create([
            'nombre' =>  'Jalpa de Méndez',
            'estado_id' => '27',
            'numero' =>  '010',
        ]);
        Municipio::create([
            'nombre' =>  'Jonuta',
            'estado_id' => '27',
            'numero' =>  '011',
        ]);
        Municipio::create([
            'nombre' =>  'Macuspana',
            'estado_id' => '27',
            'numero' =>  '012',
        ]);
        Municipio::create([
            'nombre' =>  'Nacajuca',
            'estado_id' => '27',
            'numero' =>  '013',
        ]);
        Municipio::create([
            'nombre' =>  'Paraíso',
            'estado_id' => '27',
            'numero' =>  '014',
        ]);
        Municipio::create([
            'nombre' =>  'Tacotalpa',
            'estado_id' => '27',
            'numero' =>  '015',
        ]);
        Municipio::create([
            'nombre' =>  'Teapa',
            'estado_id' => '27',
            'numero' =>  '016',
        ]);
        Municipio::create([
            'nombre' =>  'Tenosique',
            'estado_id' => '27',
            'numero' =>  '017',
        ]);
        Municipio::create([
            'nombre' =>  'Abasolo',
            'estado_id' => '28',
            'numero' =>  '001',
        ]);
        Municipio::create([
            'nombre' =>  'Aldama',
            'estado_id' => '28',
            'numero' =>  '002',
        ]);
        Municipio::create([
            'nombre' =>  'Altamira',
            'estado_id' => '28',
            'numero' =>  '003',
        ]);
        Municipio::create([
            'nombre' =>  'Antiguo Morelos',
            'estado_id' => '28',
            'numero' =>  '004',
        ]);
        Municipio::create([
            'nombre' =>  'Burgos',
            'estado_id' => '28',
            'numero' =>  '005',
        ]);
        Municipio::create([
            'nombre' =>  'Bustamante',
            'estado_id' => '28',
            'numero' =>  '006',
        ]);
        Municipio::create([
            'nombre' =>  'Camargo',
            'estado_id' => '28',
            'numero' =>  '007',
        ]);
        Municipio::create([
            'nombre' =>  'Casas',
            'estado_id' => '28',
            'numero' =>  '008',
        ]);
        Municipio::create([
            'nombre' =>  'Ciudad Madero',
            'estado_id' => '28',
            'numero' =>  '009',
        ]);
        Municipio::create([
            'nombre' =>  'Cruillas',
            'estado_id' => '28',
            'numero' =>  '010',
        ]);
        Municipio::create([
            'nombre' =>  'Gómez Farías',
            'estado_id' => '28',
            'numero' =>  '011',
        ]);
        Municipio::create([
            'nombre' =>  'González',
            'estado_id' => '28',
            'numero' =>  '012',
        ]);
        Municipio::create([
            'nombre' =>  'Güémez',
            'estado_id' => '28',
            'numero' =>  '013',
        ]);
        Municipio::create([
            'nombre' =>  'Guerrero',
            'estado_id' => '28',
            'numero' =>  '014',
        ]);
        Municipio::create([
            'nombre' =>  'Gustavo Díaz Ordaz',
            'estado_id' => '28',
            'numero' =>  '015',
        ]);
        Municipio::create([
            'nombre' =>  'Hidalgo',
            'estado_id' => '28',
            'numero' =>  '016',
        ]);
        Municipio::create([
            'nombre' =>  'Jaumave',
            'estado_id' => '28',
            'numero' =>  '017',
        ]);
        Municipio::create([
            'nombre' =>  'Jiménez',
            'estado_id' => '28',
            'numero' =>  '018',
        ]);
        Municipio::create([
            'nombre' =>  'Llera',
            'estado_id' => '28',
            'numero' =>  '019',
        ]);
        Municipio::create([
            'nombre' =>  'Mainero',
            'estado_id' => '28',
            'numero' =>  '020',
        ]);
        Municipio::create([
            'nombre' =>  'El Mante',
            'estado_id' => '28',
            'numero' =>  '021',
        ]);
        Municipio::create([
            'nombre' =>  'Matamoros',
            'estado_id' => '28',
            'numero' =>  '022',
        ]);
        Municipio::create([
            'nombre' =>  'Méndez',
            'estado_id' => '28',
            'numero' =>  '023',
        ]);
        Municipio::create([
            'nombre' =>  'Mier',
            'estado_id' => '28',
            'numero' =>  '024',
        ]);
        Municipio::create([
            'nombre' =>  'Miguel Alemán',
            'estado_id' => '28',
            'numero' =>  '025',
        ]);
        Municipio::create([
            'nombre' =>  'Miquihuana',
            'estado_id' => '28',
            'numero' =>  '026',
        ]);
        Municipio::create([
            'nombre' =>  'Nuevo Laredo',
            'estado_id' => '28',
            'numero' =>  '027',
        ]);
        Municipio::create([
            'nombre' =>  'Nuevo Morelos',
            'estado_id' => '28',
            'numero' =>  '028',
        ]);
        Municipio::create([
            'nombre' =>  'Ocampo',
            'estado_id' => '28',
            'numero' =>  '029',
        ]);
        Municipio::create([
            'nombre' =>  'Padilla',
            'estado_id' => '28',
            'numero' =>  '030',
        ]);
        Municipio::create([
            'nombre' =>  'Palmillas',
            'estado_id' => '28',
            'numero' =>  '031',
        ]);
        Municipio::create([
            'nombre' =>  'Reynosa',
            'estado_id' => '28',
            'numero' =>  '032',
        ]);
        Municipio::create([
            'nombre' =>  'Río Bravo',
            'estado_id' => '28',
            'numero' =>  '033',
        ]);
        Municipio::create([
            'nombre' =>  'San Carlos',
            'estado_id' => '28',
            'numero' =>  '034',
        ]);
        Municipio::create([
            'nombre' =>  'San Fernando',
            'estado_id' => '28',
            'numero' =>  '035',
        ]);
        Municipio::create([
            'nombre' =>  'San Nicolás',
            'estado_id' => '28',
            'numero' =>  '036',
        ]);
        Municipio::create([
            'nombre' =>  'Soto la Marina',
            'estado_id' => '28',
            'numero' =>  '037',
        ]);
        Municipio::create([
            'nombre' =>  'Tampico',
            'estado_id' => '28',
            'numero' =>  '038',
        ]);
        Municipio::create([
            'nombre' =>  'Tula',
            'estado_id' => '28',
            'numero' =>  '039',
        ]);
        Municipio::create([
            'nombre' =>  'Valle Hermoso',
            'estado_id' => '28',
            'numero' =>  '040',
        ]);
        Municipio::create([
            'nombre' =>  'Victoria',
            'estado_id' => '28',
            'numero' =>  '041',
        ]);
        Municipio::create([
            'nombre' =>  'Villagrán',
            'estado_id' => '28',
            'numero' =>  '042',
        ]);
        Municipio::create([
            'nombre' =>  'Xicoténcatl',
            'estado_id' => '28',
            'numero' =>  '043',
        ]);
        Municipio::create([
            'nombre' =>  'Amaxac de Guerrero',
            'estado_id' => '29',
            'numero' =>  '001',
        ]);
        Municipio::create([
            'nombre' =>  'Apetatitlán de Antonio Carvajal',
            'estado_id' => '29',
            'numero' =>  '002',
        ]);
        Municipio::create([
            'nombre' =>  'Atlangatepec',
            'estado_id' => '29',
            'numero' =>  '003',
        ]);
        Municipio::create([
            'nombre' =>  'Atltzayanca',
            'estado_id' => '29',
            'numero' =>  '004',
        ]);
        Municipio::create([
            'nombre' =>  'Apizaco',
            'estado_id' => '29',
            'numero' =>  '005',
        ]);
        Municipio::create([
            'nombre' =>  'Calpulalpan',
            'estado_id' => '29',
            'numero' =>  '006',
        ]);
        Municipio::create([
            'nombre' =>  'El Carmen Tequexquitla',
            'estado_id' => '29',
            'numero' =>  '007',
        ]);
        Municipio::create([
            'nombre' =>  'Cuapiaxtla',
            'estado_id' => '29',
            'numero' =>  '008',
        ]);
        Municipio::create([
            'nombre' =>  'Cuaxomulco',
            'estado_id' => '29',
            'numero' =>  '009',
        ]);
        Municipio::create([
            'nombre' =>  'Chiautempan',
            'estado_id' => '29',
            'numero' =>  '010',
        ]);
        Municipio::create([
            'nombre' =>  'Muñoz de Domingo Arenas',
            'estado_id' => '29',
            'numero' =>  '011',
        ]);
        Municipio::create([
            'nombre' =>  'Españita',
            'estado_id' => '29',
            'numero' =>  '012',
        ]);
        Municipio::create([
            'nombre' =>  'Huamantla',
            'estado_id' => '29',
            'numero' =>  '013',
        ]);
        Municipio::create([
            'nombre' =>  'Hueyotlipan',
            'estado_id' => '29',
            'numero' =>  '014',
        ]);
        Municipio::create([
            'nombre' =>  'Ixtacuixtla de Mariano Matamoros',
            'estado_id' => '29',
            'numero' =>  '015',
        ]);
        Municipio::create([
            'nombre' =>  'Ixtenco',
            'estado_id' => '29',
            'numero' =>  '016',
        ]);
        Municipio::create([
            'nombre' =>  'Mazatecochco de José María Morelos',
            'estado_id' => '29',
            'numero' =>  '017',
        ]);
        Municipio::create([
            'nombre' =>  'Contla de Juan Cuamatzi',
            'estado_id' => '29',
            'numero' =>  '018',
        ]);
        Municipio::create([
            'nombre' =>  'Tepetitla de Lardizábal',
            'estado_id' => '29',
            'numero' =>  '019',
        ]);
        Municipio::create([
            'nombre' =>  'Sanctórum de Lázaro Cárdenas',
            'estado_id' => '29',
            'numero' =>  '020',
        ]);
        Municipio::create([
            'nombre' =>  'Nanacamilpa de Mariano Arista',
            'estado_id' => '29',
            'numero' =>  '021',
        ]);
        Municipio::create([
            'nombre' =>  'Acuamanala de Miguel Hidalgo',
            'estado_id' => '29',
            'numero' =>  '022',
        ]);
        Municipio::create([
            'nombre' =>  'Natívitas',
            'estado_id' => '29',
            'numero' =>  '023',
        ]);
        Municipio::create([
            'nombre' =>  'Panotla',
            'estado_id' => '29',
            'numero' =>  '024',
        ]);
        Municipio::create([
            'nombre' =>  'San Pablo del Monte',
            'estado_id' => '29',
            'numero' =>  '025',
        ]);
        Municipio::create([
            'nombre' =>  'Santa Cruz Tlaxcala',
            'estado_id' => '29',
            'numero' =>  '026',
        ]);
        Municipio::create([
            'nombre' =>  'Tenancingo',
            'estado_id' => '29',
            'numero' =>  '027',
        ]);
        Municipio::create([
            'nombre' =>  'Teolocholco',
            'estado_id' => '29',
            'numero' =>  '028',
        ]);
        Municipio::create([
            'nombre' =>  'Tepeyanco',
            'estado_id' => '29',
            'numero' =>  '029',
        ]);
        Municipio::create([
            'nombre' =>  'Terrenate',
            'estado_id' => '29',
            'numero' =>  '030',
        ]);
        Municipio::create([
            'nombre' =>  'Tetla de la Solidaridad',
            'estado_id' => '29',
            'numero' =>  '031',
        ]);
        Municipio::create([
            'nombre' =>  'Tetlatlahuca',
            'estado_id' => '29',
            'numero' =>  '032',
        ]);
        Municipio::create([
            'nombre' =>  'Tlaxcala',
            'estado_id' => '29',
            'numero' =>  '033',
        ]);
        Municipio::create([
            'nombre' =>  'Tlaxco',
            'estado_id' => '29',
            'numero' =>  '034',
        ]);
        Municipio::create([
            'nombre' =>  'Tocatlán',
            'estado_id' => '29',
            'numero' =>  '035',
        ]);
        Municipio::create([
            'nombre' =>  'Totolac',
            'estado_id' => '29',
            'numero' =>  '036',
        ]);
        Municipio::create([
            'nombre' =>  'Ziltlaltépec de Trinidad Sánchez Santos',
            'estado_id' => '29',
            'numero' =>  '037',
        ]);
        Municipio::create([
            'nombre' =>  'Tzompantepec',
            'estado_id' => '29',
            'numero' =>  '038',
        ]);
        Municipio::create([
            'nombre' =>  'Xaloztoc',
            'estado_id' => '29',
            'numero' =>  '039',
        ]);
        Municipio::create([
            'nombre' =>  'Xaltocan',
            'estado_id' => '29',
            'numero' =>  '040',
        ]);
        Municipio::create([
            'nombre' =>  'Papalotla de Xicohténcatl',
            'estado_id' => '29',
            'numero' =>  '041',
        ]);
        Municipio::create([
            'nombre' =>  'Xicohtzinco',
            'estado_id' => '29',
            'numero' =>  '042',
        ]);
        Municipio::create([
            'nombre' =>  'Yauhquemehcan',
            'estado_id' => '29',
            'numero' =>  '043',
        ]);
        Municipio::create([
            'nombre' =>  'Zacatelco',
            'estado_id' => '29',
            'numero' =>  '044',
        ]);
        Municipio::create([
            'nombre' =>  'Benito Juárez',
            'estado_id' => '29',
            'numero' =>  '045',
        ]);
        Municipio::create([
            'nombre' =>  'Emiliano Zapata',
            'estado_id' => '29',
            'numero' =>  '046',
        ]);
        Municipio::create([
            'nombre' =>  'Lázaro Cárdenas',
            'estado_id' => '29',
            'numero' =>  '047',
        ]);
        Municipio::create([
            'nombre' =>  'La Magdalena Tlaltelulco',
            'estado_id' => '29',
            'numero' =>  '048',
        ]);
        Municipio::create([
            'nombre' =>  'San Damián Texóloc',
            'estado_id' => '29',
            'numero' =>  '049',
        ]);
        Municipio::create([
            'nombre' =>  'San Francisco Tetlanohcan',
            'estado_id' => '29',
            'numero' =>  '050',
        ]);
        Municipio::create([
            'nombre' =>  'San Jerónimo Zacualpan',
            'estado_id' => '29',
            'numero' =>  '051',
        ]);
        Municipio::create([
            'nombre' =>  'San José Teacalco',
            'estado_id' => '29',
            'numero' =>  '052',
        ]);
        Municipio::create([
            'nombre' =>  'San Juan Huactzinco',
            'estado_id' => '29',
            'numero' =>  '053',
        ]);
        Municipio::create([
            'nombre' =>  'San Lorenzo Axocomanitla',
            'estado_id' => '29',
            'numero' =>  '054',
        ]);
        Municipio::create([
            'nombre' =>  'San Lucas Tecopilco',
            'estado_id' => '29',
            'numero' =>  '055',
        ]);
        Municipio::create([
            'nombre' =>  'Santa Ana Nopalucan',
            'estado_id' => '29',
            'numero' =>  '056',
        ]);
        Municipio::create([
            'nombre' =>  'Santa Apolonia Teacalco',
            'estado_id' => '29',
            'numero' =>  '057',
        ]);
        Municipio::create([
            'nombre' =>  'Santa Catarina Ayometla',
            'estado_id' => '29',
            'numero' =>  '058',
        ]);
        Municipio::create([
            'nombre' =>  'Santa Cruz Quilehtla',
            'estado_id' => '29',
            'numero' =>  '059',
        ]);
        Municipio::create([
            'nombre' =>  'Santa Isabel Xiloxoxtla',
            'estado_id' => '29',
            'numero' =>  '060',
        ]);
        Municipio::create([
            'nombre' =>  'Acajete',
            'estado_id' => '30',
            'numero' =>  '001',
        ]);
        Municipio::create([
            'nombre' =>  'Acatlán',
            'estado_id' => '30',
            'numero' =>  '002',
        ]);
        Municipio::create([
            'nombre' =>  'Acayucan',
            'estado_id' => '30',
            'numero' =>  '003',
        ]);
        Municipio::create([
            'nombre' =>  'Actopan',
            'estado_id' => '30',
            'numero' =>  '004',
        ]);
        Municipio::create([
            'nombre' =>  'Acula',
            'estado_id' => '30',
            'numero' =>  '005',
        ]);
        Municipio::create([
            'nombre' =>  'Acultzingo',
            'estado_id' => '30',
            'numero' =>  '006',
        ]);
        Municipio::create([
            'nombre' =>  'Camarón de Tejeda',
            'estado_id' => '30',
            'numero' =>  '007',
        ]);
        Municipio::create([
            'nombre' =>  'Alpatláhuac',
            'estado_id' => '30',
            'numero' =>  '008',
        ]);
        Municipio::create([
            'nombre' =>  'Alto Lucero de Gutiérrez Barrios',
            'estado_id' => '30',
            'numero' =>  '009',
        ]);
        Municipio::create([
            'nombre' =>  'Altotonga',
            'estado_id' => '30',
            'numero' =>  '010',
        ]);
        Municipio::create([
            'nombre' =>  'Alvarado',
            'estado_id' => '30',
            'numero' =>  '011',
        ]);
        Municipio::create([
            'nombre' =>  'Amatitlán',
            'estado_id' => '30',
            'numero' =>  '012',
        ]);
        Municipio::create([
            'nombre' =>  'Naranjos Amatlán',
            'estado_id' => '30',
            'numero' =>  '013',
        ]);
        Municipio::create([
            'nombre' =>  'Amatlán de los Reyes',
            'estado_id' => '30',
            'numero' =>  '014',
        ]);
        Municipio::create([
            'nombre' =>  'Angel R. Cabada',
            'estado_id' => '30',
            'numero' =>  '015',
        ]);
        Municipio::create([
            'nombre' =>  'La Antigua',
            'estado_id' => '30',
            'numero' =>  '016',
        ]);
        Municipio::create([
            'nombre' =>  'Apazapan',
            'estado_id' => '30',
            'numero' =>  '017',
        ]);
        Municipio::create([
            'nombre' =>  'Aquila',
            'estado_id' => '30',
            'numero' =>  '018',
        ]);
        Municipio::create([
            'nombre' =>  'Astacinga',
            'estado_id' => '30',
            'numero' =>  '019',
        ]);
        Municipio::create([
            'nombre' =>  'Atlahuilco',
            'estado_id' => '30',
            'numero' =>  '020',
        ]);
        Municipio::create([
            'nombre' =>  'Atoyac',
            'estado_id' => '30',
            'numero' =>  '021',
        ]);
        Municipio::create([
            'nombre' =>  'Atzacan',
            'estado_id' => '30',
            'numero' =>  '022',
        ]);
        Municipio::create([
            'nombre' =>  'Atzalan',
            'estado_id' => '30',
            'numero' =>  '023',
        ]);
        Municipio::create([
            'nombre' =>  'Tlaltetela',
            'estado_id' => '30',
            'numero' =>  '024',
        ]);
        Municipio::create([
            'nombre' =>  'Ayahualulco',
            'estado_id' => '30',
            'numero' =>  '025',
        ]);
        Municipio::create([
            'nombre' =>  'Banderilla',
            'estado_id' => '30',
            'numero' =>  '026',
        ]);
        Municipio::create([
            'nombre' =>  'Benito Juárez',
            'estado_id' => '30',
            'numero' =>  '027',
        ]);
        Municipio::create([
            'nombre' =>  'Boca del Río',
            'estado_id' => '30',
            'numero' =>  '028',
        ]);
        Municipio::create([
            'nombre' =>  'Calcahualco',
            'estado_id' => '30',
            'numero' =>  '029',
        ]);
        Municipio::create([
            'nombre' =>  'Camerino Z. Mendoza',
            'estado_id' => '30',
            'numero' =>  '030',
        ]);
        Municipio::create([
            'nombre' =>  'Carrillo Puerto',
            'estado_id' => '30',
            'numero' =>  '031',
        ]);
        Municipio::create([
            'nombre' =>  'Catemaco',
            'estado_id' => '30',
            'numero' =>  '032',
        ]);
        Municipio::create([
            'nombre' =>  'Cazones de Herrera',
            'estado_id' => '30',
            'numero' =>  '033',
        ]);
        Municipio::create([
            'nombre' =>  'Cerro Azul',
            'estado_id' => '30',
            'numero' =>  '034',
        ]);
        Municipio::create([
            'nombre' =>  'Citlaltépetl',
            'estado_id' => '30',
            'numero' =>  '035',
        ]);
        Municipio::create([
            'nombre' =>  'Coacoatzintla',
            'estado_id' => '30',
            'numero' =>  '036',
        ]);
        Municipio::create([
            'nombre' =>  'Coahuitlán',
            'estado_id' => '30',
            'numero' =>  '037',
        ]);
        Municipio::create([
            'nombre' =>  'Coatepec',
            'estado_id' => '30',
            'numero' =>  '038',
        ]);
        Municipio::create([
            'nombre' =>  'Coatzacoalcos',
            'estado_id' => '30',
            'numero' =>  '039',
        ]);
        Municipio::create([
            'nombre' =>  'Coatzintla',
            'estado_id' => '30',
            'numero' =>  '040',
        ]);
        Municipio::create([
            'nombre' =>  'Coetzala',
            'estado_id' => '30',
            'numero' =>  '041',
        ]);
        Municipio::create([
            'nombre' =>  'Colipa',
            'estado_id' => '30',
            'numero' =>  '042',
        ]);
        Municipio::create([
            'nombre' =>  'Comapa',
            'estado_id' => '30',
            'numero' =>  '043',
        ]);
        Municipio::create([
            'nombre' =>  'Córdoba',
            'estado_id' => '30',
            'numero' =>  '044',
        ]);
        Municipio::create([
            'nombre' =>  'Cosamaloapan de Carpio',
            'estado_id' => '30',
            'numero' =>  '045',
        ]);
        Municipio::create([
            'nombre' =>  'Cosautlán de Carvajal',
            'estado_id' => '30',
            'numero' =>  '046',
        ]);
        Municipio::create([
            'nombre' =>  'Coscomatepec',
            'estado_id' => '30',
            'numero' =>  '047',
        ]);
        Municipio::create([
            'nombre' =>  'Cosoleacaque',
            'estado_id' => '30',
            'numero' =>  '048',
        ]);
        Municipio::create([
            'nombre' =>  'Cotaxtla',
            'estado_id' => '30',
            'numero' =>  '049',
        ]);
        Municipio::create([
            'nombre' =>  'Coxquihui',
            'estado_id' => '30',
            'numero' =>  '050',
        ]);
        Municipio::create([
            'nombre' =>  'Coyutla',
            'estado_id' => '30',
            'numero' =>  '051',
        ]);
        Municipio::create([
            'nombre' =>  'Cuichapa',
            'estado_id' => '30',
            'numero' =>  '052',
        ]);
        Municipio::create([
            'nombre' =>  'Cuitláhuac',
            'estado_id' => '30',
            'numero' =>  '053',
        ]);
        Municipio::create([
            'nombre' =>  'Chacaltianguis',
            'estado_id' => '30',
            'numero' =>  '054',
        ]);
        Municipio::create([
            'nombre' =>  'Chalma',
            'estado_id' => '30',
            'numero' =>  '055',
        ]);
        Municipio::create([
            'nombre' =>  'Chiconamel',
            'estado_id' => '30',
            'numero' =>  '056',
        ]);
        Municipio::create([
            'nombre' =>  'Chiconquiaco',
            'estado_id' => '30',
            'numero' =>  '057',
        ]);
        Municipio::create([
            'nombre' =>  'Chicontepec',
            'estado_id' => '30',
            'numero' =>  '058',
        ]);
        Municipio::create([
            'nombre' =>  'Chinameca',
            'estado_id' => '30',
            'numero' =>  '059',
        ]);
        Municipio::create([
            'nombre' =>  'Chinampa de Gorostiza',
            'estado_id' => '30',
            'numero' =>  '060',
        ]);
        Municipio::create([
            'nombre' =>  'Las Choapas',
            'estado_id' => '30',
            'numero' =>  '061',
        ]);
        Municipio::create([
            'nombre' =>  'Chocamán',
            'estado_id' => '30',
            'numero' =>  '062',
        ]);
        Municipio::create([
            'nombre' =>  'Chontla',
            'estado_id' => '30',
            'numero' =>  '063',
        ]);
        Municipio::create([
            'nombre' =>  'Chumatlán',
            'estado_id' => '30',
            'numero' =>  '064',
        ]);
        Municipio::create([
            'nombre' =>  'Emiliano Zapata',
            'estado_id' => '30',
            'numero' =>  '065',
        ]);
        Municipio::create([
            'nombre' =>  'Espinal',
            'estado_id' => '30',
            'numero' =>  '066',
        ]);
        Municipio::create([
            'nombre' =>  'Filomeno Mata',
            'estado_id' => '30',
            'numero' =>  '067',
        ]);
        Municipio::create([
            'nombre' =>  'Fortín',
            'estado_id' => '30',
            'numero' =>  '068',
        ]);
        Municipio::create([
            'nombre' =>  'Gutiérrez Zamora',
            'estado_id' => '30',
            'numero' =>  '069',
        ]);
        Municipio::create([
            'nombre' =>  'Hidalgotitlán',
            'estado_id' => '30',
            'numero' =>  '070',
        ]);
        Municipio::create([
            'nombre' =>  'Huatusco',
            'estado_id' => '30',
            'numero' =>  '071',
        ]);
        Municipio::create([
            'nombre' =>  'Huayacocotla',
            'estado_id' => '30',
            'numero' =>  '072',
        ]);
        Municipio::create([
            'nombre' =>  'Hueyapan de Ocampo',
            'estado_id' => '30',
            'numero' =>  '073',
        ]);
        Municipio::create([
            'nombre' =>  'Huiloapan de Cuauhtémoc',
            'estado_id' => '30',
            'numero' =>  '074',
        ]);
        Municipio::create([
            'nombre' =>  'Ignacio de la Llave',
            'estado_id' => '30',
            'numero' =>  '075',
        ]);
        Municipio::create([
            'nombre' =>  'Ilamatlán',
            'estado_id' => '30',
            'numero' =>  '076',
        ]);
        Municipio::create([
            'nombre' =>  'Isla',
            'estado_id' => '30',
            'numero' =>  '077',
        ]);
        Municipio::create([
            'nombre' =>  'Ixcatepec',
            'estado_id' => '30',
            'numero' =>  '078',
        ]);
        Municipio::create([
            'nombre' =>  'Ixhuacán de los Reyes',
            'estado_id' => '30',
            'numero' =>  '079',
        ]);
        Municipio::create([
            'nombre' =>  'Ixhuatlán del Café',
            'estado_id' => '30',
            'numero' =>  '080',
        ]);
        Municipio::create([
            'nombre' =>  'Ixhuatlancillo',
            'estado_id' => '30',
            'numero' =>  '081',
        ]);
        Municipio::create([
            'nombre' =>  'Ixhuatlán del Sureste',
            'estado_id' => '30',
            'numero' =>  '082',
        ]);
        Municipio::create([
            'nombre' =>  'Ixhuatlán de Madero',
            'estado_id' => '30',
            'numero' =>  '083',
        ]);
        Municipio::create([
            'nombre' =>  'Ixmatlahuacan',
            'estado_id' => '30',
            'numero' =>  '084',
        ]);
        Municipio::create([
            'nombre' =>  'Ixtaczoquitlán',
            'estado_id' => '30',
            'numero' =>  '085',
        ]);
        Municipio::create([
            'nombre' =>  'Jalacingo',
            'estado_id' => '30',
            'numero' =>  '086',
        ]);
        Municipio::create([
            'nombre' =>  'Xalapa',
            'estado_id' => '30',
            'numero' =>  '087',
        ]);
        Municipio::create([
            'nombre' =>  'Jalcomulco',
            'estado_id' => '30',
            'numero' =>  '088',
        ]);
        Municipio::create([
            'nombre' =>  'Jáltipan',
            'estado_id' => '30',
            'numero' =>  '089',
        ]);
        Municipio::create([
            'nombre' =>  'Jamapa',
            'estado_id' => '30',
            'numero' =>  '090',
        ]);
        Municipio::create([
            'nombre' =>  'Jesús Carranza',
            'estado_id' => '30',
            'numero' =>  '091',
        ]);
        Municipio::create([
            'nombre' =>  'Xico',
            'estado_id' => '30',
            'numero' =>  '092',
        ]);
        Municipio::create([
            'nombre' =>  'Jilotepec',
            'estado_id' => '30',
            'numero' =>  '093',
        ]);
        Municipio::create([
            'nombre' =>  'Juan Rodríguez Clara',
            'estado_id' => '30',
            'numero' =>  '094',
        ]);
        Municipio::create([
            'nombre' =>  'Juchique de Ferrer',
            'estado_id' => '30',
            'numero' =>  '095',
        ]);
        Municipio::create([
            'nombre' =>  'Landero y Coss',
            'estado_id' => '30',
            'numero' =>  '096',
        ]);
        Municipio::create([
            'nombre' =>  'Lerdo de Tejada',
            'estado_id' => '30',
            'numero' =>  '097',
        ]);
        Municipio::create([
            'nombre' =>  'Magdalena',
            'estado_id' => '30',
            'numero' =>  '098',
        ]);
        Municipio::create([
            'nombre' =>  'Maltrata',
            'estado_id' => '30',
            'numero' =>  '099',
        ]);
        Municipio::create([
            'nombre' =>  'Manlio Fabio Altamirano',
            'estado_id' => '30',
            'numero' =>  '100',
        ]);
        Municipio::create([
            'nombre' =>  'Mariano Escobedo',
            'estado_id' => '30',
            'numero' =>  '101',
        ]);
        Municipio::create([
            'nombre' =>  'Martínez de la Torre',
            'estado_id' => '30',
            'numero' =>  '102',
        ]);
        Municipio::create([
            'nombre' =>  'Mecatlán',
            'estado_id' => '30',
            'numero' =>  '103',
        ]);
        Municipio::create([
            'nombre' =>  'Mecayapan',
            'estado_id' => '30',
            'numero' =>  '104',
        ]);
        Municipio::create([
            'nombre' =>  'Medellín de Bravo',
            'estado_id' => '30',
            'numero' =>  '105',
        ]);
        Municipio::create([
            'nombre' =>  'Miahuatlán',
            'estado_id' => '30',
            'numero' =>  '106',
        ]);
        Municipio::create([
            'nombre' =>  'Las Minas',
            'estado_id' => '30',
            'numero' =>  '107',
        ]);
        Municipio::create([
            'nombre' =>  'Minatitlán',
            'estado_id' => '30',
            'numero' =>  '108',
        ]);
        Municipio::create([
            'nombre' =>  'Misantla',
            'estado_id' => '30',
            'numero' =>  '109',
        ]);
        Municipio::create([
            'nombre' =>  'Mixtla de Altamirano',
            'estado_id' => '30',
            'numero' =>  '110',
        ]);
        Municipio::create([
            'nombre' =>  'Moloacán',
            'estado_id' => '30',
            'numero' =>  '111',
        ]);
        Municipio::create([
            'nombre' =>  'Naolinco',
            'estado_id' => '30',
            'numero' =>  '112',
        ]);
        Municipio::create([
            'nombre' =>  'Naranjal',
            'estado_id' => '30',
            'numero' =>  '113',
        ]);
        Municipio::create([
            'nombre' =>  'Nautla',
            'estado_id' => '30',
            'numero' =>  '114',
        ]);
        Municipio::create([
            'nombre' =>  'Nogales',
            'estado_id' => '30',
            'numero' =>  '115',
        ]);
        Municipio::create([
            'nombre' =>  'Oluta',
            'estado_id' => '30',
            'numero' =>  '116',
        ]);
        Municipio::create([
            'nombre' =>  'Omealca',
            'estado_id' => '30',
            'numero' =>  '117',
        ]);
        Municipio::create([
            'nombre' =>  'Orizaba',
            'estado_id' => '30',
            'numero' =>  '118',
        ]);
        Municipio::create([
            'nombre' =>  'Otatitlán',
            'estado_id' => '30',
            'numero' =>  '119',
        ]);
        Municipio::create([
            'nombre' =>  'Oteapan',
            'estado_id' => '30',
            'numero' =>  '120',
        ]);
        Municipio::create([
            'nombre' =>  'Ozuluama de Mascareñas',
            'estado_id' => '30',
            'numero' =>  '121',
        ]);
        Municipio::create([
            'nombre' =>  'Pajapan',
            'estado_id' => '30',
            'numero' =>  '122',
        ]);
        Municipio::create([
            'nombre' =>  'Pánuco',
            'estado_id' => '30',
            'numero' =>  '123',
        ]);
        Municipio::create([
            'nombre' =>  'Papantla',
            'estado_id' => '30',
            'numero' =>  '124',
        ]);
        Municipio::create([
            'nombre' =>  'Paso del Macho',
            'estado_id' => '30',
            'numero' =>  '125',
        ]);
        Municipio::create([
            'nombre' =>  'Paso de Ovejas',
            'estado_id' => '30',
            'numero' =>  '126',
        ]);
        Municipio::create([
            'nombre' =>  'La Perla',
            'estado_id' => '30',
            'numero' =>  '127',
        ]);
        Municipio::create([
            'nombre' =>  'Perote',
            'estado_id' => '30',
            'numero' =>  '128',
        ]);
        Municipio::create([
            'nombre' =>  'Platón Sánchez',
            'estado_id' => '30',
            'numero' =>  '129',
        ]);
        Municipio::create([
            'nombre' =>  'Playa Vicente',
            'estado_id' => '30',
            'numero' =>  '130',
        ]);
        Municipio::create([
            'nombre' =>  'Poza Rica de Hidalgo',
            'estado_id' => '30',
            'numero' =>  '131',
        ]);
        Municipio::create([
            'nombre' =>  'Las Vigas de Ramírez',
            'estado_id' => '30',
            'numero' =>  '132',
        ]);
        Municipio::create([
            'nombre' =>  'Pueblo Viejo',
            'estado_id' => '30',
            'numero' =>  '133',
        ]);
        Municipio::create([
            'nombre' =>  'Puente Nacional',
            'estado_id' => '30',
            'numero' =>  '134',
        ]);
        Municipio::create([
            'nombre' =>  'Rafael Delgado',
            'estado_id' => '30',
            'numero' =>  '135',
        ]);
        Municipio::create([
            'nombre' =>  'Rafael Lucio',
            'estado_id' => '30',
            'numero' =>  '136',
        ]);
        Municipio::create([
            'nombre' =>  'Los Reyes',
            'estado_id' => '30',
            'numero' =>  '137',
        ]);
        Municipio::create([
            'nombre' =>  'Río Blanco',
            'estado_id' => '30',
            'numero' =>  '138',
        ]);
        Municipio::create([
            'nombre' =>  'Saltabarranca',
            'estado_id' => '30',
            'numero' =>  '139',
        ]);
        Municipio::create([
            'nombre' =>  'San Andrés Tenejapan',
            'estado_id' => '30',
            'numero' =>  '140',
        ]);
        Municipio::create([
            'nombre' =>  'San Andrés Tuxtla',
            'estado_id' => '30',
            'numero' =>  '141',
        ]);
        Municipio::create([
            'nombre' =>  'San Juan Evangelista',
            'estado_id' => '30',
            'numero' =>  '142',
        ]);
        Municipio::create([
            'nombre' =>  'Santiago Tuxtla',
            'estado_id' => '30',
            'numero' =>  '143',
        ]);
        Municipio::create([
            'nombre' =>  'Sayula de Alemán',
            'estado_id' => '30',
            'numero' =>  '144',
        ]);
        Municipio::create([
            'nombre' =>  'Soconusco',
            'estado_id' => '30',
            'numero' =>  '145',
        ]);
        Municipio::create([
            'nombre' =>  'Sochiapa',
            'estado_id' => '30',
            'numero' =>  '146',
        ]);
        Municipio::create([
            'nombre' =>  'Soledad Atzompa',
            'estado_id' => '30',
            'numero' =>  '147',
        ]);
        Municipio::create([
            'nombre' =>  'Soledad de Doblado',
            'estado_id' => '30',
            'numero' =>  '148',
        ]);
        Municipio::create([
            'nombre' =>  'Soteapan',
            'estado_id' => '30',
            'numero' =>  '149',
        ]);
        Municipio::create([
            'nombre' =>  'Tamalín',
            'estado_id' => '30',
            'numero' =>  '150',
        ]);
        Municipio::create([
            'nombre' =>  'Tamiahua',
            'estado_id' => '30',
            'numero' =>  '151',
        ]);
        Municipio::create([
            'nombre' =>  'Tampico Alto',
            'estado_id' => '30',
            'numero' =>  '152',
        ]);
        Municipio::create([
            'nombre' =>  'Tancoco',
            'estado_id' => '30',
            'numero' =>  '153',
        ]);
        Municipio::create([
            'nombre' =>  'Tantima',
            'estado_id' => '30',
            'numero' =>  '154',
        ]);
        Municipio::create([
            'nombre' =>  'Tantoyuca',
            'estado_id' => '30',
            'numero' =>  '155',
        ]);
        Municipio::create([
            'nombre' =>  'Tatatila',
            'estado_id' => '30',
            'numero' =>  '156',
        ]);
        Municipio::create([
            'nombre' =>  'Castillo de Teayo',
            'estado_id' => '30',
            'numero' =>  '157',
        ]);
        Municipio::create([
            'nombre' =>  'Tecolutla',
            'estado_id' => '30',
            'numero' =>  '158',
        ]);
        Municipio::create([
            'nombre' =>  'Tehuipango',
            'estado_id' => '30',
            'numero' =>  '159',
        ]);
        Municipio::create([
            'nombre' =>  'Álamo Temapache',
            'estado_id' => '30',
            'numero' =>  '160',
        ]);
        Municipio::create([
            'nombre' =>  'Tempoal',
            'estado_id' => '30',
            'numero' =>  '161',
        ]);
        Municipio::create([
            'nombre' =>  'Tenampa',
            'estado_id' => '30',
            'numero' =>  '162',
        ]);
        Municipio::create([
            'nombre' =>  'Tenochtitlán',
            'estado_id' => '30',
            'numero' =>  '163',
        ]);
        Municipio::create([
            'nombre' =>  'Teocelo',
            'estado_id' => '30',
            'numero' =>  '164',
        ]);
        Municipio::create([
            'nombre' =>  'Tepatlaxco',
            'estado_id' => '30',
            'numero' =>  '165',
        ]);
        Municipio::create([
            'nombre' =>  'Tepetlán',
            'estado_id' => '30',
            'numero' =>  '166',
        ]);
        Municipio::create([
            'nombre' =>  'Tepetzintla',
            'estado_id' => '30',
            'numero' =>  '167',
        ]);
        Municipio::create([
            'nombre' =>  'Tequila',
            'estado_id' => '30',
            'numero' =>  '168',
        ]);
        Municipio::create([
            'nombre' =>  'José Azueta',
            'estado_id' => '30',
            'numero' =>  '169',
        ]);
        Municipio::create([
            'nombre' =>  'Texcatepec',
            'estado_id' => '30',
            'numero' =>  '170',
        ]);
        Municipio::create([
            'nombre' =>  'Texhuacán',
            'estado_id' => '30',
            'numero' =>  '171',
        ]);
        Municipio::create([
            'nombre' =>  'Texistepec',
            'estado_id' => '30',
            'numero' =>  '172',
        ]);
        Municipio::create([
            'nombre' =>  'Tezonapa',
            'estado_id' => '30',
            'numero' =>  '173',
        ]);
        Municipio::create([
            'nombre' =>  'Tierra Blanca',
            'estado_id' => '30',
            'numero' =>  '174',
        ]);
        Municipio::create([
            'nombre' =>  'Tihuatlán',
            'estado_id' => '30',
            'numero' =>  '175',
        ]);
        Municipio::create([
            'nombre' =>  'Tlacojalpan',
            'estado_id' => '30',
            'numero' =>  '176',
        ]);
        Municipio::create([
            'nombre' =>  'Tlacolulan',
            'estado_id' => '30',
            'numero' =>  '177',
        ]);
        Municipio::create([
            'nombre' =>  'Tlacotalpan',
            'estado_id' => '30',
            'numero' =>  '178',
        ]);
        Municipio::create([
            'nombre' =>  'Tlacotepec de Mejía',
            'estado_id' => '30',
            'numero' =>  '179',
        ]);
        Municipio::create([
            'nombre' =>  'Tlachichilco',
            'estado_id' => '30',
            'numero' =>  '180',
        ]);
        Municipio::create([
            'nombre' =>  'Tlalixcoyan',
            'estado_id' => '30',
            'numero' =>  '181',
        ]);
        Municipio::create([
            'nombre' =>  'Tlalnelhuayocan',
            'estado_id' => '30',
            'numero' =>  '182',
        ]);
        Municipio::create([
            'nombre' =>  'Tlapacoyan',
            'estado_id' => '30',
            'numero' =>  '183',
        ]);
        Municipio::create([
            'nombre' =>  'Tlaquilpa',
            'estado_id' => '30',
            'numero' =>  '184',
        ]);
        Municipio::create([
            'nombre' =>  'Tlilapan',
            'estado_id' => '30',
            'numero' =>  '185',
        ]);
        Municipio::create([
            'nombre' =>  'Tomatlán',
            'estado_id' => '30',
            'numero' =>  '186',
        ]);
        Municipio::create([
            'nombre' =>  'Tonayán',
            'estado_id' => '30',
            'numero' =>  '187',
        ]);
        Municipio::create([
            'nombre' =>  'Totutla',
            'estado_id' => '30',
            'numero' =>  '188',
        ]);
        Municipio::create([
            'nombre' =>  'Tuxpan',
            'estado_id' => '30',
            'numero' =>  '189',
        ]);
        Municipio::create([
            'nombre' =>  'Tuxtilla',
            'estado_id' => '30',
            'numero' =>  '190',
        ]);
        Municipio::create([
            'nombre' =>  'Ursulo Galván',
            'estado_id' => '30',
            'numero' =>  '191',
        ]);
        Municipio::create([
            'nombre' =>  'Vega de Alatorre',
            'estado_id' => '30',
            'numero' =>  '192',
        ]);
        Municipio::create([
            'nombre' =>  'Veracruz',
            'estado_id' => '30',
            'numero' =>  '193',
        ]);
        Municipio::create([
            'nombre' =>  'Villa Aldama',
            'estado_id' => '30',
            'numero' =>  '194',
        ]);
        Municipio::create([
            'nombre' =>  'Xoxocotla',
            'estado_id' => '30',
            'numero' =>  '195',
        ]);
        Municipio::create([
            'nombre' =>  'Yanga',
            'estado_id' => '30',
            'numero' =>  '196',
        ]);
        Municipio::create([
            'nombre' =>  'Yecuatla',
            'estado_id' => '30',
            'numero' =>  '197',
        ]);
        Municipio::create([
            'nombre' =>  'Zacualpan',
            'estado_id' => '30',
            'numero' =>  '198',
        ]);
        Municipio::create([
            'nombre' =>  'Zaragoza',
            'estado_id' => '30',
            'numero' =>  '199',
        ]);
        Municipio::create([
            'nombre' =>  'Zentla',
            'estado_id' => '30',
            'numero' =>  '200',
        ]);
        Municipio::create([
            'nombre' =>  'Zongolica',
            'estado_id' => '30',
            'numero' =>  '201',
        ]);
        Municipio::create([
            'nombre' =>  'Zontecomatlán de López y Fuentes',
            'estado_id' => '30',
            'numero' =>  '202',
        ]);
        Municipio::create([
            'nombre' =>  'Zozocolco de Hidalgo',
            'estado_id' => '30',
            'numero' =>  '203',
        ]);
        Municipio::create([
            'nombre' =>  'Agua Dulce',
            'estado_id' => '30',
            'numero' =>  '204',
        ]);
        Municipio::create([
            'nombre' =>  'El Higo',
            'estado_id' => '30',
            'numero' =>  '205',
        ]);
        Municipio::create([
            'nombre' =>  'Nanchital de Lázaro Cárdenas del Río',
            'estado_id' => '30',
            'numero' =>  '206',
        ]);
        Municipio::create([
            'nombre' =>  'Tres Valles',
            'estado_id' => '30',
            'numero' =>  '207',
        ]);
        Municipio::create([
            'nombre' =>  'Carlos A. Carrillo',
            'estado_id' => '30',
            'numero' =>  '208',
        ]);
        Municipio::create([
            'nombre' =>  'Tatahuicapan de Juárez',
            'estado_id' => '30',
            'numero' =>  '209',
        ]);
        Municipio::create([
            'nombre' =>  'Uxpanapa',
            'estado_id' => '30',
            'numero' =>  '210',
        ]);
        Municipio::create([
            'nombre' =>  'San Rafael',
            'estado_id' => '30',
            'numero' =>  '211',
        ]);
        Municipio::create([
            'nombre' =>  'Santiago Sochiapan',
            'estado_id' => '30',
            'numero' =>  '212',
        ]);
        Municipio::create([
            'nombre' =>  'Abalá',
            'estado_id' => '31',
            'numero' =>  '001',
        ]);
        Municipio::create([
            'nombre' =>  'Acanceh',
            'estado_id' => '31',
            'numero' =>  '002',
        ]);
        Municipio::create([
            'nombre' =>  'Akil',
            'estado_id' => '31',
            'numero' =>  '003',
        ]);
        Municipio::create([
            'nombre' =>  'Baca',
            'estado_id' => '31',
            'numero' =>  '004',
        ]);
        Municipio::create([
            'nombre' =>  'Bokobá',
            'estado_id' => '31',
            'numero' =>  '005',
        ]);
        Municipio::create([
            'nombre' =>  'Buctzotz',
            'estado_id' => '31',
            'numero' =>  '006',
        ]);
        Municipio::create([
            'nombre' =>  'Cacalchén',
            'estado_id' => '31',
            'numero' =>  '007',
        ]);
        Municipio::create([
            'nombre' =>  'Calotmul',
            'estado_id' => '31',
            'numero' =>  '008',
        ]);
        Municipio::create([
            'nombre' =>  'Cansahcab',
            'estado_id' => '31',
            'numero' =>  '009',
        ]);
        Municipio::create([
            'nombre' =>  'Cantamayec',
            'estado_id' => '31',
            'numero' =>  '010',
        ]);
        Municipio::create([
            'nombre' =>  'Celestún',
            'estado_id' => '31',
            'numero' =>  '011',
        ]);
        Municipio::create([
            'nombre' =>  'Cenotillo',
            'estado_id' => '31',
            'numero' =>  '012',
        ]);
        Municipio::create([
            'nombre' =>  'Conkal',
            'estado_id' => '31',
            'numero' =>  '013',
        ]);
        Municipio::create([
            'nombre' =>  'Cuncunul',
            'estado_id' => '31',
            'numero' =>  '014',
        ]);
        Municipio::create([
            'nombre' =>  'Cuzamá',
            'estado_id' => '31',
            'numero' =>  '015',
        ]);
        Municipio::create([
            'nombre' =>  'Chacsinkín',
            'estado_id' => '31',
            'numero' =>  '016',
        ]);
        Municipio::create([
            'nombre' =>  'Chankom',
            'estado_id' => '31',
            'numero' =>  '017',
        ]);
        Municipio::create([
            'nombre' =>  'Chapab',
            'estado_id' => '31',
            'numero' =>  '018',
        ]);
        Municipio::create([
            'nombre' =>  'Chemax',
            'estado_id' => '31',
            'numero' =>  '019',
        ]);
        Municipio::create([
            'nombre' =>  'Chicxulub Pueblo',
            'estado_id' => '31',
            'numero' =>  '020',
        ]);
        Municipio::create([
            'nombre' =>  'Chichimilá',
            'estado_id' => '31',
            'numero' =>  '021',
        ]);
        Municipio::create([
            'nombre' =>  'Chikindzonot',
            'estado_id' => '31',
            'numero' =>  '022',
        ]);
        Municipio::create([
            'nombre' =>  'Chocholá',
            'estado_id' => '31',
            'numero' =>  '023',
        ]);
        Municipio::create([
            'nombre' =>  'Chumayel',
            'estado_id' => '31',
            'numero' =>  '024',
        ]);
        Municipio::create([
            'nombre' =>  'Dzán',
            'estado_id' => '31',
            'numero' =>  '025',
        ]);
        Municipio::create([
            'nombre' =>  'Dzemul',
            'estado_id' => '31',
            'numero' =>  '026',
        ]);
        Municipio::create([
            'nombre' =>  'Dzidzantún',
            'estado_id' => '31',
            'numero' =>  '027',
        ]);
        Municipio::create([
            'nombre' =>  'Dzilam de Bravo',
            'estado_id' => '31',
            'numero' =>  '028',
        ]);
        Municipio::create([
            'nombre' =>  'Dzilam González',
            'estado_id' => '31',
            'numero' =>  '029',
        ]);
        Municipio::create([
            'nombre' =>  'Dzitás',
            'estado_id' => '31',
            'numero' =>  '030',
        ]);
        Municipio::create([
            'nombre' =>  'Dzoncauich',
            'estado_id' => '31',
            'numero' =>  '031',
        ]);
        Municipio::create([
            'nombre' =>  'Espita',
            'estado_id' => '31',
            'numero' =>  '032',
        ]);
        Municipio::create([
            'nombre' =>  'Halachó',
            'estado_id' => '31',
            'numero' =>  '033',
        ]);
        Municipio::create([
            'nombre' =>  'Hocabá',
            'estado_id' => '31',
            'numero' =>  '034',
        ]);
        Municipio::create([
            'nombre' =>  'Hoctún',
            'estado_id' => '31',
            'numero' =>  '035',
        ]);
        Municipio::create([
            'nombre' =>  'Homún',
            'estado_id' => '31',
            'numero' =>  '036',
        ]);
        Municipio::create([
            'nombre' =>  'Huhí',
            'estado_id' => '31',
            'numero' =>  '037',
        ]);
        Municipio::create([
            'nombre' =>  'Hunucmá',
            'estado_id' => '31',
            'numero' =>  '038',
        ]);
        Municipio::create([
            'nombre' =>  'Ixil',
            'estado_id' => '31',
            'numero' =>  '039',
        ]);
        Municipio::create([
            'nombre' =>  'Izamal',
            'estado_id' => '31',
            'numero' =>  '040',
        ]);
        Municipio::create([
            'nombre' =>  'Kanasín',
            'estado_id' => '31',
            'numero' =>  '041',
        ]);
        Municipio::create([
            'nombre' =>  'Kantunil',
            'estado_id' => '31',
            'numero' =>  '042',
        ]);
        Municipio::create([
            'nombre' =>  'Kaua',
            'estado_id' => '31',
            'numero' =>  '043',
        ]);
        Municipio::create([
            'nombre' =>  'Kinchil',
            'estado_id' => '31',
            'numero' =>  '044',
        ]);
        Municipio::create([
            'nombre' =>  'Kopomá',
            'estado_id' => '31',
            'numero' =>  '045',
        ]);
        Municipio::create([
            'nombre' =>  'Mama',
            'estado_id' => '31',
            'numero' =>  '046',
        ]);
        Municipio::create([
            'nombre' =>  'Maní',
            'estado_id' => '31',
            'numero' =>  '047',
        ]);
        Municipio::create([
            'nombre' =>  'Maxcanú',
            'estado_id' => '31',
            'numero' =>  '048',
        ]);
        Municipio::create([
            'nombre' =>  'Mayapán',
            'estado_id' => '31',
            'numero' =>  '049',
        ]);
        Municipio::create([
            'nombre' =>  'Mérida',
            'estado_id' => '31',
            'numero' =>  '050',
        ]);
        Municipio::create([
            'nombre' =>  'Mocochá',
            'estado_id' => '31',
            'numero' =>  '051',
        ]);
        Municipio::create([
            'nombre' =>  'Motul',
            'estado_id' => '31',
            'numero' =>  '052',
        ]);
        Municipio::create([
            'nombre' =>  'Muna',
            'estado_id' => '31',
            'numero' =>  '053',
        ]);
        Municipio::create([
            'nombre' =>  'Muxupip',
            'estado_id' => '31',
            'numero' =>  '054',
        ]);
        Municipio::create([
            'nombre' =>  'Opichén',
            'estado_id' => '31',
            'numero' =>  '055',
        ]);
        Municipio::create([
            'nombre' =>  'Oxkutzcab',
            'estado_id' => '31',
            'numero' =>  '056',
        ]);
        Municipio::create([
            'nombre' =>  'Panabá',
            'estado_id' => '31',
            'numero' =>  '057',
        ]);
        Municipio::create([
            'nombre' =>  'Peto',
            'estado_id' => '31',
            'numero' =>  '058',
        ]);
        Municipio::create([
            'nombre' =>  'Progreso',
            'estado_id' => '31',
            'numero' =>  '059',
        ]);
        Municipio::create([
            'nombre' =>  'Quintana Roo',
            'estado_id' => '31',
            'numero' =>  '060',
        ]);
        Municipio::create([
            'nombre' =>  'Río Lagartos',
            'estado_id' => '31',
            'numero' =>  '061',
        ]);
        Municipio::create([
            'nombre' =>  'Sacalum',
            'estado_id' => '31',
            'numero' =>  '062',
        ]);
        Municipio::create([
            'nombre' =>  'Samahil',
            'estado_id' => '31',
            'numero' =>  '063',
        ]);
        Municipio::create([
            'nombre' =>  'Sanahcat',
            'estado_id' => '31',
            'numero' =>  '064',
        ]);
        Municipio::create([
            'nombre' =>  'San Felipe',
            'estado_id' => '31',
            'numero' =>  '065',
        ]);
        Municipio::create([
            'nombre' =>  'Santa Elena',
            'estado_id' => '31',
            'numero' =>  '066',
        ]);
        Municipio::create([
            'nombre' =>  'Seyé',
            'estado_id' => '31',
            'numero' =>  '067',
        ]);
        Municipio::create([
            'nombre' =>  'Sinanché',
            'estado_id' => '31',
            'numero' =>  '068',
        ]);
        Municipio::create([
            'nombre' =>  'Sotuta',
            'estado_id' => '31',
            'numero' =>  '069',
        ]);
        Municipio::create([
            'nombre' =>  'Sucilá',
            'estado_id' => '31',
            'numero' =>  '070',
        ]);
        Municipio::create([
            'nombre' =>  'Sudzal',
            'estado_id' => '31',
            'numero' =>  '071',
        ]);
        Municipio::create([
            'nombre' =>  'Suma',
            'estado_id' => '31',
            'numero' =>  '072',
        ]);
        Municipio::create([
            'nombre' =>  'Tahdziú',
            'estado_id' => '31',
            'numero' =>  '073',
        ]);
        Municipio::create([
            'nombre' =>  'Tahmek',
            'estado_id' => '31',
            'numero' =>  '074',
        ]);
        Municipio::create([
            'nombre' =>  'Teabo',
            'estado_id' => '31',
            'numero' =>  '075',
        ]);
        Municipio::create([
            'nombre' =>  'Tecoh',
            'estado_id' => '31',
            'numero' =>  '076',
        ]);
        Municipio::create([
            'nombre' =>  'Tekal de Venegas',
            'estado_id' => '31',
            'numero' =>  '077',
        ]);
        Municipio::create([
            'nombre' =>  'Tekantó',
            'estado_id' => '31',
            'numero' =>  '078',
        ]);
        Municipio::create([
            'nombre' =>  'Tekax',
            'estado_id' => '31',
            'numero' =>  '079',
        ]);
        Municipio::create([
            'nombre' =>  'Tekit',
            'estado_id' => '31',
            'numero' =>  '080',
        ]);
        Municipio::create([
            'nombre' =>  'Tekom',
            'estado_id' => '31',
            'numero' =>  '081',
        ]);
        Municipio::create([
            'nombre' =>  'Telchac Pueblo',
            'estado_id' => '31',
            'numero' =>  '082',
        ]);
        Municipio::create([
            'nombre' =>  'Telchac Puerto',
            'estado_id' => '31',
            'numero' =>  '083',
        ]);
        Municipio::create([
            'nombre' =>  'Temax',
            'estado_id' => '31',
            'numero' =>  '084',
        ]);
        Municipio::create([
            'nombre' =>  'Temozón',
            'estado_id' => '31',
            'numero' =>  '085',
        ]);
        Municipio::create([
            'nombre' =>  'Tepakán',
            'estado_id' => '31',
            'numero' =>  '086',
        ]);
        Municipio::create([
            'nombre' =>  'Tetiz',
            'estado_id' => '31',
            'numero' =>  '087',
        ]);
        Municipio::create([
            'nombre' =>  'Teya',
            'estado_id' => '31',
            'numero' =>  '088',
        ]);
        Municipio::create([
            'nombre' =>  'Ticul',
            'estado_id' => '31',
            'numero' =>  '089',
        ]);
        Municipio::create([
            'nombre' =>  'Timucuy',
            'estado_id' => '31',
            'numero' =>  '090',
        ]);
        Municipio::create([
            'nombre' =>  'Tinum',
            'estado_id' => '31',
            'numero' =>  '091',
        ]);
        Municipio::create([
            'nombre' =>  'Tixcacalcupul',
            'estado_id' => '31',
            'numero' =>  '092',
        ]);
        Municipio::create([
            'nombre' =>  'Tixkokob',
            'estado_id' => '31',
            'numero' =>  '093',
        ]);
        Municipio::create([
            'nombre' =>  'Tixmehuac',
            'estado_id' => '31',
            'numero' =>  '094',
        ]);
        Municipio::create([
            'nombre' =>  'Tixpéhual',
            'estado_id' => '31',
            'numero' =>  '095',
        ]);
        Municipio::create([
            'nombre' =>  'Tizimín',
            'estado_id' => '31',
            'numero' =>  '096',
        ]);
        Municipio::create([
            'nombre' =>  'Tunkás',
            'estado_id' => '31',
            'numero' =>  '097',
        ]);
        Municipio::create([
            'nombre' =>  'Tzucacab',
            'estado_id' => '31',
            'numero' =>  '098',
        ]);
        Municipio::create([
            'nombre' =>  'Uayma',
            'estado_id' => '31',
            'numero' =>  '099',
        ]);
        Municipio::create([
            'nombre' =>  'Ucú',
            'estado_id' => '31',
            'numero' =>  '100',
        ]);
        Municipio::create([
            'nombre' =>  'Umán',
            'estado_id' => '31',
            'numero' =>  '101',
        ]);
        Municipio::create([
            'nombre' =>  'Valladolid',
            'estado_id' => '31',
            'numero' =>  '102',
        ]);
        Municipio::create([
            'nombre' =>  'Xocchel',
            'estado_id' => '31',
            'numero' =>  '103',
        ]);
        Municipio::create([
            'nombre' =>  'Yaxcabá',
            'estado_id' => '31',
            'numero' =>  '104',
        ]);
        Municipio::create([
            'nombre' =>  'Yaxkukul',
            'estado_id' => '31',
            'numero' =>  '105',
        ]);
        Municipio::create([
            'nombre' =>  'Yobaín',
            'estado_id' => '31',
            'numero' =>  '106',
        ]);*/
        Municipio::create([
            'nombre' =>  'Apozol',
            'estado_id' => '32',
            'numero' =>  '001',
        ]);
        Municipio::create([
            'nombre' =>  'Apulco',
            'estado_id' => '32',
            'numero' =>  '002',
        ]);
        Municipio::create([
            'nombre' =>  'Atolinga',
            'estado_id' => '32',
            'numero' =>  '003',
        ]);
        Municipio::create([
            'nombre' =>  'Benito Juárez',
            'estado_id' => '32',
            'numero' =>  '004',
        ]);
        Municipio::create([
            'nombre' =>  'Calera',
            'estado_id' => '32',
            'numero' =>  '005',
        ]);
        Municipio::create([
            'nombre' =>  'Cañitas de Felipe Pescador',
            'estado_id' => '32',
            'numero' =>  '006',
        ]);
        Municipio::create([
            'nombre' =>  'Concepción del Oro',
            'estado_id' => '32',
            'numero' =>  '007',
        ]);
        Municipio::create([
            'nombre' =>  'Cuauhtémoc',
            'estado_id' => '32',
            'numero' =>  '008',
        ]);
        Municipio::create([
            'nombre' =>  'Chalchihuites',
            'estado_id' => '32',
            'numero' =>  '009',
        ]);
        Municipio::create([
            'nombre' =>  'Fresnillo',
            'estado_id' => '32',
            'numero' =>  '010',
        ]);
        Municipio::create([
            'nombre' =>  'Trinidad García de la Cadena',
            'estado_id' => '32',
            'numero' =>  '011',
        ]);
        Municipio::create([
            'nombre' =>  'Genaro Codina',
            'estado_id' => '32',
            'numero' =>  '012',
        ]);
        Municipio::create([
            'nombre' =>  'General Enrique Estrada',
            'estado_id' => '32',
            'numero' =>  '013',
        ]);
        Municipio::create([
            'nombre' =>  'General Francisco R. Murguía',
            'estado_id' => '32',
            'numero' =>  '014',
        ]);
        Municipio::create([
            'nombre' =>  'El Plateado de Joaquín Amaro',
            'estado_id' => '32',
            'numero' =>  '015',
        ]);
        Municipio::create([
            'nombre' =>  'General Pánfilo Natera',
            'estado_id' => '32',
            'numero' =>  '016',
        ]);
        Municipio::create([
            'nombre' =>  'Guadalupe',
            'estado_id' => '32',
            'numero' =>  '017',
        ]);
        Municipio::create([
            'nombre' =>  'Huanusco',
            'estado_id' => '32',
            'numero' =>  '018',
        ]);
        Municipio::create([
            'nombre' =>  'Jalpa',
            'estado_id' => '32',
            'numero' =>  '019',
        ]);
        Municipio::create([
            'nombre' =>  'Jerez',
            'estado_id' => '32',
            'numero' =>  '020',
        ]);
        Municipio::create([
            'nombre' =>  'Jiménez del Teul',
            'estado_id' => '32',
            'numero' =>  '021',
        ]);
        Municipio::create([
            'nombre' =>  'Juan Aldama',
            'estado_id' => '32',
            'numero' =>  '022',
        ]);
        Municipio::create([
            'nombre' =>  'Juchipila',
            'estado_id' => '32',
            'numero' =>  '023',
        ]);
        Municipio::create([
            'nombre' =>  'Loreto',
            'estado_id' => '32',
            'numero' =>  '024',
        ]);
        Municipio::create([
            'nombre' =>  'Luis Moya',
            'estado_id' => '32',
            'numero' =>  '025',
        ]);
        Municipio::create([
            'nombre' =>  'Mazapil',
            'estado_id' => '32',
            'numero' =>  '026',
        ]);
        Municipio::create([
            'nombre' =>  'Melchor Ocampo',
            'estado_id' => '32',
            'numero' =>  '027',
        ]);
        Municipio::create([
            'nombre' =>  'Mezquital del Oro',
            'estado_id' => '32',
            'numero' =>  '028',
        ]);
        Municipio::create([
            'nombre' =>  'Miguel Auza',
            'estado_id' => '32',
            'numero' =>  '029',
        ]);
        Municipio::create([
            'nombre' =>  'Momax',
            'estado_id' => '32',
            'numero' =>  '030',
        ]);
        Municipio::create([
            'nombre' =>  'Monte Escobedo',
            'estado_id' => '32',
            'numero' =>  '031',
        ]);
        Municipio::create([
            'nombre' =>  'Morelos',
            'estado_id' => '32',
            'numero' =>  '032',
        ]);
        Municipio::create([
            'nombre' =>  'Moyahua de Estrada',
            'estado_id' => '32',
            'numero' =>  '033',
        ]);
        Municipio::create([
            'nombre' =>  'Nochistlán de Mejía',
            'estado_id' => '32',
            'numero' =>  '034',
        ]);
        Municipio::create([
            'nombre' =>  'Noria de Ángeles',
            'estado_id' => '32',
            'numero' =>  '035',
        ]);
        Municipio::create([
            'nombre' =>  'Ojocaliente',
            'estado_id' => '32',
            'numero' =>  '036',
        ]);
        Municipio::create([
            'nombre' =>  'Pánuco',
            'estado_id' => '32',
            'numero' =>  '037',
        ]);
        Municipio::create([
            'nombre' =>  'Pinos',
            'estado_id' => '32',
            'numero' =>  '038',
        ]);
        Municipio::create([
            'nombre' =>  'Río Grande',
            'estado_id' => '32',
            'numero' =>  '039',
        ]);
        Municipio::create([
            'nombre' =>  'Sain Alto',
            'estado_id' => '32',
            'numero' =>  '040',
        ]);
        Municipio::create([
            'nombre' =>  'El Salvador',
            'estado_id' => '32',
            'numero' =>  '041',
        ]);
        Municipio::create([
            'nombre' =>  'Sombrerete',
            'estado_id' => '32',
            'numero' =>  '042',
        ]);
        Municipio::create([
            'nombre' =>  'Susticacán',
            'estado_id' => '32',
            'numero' =>  '043',
        ]);
        Municipio::create([
            'nombre' =>  'Tabasco',
            'estado_id' => '32',
            'numero' =>  '044',
        ]);
        Municipio::create([
            'nombre' =>  'Tepechitlán',
            'estado_id' => '32',
            'numero' =>  '045',
        ]);
        Municipio::create([
            'nombre' =>  'Tepetongo',
            'estado_id' => '32',
            'numero' =>  '046',
        ]);
        Municipio::create([
            'nombre' =>  'Teúl de González Ortega',
            'estado_id' => '32',
            'numero' =>  '047',
        ]);
        Municipio::create([
            'nombre' =>  'Tlaltenango de Sánchez Román',
            'estado_id' => '32',
            'numero' =>  '048',
        ]);
        Municipio::create([
            'nombre' =>  'Valparaíso',
            'estado_id' => '32',
            'numero' =>  '049',
        ]);
        Municipio::create([
            'nombre' =>  'Vetagrande',
            'estado_id' => '32',
            'numero' =>  '050',
        ]);
        Municipio::create([
            'nombre' =>  'Villa de Cos',
            'estado_id' => '32',
            'numero' =>  '051',
        ]);
        Municipio::create([
            'nombre' =>  'Villa García',
            'estado_id' => '32',
            'numero' =>  '052',
        ]);
        Municipio::create([
            'nombre' =>  'Villa González Ortega',
            'estado_id' => '32',
            'numero' =>  '053',
        ]);
        Municipio::create([
            'nombre' =>  'Villa Hidalgo',
            'estado_id' => '32',
            'numero' =>  '054',
        ]);
        Municipio::create([
            'nombre' =>  'Villanueva',
            'estado_id' => '32',
            'numero' =>  '055',
        ]);
        Municipio::create([
            'nombre' =>  'Zacatecas',
            'estado_id' => '32',
            'numero' =>  '056',
        ]);
        Municipio::create([
            'nombre' =>  'Trancoso',
            'estado_id' => '32',
            'numero' =>  '057',
        ]);
        Municipio::create([
            'nombre' =>  'Santa María de la Paz',
            'estado_id' => '32',
            'numero' =>  '058',
        ]);

    }
}
