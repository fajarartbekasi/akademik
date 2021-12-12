<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

   protected $table = "schedules";
   protected $guarded = [];

   public function mapel()
   {
        return $this->belongsTo(Mapel::class);
   }
   public function teacher()
   {
        return $this->belongsTo(Teacher::class);
   }
   public function room()
   {
        return $this->belongsTo(Room::class);
   }
   public function grade()
   {
        return $this->belongsTo(Grade::class);
   }
   public function user()
   {
        return $this->belongsTo(User::class);
   }
}
