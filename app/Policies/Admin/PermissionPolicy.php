<?php

namespace App\Policies\Admin;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Spatie\Permission\Models\Permission;

class PermissionPolicy
{
    use HandlesAuthorization;
     public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Permission $permiso)
    {
        return $authuser->hasPermissionTo('Ver Permisos');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Permisos');
    }
    public function update(User $authuser, Permission $permiso)
    {
       return $authuser->hasPermissionTo('Actualizar Permisos');
   }
   public function delete(User $authuser, Permission $permiso)
   {
    return $authuser->hasPermissionTo('Eliminar Permisos');
}
}
