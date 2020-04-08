@extends('layouts.template')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Hero -->
<header id="header_page">
     <div class="bg-img-top-sect wptg-edit-hook" id="header-simple-app">
      <div class="main-container container wptg-image-background " style="background-image: url(img/dummy/background.jpg);">
       <div class="overlay-bg"></div>
       <div class="container">
        <div class="row">
         <div class="col-12 col-sm-6" style="padding: 100px 0;">
          <div class="text-box">
           <h1 class="header-title p-3 text-left wptg-title">
            <b>TravelBlog</b>
           </h1>
           <p class="header-desc p-3 text-left mb-4 wptg-description">
            Traveling will take you to new adventures, new people, to grow as a person and possibly have an encounter with yourself. Just take the next step, set destination, and we'll take care of giving you some tips and hints on how to overcome possible obstacles.
           </p>
           <a class="btn btn-secondary m-3" href="#">Button 1</a>
           <a class="btn btn-secondary m-3" href="#">Button 1</a>
          </div>
         </div>
         <div class="col-12 col-sm-6 text-center pt-3">
          <img src="https://www.wpthemegenerator.com/v2/img/mockup/iphone-2.png" />
          <div class="mockup-section">
           <div class="mockup-bg wptg-image-background" style="background-image: url(img/dummy/background.jpg); "></div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
       <polygon points="0,100 100,100 100,0" />
      </svg>
     </div>
    </header>

<!-- Experiences-->
  <div id="main_page">
     <div class="row">
      <div id="main_content" class="col-10 col-sm-10 wptg-container">
       <section class="main-section-features wptg-parent wptg-edit-hook" id="main-section-cards">
        <div class="main-section-cards-container">

         <div id="category_title--top"><h2> Expériences </h2></div>

                  <div class="row main-section-cards-row">
          <div class="col-sm-6 col-md-3 col-6 wptg-category-ind">
           <a href="#">
            <div class="category-box">
             <div class="box-img">
              <img data-image="category" class="img-fluid category-img-1" src="img/dummy/category_0.jpg" />
             </div>
             <h4 class="category-title wptg-category-title">Patrimonie Mondial</h4>
            </div>
           </a>
          </div>
          <div class="col-sm-6 col-md-3 col-6 wptg-category-ind">
           <a href="#">
            <div class="category-box">
             <div class="box-img">
              <img data-image="category" class="img-fluid category-img-1" src="img/dummy/category_1.jpg" />
             </div>
             <h4 class="category-title wptg-category-title"> Gastronomie </h4>
            </div>
           </a>
          </div>

          <div class="col-sm-6 col-md-3 col-6 wptg-category-ind">
           <a href="#">
            <div class="category-box">
             <div class="box-img">
              <img data-image="category" class="img-fluid category-img-1" src="img/dummy/category_2.jpg" />
             </div>
             <h4 class="category-title wptg-category-title">Festivals</h4>
            </div>
           </a>
          </div>

          <div class="col-sm-6 col-md-3 col-6 wptg-category-ind">
           <a href="#">
            <div class="category-box">
             <div class="box-img">
              <img data-image="category" class="img-fluid category-img-1" src="img/dummy/category_3.jpg" />
             </div>
             <h4 class="category-title wptg-category-title"> Aventure </h4>
            </div>
           </a>
          </div>
         </div>
        </div>
       </section>
      </div>
     </div>
<!-- Info -->
     <div class="row">
      <div id="action_content" class="col-12 col-sm-12">
       <section class="wptg-parent wptg-edit-hook" id="action-panorama">
        <div class="action-panorama-container">
         <div class="action-panorama-main-content">
          <h2 class="panorama-title"> Pour une expérience complète</h2>
          <p class="panorama-subtitle"> Coucou! l'audioguide c'est la meilleur de vos options</p>
          <a href="contact us" class="panorama-button"> Détails </a>
         </div>
        </div>
       </section>
      </div>
     </div>



