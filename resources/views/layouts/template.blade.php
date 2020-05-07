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
                <div><a href="{{ url('/') }}">Guide touristique d'Espagne</a></div>
                <div>
                    <a href="{{ url('/ag') }}"> Liste des audioguides </a>


                    @if (Auth::check())
                    <a href="{{ url('/creer') }}">Créer</A>
                 
            @endif
                    <a href="{{ url('/a-propos') }}">À propos</a>
                </div>
            </div>
    </header>

    <div>
    @yield('content')
</div>
<div class="margium">
    <div class="auth">
    @if (Auth::check())
            <a href="{{ url('/creer') }}">Créer</A>
                <a href="{{ url('/interface') }}">Gestion des audioguides</A>
            <a href="{{ url('/logout') }}">Déconnection</A>
        @else
            <a href="{{ url('/login') }}">Login</A>
            <a href="{{ url('/register') }}">Register</A>
    @endif
    </div>
        
</div>
      <!-- Page footer --> 
    <footer>
        <div class="sousligne"> </div>
        <p>Tous droits réservés · Maria Morales, Lucas Lacroix  ·  2020</p>
    </footer>

