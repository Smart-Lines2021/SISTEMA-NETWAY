<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserPermissionController extends Controller
{
     public function update(Request $request, User $usuario)
    {
        $usuario->permissions()->detach();
        if ($request->filled('permissions')) {
            $usuario->givePermissionTo($request->permissions);
        }
        return back()->with('mensaje','Se actualizarón los permisos del usuario');
    }
}
