<?php

namespace App\Policies\Admin;

use App\Admin\Color;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ColorPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Color $color)
    {
        return $authuser->hasPermissionTo('Ver Colores');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Colores');
    }
    public function update(User $authuser, Color $color)
    {
       return $authuser->hasPermissionTo('Actualizar Colores');
   }
   public function delete(User $authuser, Color $color)
   {
    return $authuser->hasPermissionTo('Eliminar Colores');
}
}
