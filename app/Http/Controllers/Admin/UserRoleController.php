<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    public function update(Request $request, User $usuario)
    {
        $usuario->roles()->detach();
        if ($request->filled('roles')) {
            $usuario->assignRole($request->roles);
        }
        return back()->with('mensaje','Se actualizarón los roles del usuario');
    }
}
