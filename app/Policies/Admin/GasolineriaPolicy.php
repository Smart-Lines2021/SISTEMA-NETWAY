<?php

namespace App\Policies\Admin;

use App\Admin\Gasolineria;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GasolineriaPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Gasolineria $gasolineria)
    {
        return $authuser->hasPermissionTo('Ver Gasolinerias');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Gasolinerias');
    }
    public function update(User $authuser, Gasolineria $gasolineria)
    {
       return $authuser->hasPermissionTo('Actualizar Gasolinerias');
   }
   public function delete(User $authuser, Gasolineria $gasolineria)
   {
    return $authuser->hasPermissionTo('Eliminar Gasolinerias');
}
}
