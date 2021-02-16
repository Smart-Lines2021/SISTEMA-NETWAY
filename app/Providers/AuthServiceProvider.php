<?php

namespace App\Providers;

use App\Admin\CategoriaProducto;
use App\Admin\CategoriaProveedor;
use App\Policies\Admin\CategoriaProductoPolicy;
use App\Policies\Admin\CategoriaProveedorPolicy;
use App\Policies\Admin\ClientePolicy;
use App\Policies\Admin\PermissionPolicy;
use App\Policies\Admin\ProductoPolicy;
use App\Policies\Admin\ProveedorPolicy;
use App\Policies\Admin\RolePolicy;
use App\Policies\Admin\UserPolicy;
use App\Recursos_Humanos\Cliente;
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
