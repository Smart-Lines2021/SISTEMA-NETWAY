<?php

namespace App\Policies\Admin;

use App\Admin\TipoVehiculo;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TipoVehiculoPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, TipoVehiculo $tipoVehiculo)
    {
        return $authuser->hasPermissionTo('Ver Tipo de Vehiculos');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Tipo de Vehiculos');
    }
    public function update(User $authuser, TipoVehiculo $tipoVehiculo)
    {
       return $authuser->hasPermissionTo('Actualizar Tipo de Vehiculos');
   }
   public function delete(User $authuser, TipoVehiculo $tipoVehiculo)
   {
    return $authuser->hasPermissionTo('Eliminar Tipo de Vehiculos');
}
}
