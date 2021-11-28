<?php

namespace App\Policies;

use App\Models\Teacher;
use Illuminate\Auth\Access\HandlesAuthorization;

class GuruPolicy
{
    use HandlesAuthorization;

    public function index(Teacher $teacher)
    {
        return $teacher->hasRole('admin');
    }
    public function edit(Teacher $teacher)
    {
        return $teacher->hasRole('admin');
    }
    public function update(Teacher $teacher)
    {
        return $teacher->hasRole('admin');
    }
}
