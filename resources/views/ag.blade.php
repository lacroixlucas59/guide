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
        <div style="position:relative">
        <div class="margium-s">
            <div id="lecteur" onclick="joue()"></div>
            <div style="display: none;">
                <audio id="musique" controls>
                    <source src="../../d/{{$agn -> audio}}" type="audio/mp3">
                Error
                </audio>
            </div>
            <p>
                {{$agn -> contenu}}  
            </p>
        </div> 
    </div> 

        <script>
        let etat = "en pause";
        let niveau = 1;
        let player = document.querySelector("#musique");

        function joue() {
        let player = document.querySelector("#musique");
        if (etat == "en pause") {
            player.play();
            document.getElementById("lecteur").style.backgroundPositionY = '60px';
            etat = "en cours";
            return
        }
        if (etat == "en cours") {
            player.pause();
            document.getElementById("lecteur").style.backgroundPositionY = '0px';
            etat = "en pause";
        }
        }

    </script>
    </body>
</html>
@endsection