<?php

namespace App\Policies\Admin;

use App\Recursos_Humanos\Proveedor;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProveedorPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Proveedor $proveedor)
    {
        return $authuser->hasPermissionTo('Ver Proveedores');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Proveedores');
    }
    public function update(User $authuser, Proveedor $proveedor)
    {
       return $authuser->hasPermissionTo('Actualizar Proveedores');
   }
   public function delete(User $authuser, Proveedor $proveedor)
   {
    return $authuser->hasPermissionTo('Eliminar Proveedores');
}
}
