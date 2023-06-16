<div id="secondNavbar">
    <a class="secondLink" href="{{$admin}}/{{$ol}}/{{$gr}}/pruebas">Pruebas</a>
    <a class="secondLink" href="{{$admin}}/{{$ol}}/{{$gr}}/equipos">Equipos</a>
    <a class="secondLink" href="/{{$ol}}/{{$gr}}/resultados">Resultados</a>
</div>

<style>
    #secondNavbar {
        background-color: black;
        color: white;
        display: flex;
        justify-content: safe center;
        border: 5px solid white;
    }

    #secondNavbar .secondLink:link,
    #secondNavbar .secondLink:visited,
    #secondNavbar .secondLink:hover,
    #secondNavbar .secondLink:active{
        text-decoration: none;
        color: white;
    }
</style>
