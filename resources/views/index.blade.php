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

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #333;
                font-family: 'Lato', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            header {
                border-top: 3px #F7C64A solid;
                box-shadow: 0 6px 48px rgba(69, 69, 69, 0.08);
                text-align: center;
                padding:25px;
                font-size: large;
            }
            .margium {
                display: block;
                margin: 0px auto;
                max-width: 1000px;
                position: inherit;
            }
            h1 {
                font-size: xx-large;
            }
            .incitation a {
                padding: 9px 25px;
                background-color: #f5f5f5;
                color: #333;
                text-decoration: none;
                margin:5px;
                border-radius: 3px;
            }
            a.plein {
                background-color: #F7C64A ;
            }
            .vide {
                height: 80px;
            }
            #presentation {
                background-image:url("{{ asset('img/premiere.jpg') }}");
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 60px 0px;
            }
            #presentation h1{
                color: #fff;
                max-width: 620px;
            }
            #presentation p{
                color: #fff;
                max-width: 520px;
                margin-bottom: 50px;
                line-height: 175%;
            }
            .surcouche {
                position: absolute;
                top: 0; bottom: 0px ; left: 0; right: 0;
                background-color: rgba(0, 0, 0, 0.6)
            }
        </style>
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
<ul>
    @foreach($guides as $id => $titre)
            <li><a href="/guide/{{$id}}">{{$titre}}</a></li>
    @endforeach
</ul>
@endsection