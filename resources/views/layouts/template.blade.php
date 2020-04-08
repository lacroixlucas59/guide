<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Guide touristique d'Espagne</title>
        <link rel="icon" type="image/png" href="favicon.png" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="{{ asset('../css/design.css') }}" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <header>
            <div class="margeheader">
                <div>Guide touristique d'Espagne</div>
                <div>
                    <a href="/">Accueil</a>
                    <a href="ag">Liste des audioguides</a>
                    <a href="a-propos">À propos</a>
                </div>
            </div>
    </header>

    <div>
    @yield('content')
</div>

      <!-- Page footer --> 
    <footer>
        <div class="sousligne"> </div>
        <p>Tous droits réservés · Maria Morales, Lucas Lacroix  ·  2020</p>
    </footer>

