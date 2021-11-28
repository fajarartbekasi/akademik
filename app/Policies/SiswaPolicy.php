<?php

namespace App\Policies;

use App\Models\Student;
use Illuminate\Auth\Access\HandlesAuthorization;

class SiswaPolicy
{
    use HandlesAuthorization;

    public function index(Student $student)
    {
        return $student->hasRole('admin');
    }
    public function create(Student $student)
    {
        return $student->hasRole('admin');
    }
    public function edit(Student $student)
    {
        return $student->hasRole('admin');
    }
    public function store(Student $student)
    {
        return $student->hasRole('admin');
    }
    public function update(Student $student)
    {
        return $student->hasRole('admin');
    }
    public function destroy(Student $student)
    {
        return $student->hasRole('admin');
    }
}
