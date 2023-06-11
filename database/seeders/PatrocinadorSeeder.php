<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatrocinadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patrocinadores')->truncate();
        foreach (self::$patrocinadores as $patrocinador) {
            DB::table('patrocinadores')->insert([
                'nombre' => $patrocinador[0],
                'logotipo' => $patrocinador[1],
                'id_prueba' => $patrocinador[2]
            ]);
        }
    }

    private static $patrocinadores = array(['Coca Cola', 'default', 1],
                                        ['Pepsi', 'default', 2],
                                        ['Raid Shadow Legends', 'default', 3],
                                        ['Atlus', 'default', 4]);
}
