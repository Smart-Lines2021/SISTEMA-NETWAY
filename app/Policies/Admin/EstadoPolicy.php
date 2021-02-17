<?php

namespace App\Policies\Admin;

use App\Admin\Estado;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EstadoPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Estado $estado)
    {
        return $authuser->hasPermissionTo('Ver Estados');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Estados');
    }
    public function update(User $authuser, Estado $estado)
    {
       return $authuser->hasPermissionTo('Actualizar Estados');
   }
   public function delete(User $authuser, Estado $estado)
   {
    return $authuser->hasPermissionTo('Eliminar Estados');
}
}
