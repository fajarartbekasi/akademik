<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $table ='mapels';

    protected $guarded = [];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
