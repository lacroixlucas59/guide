@extends('layouts.template')

@section('content')
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
                <a href="ag/{{ $agl -> id }}" target="_blank">
                    <img class='visuelvote' src='../{{ $agl -> image }}' alt='illustration'/>
                    <span>{{ $agl -> titre }}</span>
                </a>
                @endforeach
            </div>
        </div> 
    </body>@endsection
</html>
