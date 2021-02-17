<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();
        //Permisos Relacionados al Control de Usuarios
    	$verUsuarios=Permission::create(['name'=>'Ver Usuarios','category'=>'Control de Usuarios']);
    	$crearUsuarios=Permission::create(['name'=>'Crear Usuarios','category'=>'Control de Usuarios']);
    	$actualizarUsuarios=Permission::create(['name'=>'Actualizar Usuarios','category'=>'Control de Usuarios']);
    	$eliminarUsuarios=Permission::create(['name'=>'Eliminar Usuarios','category'=>'Control de Usuarios']);

        $verPermisos=Permission::create(['name'=>'Ver Permisos','category'=>'Control de Usuarios']);
        $crearPermisos=Permission::create(['name'=>'Crear Permisos','category'=>'Control de Usuarios']);
        $actualizarPermisos=Permission::create(['name'=>'Actualizar Permisos','category'=>'Control de Usuarios']);
        $eliminarPermisos=Permission::create(['name'=>'Eliminar Permisos','category'=>'Control de Usuarios']);

        $verRoles=Permission::create(['name'=>'Ver Roles','category'=>'Control de Usuarios']);
        $crearRoles=Permission::create(['name'=>'Crear Roles','category'=>'Control de Usuarios']);
        $actualizarRoles=Permission::create(['name'=>'Actualizar Roles','category'=>'Control de Usuarios']);
        $eliminarRoles=Permission::create(['name'=>'Eliminar Roles','category'=>'Control de Usuarios']);
        //Permisos Relacionados al Control Administrativo
    	$verDepartamentos=Permission::create(['name'=>'Ver Departamentos','category'=>'Recursos Humanos']);
    	$crearDepartamentos=Permission::create(['name'=>'Crear Departamentos','category'=>'Recursos Humanos']);
    	$actualizarDepartamentos=Permission::create(['name'=>'Actualizar Departamentos','category'=>'Recursos Humanos']);
    	$eliminarDepartamentos=Permission::create(['name'=>'Eliminar Departamentos','category'=>'Recursos Humanos']);

    	$verClientes=Permission::create(['name'=>'Ver Clientes','category'=>'Recursos Humanos']);
    	$crearClientes=Permission::create(['name'=>'Crear Clientes','category'=>'Recursos Humanos']);
    	$actualizarClientes=Permission::create(['name'=>'Actualizar Clientes','category'=>'Recursos Humanos']);
    	$eliminarClientes=Permission::create(['name'=>'Eliminar Clientes','category'=>'Recursos Humanos']);

    	$verEmpleados=Permission::create(['name'=>'Ver Empleados','category'=>'Recursos Humanos']);
    	$crearEmpleados=Permission::create(['name'=>'Crear Empleados','category'=>'Recursos Humanos']);
    	$actualizarEmpleados=Permission::create(['name'=>'Actualizar Empleados','category'=>'Recursos Humanos']);
    	$eliminarEmpleados=Permission::create(['name'=>'Eliminar Empleados','category'=>'Recursos Humanos']);

    	//Permisos Relacionados a Ubicación Geografica
    	$verMunicipios=Permission::create(['name'=>'Ver Municipios','category'=>'Ubicación Geográfica']);
    	$crearMunicipios=Permission::create(['name'=>'Crear Municipios','category'=>'Ubicación Geografica']);
    	$actualizarMunicipios=Permission::create(['name'=>'Actualizar Municipios','category'=>'Ubicación Geografica']);
    	$eliminarMunicipios=Permission::create(['name'=>'Eliminar Municipios','category'=>'Ubicación Geografica']);

    	$verEstados=Permission::create(['name'=>'Ver Estados','category'=>'Ubicación Geográfica']);
    	$crearEstados=Permission::create(['name'=>'Crear Estados','category'=>'Ubicación Geográfica']);
    	$actualizarEstados=Permission::create(['name'=>'Actualizar Estados','category'=>'Ubicación Geográfica']);
    	$eliminarEstados=Permission::create(['name'=>'Eliminar Estados','category'=>'Ubicación Geográfica']);

    	$verPaises=Permission::create(['name'=>'Ver Paises','category'=>'Ubicación Geográfica']);
    	$crearPaises=Permission::create(['name'=>'Crear Paises','category'=>'Ubicación Geográfica']);
    	$actualizarPaises=Permission::create(['name'=>'Actualizar Paises','category'=>'Ubicación Geográfica']);
    	$eliminarPaises=Permission::create(['name'=>'Eliminar Paises','category'=>'Ubicación Geográfica']);

    	//Permisos Relacionados a Productos
    	$verProductos=Permission::create(['name'=>'Ver Productos','category'=>'Productos']);
    	$crearProductos=Permission::create(['name'=>'Crear Productos','category'=>'Productos']);
    	$actualizarProductos=Permission::create(['name'=>'Actualizar Productos','category'=>'Productos']);
    	$eliminarProductos=Permission::create(['name'=>'Eliminar Productos','category'=>'Productos']);

    	$verTipoProductos=Permission::create(['name'=>'Ver Tipo de Productos','category'=>'Productos']);
    	$crearTipoProductos=Permission::create(['name'=>'Crear Tipo de Productos','category'=>'Productos']);
    	$actualizarTipoProductos=Permission::create(['name'=>'Actualizar Tipo de Productos','category'=>'Productos']);
    	$eliminarTipoProductos=Permission::create(['name'=>'Eliminar Tipo de Productos','category'=>'Productos']);

    	$verCategoriasProductos=Permission::create(['name'=>'Ver Categorías de productos','category'=>'Productos']);
    	$crearCategoriasProductos=Permission::create(['name'=>'Crear Categorías de productos','category'=>'Productos']);
    	$actualizarCategoriasProductos=Permission::create(['name'=>'Actualizar Categorías de productos','category'=>'Productos']);
    	$eliminarCategoriasProductos=Permission::create(['name'=>'Eliminar Categorías de productos','category'=>'Productos']);

    	$verMarcas=Permission::create(['name'=>'Ver Marcas','category'=>'Productos']);
    	$crearMarcas=Permission::create(['name'=>'Crear Marcas','category'=>'Productos']);
    	$actualizarMarcas=Permission::create(['name'=>'Actualizar Marcas','category'=>'Productos']);
    	$eliminarMarcas=Permission::create(['name'=>'Eliminar Marcas','category'=>'Productos']);

    	$verTipoVehiculos=Permission::create(['name'=>'Ver Tipo de Vehiculos','category'=>'Proveedores y Vehiculos']);
    	$crearTipoVehiculos=Permission::create(['name'=>'Crear Tipo de Vehiculos','category'=>'Proveedores y Vehiculos']);
    	$actualizarTipoVehiculos=Permission::create(['name'=>'Actualizar Tipo de Vehiculos','category'=>'Proveedores y Vehiculos']);
    	$eliminarTipoVehiculos=Permission::create(['name'=>'Eliminar Tipo de Vehiculos','category'=>'Proveedores y Vehiculos']);

    	$verGasolinerias=Permission::create(['name'=>'Ver Gasolinerias','category'=>'Proveedores y Vehiculos']);
    	$crearGasolinerias=Permission::create(['name'=>'Crear Gasolinerias','category'=>'Proveedores y Vehiculos']);
    	$actualizarGasolinerias=Permission::create(['name'=>'Actualizar Gasolinerias','category'=>'Proveedores y Vehiculos']);
    	$eliminarGasolinerias=Permission::create(['name'=>'Eliminar Gasolinerias','category'=>'Proveedores y Vehiculos']);

    	$verCategoriasProveedores=Permission::create(['name'=>'Ver Categorías de Proveedores','category'=>'Proveedores y Vehiculos']);
    	$crearCategoriasProveedores=Permission::create(['name'=>'Crear Categorías de Proveedores','category'=>'Proveedores y Vehiculos']);
    	$actualizarCategoriasProveedores=Permission::create(['name'=>'Actualizar Categorías de Proveedores','category'=>'Proveedores y Vehiculos']);
    	$eliminarCategoriasProveedores=Permission::create(['name'=>'Eliminar Categorías de Proveedores','category'=>'Proveedores y Vehiculos']);

    	$verVehiculos=Permission::create(['name'=>'Ver Vehiculos','category'=>'Proveedores y Vehiculos']);
    	$crearVehiculos=Permission::create(['name'=>'Crear Vehiculos','category'=>'Proveedores y Vehiculos']);
    	$actualizarVehiculos=Permission::create(['name'=>'Actualizar Vehiculos','category'=>'Proveedores y Vehiculos']);
    	$eliminarVehiculos=Permission::create(['name'=>'Eliminar Vehiculos','category'=>'Proveedores y Vehiculos']);

    	$verProveedores=Permission::create(['name'=>'Ver Proveedores','category'=>'Proveedores y Vehiculos']);
    	$crearProveedores=Permission::create(['name'=>'Crear Proveedores','category'=>'Proveedores y Vehiculos']);
    	$actualizarProveedores=Permission::create(['name'=>'Actualizar Proveedores','category'=>'Proveedores y Vehiculos']);
    	$eliminarProveedores=Permission::create(['name'=>'Eliminar Proveedores','category'=>'Proveedores y Vehiculos']);
    }
}
