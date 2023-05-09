<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Star Wars</title>

        <link href="{{ asset('css/listas.css') }}" rel="stylesheet" type="text/css" >

        <style>
            body{
                background-image: url("./img/starBackground.jpg");
                background-repeat: repeat;
                color: white;
            }
            main, header{
                display: flex;
                justify-content: space-evenly;
            }
            h1{
                color: gold;
                background-color: black;
                border: 2px solid white;
            }
            h2{
                border: 2px solid white;
                flex: 1;
                background-color: black;
                color: gold;
                text-align: center;
            }
            .equipo-card{
                display:flex;
                justify-content: space-evenly;
                border: 2px solid white;
                background-color: black;
                margin: 10px;
                padding: 10px;
            }
        </style>

    </head>
    <body class="antialiased">
        <header>
            <h1>Titulo goes now</h1>
        </header>
        <main id="main_container">
            <div id="medioList" class="list">
                <h2>Grado Medio</h2>
                @foreach( $arrayMedio as $equipo )
                <div class="equipo-card">
                    <div class="equipo-content">
                        <h3>{{ $equipo->nombreEquipo }}</h3>
                        <h4>{{ $equipo->nombreCentro }}</h4>
                        <ul>
                            <li>Prueba 1: {{ $equipo->prueba1 }}</li>
                            <li>Prueba 2: {{ $equipo->prueba2 }}</li>
                            <li>Prueba 3: {{ $equipo->prueba3 }}</li>
                            <li>Prueba 4: {{ $equipo->prueba4 }}</li>
                        </ul>
                        <a href="/equipo/{{ $equipo->id }}">Participantes</a>
                    </div>
                    <img alt="image" class="equipo-img" src="{{ $equipo->image }}">
                </div>
                @endforeach
            </div>
            <div id="superiorList" class="list">
                <h2>Grado Superior</h2>
                @foreach( $arraySuperior as $equipo )
                <div class="equipo-card">
                    <div class="equipo-content">
                        <h3>{{ $equipo->nombreEquipo }}</h3>
                        <h4>{{ $equipo->nombreCentro }}</h4>
                        <ul>
                            <li>Prueba 1: {{ $equipo->prueba1 }}</li>
                            <li>Prueba 2: {{ $equipo->prueba2 }}</li>
                            <li>Prueba 3: {{ $equipo->prueba3 }}</li>
                            <li>Prueba 4: {{ $equipo->prueba4 }}</li>
                            <li>Prueba 5: {{ $equipo->prueba5 }}</li>
                        </ul>
                        <a href="/equipo/{{ $equipo->id }}">Participantes</a>
                    </div>
                    <img alt="image" class="equipo-img"  src="{{ $equipo->image }}">
                </div>
                @endforeach
            </div>
        </main>
    </body>
</html>
