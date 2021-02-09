<?php

use Illuminate\Database\Seeder;
use App\Admin\Estado;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciamos la tabla
    	Estado::truncate();

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Aguascalientes';
        $estado->variable = 'Ags';
        $estado->renapo = 'AS';
        $estado->clave_curp = 'AG';
        $estado->tres_digitos = 'AGU';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Baja California';
        $estado->variable = 'B.C';
        $estado->renapo = 'BC';
        $estado->clave_curp = 'BC';
        $estado->tres_digitos = 'BCN';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado


        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Baja California Sur';
        $estado->variable = 'B.C.S.';
        $estado->renapo = 'BS';
        $estado->clave_curp = 'BS';
        $estado->tres_digitos = 'BCS';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Campeche';
        $estado->variable = 'Camp.';
        $estado->renapo = 'CC';
        $estado->clave_curp = 'CM';
        $estado->tres_digitos = 'CAM';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Coahuila';
        $estado->variable = 'Coah.';
        $estado->renapo = 'CL';
        $estado->clave_curp = 'CO';
        $estado->tres_digitos = 'COA';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Colima';
        $estado->variable = 'Col.';
        $estado->renapo = 'CM';
        $estado->clave_curp = 'CL';
        $estado->tres_digitos = 'COL';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Chiapas';
        $estado->variable = 'Chis.';
        $estado->renapo = 'CS';
        $estado->clave_curp = 'CS';
        $estado->tres_digitos = 'CHP';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado


        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Chihuahua';
        $estado->variable = 'Chih.';
        $estado->renapo = 'CH';
        $estado->clave_curp = 'CH';
        $estado->tres_digitos = 'CHH';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado


        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Ciudad de México';
        $estado->variable = 'C.D.M.x';
        $estado->renapo = 'DF';
        $estado->clave_curp = 'CXB​';
        $estado->tres_digitos = 'CMXC​';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado


        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Durango';
        $estado->variable = 'Dgo.';
        $estado->renapo = 'DG';
        $estado->clave_curp = 'DG';
        $estado->tres_digitos = 'DUR';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Guanajuato';
        $estado->variable = 'Gto.';
        $estado->renapo = 'GT';
        $estado->clave_curp = 'GT';
        $estado->tres_digitos = 'GUA';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Guerrero';
        $estado->variable = 'Gro.';
        $estado->renapo = 'GR';
        $estado->clave_curp = 'GR';
        $estado->tres_digitos = 'GRO';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Hidalgo';
        $estado->variable = 'Hgo.';
        $estado->renapo = 'HG';
        $estado->clave_curp = 'HG';
        $estado->tres_digitos = 'HID';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Jalisco';
        $estado->variable = 'Jal.';
        $estado->renapo = 'JC';
        $estado->clave_curp = 'JC';
        $estado->tres_digitos = 'JAL';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado



        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'México';
        $estado->variable = 'Edo. Méx.D​';
        $estado->renapo = 'MC';
        $estado->clave_curp = 'EME​';
        $estado->tres_digitos = 'MEX';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Michoacán';
        $estado->variable = 'Mich.';
        $estado->renapo = 'MN';
        $estado->clave_curp = 'MI';
        $estado->tres_digitos = 'MIC';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Morelos';
        $estado->variable = 'Mor.';
        $estado->renapo = 'MS';
        $estado->clave_curp = 'MO';
        $estado->tres_digitos = 'MOR';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado



        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Nayarit';
        $estado->variable = 'Nay.';
        $estado->renapo = 'NT';
        $estado->clave_curp = 'NA';
        $estado->tres_digitos = 'NAY';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Nuevo León';
        $estado->variable = 'N.L.';
        $estado->renapo = 'NL';
        $estado->clave_curp = 'NL';
        $estado->tres_digitos = 'NLE';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Oaxaca';
        $estado->variable = 'Oax.';
        $estado->renapo = 'OC';
        $estado->clave_curp = 'OA';
        $estado->tres_digitos = 'OAX';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Puebla';
        $estado->variable = 'Pue.';
        $estado->renapo = 'PL';
        $estado->clave_curp = 'PU';
        $estado->tres_digitos = 'PUE';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado


        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Querétaro';
        $estado->variable = 'Qro.';
        $estado->renapo = 'QO';
        $estado->clave_curp = 'QT';
        $estado->tres_digitos = 'QUE';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Quintana Roo';
        $estado->variable = 'Q. Roo.F​';
        $estado->renapo = 'QR';
        $estado->clave_curp = 'QR';
        $estado->tres_digitos = 'ROO';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado


        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'San Luis Potosí';
        $estado->variable = 'S.L.P.';
        $estado->renapo = 'SP';
        $estado->clave_curp = 'SL';
        $estado->tres_digitos = 'SLP';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Sinaloa';
        $estado->variable = 'Sin.';
        $estado->renapo = 'SL';
        $estado->clave_curp = 'SI';
        $estado->tres_digitos = 'SIN';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Sonora';
        $estado->variable = 'Son.';
        $estado->renapo = 'SR';
        $estado->clave_curp = 'SO';
        $estado->tres_digitos = 'SON';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Tabasco';
        $estado->variable = 'Tab.';
        $estado->renapo = 'TC';
        $estado->clave_curp = 'TB';
        $estado->tres_digitos = 'TAB';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Tamaulipas';
        $estado->variable = 'Tamps.';
        $estado->renapo = 'TS';
        $estado->clave_curp = 'TM';
        $estado->tres_digitos = 'TAM';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Tlaxcala';
        $estado->variable = 'Tlax.';
        $estado->renapo = 'TL';
        $estado->clave_curp = 'TL';
        $estado->tres_digitos = 'TLA';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado

        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Veracruz';
        $estado->variable = 'Ver.';
        $estado->renapo = 'VZ';
        $estado->clave_curp = 'VE';
        $estado->tres_digitos = 'VER';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado




        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Yucacatan';
        $estado->variable = 'YN';
        $estado->renapo = 'YN';
        $estado->clave_curp = 'YU';
        $estado->tres_digitos = 'YUC';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado




        $estado = new App\Admin\Estado; //Creamos estado
        $estado->nombre = 'Zacatecas';
        $estado->variable = 'Zac';
        $estado->renapo = 'ZS';
        $estado->clave_curp = 'ZA';
        $estado->tres_digitos = 'ZAC';
        $estado->pais_id = '117';
        $estado->save();//Guardamos estado
    }
}