<!-- Livres -->
     <main id="content" class="row">
      <div id="wptg-main-content" class="col-xs-12 col-sm-12 col-md-8">
       <section class="container wptg-parent wptg-edit-hook" id="section-book-post-grid">
        <div class="book-posts-main row">
         <div class="wptg-post-ind book-post-ind col-12 col-sm-6 col-md-6 col-lg-4">
          <figure class="book">
           <ul class="hardcover_front">
            <li>
             <img class="img-fluid wptg-post-img" src="img/dummy/post_3.jpg" data-image="post" />
            </li>
            <li></li>
           </ul>
           <ul class="page">
            <li></li>
            <li>
             <div class="book-main-content">
              <a href="#" title="Your Post Title" class="hoverable-post wptg-link-post">
               <h3 class="book-post-title wptg-post-title">
                Hitchhiking Around The World
               </h3>
              </a>
              <a class="btn-book-more wptg-view-more-btn" href="#">view more</a>
             </div>
            </li>
            <li></li>
            <li></li>
           </ul>
           <ul class="hardcover_back">
            <li></li>
            <li></li>
           </ul>
           <ul class="book_spine">
            <li></li>
            <li></li>
           </ul>
          </figure>
         </div>
         <div class="wptg-post-ind book-post-ind col-12 col-sm-6 col-md-6 col-lg-4">
          <figure class="book">
           <ul class="hardcover_front">
            <li>
             <img class="img-fluid wptg-post-img" src="img/dummy/post_5.jpg" data-image="post" />
            </li>
            <li></li>
           </ul>
           <ul class="page">
            <li></li>
            <li>
             <div class="book-main-content">
              <a href="#" title="Your Post Title" class="hoverable-post wptg-link-post">
               <h3 class="book-post-title wptg-post-title">
                Rio de Janeiro Tours and Attractions
               </h3>
              </a>
              <a class="btn-book-more wptg-view-more-btn" href="#">view more</a>
             </div>
            </li>
            <li></li>
            <li></li>
           </ul>
           <ul class="hardcover_back">
            <li></li>
            <li></li>
           </ul>
           <ul class="book_spine">
            <li></li>
            <li></li>
           </ul>
          </figure>
         </div>
        </div>
       </section>
      </div>

<!-- Sidebar -->
      <div id="main_sidebar" class=" col-sm-4 col-md-4 wptg-sidebar wptg-sidebar-center d-none d-sm-block">
       <div id="wptg-main-sidebar" class="wptg-sidebar-content">
        <div class="sidebar-widget-area">
         <h2 class="sidebar-widget-title">
          Recent Posts
         </h2>
         <ul>
          <li><a href="#">World common tendencies</a>
           <span class="post-date">December 17, 2018</span>
          </li>
          <li>
           <a href="#">How to be a good traveller</a>
           <span class="post-date">October 31, 2018</span>
          </li>
          <li><a href="#">Exploring the netherlands</a>
           <span class="post-date">September 8, 2018</span>
          </li>
          <li>
           <a href="#">Virtual Reality Headsets</a>
           <span class="post-date">April 2, 2018</span>
          </li>
         </ul>
        </div>
       </div>
      </div>
     </main>

     <div id="testimonials_content">
      <section id="testimonial-cards" class="wptg-edit-hook wptg-parent">
       <div class="wptg-container">
        <div class="row testimonial-cards-container">
         <div class="col col-md-4 col-card">
          <div class="testimonial-card">
           <div class="testimonial_quote">
            <p>
             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
           </div>
           <div class="testimonial-card-profile">
            <img class="profile-img" src="img/dummy/people/people_0.jpg" />
            <div class="profile-text">
             <h5>John Doe</h5>
            </div>
           </div>
          </div>
         </div>
         <div class="col col-md-4 col-card">
          <div class="testimonial-card">
           <div class="testimonial_quote">
            <p>
             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
           </div>
           <div class="testimonial-card-profile">
            <img class="profile-img" src="img/dummy/people/people_1.jpg" />
            <div class="profile-text">
             <h5>John Doe</h5>
            </div>
           </div>
          </div>
         </div>
         <div class="col col-md-4 col-card">
          <div class="testimonial-card">
           <div class="testimonial_quote">
            <p>
             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
           </div>
           <div class="testimonial-card-profile">
            <img class="profile-img" src="img/dummy/people/people_2.jpg" />
            <div class="profile-text">
             <h5>John Doe</h5>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </section>
     </div>
     <div id="people_content"></div>
     <div id="pricing_content"></div>
    </div>
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
   </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="plugins/slick/slick.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
 </body>
</html>
@endsection