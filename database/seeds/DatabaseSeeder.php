<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;'); //Nos ayuda a evitar que se revisen las llaves foraneas antes de ejecutar un seeder
        $this->call(UserSeeder::class); //Ejecutamos el Seeder
        $this->call(PaisSeeder::class); //Ejecutamos el Seeder
        $this->call(EstadoSeeder::class); //Ejecutamos el Seeder
        $this->call(MunicipioSeeder::class); //Ejecutamos el Seeder
        $this->call(MarcaSeeder::class);//Ejecutamos el Seeder
        $this->call(CategoriaProductoSeeder::class);//Ejecutamos el Seeder
        $this->call(TipoProductoSeeder::class);//Ejecutamos el Seeder
        $this->call(DepartamentoSeeder::class);//Ejecutamos el Seeder
        $this->call(CargoSeeder::class);//Ejecutamos el Seeder
        $this->call(TipoVehiculoSeeder::class);//Ejecutamos el Seeder
        $this->call(CategoriaProveedorSeeder::class);//Ejecutamos el Seeder
        $this->call(ColorSeeder::class);//Ejecutamos el Seeder
        $this->call(TipoServicioVehiculoSeeder::class);//Ejecutamos el Seeder
        $this->call(PermisoSeeder::class);//Ejecutamos el Seeder
        $this->call(AseguradoraSeeder::class);//Ejecutamos el Seeder
        $this->call(BancoSeeder::class);//Ejecutamos el Seeder
        $this->call(TallerMecanicoSeeder::class);//Ejecutamos el Seeder
        $this->call(HorarioSeeder::class);//Ejecutamos el Seeder
        $this->call(EmpleadoSeeder::class);//Ejecutamos el Seeder
        $this->call(JustificacionSeeder::class);//Ejecutamos el Seeder
        $this->call(TipoDocumentoSeeder::class);//Ejecutamos el Seeder
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
