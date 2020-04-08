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
    <footer id="footer_page">
     <div id="footer-adagio" class="wptg-edit-hook">
      <hr class="footer-adagio-stylizer" />
      <div class="footer-adagio-content">
       <hr class="footer-adagio-stylizer" />
       <div class="row">
        <div class="col-xs-12 col-sm-12">
         <div class="menu-social">
          <ul class="menu-items adagio-menu-social ">
           <li><a class="wptg-twitter fa fa-twitter" href="#"></a></li>
           <li><a class="wptg-instagram fa fa-instagram" href="#"></a></li>
           <li><a class="wptg-facebook fa fa-facebook" href="#"></a></li>
          </ul>
         </div>
        </div>
       </div>
       <div class="container">
        <div class="adagio-footer-content">
         <div class="row justify-content-between">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
           <div class="adagio-left">
            <div class="widget-area">
             <div class="dummy-area">
              <h3 class="adagio-widget-title">
               Footer Menu
              </h3>
              <ul class="menu">
               <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-45"><a href="/">Accueil</a></li>
               <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-91"><a href="/a-propos">À propos</a></li>
               <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-90"><a href="/agliste">Liste des audioguides
          </a></a></li>
              </ul>
             </div>
            </div>
           </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 push-lg-6 push-md-6">
           <div class="adagio-right">
            <div class="widget-area">
             <div class="dummy-area">
              <h3 class="adagio-widget-title">
               Text Widget
              </h3>
              <p>
               Phasellus fringilla vehicula egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam gravida porta tellus sit amet.
              </p>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="adagio-footer-note"></div>
      </div>
     </div>
    </footer>

