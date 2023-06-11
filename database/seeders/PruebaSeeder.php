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
        foreach (self::$equipos as $equipo) {
            DB::table('pruebas')->insert([
                'nombre' => $equipo[0],
                'descripcion' => $equipo[1],
                'grado' => $equipo[2],
                'id_olimpiada' => $equipo[3]
            ]);
        }
    }

    private static $equipos = array(['Bases de datos', 'Debes de basear datos', 'superior', 1],
                                    ['Haxxzor time', 'HAX HAX HAX HAX HAX HAX HAX HAX', 'modding', 2],
                                    ['Bases de datos', 'Debes de basear MORE MORE datos', 'medio', 1],
                                    ['Death Battle', 'we shouldnt do this', 'medio', 2]);
}
