@extends('layouts.template')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Guide touristique d'Espagne</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="{{ asset('css/design.css') }}" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <header>Guide touristique d'Espagne</header>
        <section id="presentation">
            
            <div class="surcouche"></div>
            <div class="margium">
                <div class="espacium" style="margin-bottom: 0px;">
                        <div class="vide"></div>
                        <h1>Découvrez nos audioguide sur l'Espagne</h1>
                        <p>Eodem tempore etiam Hymetii praeclarae indolis viri negotium est actitatum. Pro consule regeret Carthaginiensibus victus inopia iam, postea cum provenisset segetum copia, integre sine ulla restituit mora.</p>
                        <div class="incitation">
                            <a class="plein" href="#1">Accéder aux audioguides</a>
                            <a class="ligne" href="/a-propos">En savoir plus</a>
                        </div>
                        <div class="vide"></div>
                        <div class="vide"></div>
                </div>
            </div> 
        
        </section>
    </body>
</html>
@endsection