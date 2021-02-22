<?php

namespace App\Policies\Admin;

use App\Admin\CuentaBancariaTaller;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CuentaBancariaPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, CuentaBancariaTaller $cuentaBancaria)
    {
        return $authuser->hasPermissionTo('Ver Cuentas Bancarias');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Cuentas Bancarias');
    }
    public function update(User $authuser, CuentaBancariaTaller $cuentaBancaria)
    {
       return $authuser->hasPermissionTo('Actualizar Cuentas Bancarias');
   }
   public function delete(User $authuser, CuentaBancariaTaller $cuentaBancaria)
   {
    return $authuser->hasPermissionTo('Eliminar Cuentas Bancarias');
}
}
