<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GradeSeeder extends Seeder
{
    use HasFactory;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('grades')->insert([
            'user_id'   => '2',
            'name'      => 'XI',
            'grade'      => 'XI RPL',
        ]);
    }
}
