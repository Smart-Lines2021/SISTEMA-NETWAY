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
        $this->call(UserSeeder::class); //Ejecutamos el UserSeeder
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
