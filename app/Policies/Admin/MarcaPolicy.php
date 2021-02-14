<?php

namespace App\Policies\Admin;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MarcaPolicy
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
