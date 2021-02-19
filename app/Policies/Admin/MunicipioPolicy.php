<?php

namespace App\Policies\Admin;

use App\Admin\Municipio;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MunicipioPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Municipio $municipio)
    {
        return $authuser->hasPermissionTo('Ver Municipios');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Municipios');
    }
    public function update(User $authuser, Municipio $municipio)
    {
       return $authuser->hasPermissionTo('Actualizar Municipios');
   }
   public function delete(User $authuser, Municipio $municipio)
   {
    return $authuser->hasPermissionTo('Eliminar Municipios');
}
}
