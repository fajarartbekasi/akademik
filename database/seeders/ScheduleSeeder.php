<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScheduleSeeder extends Seeder
{
    use HasFactory;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([
            'mapel_id'   => '1',
            'user_id'    => '2',
            'room_id'    => '1',
            'grade_id'   => '1',
            'jam_awal'   => '07:00',
            'jam_akhir'  => '08:00',
        ]);
    }
}
