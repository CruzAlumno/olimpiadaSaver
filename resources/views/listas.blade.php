@extends('layouts.starwars')
<link rel="stylesheet" href="./index_files/table_div.css" type="text/css">
@section('content')

@foreach( $equipos as $equipo )
<!-- Inicio del código necesario para visualizar cada película -->
<section class="module display-view display" data-module="display" id="ref-1-2">
    <div class="bound layout-right">
        <div class="blocks-bound">
            <div class="blocks-container ref-1-2">
                <ul class="blocks-list-view active el3_1A">
                    <div class="building-block-config el3_1A films-content    full image-left content-height-fixed ratio-2x1 short     mob-width-full mob-image-top           ">
                        <div class="building-block     ">
                            <div class="building-block-aspect">
                                <div class="building-block-padding">
                                    <div class="building-block-wrapper">
                                        <div class="image-wrapper">
                                            <div class="aspect">
                                                <img
                                                        src="https://lumiere-a.akamaihd.net/v1/images/Star-Wars-Phantom-Menace-I-Poster_f5832812.jpeg?region=0%2C250%2C678%2C340&width=600"
                                                        class="thumb reserved-ratio">
                                            </div>
                                        </div>
                                        <div class="content-wrapper   ">
                                            <div class="bedazzlement"></div>
                                            <div class="content-bumper">
                                                <div class="content-info">
                                                    <h3 class="title">
                                                            <span class="long-title">{{ $equipo->nombreCentro }}</span>
                                                    </h3>
                                                    <div class="desc-sizer">
                                                            <p class="desc">{{ $equipo->nombreEquipo }}</p>
                                                    </div>
                                                    <div class="anchored-text">
                                                        <a href="/films/1/characters">
                                                        <h4 class="category-info"> <span
                                                                class="content-icon films-icon"></span> <span
                                                                class="category-name">Prueba 1</span> {{ $equipo->prueba1 }}</h4>
    
                                                    </div>
                                                    <div class="anchored-text">
                                                        <h4 class="category-info"> <span
                                                                class="content-icon films-icon"></span> <span
                                                                class="category-name">Prueba 2</span> {{ $equipo->prueba2 }}</h4>
                                                    </div>
                                                    <div class="anchored-text">
                                                        <h4 class="category-info"> <span
                                                                class="content-icon films-icon"></span> <span
                                                                class="category-name">Prueba 3</span> {{ $equipo->prueba3 }}</h4>
                                                    </div>
                                                    <div class="anchored-text">
                                                        <h4 class="category-info"> <span
                                                                class="content-icon films-icon"></span> <span
                                                                class="category-name">Prueba 4</span> {{ $equipo->prueba4 }}</h4>
                                                    </div>
                                                    </div>
                                            </div>
                                            <div
                                                class="metadata    mob-name mob-photo mob-date tab-name tab-photo tab-date desktop-name desktop-photo desktop-date   ">
                                                <div class="anchored-text">
                                                    <a href="/equipo/{{ $equipo->id }}">
                                                    <h4 class="category-info"> <span
                                                            class="content-icon films-icon"></span> <span
                                                            class="category-name">Participantes</span> </h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>
@endforeach
<!-- FIN del código necesario para visualizar cada película -->
@stop
