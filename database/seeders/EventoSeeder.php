<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->insert([
            'id' => 100,
            'titulo' => 'Matrix',
            'descripcion' => 'Pelicula en Cinepolis Cayala',
            'imagen' => '/img/eventos/matrix.jpg',
            'precio' => 20,
        ]);
        DB::table('eventos')->insert([
            'id' => 101,
            'titulo' => 'Maná en concierto',
            'descripcion' => 'Concierto en Cayala',
            'imagen' => '/img/eventos/mana.jpg',
            'precio' => 20,
        ]);
        DB::table('eventos')->insert([
            'id' => 102,
            'titulo' => 'Disco Silenciosa',
            'descripcion' => 'Disco en zona 1',
            'imagen' => '/img/eventos/disco.jpg',
            'precio' => 20,
        ]);
        DB::table('eventos')->insert([
            'id' => 103,
            'titulo' => 'Cata de Vinos',
            'descripcion' => 'Pelicula en Cinepolis Cayala',
            'imagen' => '/img/eventos/vinos.jpg',
            'precio' => 20,
        ]);
    }
}
