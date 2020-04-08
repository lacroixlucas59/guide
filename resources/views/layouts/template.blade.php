<!DOCTYPE html>
<html lang="fr">

    <head>
    <title>Guide touristique d'Espagne</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <meta name="description" content="laravel" />
    <meta name="author" content="lpCreaweb20192020" />
            
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700&amp;subset=greek,greek-ext,latin-ext" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="plugins/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="plugins/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/slick/slick.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <!-- Page preloder -->
    <div> <id="preloder">
        <div class="loader"></div>
    </div>

    <!-- header -->
    <div class="main_page_wrapper" id="main_page_wrapper">
   <div id="editable_page">
    <div id="navbar_container" class="wptg-fixed-nav">
     <div class="navbar-wp-coup">
      <nav class="navbar navbar-expand-lg navbar-light bg-faded navbar-coup wptg-navbar wptg-edit-hook">
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
         <li class="nav-item active">
          <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item"><a class="nav-link" href="/a-propos">À propos</a></li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/agliste" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Liste des audioguides
          </a>
          <ul class="dropdown-menu dropdown-menu-left">
           <li><a class="dropdown-item" href="#">guide 1</a></li>
           <li><a href="#" class="dropdown-item">guide 2</a></li>
           </li>
          </ul>
         </li>
        </ul>
        <a class="navbar-brand" style="margin-right:15;" href="#"><div class="navbar-brand-icon">
            <text class="title_brand" transform="matrix(1 0 0 1 48 25)">TravelBlog</text>
            <path class="element_inner" d="M33.6,24.5c0.9,0,2.3,0.8,3.6,1.9V15.9H8.3v20.5
		C13.2,35.6,30.3,24.5,33.6,24.5z M13.2,18.4c1.3,0,2.4,1.1,2.4,2.4c0,1.3-1.1,2.4-2.4,2.4c-1.3,0-2.4-1.1-2.4-2.4
		C10.8,19.5,11.8,18.4,13.2,18.4z" />
            <path style="opacity:0.8;fill:#231F20;" d="M42,40.2H3.5v-6.1h3.9c3.7,0,21.8-12.1,26.1-12.1c2,0,4.4,1.7,6,3.2V13.5H5.9v18.2H3.5
		V11.1H42V40.2z M5.9,37.8h33.7v-9.2c-1.7-1.8-4.6-4.1-6-4.1c-3.2,0-21.6,12.1-26.1,12.1H5.9V37.8z M13.2,25.6
		c-2.7,0-4.8-2.2-4.8-4.8c0-2.7,2.2-4.8,4.8-4.8c2.7,0,4.8,2.2,4.8,4.8C18,23.5,15.8,25.6,13.2,25.6z M13.2,18.4
		c-1.3,0-2.4,1.1-2.4,2.4c0,1.3,1.1,2.4,2.4,2.4c1.3,0,2.4-1.1,2.4-2.4C15.6,19.5,14.5,18.4,13.2,18.4z" /></g></svg></div>	
	</a>
       </div>
      </nav>
     </div> 

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
               <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-45"><a href="http://demo.vivathemes.com/themes/elixir/">Home</a></li>
               <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-91"><a href="http://demo.vivathemes.com/themes/adagio/blog/">Blog</a></li>
               <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-90"><a href="http://demo.vivathemes.com/themes/adagio/portfolio/">Portfolio</a></li>
               <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-106"><a href="http://demo.vivathemes.com/themes/adagio/contact/">Contact</a></li>
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

