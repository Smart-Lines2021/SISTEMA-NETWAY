<?php

namespace App\Policies\Admin;

use App\Admin\Departamento;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DepartamentoPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Departamento $departamento)
    {
        return $authuser->hasPermissionTo('Ver Departamentos');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Departamentos');
    }
    public function update(User $authuser, Departamento $departamento)
    {
       return $authuser->hasPermissionTo('Actualizar Departamentos');
   }
   public function delete(User $authuser, Departamento $departamento)
   {
    return $authuser->hasPermissionTo('Eliminar Departamentos');
}
}
