<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Equipo;
use App\Models\Prueba;
use App\Models\Puntuacion;
use App\Models\Olimpiada;

class PruebasController extends Controller
{
    public function getPruebas($olimpiada, $grado){
        $pruebas = Prueba::where("id_olimpiada", $olimpiada)->where("grado", $grado)->get();

        return view("pruebas", array("pruebas" => $pruebas ));
    }

    public function getPruebasAdmin($olimpiada, $grado){
        $pruebas = Prueba::where("id_olimpiada", $olimpiada)->where("grado", $grado)->get();

        return view("pruebasAdmin", array("pruebas" => $pruebas ));
    }

    public function deletePrueba($prueba){
        $deletePrueba = Prueba::find($prueba);

        $deletePrueba->delete();

        return redirect('/admin/' . $deletePrueba->id_olimpiada . '/' . $deletePrueba->grado . '/pruebas'); 
    }

    public function getPruebaForm(){
        $olimpiadas = Olimpiada::all();

        return view('pruebaFormulario', array('olimpiadas' => $olimpiadas));
    }

    public function createPrueba(Request $request){
        $newPrueba = new Prueba;

        $newPrueba->nombre = $request->input('testName');
        $newPrueba->descripcion = $request->input('testDesc');
        $newPrueba->grado = $request->input('testSub');
        $newPrueba->id_olimpiada = $request->input('testOl');

        $newPrueba->save();

        $equipos = Equipo::where('id_olimpiada', $newPrueba->id_olimpiada)->where('grado', $newPrueba->grado)->get();

        foreach($equipos as $equipo){
            $puntuacion = new Puntuacion;

            $puntuacion->id_prueba = $newPrueba->id;
            $puntuacion->id_equipo = $equipo->id;
            $puntuacion->puntuacion = 0;

            $puntuacion->save();
        }

        return redirect('admin/pruebas/' . $request->input("testOl"));
    }
}
