<?php

namespace App\Policies\Admin;

use App\Admin\Banco;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BancoPolicy
{
    use HandlesAuthorization;
     public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Banco $banco)
    {
        return $authuser->hasPermissionTo('Ver Bancos');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Bancos');
    }
    public function update(User $authuser, Banco $banco)
    {
       return $authuser->hasPermissionTo('Actualizar Bancos');
   }
   public function delete(User $authuser, Banco $banco)
   {
    return $authuser->hasPermissionTo('Eliminar Bancos');
}
}
