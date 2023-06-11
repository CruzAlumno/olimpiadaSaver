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
                                        [2, 2, 234],
                                        [3, 1, 11],
                                        [4, 2, 21]);
}
