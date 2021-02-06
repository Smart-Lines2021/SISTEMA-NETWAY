<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'Admin\HomeController@index')->name('home');

//Rutas de Catalogos
Route::resource('administracion/tipo_productos','Admin\TipoProductoController')->parameters(['tipoProducto'=>'tipoProducto'])->names('admin.tipo_productos');
Route::resource('administracion/tipo_vehiculos','Admin\TipoVehiculoController')->parameters(['tipoVehiculo'=>'tipoVehiculo'])->names('admin.tipo_vehiculos');
Route::resource('administracion/paises','Admin\PaisController')->parameters(['pais'=>'pais'])->names('admin.paises');
Route::resource('administracion/estados','Admin\EstadoController')->parameters(['estado'=>'estado'])->names('admin.estados');
Route::resource('administracion/municipios','Admin\MunicipioController')->parameters(['municipio'=>'municipio'])->names('admin.municipios');
Route::resource('administracion/departamentos','Admin\DepartamentoController')->parameters(['departamento'=>'departamento'])->names('admin.departamentos');
Route::resource('administracion/categorias_proveedores','Admin\CategoriaProveedorController')->parameters(['categoriaProveedor'=>'categoriaProveedor'])->names('admin.categorias_proveedores');
Route::resource('administracion/categorias_productos','Admin\CategoriaProductoController')->parameters(['categoriaProducto'=>'categoriaProducto'])->names('admin.categorias_productos');
Route::resource('administracion/gasolinerias','Admin\GasolineriaController')->parameters(['gasolineria'=>'gasolineria'])->names('admin.gasolinerias');
Route::resource('administracion/marcas','Admin\MarcaController')->parameters(['marca'=>'marca'])->names('admin.marcas');
//Control de Sesiones y de usuarios
/*Auth::routes();*/
Auth::routes(['register'=>false]); //Para que no se puedan registrar directamente
Route::resource('administracion/usuarios','Admin\UserController')->parameters(['usuario'=>'usuario'])->names('admin.usuarios');
Route::resource('administracion/roles','Admin\RoleController')->parameters(['rol'=>'rol'])->names('admin.roles');
Route::resource('administracion/permisos','Admin\PermissionController')->parameters(['permiso'=>'permiso'])->names('admin.permisos');
Route::put('administracion/usuarios/{usuario}/roles','Admin\UserRoleController@update')->name('admin.usuarios.roles.update');
Route::put('administracion/usuarios/{usuario}/permisos','Admin\UserPermissionController@update')->name('admin.usuarios.permisos.update');
