<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MapelSeeder extends Seeder
{
    use HasFactory;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('mapels')->insert([
            'kode_mapel'    => Str::random(4) . '-' . time(),
            'name'          => 'Bahasa Indonesia',
        ]);
    }
}
