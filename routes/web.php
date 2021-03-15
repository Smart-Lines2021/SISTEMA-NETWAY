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

//Password Reset
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

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
Route::resource('administracion/colores','Admin\ColorController')->parameters(['color'=>'color'])->names('admin.colores');
Route::resource('administracion/cargos','Admin\CargoController')->parameters(['cargo'=>'cargo'])->names('admin.cargos');
Route::resource('administracion/aseguradoras','Admin\AseguradoraController')->parameters(['aseguradora'=>'aseguradora'])->names('admin.aseguradoras');
Route::resource('administracion/tipos_servicios_vehiculos','Admin\TipoServicioVehiculoController')->parameters(['tipoServicioVehiculo'=>'tipoServicioVehiculo'])->names('admin.tipos_servicios_vehiculos');
Route::resource('administracion/talleres_mecanicos','Admin\TallerMecanicoController')->parameters(['tallerMecanico'=>'tallerMecanico'])->names('admin.talleres_mecanicos');
Route::resource('administracion/bancos','Admin\BancoController')->parameters(['banco'=>'banco'])->names('admin.bancos');
Route::resource('administracion/cuentas_bancarias_talleres','Admin\CuentaBancariaTallerController')->parameters(['cuentaBancaria'=>'cuentaBancaria'])->names('admin.cuentas_bancarias_talleres');

//Para el perfil
Route::resource('perfil/personas','Admin\PersonaController')->parameters(['persona'=>'persona'])->names('admin.personas');
Route::resource('perfil/personas_usuarios','Admin\PersonaUsuarioController')->parameters(['personaUsuario'=>'personaUsuario'])->names('admin.personas_usuarios');
Route::resource('perfil/domicilios_personas','Admin\DomicilioPersonaController')->parameters(['domicilioPersona'=>'domicilioPersona'])->names('admin.domicilios_personas');

//Rutas para recursos humanos
Route::resource('recursos_humanos/productos','Recursos_Humanos\ProductoController')->parameters(['producto'=>'producto'])->names('rh.productos');
Route::resource('recursos_humanos/proveedores','Recursos_Humanos\ProveedorController')->parameters(['proveedor'=>'proveedor'])->names('rh.proveedores');
Route::resource('recursos_humanos/productos_proveedores','Recursos_Humanos\ProductoProveedorController')->parameters(['productoProveedor'=>'productoProveedor'])->names('rh.productos_proveedores');
Route::resource('recursos_humanos/vehiculos','Recursos_Humanos\VehiculoController')->parameters(['vehiculo'=>'vehiculo'])->names('rh.vehiculos');
Route::resource('recursos_humanos/clientes','Recursos_Humanos\ClienteController')->parameters(['cliente'=>'cliente'])->names('rh.clientes');
Route::resource('recursos_humanos/domicilios_clientes','Recursos_Humanos\DomicilioClienteController')->parameters(['domicilioCliente'=>'domicilioCliente'])->names('rh.domicilios_clientes');
Route::get('recursos_humanos/ver_domicilios_clientes/{id_cliente}', 'Recursos_Humanos\DomicilioClienteController@verDomiciliosClientes')
->name('ver.domicilios_clientes');
Route::resource('recursos_humanos/contactos_clientes','Recursos_Humanos\ContactoClienteController')->parameters(['contactoCliente'=>'contactoCliente'])->names('rh.contactos_clientes');
Route::resource('recursos_humanos/informaciones_laborales','Recursos_Humanos\InformacionLaboralController')->parameters(['informacionLaboral'=>'informacionLaboral'])->names('rh.informaciones_laborales');
Route::resource('recursos_humanos/domicilios_proveedores','Recursos_Humanos\DomicilioProveedorController')->parameters(['domicilioProveedor'=>'domicilioProveedor'])->names('rh.domicilios_proveedores');
Route::resource('recursos_humanos/servicios_vehiculos','Recursos_Humanos\ServicioVehiculoController')->parameters(['servicioVehiculo'=>'servicioVehiculo'])->names('rh.servicios_vehiculos');
Route::resource('recursos_humanos/polizas_vehiculos','Recursos_Humanos\PolizaVehiculoController')->parameters(['polizaVehiculo'=>'polizaVehiculo'])->names('rh.polizas_vehiculos');
Route::resource('recursos_humanos/facturas','Recursos_Humanos\FacturaController')->parameters(['factura'=>'factura'])->names('rh.facturas');
Route::resource('recursos_humanos/horarios','Recursos_Humanos\HorarioController')->parameters(['horario'=>'horario'])->names('rh.horarios');
Route::resource('recursos_humanos/razones_permisos','Recursos_Humanos\RazonPermisoController')->parameters(['razonPermiso'=>'razonPermiso'])->names('rh.razones_permisos');
Route::resource('recursos_humanos/asistencias','Recursos_Humanos\AsistenciaController')->parameters(['asistencia'=>'asistencia'])->names('rh.asistencias');
Route::resource('recursos_humanos/permisos_empleados','Recursos_Humanos\PermisoEmpleadoController')->parameters(['permisoEmpleado'=>'permisoEmpleado'])->names('rh.permisos_empleados');



//Control de Sesiones y de usuarios
/*Auth::routes();*/
Auth::routes(['register'=>false]); //Para que no se puedan registrar directamente
Route::resource('administracion/usuarios','Admin\UserController')->parameters(['usuario'=>'usuario'])->names('admin.usuarios');
Route::resource('administracion/roles','Admin\RoleController')->parameters(['rol'=>'rol'])->names('admin.roles');
Route::resource('administracion/permisos','Admin\PermissionController')->parameters(['permiso'=>'permiso'])->names('admin.permisos');
Route::put('administracion/usuarios/{usuario}/roles','Admin\UserRoleController@update')->name('admin.usuarios.roles.update');
Route::put('administracion/usuarios/{usuario}/permisos','Admin\UserPermissionController@update')->name('admin.usuarios.permisos.update');


//Rutas relacionadas a la subida/control de documentos
//SUBIR INE
Route::post('documentos/{persona_id}/constancias_seguros', 'Documentos\ConstanciaSeguroController@store')->name('documentos.constancias_seguros.store');
/*Route::get('solicitudes/ines/{persona_id}/show', 'Solicitante\IdentificacionOficialController@show')->name('solicitudes.ines.show');
Route::put('solicitudes/ines/{persona_id}/update', 'Solicitante\IdentificacionOficialController@update')->name('solicitudes.ines.update');*/
Route::post('documentos/{persona_id}/ines', 'Documentos\IdentificacionOficialController@store')->name('documentos.ines.store');

Route::post('documentos/{persona_id}/curps', 'Documentos\CurpController@store')->name('documentos.curps.store');

Route::post('documentos/{persona_id}/certificados_alturas', 'Documentos\CertificadoAlturaController@store')->name('documentos.certificados_alturas.store');

Route::post('documentos/{persona_id}/pcrs', 'Documentos\PcrController@store')->name('documentos.pcr.store');



//Poliza Vehiculo por vista detalle

Route::get('vehiculos/individual/{id_vehiculo}', 'Recursos_Humanos\PolizaVehiculoController@createPorVistaDetalle')->name('create.poliza.vista.detalle');

Route::post('vehiculos/individual', 'Recursos_Humanos\PolizaVehiculoController@storePorVistaDetalle')->name('store.poliza.vista.detalle');