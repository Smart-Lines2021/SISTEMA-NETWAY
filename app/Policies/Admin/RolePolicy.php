<?php

namespace App\Policies\Admin;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Spatie\Permission\Models\Role;

class RolePolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Role $rol)
    {
        return $authuser->hasPermissionTo('Ver Roles');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Roles');
    }
    public function update(User $authuser, Role $rol)
    {
       return $authuser->hasPermissionTo('Actualizar Roles');
   }
   public function delete(User $authuser, Role $rol)
   {
    return $authuser->hasPermissionTo('Eliminar Roles');
}
}
