@extends('layouts.template')
@section('content')<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nos audioguide ─ Guide touristique d'Espagne</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="{{ asset('css/design.css') }}" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
        <header>Guide touristique d'Espagne</header>
        <section id="presentation" style="background-image:url('../img/seville.jpg');">
            
            <div class="surcouche"></div>
            <div class="margium">
                <div class="espacium" style="margin-bottom: 0px;">
                        <div class="vide"></div>
                        <h1 class="c">Nos audioguides</h1>
                        <div class="vide"></div>
                </div>
            </div> 
        </section>
        <div class="margium">
            <div class='liste'>
                @foreach ($agl as $agl)
                <a href="{{ $agl -> id }}" target="_blank">
                    <img class='visuelvote' src='../{{ $agl -> image }}' alt='illustration'/>
                    <span>{{ $agl -> titre }}</span>
                </a>
                @endforeach
            </div>
        </div> 
    </body>
</html>
@endsection