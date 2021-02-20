<?php

namespace App\Policies\Admin;

use App\Recursos_Humanos\DomicilioCliente;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DomicilioClientePolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, DomicilioCliente $domicilioCliente)
    {
        return $authuser->hasPermissionTo('Ver Domicilios de Clientes');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Domicilios de Clientes');
    }
    public function update(User $authuser, DomicilioCliente $domicilioCliente)
    {
       return $authuser->hasPermissionTo('Actualizar Domicilios de Clientes');
   }
   public function delete(User $authuser, DomicilioCliente $domicilioCliente)
   {
    return $authuser->hasPermissionTo('Eliminar Domicilios de Clientes');
}
}
