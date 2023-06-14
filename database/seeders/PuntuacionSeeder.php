<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PuntuacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puntuaciones')->truncate();
        foreach (self::$puntuaciones as $puntuacion) {
            DB::table('puntuaciones')->insert([
                'id_prueba' => $puntuacion[0],
                'id_equipo' => $puntuacion[1],
                'puntuacion' => $puntuacion[2]
            ]);
        }
    }

    private static $puntuaciones = array([1, 1, 10],
                                         [1, 2, 100],
                                         [1, 3, 1000],
                                         [2, 1, 1000],
                                         [2, 2, 10],
                                         [2, 3, 100],
                                         [3, 1, 100],
                                         [3, 2, 1000],
                                         [3, 3, 10],
                                         [4, 4, 1000],
                                         [4, 5, 100],
                                         [4, 6, 10],
                                         [5, 4, 100],
                                         [5, 5, 10],
                                         [5, 6, 1000],
                                         [6, 4, 10],
                                         [6, 5, 1000],
                                         [6, 6, 100],
                                        );
}
