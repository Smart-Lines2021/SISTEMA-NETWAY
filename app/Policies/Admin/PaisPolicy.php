<?php

namespace App\Policies\Admin;

use App\Admin\Pais;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaisPolicy
{
    use HandlesAuthorization;
     public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Pais $pais)
    {
        return $authuser->hasPermissionTo('Ver Paises');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Paises');
    }
    public function update(User $authuser, Pais $pais)
    {
       return $authuser->hasPermissionTo('Actualizar Paises');
   }
   public function delete(User $authuser, Pais $pais)
   {
    return $authuser->hasPermissionTo('Eliminar Paises');
}
}
