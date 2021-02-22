<?php

namespace App\Policies\Admin;

use App\Admin\Aseguradora;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AseguradoraPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Aseguradora $aseguradora)
    {
        return $authuser->hasPermissionTo('Ver Aseguradoras');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Aseguradoras');
    }
    public function update(User $authuser, Aseguradora $aseguradora)
    {
       return $authuser->hasPermissionTo('Actualizar Aseguradoras');
   }
   public function delete(User $authuser, Aseguradora $aseguradora)
   {
    return $authuser->hasPermissionTo('Eliminar Aseguradoras');
}
}
