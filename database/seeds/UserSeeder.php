<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Permission::truncate();
    	Role::truncate();
    	User::truncate();

    	//Roles
    	$administrador= Role::create(['name'=>'Administrador']);
    	$recursosHumanos= Role::create(['name'=>'Recursos Humanos']);

    	//Usuarios
    	$usuario=new User;
    	$usuario->name="Angel";
    	$usuario->email="angel@hotmail.com";
    	$usuario->password=bcrypt('12345');
    	$usuario->save();
    	$usuario->assignRole($administrador);

    	$usuario=new User;
    	$usuario->name="Brian Aaron";
    	$usuario->email="brian@hotmail.com";
    	$usuario->password=bcrypt('12345');
    	$usuario->save();
    	$usuario->assignRole($administrador);

    	$usuario=new User;
    	$usuario->name="Jesus Ramirez";
    	$usuario->email="jesus@hotmail.com";
    	$usuario->password=bcrypt('12345');
    	$usuario->save();
    	$usuario->assignRole($administrador);

    	$usuario=new User;
    	$usuario->name="Juan Eduardo";
    	$usuario->email="eduardo@hotmail.com";
    	$usuario->password=bcrypt('12345');
    	$usuario->save();
    	$usuario->assignRole($recursosHumanos);

    	$usuario=new User;
    	$usuario->name="Deni Sarai";
    	$usuario->email="deni@hotmail.com";
    	$usuario->password=bcrypt('12345');
    	$usuario->save();
    	$usuario->assignRole($recursosHumanos);

    	$usuario=new User;
    	$usuario->name="Fabian";
    	$usuario->email="fabian@hotmail.com";
    	$usuario->password=bcrypt('12345');
    	$usuario->save();
    	$usuario->assignRole($recursosHumanos);


    	//Permisos Relacionados al Control de Usuarios
    	$verUsuarios=Permission::create(['name'=>'Ver Usuarios','category'=>'Control de Usuarios']);
    	$crearUsuarios=Permission::create(['name'=>'Crear Usuarios','category'=>'Control de Usuarios']);
    	$actualizarUsuarios=Permission::create(['name'=>'Actualizar Usuarios','category'=>'Control de Usuarios']);
    	$eliminarUsuarios=Permission::create(['name'=>'Eliminar Usuarios','category'=>'Control de Usuarios']);


    }
}
