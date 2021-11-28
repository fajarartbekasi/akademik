<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->hasRole('admin');
    }
    public function create(User $user)
    {
        return $user->hasRole('admin');
    }
    public function edit(User $user)
    {
        return $user->hasRole('admin');
    }
    public function destroy(User $user)
    {
        return $user->hasRole('admin');
    }
}
