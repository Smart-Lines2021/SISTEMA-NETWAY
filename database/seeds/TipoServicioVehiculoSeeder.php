<?php

use Illuminate\Database\Seeder;

class TipoServicioVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoServicioVehiculo::truncate();
        $tipo__servicio_vehiculo = new TipoServicioVehiculo(); //Creamos Tipo de servicio Vehiculo
        $tipo__servicio_vehiculo->nombre = 'Cambio de aceite y filtro ';
        $tipo__servicio_vehiculo->save();//Guardamos Tipo de servicio Vehiculos


        TipoServicioVehiculo::truncate();
        $tipo__servicio_vehiculo = new TipoServicioVehiculo(); //Creamos Tipo de servicio Vehiculo
        $tipo__servicio_vehiculo->nombre = 'Limpieza del filtro de aire, de gasolina y las bujías';
        $tipo__servicio_vehiculo->save();//Guardamos Tipo de servicio Vehiculos


        TipoServicioVehiculo::truncate();
        $tipo__servicio_vehiculo = new TipoServicioVehiculo(); //Creamos Tipo de servicio Vehiculo
        $tipo__servicio_vehiculo->nombre = 'Revisión de luces';
        $tipo__servicio_vehiculo->save();//Guardamos Tipo de servicio Vehiculos


        TipoServicioVehiculo::truncate();
        $tipo__servicio_vehiculo = new TipoServicioVehiculo(); //Creamos Tipo de servicio Vehiculo
        $tipo__servicio_vehiculo->nombre = 'Ajuste del tiempo de encendido';
        $tipo__servicio_vehiculo->save();//Guardamos Tipo de servicio Vehiculos

        TipoServicioVehiculo::truncate();
        $tipo__servicio_vehiculo = new TipoServicioVehiculo(); //Creamos Tipo de servicio Vehiculo
        $tipo__servicio_vehiculo->nombre = 'Revisión de clutch';
        $tipo__servicio_vehiculo->save();//Guardamos Tipo de servicio Vehiculos
        
        TipoServicioVehiculo::truncate();
        $tipo__servicio_vehiculo = new TipoServicioVehiculo(); //Creamos Tipo de servicio Vehiculo
        $tipo__servicio_vehiculo->nombre = 'Borner';
        $tipo__servicio_vehiculo->save();//Guardamos Tipo de servicio Vehiculos

        TipoServicioVehiculo::truncate();
        $tipo__servicio_vehiculo = new TipoServicioVehiculo(); //Creamos Tipo de servicio Vehiculo
        $tipo__servicio_vehiculo->nombre = 'Nivelar la batería';
        $tipo__servicio_vehiculo->save();//Guardamos Tipo de servicio Vehiculos

        TipoServicioVehiculo::truncate();
        $tipo__servicio_vehiculo = new TipoServicioVehiculo(); //Creamos Tipo de servicio Vehiculo
        $tipo__servicio_vehiculo->nombre = 'Revisar el tren delantero';
        $tipo__servicio_vehiculo->save();//Guardamos Tipo de servicio Vehiculos
    }
}
