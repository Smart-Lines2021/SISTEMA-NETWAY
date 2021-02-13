<?php

namespace App\Policies\Admin;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, User $user)
    {
        return $authuser->hasPermissionTo('Ver Usuarios');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Usuarios');
    }
    public function update(User $authuser, User $user)
    {
       return $authuser->hasPermissionTo('Actualizar Usuarios');
   }
   public function delete(User $authuser, User $user)
   {
    return $authuser->hasPermissionTo('Eliminar Usuarios');
}
}
