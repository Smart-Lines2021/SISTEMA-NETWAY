<?php

namespace App\Policies\Admin;

use App\Admin\CategoriaProveedor;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoriaProveedorPolicy
{
    use HandlesAuthorization;
    public function before($user){ //Obtenemos el usuario actual
        if ($user->hasRole('Administrador')) { //preguntamos si el usuario es Administrador
            return true; //Si es asi, puede acceder a cualquier metodo
        }
    }
    public function view(User $authuser, CategoriaProveedor $categoriaProveedor)
    {
        return $authuser->hasPermissionTo('Ver Categorías de Proveedores');
    }
    public function create(User $authuser)
    {
        return $authuser->hasPermissionTo('Crear Categorías de Proveedores');
    }
    public function update(User $authuser, CategoriaProveedor $categoriaProveedor)
    {
       return $authuser->hasPermissionTo('Actualizar Categorías de Proveedores');
   }
   public function delete(User $authuser, CategoriaProveedor $categoriaProveedor)
   {
    return $authuser->hasPermissionTo('Eliminar Categorías de Proveedores');
}
}
