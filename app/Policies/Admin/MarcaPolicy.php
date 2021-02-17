<?php

namespace App\Policies\Admin;

use App\Admin\Marca;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MarcaPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Marca $marca)
    {
        return $authuser->hasPermissionTo('Ver Marcas');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Marcas');
    }
    public function update(User $authuser, Marca $marca)
    {
       return $authuser->hasPermissionTo('Actualizar Marcas');
   }
   public function delete(User $authuser, Marca $marca)
   {
    return $authuser->hasPermissionTo('Eliminar Marcas');
}
}
