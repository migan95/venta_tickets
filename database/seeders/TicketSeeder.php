<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
<<<<<<< Updated upstream
            'id' => 100,
            'costo' => 10,
            'precio' => 10,
            'codigo' => "A01",
            'posicion' => "1",
            'evento_id' => 100,
            'user_id' => 100
        ]);
        DB::table('tickets')->insert([
            'id' => 101,
            'costo' => 10,
            'precio' => 10,
            'codigo' => "A02",
            'posicion' => "2",
            'evento_id' => 100,
            'user_id' => 100
        ]);
        DB::table('tickets')->insert([
            'id' => 102,
            'costo' => 10,
            'precio' => 10,
            'posicion' => "3",
            'codigo' => "A03",
            'evento_id' => 100,
            'user_id' => null
=======
            'costo' => 20,
            'precio' => 30,
            'posicion'=> 'A1',
            'codigo' => '01',
            'evento_id' => 1
        ]);
        DB::table('tickets')->insert([
            'costo' => 20,
            'precio' => 30,
            'posicion'=> 'A2',
            'codigo' => '02',
            'evento_id' => 1
        ]);
        DB::table('tickets')->insert([
            'costo' => 20,
            'precio' => 30,
            'posicion'=> 'A3',
            'codigo' => '03',
            'evento_id' => 1
>>>>>>> Stashed changes
        ]);
    }
}
