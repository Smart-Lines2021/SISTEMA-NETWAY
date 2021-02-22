<?php

namespace App\Policies\Admin;

use App\Recursos_Humanos\ContactoCliente;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactoClientePolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, ContactoCliente $contactoCliente)
    {
        return $authuser->hasPermissionTo('Ver Contactos de Clientes');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Contactos de Clientes');
    }
    public function update(User $authuser, ContactoCliente $contactoCliente)
    {
       return $authuser->hasPermissionTo('Actualizar Contactos de Clientes');
   }
   public function delete(User $authuser, ContactoCliente $contactoCliente)
   {
    return $authuser->hasPermissionTo('Eliminar Contactos de Clientes');
}
}
