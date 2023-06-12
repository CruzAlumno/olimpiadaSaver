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
    public function getPruebas($olimpiada = null){
        $pruebas = isset($olimpiada)
            ? Prueba::where("id_olimpiada", $olimpiada)->get()
            : Prueba::all();

        return view("pruebas", array("pruebas" => $pruebas ));
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

        return redirect('/pruebas/' . $request->input("testOl"));
    }
}
