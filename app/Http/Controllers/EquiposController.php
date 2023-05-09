<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquiposController extends Controller
{
    public function getEquipos(){
        return view("listas", array("arrayMedio" => Equipo::where("grado", "medio")->get(), "arraySuperior" => Equipo::where("grado", "superior")->get()));
    }
}
