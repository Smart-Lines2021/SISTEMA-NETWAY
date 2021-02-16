<?php

namespace App\Policies\Admin;

use App\Recursos_Humanos\Cliente;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientePolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Cliente $clientes)
    {
        return $authuser->hasPermissionTo('Ver Clientes');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Clientes');
    }
    public function update(User $authuser, Cliente $clientes)
    {
       return $authuser->hasPermissionTo('Actualizar Clientes');
   }
   public function delete(User $authuser, Cliente $clientes)
   {
    return $authuser->hasPermissionTo('Eliminar Clientes');
}
}
