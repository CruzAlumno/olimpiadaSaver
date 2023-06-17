@extends('layouts.starwars')
<link rel="stylesheet" href="./index_files/table_div.css" type="text/css">
@section('content')
<form method="POST">
    @csrf
    <h1>Crear prueba</h1>
    <input type="hidden" id="testOl" name="testOl" value={{$ol}}>
    <label for="testName">Nombre de la prueba: </label>
    <input type="text" id="testName" name="testName" required>
    <label for="testDesc">Descripcion de la prueba: </label>
    <textarea id="testDesc" name="testDesc" required></textarea>
    <label for="testSub">Grado de prueba: </label>
    <select type="date" id="testSub" name="testSub" style="color:black">
        <option>Superior</option>
        <option>Medio</option>
        <option>Modding</option>
    </select>
    <input type="submit" value="Crear" style="margin-top:5px; color:black">
</form>
@if ($created)
<p style="color:green">La prueba se ha creado con éxito</p>
@endif
@stop
