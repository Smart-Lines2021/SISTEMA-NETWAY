<?php

namespace App\Policies\Admin;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DepartamentoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
