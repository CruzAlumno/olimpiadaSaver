@extends('layouts.starwars')
<link rel="stylesheet" href="./index_files/table_div.css" type="text/css">
@section('content')

<form method="POST">
    @csrf
    <h1>Crear Nueva Olimpiada</h1>
    <label for="olName">Nombre de la olimpiada: </label>
    <input type="text" id="olName" name="olName" required>
    <label for="olEd">Edición de olimpiada: </label>
    <input type="text" id="olEd" name="olEd" required>
    <label for="olEdMod">Edición de modding: </label>
    <input type="text" id="olEdMod" name="olEdMod" required>
    <label for="olCur">Curso Escolar: </label>
    <input type="text" id="olCur" name="olCur" required>
    <label for="olSubStart">Fecha de apertura de subscripción: </label>
    <input type="date" id="olSubStart" name="olSubStart" required>
    <label for="olSubFinish">Fecha final de subscripción: </label>
    <input type="date" id="olSubFinish" name="olSubFinish" required>
    <label for="olReal">Fecha de realización: </label>
    <input type="date" id="olReal" name="olReal" required>
    <input type="submit" value="Crear">
</form>

@stop
