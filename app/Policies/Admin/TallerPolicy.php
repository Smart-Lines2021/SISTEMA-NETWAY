<?php

namespace App\Policies\Admin;

use App\Admin\TallerMecanico;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TallerPolicy
{
    use HandlesAuthorization;
     public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, TallerMecanico $tallerMecanico)
    {
        return $authuser->hasPermissionTo('Ver Talleres');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Talleres');
    }
    public function update(User $authuser, TallerMecanico $tallerMecanico)
    {
       return $authuser->hasPermissionTo('Actualizar Talleres');
   }
   public function delete(User $authuser, TallerMecanico $tallerMecanico)
   {
    return $authuser->hasPermissionTo('Eliminar Talleres');
}
}
