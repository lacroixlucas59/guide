@extends('layouts.template')

@section('content')
        <section id="presentation" style="background-image:url('../img/calle.jpg');">
            
            <div class="surcouche"></div>
            <div class="margium">
                <div class="espacium" style="margin-bottom: 0px;">
                        <div class="vide"></div>
                        <h1 class="c">Édition des audioguides</h1>
                        <div class="vide"></div>
                </div>
            </div> 
        </section>
        <div class="margium-m">
            <div class='listedit'>
                @foreach ($agl as $agl)
                <div class="elementedit">
                    <a href="ag/{{ $agl -> id }}">
                        <img class='visuelvote' src='../{{ $agl -> image }}' alt='illustration'/>
                        <span>{{ $agl -> titre }}</span>
                    </a>
                    <a href="#nan">
                         <img class="action" src='../{{ 'img/supprimer.svg' }}' alt="#supp"/>
                    </a>
                </div>
                @endforeach
            </div>
        </div> 
    </body>@endsection
</html>
