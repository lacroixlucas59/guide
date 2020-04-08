@extends('layouts.template')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Audio guide ─ Guide touristique d'Espagne</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="{{ asset('css/design.css') }}" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
        <header>Guide touristique d'Espagne</header>
        <section id="presentation" style="background-image:url('../{{$agn -> image}}');">
            
            <div class="surcouche"></div>
            <div class="margium">
                <div class="espacium" style="margin-bottom: 0px;">
                        <div class="vide"></div>
                        <h1 class="c">{{$agn -> titre}}</h1>
                        <div class="vide"></div>
                </div>
            </div> 
        </section>
        <div class="margium-s">
            <p>
                {{$agn -> contenu}}  
            </p>
        </div> 
    </body>
</html>
@endsection