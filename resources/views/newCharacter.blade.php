@extends('layouts.starwars')

<link rel="stylesheet" href="./index_files/newCharacter.css" type="text/css">
@section('content')

    <div class="view view-starry-night">
        <form class="form-section registration" novalidate="">
            <header class="header registration">
                <div data-testid="registration-logo" id="logo" class="logo logo-primary" role="img"
                    aria-label="Disney account"
                    style="background-image: url(&quot;/v4/asset/images/localized/disney-en-US.png&quot;);">StarWars Character
                </div>
            </header>
            <h2 class="title" id="Title" data-testid="Title"><span>Create Character</span></h2>
            <label data-testid="InputName-wrapper" class="input-text input-text-InputName displayed" for="InputName">
                <span class="field-name">Name</span>
                <div class="input-wrapper">
                    <input class="input-InputName" type="text" id="InputName" name="InputName" placeholder="Name" value="">
                </div>
            </label>
            <label data-testid="InputBirthYear-wrapper" class="input-text input-text-InputBirthYear" for="InputBirthYear">
                <span class="field-name">Birth Year</span>
                <div class="input-wrapper">
                    <input class="input-InputBirthYear" type="text" id="InputBirthYear" name="InputBirthYear" placeholder="Birth Year" value="">
                </div>
            </label>
            <label data-testid="InputPlanetId-wrapper" class="input-text input-text-InputPlanetId" for="InputPlanetId">
                <span class="field-name">Planet Id</span>
                <div class="input-wrapper">
                    <input class="input-InputPlanetId" type="number" id="InputPlanetId" name="InputPlanetId" placeholder="Planet Id" value="">
                </div>
            </label>
            <div id="URLPanel" class="url-panel">
                <label class="input-text input-text-url-new" for="url-new">
                    <span data-testid="url-new-title" class="field-name">URL</span>
                    <div data-testid="url-new-container" class="input-wrapper">
                        <input class="input-url-new" type="url" id="url-new" name="url-new" placeholder="URL" value="">
                    </div>
                </label>
            </div>

            <p class="legal-locale" id="UpdateLegalCountry" data-testid="UpdateLegalCountry">&nbsp;</p>
            <button type="submit" class="btn btn-submit" id="BtnSubmit" data-testid="BtnSubmit">Create Character</button>
        </form>
        <div class="global-overlay  " role="alert"></div>
    </div>
@stop
