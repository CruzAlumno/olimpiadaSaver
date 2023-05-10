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
            <h2 class="title" id="Title" data-testid="Title"><span>Login</span></h2>

            <label data-testid="InputEmail-wrapper" class="input-text input-text-InputEmail" for="InputEmail">
                <span class="field-name">Email Address</span>
                <div class="input-wrapper">
                    <input class="input-InputEmail" type="email" id="InputEmail" name="email" placeholder="Email Address" value="">
                </div>
            </label>
            <div id="PasswordPanel" class="password-panel">
                <label class="input-text input-text-password-new" for="password-new">
                    <span data-testid="password-new-title" class="field-name">Password</span>
                    <div data-testid="password-new-container" class="input-wrapper">
                        <input class="input-password-new" type="password" id="password-new" name="password" placeholder="Password" value="">
                    </div>
                </label>
            </div>
            <p class="legal-locale" id="UpdateLegalCountry" data-testid="UpdateLegalCountry">&nbsp;</p>
            <button type="submit" class="btn btn-submit" id="BtnSubmit" data-testid="BtnSubmit">Login</button>
        </form>
        <div class="global-overlay  " role="alert"></div>
    </div>
@stop
