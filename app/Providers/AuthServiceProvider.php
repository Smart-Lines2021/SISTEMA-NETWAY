<?php

namespace App\Providers;

use App\Admin\CategoriaProducto;
use App\Admin\CategoriaProveedor;
use App\Admin\CuentaBancariaTaller;
use App\Admin\Departamento;
use App\Admin\Estado;
use App\Admin\Gasolineria;
use App\Admin\Marca;
use App\Admin\Municipio;
use App\Admin\Pais;
use App\Admin\Persona;
use App\Admin\TallerMecanico;
use App\Admin\TipoProducto;
use App\Admin\TipoVehiculo;
use App\Policies\Admin\CategoriaProductoPolicy;
use App\Policies\Admin\CategoriaProveedorPolicy;
use App\Policies\Admin\ClientePolicy;
use App\Policies\Admin\ContactoClientePolicy;
use App\Policies\Admin\CuentaBancariaPolicy;
use App\Policies\Admin\DepartamentoPolicy;
use App\Policies\Admin\EmpleadoPolicy;
use App\Policies\Admin\EstadoPolicy;
use App\Policies\Admin\GasolineriaPolicy;
use App\Policies\Admin\MarcaPolicy;
use App\Policies\Admin\MunicipioPolicy;
use App\Policies\Admin\PaisPolicy;
use App\Policies\Admin\PermissionPolicy;
use App\Policies\Admin\ProductoPolicy;
use App\Policies\Admin\ProveedorPolicy;
use App\Policies\Admin\RolePolicy;
use App\Policies\Admin\TallerPolicy;
use App\Policies\Admin\TipoProductoPolicy;
use App\Policies\Admin\TipoVehiculoPolicy;
use App\Policies\Admin\UserPolicy;
use App\Recursos_Humanos\Cliente;
use App\Recursos_Humanos\ContactoCliente;
use App\Recursos_Humanos\Producto;
use App\Recursos_Humanos\Proveedor;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         User::class => UserPolicy::class, //Asociamos el modelo a la politica de acceso
         Permission::class => PermissionPolicy::class, //Asociamos el modelo a la politica de acceso
         Role::class => RolePolicy::class, //Asociamos el modelo a la politica de acceso
         CategoriaProducto::class => CategoriaProductoPolicy::class, //Asociamos el modelo a la politica de acceso
         CategoriaProveedor::class => CategoriaProveedorPolicy::class, //Asociamos el modelo a la politica de acceso
         Cliente::class => ClientePolicy::class, //Asociamos el modelo a la politica de acceso
         Producto::class => ProductoPolicy::class, //Asociamos el modelo a la politica de acceso
         Proveedor::class => ProveedorPolicy::class, //Asociamos el modelo a la politica de acceso
         Departamento::class => DepartamentoPolicy::class, //Asociamos el modelo a la politica de acceso
         Estado::class => EstadoPolicy::class, //Asociamos el modelo a la politica de acceso
         Gasolineria::class => GasolineriaPolicy::class, //Asociamos el modelo a la politica de acceso
         Marca::class => MarcaPolicy::class, //Asociamos el modelo a la politica de acceso
         Pais::class => PaisPolicy::class, //Asociamos el modelo a la politica de acceso
         TipoProducto::class => TipoProductoPolicy::class, //Asociamos el modelo a la politica de acceso
         TipoVehiculo::class => TipoVehiculoPolicy::class, //Asociamos el modelo a la politica de acceso
         Persona::class => EmpleadoPolicy::class, //Asociamos el modelo a la politica de acceso
         ContactoCliente::class => ContactoClientePolicy::class, //Asociamos el modelo a la politica de acceso
         CuentaBancariaTaller::class => CuentaBancariaPolicy::class, //Asociamos el modelo a la politica de acceso
         TallerMecanico::class => TallerPolicy::class, //Asociamos el modelo a la politica de acceso
         Municipio::class => MunicipioPolicy::class, //Asociamos el modelo a la politica de acceso
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
