<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Equipo;
use App\Models\Prueba;
use App\Models\Puntuacion;
use App\Models\Olimpiada;

class EquiposController extends Controller
{
    public function getEquipos($olimpiada = null){
        $equiposFormat = array();
        $equipos = isset($olimpiada)
            ? Equipo::where("id_olimpiada", $olimpiada)->get()
            : Equipo::all();

        foreach ($equipos as $equipo) {
            $participantes = explode(',', $equipo->participantes);
            $pruebas = array();

            $puntuaciones = Puntuacion::where('id_equipo', $equipo->id)->get();

            foreach($puntuaciones as $puntuacion) {
                array_push($pruebas, ['nombre' => Prueba::find($puntuacion->id_prueba)->nombre, 'puntuacion' => $puntuacion->puntuacion]);
            }

            array_push($equiposFormat, ['nombreEquipo' => $equipo->nombreEquipo, 'nombreCentro' => $equipo->nombreCentro, 'participantes' => $participantes, 'pruebas' => $pruebas]);
        }

        return view("listas", array("equipos" => $equiposFormat ));
    }

    public function getResultados($grado, $olimpiada){
        $equiposFormat = array();
        $equipos = Equipo::where('grado', $grado)
                 ->where('id_olimpiada', $olimpiada)
                 ->get();
        if ($grado = 'modding') {
            $equiposFormat = [['1º lugar', []], ['2º lugar', []], ['3º lugar', []]];
            foreach ($equipos as $equipo) {
                $participantes = explode(',', $equipo->participantes);
                $pruebas = array();
                $puntuaciones = Puntuacion::where('id_equipo', $equipo->id)->get();
                
                $puntuacionTotal = 0;
                foreach($puntuaciones as $puntuacion) {
                    $puntuacionTotal += $puntuacion->puntuacion;
                    array_push($pruebas, ['nombre' => Prueba::find($puntuacion->id_prueba)->nombre, 'puntuacion' => $puntuacion->puntuacion]);
                }
                
                foreach($equiposFormat as &$equipoF) {
                }
            }
        } else {
        }
    }

    public function getEquipoForm(){
        $lastOlimpiadaId = Olimpiada::latest()->first()->id;

        return view('equipoFormulario', array('lastOlimpiadaId' => $lastOlimpiadaId));
    }

    public function createEquipo(Request $request){
        $newEquipo = new Equipo;

        $newEquipo->nombreEquipo = $request->input('teamName');
        $newEquipo->nombreCentro = $request->input('teamCenter');
        $newEquipo->participantes = $request->input('teamMembers');
        $newEquipo->grado = $request->input('teamSub');
        $newEquipo->id_olimpiada = $request->input('olId');

        $newEquipo->save();

        $pruebas = Prueba::where('id_olimpiada', $request->input('olId'))->where('grado', $request->input('teamSub'))->get();

        foreach($pruebas as $prueba){
            $puntuacion = new Puntuacion;

            $puntuacion->id_prueba = $prueba->id;
            $puntuacion->id_equipo = $newEquipo->id;
            $puntuacion->puntuacion = 0;

            $puntuacion->save();
        }

        return redirect('equipos/' . $request->input("olId"));
    }
}
