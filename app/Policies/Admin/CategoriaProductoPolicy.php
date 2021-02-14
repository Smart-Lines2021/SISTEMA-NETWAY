<?php

namespace App\Policies\Admin;

use App\Admin\CategoriaProducto;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoriaProductoPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, CategoriaProducto $categoriaProducto)
    {
        return $authuser->hasPermissionTo('Ver Categorías de productos');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Categorías de productos');
    }
    public function update(User $authuser, CategoriaProducto $categoriaProducto)
    {
       return $authuser->hasPermissionTo('Actualizar Categorías de productos');
   }
   public function delete(User $authuser, CategoriaProducto $categoriaProducto)
   {
    return $authuser->hasPermissionTo('Eliminar Categorías de productos');
}
}
