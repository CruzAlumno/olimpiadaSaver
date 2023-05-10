<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Equipo;
use App\Models\Participante;
use App\Models\ParticipantesEquipo;

class ParticipantesEquiposController extends Controller
{
    public function getParticipantesEquipo($id){
        $listaParticipantes = array();

        $arrayParticipanteEquipo = ParticipantesEquipo::where("id_equipo", $id)->get();

        foreach($arrayParticipanteEquipo as $participanteEquipo){
            array_push($listaParticipantes, Participante::findOrFail($participanteEquipo->id_participante));
        }

        return view("characters", array("listaParticipantes" => $listaParticipantes, "equipo" => Equipo::where('id', $id)->firstOrFail()));
    }
}
