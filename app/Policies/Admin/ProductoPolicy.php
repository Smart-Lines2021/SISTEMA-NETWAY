<?php

namespace App\Policies\Admin;

use App\Recursos_Humanos\Producto;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductoPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, Producto $producto)
    {
        return $authuser->hasPermissionTo('Ver Productos');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Productos');
    }
    public function update(User $authuser, Producto $producto)
    {
       return $authuser->hasPermissionTo('Actualizar Productos');
   }
   public function delete(User $authuser, Producto $producto)
   {
    return $authuser->hasPermissionTo('Eliminar Productos');
}
}
