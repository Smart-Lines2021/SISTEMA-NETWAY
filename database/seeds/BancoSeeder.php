<?php

use App\Admin\Banco;
use Illuminate\Database\Seeder;

class BancoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banco::truncate();
        $banco = new Banco();//Creamos banco
        $banco->nombre = "Banamex";
        $banco->save();//Guardamos banco

        $banco = new Banco();//Creamos banco
        $banco->nombre = "Bancomer";
        $banco->save();//Guardamos banco


        $banco = new Banco();//Creamos banco
        $banco->nombre = "Banorte";
        $banco->save();//Guardamos banco
    }
}
