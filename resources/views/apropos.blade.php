@extends('layouts.template')

@section('content')
<section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-option">
                        <a href="/">Accueil</a>
                        <span>À propos</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- About Us Section Begin -->
    <section class="about-us-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="as-pic">
                    <img src="../img/seville.jpg">    
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="as-text ap-text">
                        <div class="section-title">
                            <span>À propos</span>
                            <h2>Ag</h2>   
                        </div>
                        <p class="f-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. </p>
                        <p class="s-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod.Tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section Begin -->
    <section class="callto-section set-bg" data-setbg="../img/premiere.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="ctc-text">
                        <h2>We Create Trends For The World</h2>
                        <p>Donec faucibus consequat ante. Mauris eget mi sed ex efficitur porta id non quam. Cras
                            aliquam turpis tellus, quis laoreet lacus congue sed. Nullam at est quis urna vestibulum
                            interdum. Praesent auctor leo ut massa ultrices tempor.</p>
                        <a href="#" class="primary-btn ctc-btn">Work With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->
    </body>@endsection
</html>

