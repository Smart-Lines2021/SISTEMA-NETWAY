<?php

use App\Admin\TipoVehiculo;
use Illuminate\Database\Seeder;

class TipoVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoVehiculo::truncate();
        $tipo_vehiculo = new TipoVehiculo(); //Creamos Tipo de Vehiculo
        $tipo_vehiculo->nombre = 'Autómovil';
        $tipo_vehiculo->save();//Guardamos Tipo de Vehiculos

        $tipo_vehiculo = new TipoVehiculo(); //Creamos Tipo de Vehiculo
        $tipo_vehiculo->nombre = 'Campero';
        $tipo_vehiculo->save();//Guardamos Tipo de Vehiculos


        $tipo_vehiculo = new TipoVehiculo(); //Creamos Tipo de Vehiculo
        $tipo_vehiculo->nombre = 'Pick-Up';
        $tipo_vehiculo->save();//Guardamos Tipo de Vehiculos

    }
}
