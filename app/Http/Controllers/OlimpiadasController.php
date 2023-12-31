<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Olimpiada;

class OlimpiadasController extends Controller
{
    public function getOlimpiadas(){
        $olimpiadas = Olimpiada::all();

        return view("olimpiadas", array("olimpiadas" => $olimpiadas ));
    }

    public function logoutAdmin(){
        Auth::logout();

        Log::info("here");

        return redirect('/');
    }

    public function createOlimpiada(Request $request) {
        $newOlimpiada = new Olimpiada;

        $newOlimpiada->nombre = $request->input('olName');
        $newOlimpiada->edicionOlimpiada = $request->input('olEd');
        $newOlimpiada->edicionModding = $request->input('olEdMod');
        $newOlimpiada->cursoOlimpiada = $request->input('olCur');
        $newOlimpiada->openDate = $request->input('olSubStart');
        $newOlimpiada->closeDate = $request->input('olSubFinish');
        $newOlimpiada->eventDate = $request->input('olReal');

        $newOlimpiada->save();

        return redirect('/');
    }
}
