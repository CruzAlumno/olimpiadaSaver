<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipos')->truncate();
        foreach (self::$equipos as $equipo) {
            DB::table('equipos')->insert([
                'nombreEquipo' => $equipo[0],
                'nombreCentro' => $equipo[1],
                'participantes' => $equipo[2],
                'grado' => $equipo[3],
                'id_olimpiada' => $equipo[4]
            ]);
        }
    }

    private static $equipos = array(['team1', 'CIFP', 'Maria Alba,Cruz Senoa', 'superior', 1],
                                    ['team2', 'FPIC', 'Maria Senoa,Cruz Alba', 'superior', 1]
                                   ['team3', 'FPIC', 'Maria Senoa,Cruz Alba', 'superior', 1]
                                   ['team4', 'FPIC', 'Maria Senoa,Cruz Alba', 'modding', 1]
                                   ['team5', 'FPIC', 'Maria Senoa,Cruz Alba', 'modding', 1]
                                   ['team6', 'FPIC', 'Maria Senoa,Cruz Alba', 'modding', 1]);
}
