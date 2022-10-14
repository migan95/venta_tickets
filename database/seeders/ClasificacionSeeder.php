<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClasificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clasificaciones')->insert([
            'id' => 100,
            'nombre' => 'Todo publico',
            'edad_minima' => 6,
            'edad_maxima'=> 200,
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 101,
            'nombre' => 'Adolescentes o mayores',
            'edad_minima' => 12,
            'edad_maxima'=> 200,
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 102,
            'nombre' => 'Adultos',
            'edad_minima' => 18,
            'edad_maxima'=> 200,
        ]);
    }
}
