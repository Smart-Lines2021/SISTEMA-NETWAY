<?php

namespace App\Policies\Admin;

use App\Recursos_Humanos\DomicilioProveedor;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DomicilioProveedorPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, DomicilioProveedor $domicilioProveedor)
    {
        return $authuser->hasPermissionTo('Ver Domicilios de Proveedores');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Domicilios de Proveedores');
    }
    public function update(User $authuser, DomicilioProveedor $domicilioProveedor)
    {
       return $authuser->hasPermissionTo('Actualizar Domicilios de Proveedores');
   }
   public function delete(User $authuser, DomicilioProveedor $domicilioProveedor)
   {
    return $authuser->hasPermissionTo('Eliminar Domicilios de Proveedores');
}
}
