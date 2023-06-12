@extends('layouts.starwars')
<link rel="stylesheet" href="./index_files/table_div.css" type="text/css">
@section('content')
<form method="POST">
    @csrf
    <h1>Crear prueba</h1>
    <label for="testName">Nombre de la prueba: </label>
    <input type="text" id="testName" name="testName" required>
    <label for="testDesc">Descripcion de la prueba: </label>
    <input type="text" id="testDesc" name="testDesc" required>
    <label for="testSub">Grado de prueba: </label>
    <select type="date" id="testSub" name="testSub">
        <option>Superior</option>
        <option>Medio</option>
        <option>Modding</option>
    </select>
    <select type="date" id="testOl" name="testOl">
    @foreach ($olimpiadas as $olimpiada)
        <option value={{$olimpiada->id}}>{{$olimpiada->nombre}}-{{$olimpiada->edicionOlimpiada}}</option>
    @endforeach
    </select>
    <input type="submit" value="Crear">
</form>

@stop
