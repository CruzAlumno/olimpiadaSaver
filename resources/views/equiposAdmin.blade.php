@extends('layouts.starwars')
<link rel="stylesheet" href="./index_files/table_div.css" type="text/css">
@section('content')

@include('includes.secondNavbar')

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
                                        <div class="content-wrapper">
                                            <div class="bedazzlement"></div>
                                            <div class="content-bumper">
                                                <div class="content-info">
                                                    <h3 class="title">
                                                            <span class="long-title">{{ $equipo['nombreEquipo'] }}</span>
                                                    </h3>
                                                    <div class="desc-sizer" style="clear:both">
                                                            <p class="desc">{{ $equipo['nombreCentro'] }}</p>
                                                    </div>
                                                    <div >
                                                        <div>
                                                            <form method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id_equipo" id="id_equipo" value={{ $equipo['id'] }}>
                                                                <h4>Puntuaciones</h4>
                                                                @foreach( $equipo['pruebas'] as $prueba )
                                                                <div class="anchored-text">
                                                                    <h4 class="category-info"> <span
                                                                            class="content-icon films-icon"></span> <span
                                                                            class="category-name">{{ $prueba["nombre"] }}</span> <input style="all:initial; background-color:white" id={{ $prueba["id"] }} name={{ $prueba["id"] }} type="number" value={{ $prueba["puntuacion"] }} /></h4>


                                                                </div>
                                                                @endforeach
                                                                <button type="submit" style="color:green">Actualizar puntuaciones</button>
                                                            </form>
                                                        </div>
                                                        <div style="float:right">
                                                            <h4>Miembros</h4>
                                                            @foreach( $equipo['participantes'] as $participante )
                                                            <div class="anchored-text">
                                                                <h4 class="category-info">
                                                                    <span class="content-icon films-icon"></span>
                                                                    <span class="category-name">{{ $participante }}</span></h4>

                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="metadata    mob-name mob-photo mob-date tab-name tab-photo tab-date desktop-name desktop-photo desktop-date   ">
                                                @if ($equipo['confirmed'])
                                                @else
                                                <div class="anchored-text">
                                                    <a href="/admin/confirm/{{ $equipo['id'] }}">
                                                    <h4 class="category-info"> <span
                                                            class="content-icon films-icon"></span> <span
                                                            class="category-name">Confirmar</span> </h4>
                                                    </a>
                                                </div>
                                                @endif
                                                <div class="anchored-text" style="color:red">
                                                    <a href="/admin/delete/equipo/{{ $equipo['id'] }}" style="color:red">
                                                    <h4 class="category-info" style="color:red"> <span
                                                            class="content-icon films-icon"></span> <span
                                                            class="category-name" style="color:red">Borrar</span> </h4>
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
