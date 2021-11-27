<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $fillable = ['user_id','nuptk','agama','jenis_kelamin','jabatan','tempat_lahir','tanggal_lahir','alamat','telp'];

    public function schedules()
    {
       return $this->hasMany(Schedule::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
