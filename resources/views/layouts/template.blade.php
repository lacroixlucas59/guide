<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Guide touristique d'Espagne</title>
        <link rel="icon" type="image/png" href="favicon.png" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
       <!--<link href="{{ asset('../css/design.css') }}" rel="stylesheet">-->
           <!-- Css Styles -->
    <link rel="stylesheet" href="../hazze/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../hazze/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../hazze/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../hazze/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../hazze/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../hazze/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../hazze/css/style.css" type="text/css">


    </head>

    <body>
        <header>  

         <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo"><img src="../hazze/img/logo.png" alt=""><a href="#"> </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="main-menu mobile-menu">
                        <ul>
                            <li ><a href="/">Accueil</a></li>
                            <li><a href="ag">Liste des audioguide</a></li>
                            <li><a href="a-propos">À propos</a></li>
                            <li><a href="ag/create">Login</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->



<div>
    @yield('content')    
</div>

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-option">
                        <div class="fo-logo">
                            <a href="#">
                                <img src="../hazze/img/logo.png" alt="" >
                            </a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="fo-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget fw-links">
                        <h5>Menu</h5>
                        <ul>
                            <li class="Active"><a href="/">Accueil</a></li>
                            <li><a href="ag">Liste des audioguide</a></li>
                            <li><a href="a-propos">À propos</a></li>
                            <li><a href="ag/create">Login</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
        </div>
    </section> 
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>

