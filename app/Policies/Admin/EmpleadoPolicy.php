<?php

namespace App\Policies\Admin;

use App\Admin\Persona;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmpleadoPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Persona $persona)
    {
        return $authuser->hasPermissionTo('Ver Empleados');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Empleados');
    }
    public function update(User $authuser, Persona $persona)
    {
       return $authuser->hasPermissionTo('Actualizar Empleados');
   }
   public function delete(User $authuser, Persona $persona)
   {
    return $authuser->hasPermissionTo('Eliminar Empleados');
}
}
