<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MapelPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->hasRole('admin');
    }
}
