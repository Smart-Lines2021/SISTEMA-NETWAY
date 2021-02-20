<?php

namespace App\Policies\Admin;

use App\Admin\Cargo;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CargoPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Cargo $cargo)
    {
        return $authuser->hasPermissionTo('Ver Cargos');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Cargos');
    }
    public function update(User $authuser, Cargo $cargo)
    {
       return $authuser->hasPermissionTo('Actualizar Cargos');
   }
   public function delete(User $authuser, Cargo $cargo)
   {
    return $authuser->hasPermissionTo('Eliminar Cargos');
}
}
