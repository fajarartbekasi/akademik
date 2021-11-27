<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $table = 'grades';
    protected $fillable = ['user_id','name','grade'];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
