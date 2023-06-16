@extends('layouts.starwars')
<link rel="stylesheet" href="./index_files/table_div.css" type="text/css">
@section('content')

@include('includes.secondNavbar')

@foreach( $pruebas as $prueba )
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
                                                        src="{{ URL::to('/') }}/img/bullseye-solid.svg"
                                                        class="thumb reserved-ratio">
                                            </div>
                                        </div>
                                        <div class="content-wrapper">
                                            <div class="bedazzlement"></div>
                                            <div class="content-bumper">
                                                <div class="content-info">
                                                    <h3 class="title">
                                                            <span class="long-title">{{ $prueba->nombre }}</span>
                                                    </h3>
                                                    <div class="desc-sizer">
                                                            <p class="desc">{{ $prueba->descripcion }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="metadata    mob-name mob-photo mob-date tab-name tab-photo tab-date desktop-name desktop-photo desktop-date   ">
                                                <div class="anchored-text">
                                                    <a href="/equipo/{{ $prueba->id }}">
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
