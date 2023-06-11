<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OlimpiadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('olimpiadas')->truncate();
        foreach (self::$olimpiadas as $olimpiada) {
            DB::table('olimpiadas')->insert([
                'nombre' => $olimpiada[0],
                'edicionOlimpiada' => $olimpiada[1],
                'edicionModding' => $olimpiada[2],
                'cursoOlimpiada' => $olimpiada[3],
                'openDate' => $olimpiada[4],
                'closeDate' => $olimpiada[5],
                'eventDate' => $olimpiada[6]
            ]);
        }
    }

    private static $olimpiadas = array(['ole1', 'IV', 'I', '23-24', '23/06/10', '23/06/15', '23/06/16'],
                                        ['ole2', 'V', 'II', '24-25', '24/06/10', '24/06/15', '24/06/16']);
}
