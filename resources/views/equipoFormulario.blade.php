@extends('layouts.starwars')
<link rel="stylesheet" href="./index_files/table_div.css" type="text/css">
@section('content')
<form method="POST">
    @csrf
    <h1>Datos de equipo</h1>
    <input type="hidden" id="olId" name="olId" value={{$ol}}>
    <label for="teamName">Nombre del equipo: </label>
    <input type="text" id="teamName" name="teamName" required>
    <label for="teamCenter">Nombre del Centro: </label>
    <input type="text" id="teamCenter" name="teamCenter" required>
    <label for="teamMembers" >Participantes (separa nombres con comas): </label>
    <input type="textarea" id="teamMembers" name="teamMembers" required>
    <label for="teamSub">Grado de participación: </label>
    <select type="date" id="teamSub" name="teamSub">
        <option>Superior</option>
        <option>Medio</option>
        <option>Modding</option>
    </select>
    <input type="submit" value="Crear">
</form>
@if ($created)
<p style="color:green">Su equipo se ha suscrito con éxito</p>
@endif

@stop
