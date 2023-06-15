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
    public function getEquipos($olimpiada, $grado){
        $equiposFormat = array();
        $equipos = isset($olimpiada)
            ? Equipo::where("id_olimpiada", $olimpiada)->where("grado", $grado)->get()
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

        return view("equipos", array("equipos" => $equiposFormat, "olimpiada" => $olimpiada));
    }

    public function getEquiposAdmin($olimpiada, $grado){
        $equiposFormat = array();
        $equipos = isset($olimpiada)
            ? Equipo::where("id_olimpiada", $olimpiada)->where("grado", $grado)->get()
            : Equipo::all();

        foreach ($equipos as $equipo) {
            $participantes = explode(',', $equipo->participantes);
            $pruebas = array();

            $puntuaciones = Puntuacion::where('id_equipo', $equipo->id)->get();

            foreach($puntuaciones as $puntuacion) {
                array_push($pruebas, ['nombre' => Prueba::find($puntuacion->id_prueba)->nombre, 'puntuacion' => $puntuacion->puntuacion, 'id' => $puntuacion->id]);
            }

            array_push($equiposFormat, ['grado' => $grado, 'id_olimpiada' => $olimpiada, 'id' => $equipo->id, 'confirmed' => $equipo->confirmed, 'nombreEquipo' => $equipo->nombreEquipo, 'nombreCentro' => $equipo->nombreCentro, 'participantes' => $participantes, 'pruebas' => $pruebas]);
        }

        return view("equiposAdmin", array("equipos" => $equiposFormat, "olimpiada" => $olimpiada ));
    }

    public function getResultados($olimpiada, $grado){
        $equiposFormat = array();
        $equipos = Equipo::where('grado', $grado)
                 ->where('id_olimpiada', $olimpiada)
                 ->get();
        if (strcmp($grado, "modding") == 0) {
            $equiposFormat = [["puntuacionTotal" => 0], ["puntuacionTotal" => 0], ["puntuacionTotal" => 0]];
            foreach ($equipos as $equipo) {
                $participantes = explode(',', $equipo->participantes);
                $pruebas = array();
                $puntuaciones = Puntuacion::where('id_equipo', $equipo->id)->get();

                $puntuacionTotal = 0;
                foreach($puntuaciones as $puntuacion) {
                    $puntuacionTotal += $puntuacion->puntuacion;
                    array_push($pruebas, ['nombre' => Prueba::find($puntuacion->id_prueba)->nombre, 'puntuacion' => $puntuacion->puntuacion]);
                }

                if($equiposFormat[0]["puntuacionTotal"] < $puntuacionTotal){
                    $equiposFormat[2] = $equiposFormat[1];
                    $equiposFormat[1] = $equiposFormat[0];
                    $equiposFormat[0] = ["puntuacionTotal" => $puntuacionTotal, 'nombreEquipo' => $equipo->nombreEquipo, 'nombreCentro' => $equipo->nombreCentro, 'participantes' => $participantes, 'pruebas' => $pruebas];
                }
                else if($equiposFormat[1]["puntuacionTotal"] < $puntuacionTotal){
                    $equiposFormat[2] = $equiposFormat[1];
                    $equiposFormat[1] = ["puntuacionTotal" => $puntuacionTotal, 'nombreEquipo' => $equipo->nombreEquipo, 'nombreCentro' => $equipo->nombreCentro, 'participantes' => $participantes, 'pruebas' => $pruebas];
                }
                else if($equiposFormat[2]["puntuacionTotal"] < $puntuacionTotal){
                    $equiposFormat[2] = ["puntuacionTotal" => $puntuacionTotal, 'nombreEquipo' => $equipo->nombreEquipo, 'nombreCentro' => $equipo->nombreCentro, 'participantes' => $participantes, 'pruebas' => $pruebas];
                }
            }
            return view("moddingResultados", array("equipos" => $equiposFormat, "olimpiada" => $olimpiada));
        } else if(strcmp($grado, "superior") == 0 or (strcmp($grado, "medio") == 0)) {
            $equiposFormat = [0 => ["puntuacionTotal" => 0, "titulo" => "Ganadores Finales"]];

            $pruebas = Prueba::where('id_olimpiada', $olimpiada)->where('grado', $grado)->get();

            foreach($pruebas as $prueba) {
                $equiposFormat[$prueba->id] = ["puntuacion" => 0, "titulo" => $prueba->nombre];
            }

            foreach ($equipos as $equipo) {
                $participantes = explode(',', $equipo->participantes);
                $pruebas = array();
                $puntuaciones = Puntuacion::where('id_equipo', $equipo->id)->get();

                $puntuacionTotal = 0;
                foreach($puntuaciones as $puntuacion) {
                    $puntuacionTotal += $puntuacion->puntuacion;
                    array_push($pruebas, ['nombre' => Prueba::find($puntuacion->id_prueba)->nombre, 'puntuacion' => $puntuacion->puntuacion]);
                }

                if($puntuacionTotal > $equiposFormat[0]["puntuacionTotal"]){
                    $equiposFormat[0]["puntuacionTotal"] = $puntuacionTotal;
                    $equiposFormat[0]["equipo"] = ['nombreEquipo' => $equipo->nombreEquipo, 'nombreCentro' => $equipo->nombreCentro, 'participantes' => $participantes, 'pruebas' => $pruebas];
                }

                foreach($puntuaciones as $puntuacion){
                    if($equiposFormat[$puntuacion->id_prueba]["puntuacion"] < $puntuacion->puntuacion){
                        $equiposFormat[$puntuacion->id_prueba]["puntuacion"] = $puntuacion->puntuacion;
                        $equiposFormat[$puntuacion->id_prueba]["equipo"] = ['nombreEquipo' => $equipo->nombreEquipo, 'nombreCentro' => $equipo->nombreCentro, 'participantes' => $participantes, 'pruebas' => $pruebas];
                    }
                }

            }

            return view("resultados", array("equipos" => $equiposFormat, "olimpiada" => $olimpiada ));
        }
    }

    public function getEquipoForm($olimpiada){

        return view('equipoFormulario', array('olimpiada' => $olimpiada, 'created' => false));
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

        return view('equipoFormulario', array('olimpiada' => $request->input('olId'),  'created' => true));
    }

    public function confirmEquipo($equipo){
        $confirmEquipo = Equipo::find($equipo);

        $confirmEquipo->confirmed = true;

        $confirmEquipo->save();

        return redirect('/admin/' . $confirmEquipo->id_olimpiada . '/' . $confirmEquipo->grado . '/equipos');
    }

    public function deleteEquipo($equipo){
        $deleteEquipo = Equipo::find($equipo);

        $deleteEquipo->delete();

        return redirect('/admin/' . $deleteEquipo->id_olimpiada . '/' . $deleteEquipo->grado . '/equipos');
    }

    public function changeEquipoScore(Request $request){

        $puntuaciones = Puntuacion::where("id_equipo", $request->input("id_equipo"))->get();

        foreach($puntuaciones as $puntuacion) {
            if ($request->has($puntuacion->id)) {
                $puntuacion->puntuacion = $request->input($puntuacion->id);
                $puntuacion->save();
            }
        }

        $equipo = Equipo::find($request->input("id_equipo"));

        return redirect('/admin/' . $equipo->id_olimpiada . '/' . $equipo->grado . '/equipos');
    }
}
