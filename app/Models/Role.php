<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends \Spatie\Permission\Models\Role
{
    use HasFactory;

    public static function defaultRoles()
    {
        return [
            'admin',
            'guru',
            'siswa',
        ];
    }

}
