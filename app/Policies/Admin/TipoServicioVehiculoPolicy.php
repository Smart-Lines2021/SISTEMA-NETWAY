<?php

namespace App\Policies\Admin;

use App\Admin\TipoServicioVehiculo;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TipoServicioVehiculoPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, TipoServicioVehiculo $tipoServicioVehiculo)
    {
        return $authuser->hasPermissionTo('Ver Tipos de Servicios de Vehiculos');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Tipos de Servicios de Vehiculos');
    }
    public function update(User $authuser, TipoServicioVehiculo $tipoServicioVehiculo)
    {
       return $authuser->hasPermissionTo('Actualizar Tipos de Servicios de Vehiculos');
   }
   public function delete(User $authuser, TipoServicioVehiculo $tipoServicioVehiculo)
   {
    return $authuser->hasPermissionTo('Eliminar Tipos de Servicios de Vehiculos');
}
}
