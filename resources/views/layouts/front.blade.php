<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Metas -->
      <meta charset="utf-8">
      <title>Banco de Chile</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Css -->
      <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
      <link href="{{ asset('css/base.css') }}" rel="stylesheet" type="text/css" media="all"/>
      <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" media="all"/>
      <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css"  media="all" />
      <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css"  media="all" />
      <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css"  media="all" />
      <link href="https://fonts.googleapis.com/css?family=Dosis:100,300,400,600,700" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,300,400,400i,600,700,800" rel="stylesheet">
      <link rel="shortcut icon" href="https://portales.bancochile.cl/uploads/000/000/015/3328d923-73b6-4acd-a87f-65526e65ba78/C32x32/favicon.ico">
   </head>
   <body>
      <!-- Preloader -->
      <div class="loader">
         <!-- Preloader inner -->
         <div class="loader-inner">
            <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="http://www.w3.org/2000/svg">
               <circle class="spinner" cx="50" cy="50" r="21" fill="#13181d" stroke-width="2"/>
            </svg>
         </div>
         <!-- End preloader inner -->
      </div>
      <section class="hero">
            <!--Main slider-->
            <div class="main-slider slider flexslider">
               <ul class="slides">
                  <li>
                     <div class="background-img overlay zoom">
                        <img src="{{ asset('img/bg1.jpg') }}" alt="">
                     </div>
                     <!--Container-->
                     <div class="container hero-content">
                        <!--Row-->
                        <div class="row">
                           <div class="col-sm-12 text-center">
                              <!--Inner hero-->
                              <div class="inner-hero">
                                 <div class="back-rect"></div>
                                 <h1 class="large text-white uppercase mb-0">welcome to mousiqua</h1>
                                 <h5 class="mb-0 text-white uppercase">Music Band and Musician Bootstrap Template</h5>
                                 <div class="front-rect"></div>
                                
                              </div>
                           </div>
                           <!--End row-->
                        </div>
                        <!--End container-->
                     </div>
                     <!--End inner hero-->
                  </li>
                  <li>
                     <div class="background-img overlay zoom">
                        <img src="{{ asset('img/bg2.jpg') }}" alt="">
                     </div>
                     <!--Container-->
                     <div class="container hero-content">
                        <!--Row-->
                        <div class="row">
                           <div class="col-sm-12 text-center">
                              <!--Inner hero-->
                              <div class="inner-hero">
                                 <h1 class="large text-white uppercase mb-0">Inscribete</h1>
                                 <h5 class="mb-0 text-white uppercase">New Album Available Everywhere</h5>
                                 <a class="btn btn-primary uppercase with-ico border-3 mt-5" href="#registro">Registrate Aquí</a>
                              </div>
                           </div>
                           <!--End row-->
                        </div>
                        <!--End container-->
                     </div>
                     <!--End inner hero-->
                  </li>
               </ul>
            </div>
            <!--End main slider-->
            <!--Header-->
            <header class="header default">
               <div class=" left-part">
                  <a class="logo scroll" href="#wrapper">
                     <h2 class="mb-0 mt-2 uppercase">
                        <img src="{{ asset('img/logo-bch.png') }}" width="200" >
                     </h2>
                  </a>
               </div>
               <div class="right-part">
                  <nav class="main-nav">
                     <div class="toggle-mobile-but">
                        <a href="#" class="mobile-but" >
                           <div class="lines"></div>
                        </a>
                     </div>
                     <ul class="main-menu list-inline">
                        <li><a class="scroll list-inline-item" href="#wrapper">Home</a></li>
                        <li><a class="scroll list-inline-item" href="#about">about</a></li>
                        <li><a class="scroll list-inline-item" href="#discography">discography</a></li>
                        <li><a class="scroll list-inline-item" href="#band">Band</a></li>
                        <li class="dropdown"><a class="scroll list-inline-item" href="#tour">Tours</a>


                        </li>


                        <li><a class="scroll list-inline-item" href="#gallery">Gallery</a></li>
      <li><a class="scroll list-inline-item " href="#news">News</a>

                          

                        </li>
                        <li><a class="scroll list-inline-item" href="#contact">Contact</a></li>
                        
                        <li class="block-helper">
                           <a href="#album" class="scroll"><span ><i class="icon-cd-2"></i></span></a>
                        </li>
                        <li class="block-helper">
                           <span class="icon search-ico"><i class="icon-search"></i></span>
                        </li>
                     </ul>
                  </nav>
               </div>
            </header>
            <!--End header-->
         </section>
         @yield('content')
         <footer class="pt-5 pb-5 footer">
            <!--Container-->
            <div class="container">
               <div class="row justify-content-between align-items-center">
                  <div class="col-md-6">
                     <small class="small"><span>&copy; 2021 all rights reserved - a product of</span> Estalisto.cl.</small>
                  </div>
                  <div class="col-md-6 text-md-right">
                     <ul class="list-inline small">
                        <li class="list-inline-item">
                           <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#">About</a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#">Legal</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!--End container-->
         </footer>
         <a class="block-top scroll" href="#wrapper">
         <i class="icon-angle-up"></i></a>
      </div>
      <!-- End wrapper-->
      <!--Javascript--> 
      <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
      <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
      <script src="{{ asset('js/smooth-scroll.js') }}" ></script>
      <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" ></script>
      <script src="{{ asset('js/audio.min.js') }}" ></script>
      <script src="{{ asset('js/twitterFetcher_min.js') }}" ></script>
      <script src="{{ asset('js/jquery.countdown.min.js') }}" ></script>
      <script src="{{ asset('js/placeholders.min.js') }}"></script>
      <script src="{{ asset('js/script.js') }}"></script>
      <!-- Google analytics -->
      <!-- End google analytics -->
   </body>
</html>

