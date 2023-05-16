<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquiposController extends Controller
{
    public function getEquipos($grado = null){
        $equipos = isset($grado) 
            ? Equipo::where("grado", $grado)->get()
            : Equipo::all();
        return view("listas", array("equipos" => $equipos ));
    }
    public function getResultados($grado){
        $equipos = Equipo
                 ::where('grado', $grado)
                 ->whereNotNull('premio')
                 ->orderBy('premio', 'desc')
                 ->get();
        return view("resultados", array("equipos" => $equipos ));
    }
}
