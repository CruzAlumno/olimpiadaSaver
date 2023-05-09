<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Star Wars</title>

        <link href="{{ asset('css/listas.css') }}" rel="stylesheet" type="text/css" >

        <style>
            body{
                background-color: black;
                color: white;
            }
            main, header{
                display: flex;
                justify-content: flex-start;
            }
            h2{
                border: 2px solid white;
                flex-grow: 1
            }
            .equipo-card{
                display:flex;
                justify-content: space-evenly;
                border: 2px solid white;
            }
        </style>

    </head>
    <body class="antialiased">
        <header>
            <h1>Titulo goes here</h1>
        </header>
        <main id="main_container">
            <div id="medioList" class="list">
                <h2>{{ $equipo->nombreEquipo }}</h2>
                <ul>
                    @foreach ( $listaParticipantes as $participante )
                        <li>{{ $participante->nombre }}</li>
                    @endforeach
                </ul>
                <a href="/">Volver</a>
            </div>
        </main>
    </body>
</html>
