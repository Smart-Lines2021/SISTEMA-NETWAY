<?php

namespace App\Policies\Admin;

use App\Admin\TipoProducto;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TipoProductoPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, TipoProducto $tipoProducto)
    {
        return $authuser->hasPermissionTo('Ver Tipo de Productos');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Tipo de Productos');
    }
    public function update(User $authuser, TipoProducto $tipoProducto)
    {
       return $authuser->hasPermissionTo('Actualizar Tipo de Productos');
   }
   public function delete(User $authuser, TipoProducto $tipoProducto)
   {
    return $authuser->hasPermissionTo('Eliminar Tipo de Productos');
}
}
