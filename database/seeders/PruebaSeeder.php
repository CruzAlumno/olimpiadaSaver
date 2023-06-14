<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pruebas')->truncate();
        foreach (self::$pruebas as $prueba) {
            DB::table('pruebas')->insert([
                'nombre' => $prueba[0],
                'descripcion' => $prueba[1],
                'grado' => $prueba[2],
                'id_olimpiada' => $prueba[3]
            ]);
        }
    }

    private static $pruebas = array(['superior 1', 'Debes de basear datos', 'superior', 1],
                                    ['superior 2', 'HAX HAX HAX HAX HAX HAX HAX HAX', 'superior', 1],
                                    ['superior 3', 'Debes de basear MORE MORE datos', 'superior', 1],
                                    ['modding 1', 'we shouldnt do this', 'modding', 1]
                                   ['modding 2', 'we shouldnt do this', 'modding', 1]
                                   ['modding 3', 'we shouldnt do this', 'modding', 1]);
}
