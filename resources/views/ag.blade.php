@extends('layouts.template')
@section('content')
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
        <div style="position:relative; margin-top:70px;">
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