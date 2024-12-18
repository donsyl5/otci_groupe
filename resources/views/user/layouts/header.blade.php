<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from themepanthers.com/html/creote-html/home-13.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2024 14:52:47 GMT -->
<head>

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KLB27TFEDY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KLB27TFEDY');
</script>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="OTCI (Organisation et Techniques de la Construction Immobilière), créée en 1979. Elle a acquis en externe en 2009 la société ESTAIR Bureau d’Etudes Techniques spécialisé en Structure et Fluides, a créé EXPRIMME pour développer l’activité dans le secteur du développement durable. ">
   <meta name="keywords" content="OTCI , Bureau d’Etudes, ESTAIR, EXPRIMME , Maîtrise d’Ouvrage, France, Europe, COFRAC,  Développement durable, Brazzaville, Infrastructures, Route, Aménagement, AMO, Pilotage, Habitats, Industrie">
   <meta name="author" content="OTCI - Organisation et Techniques de la Construction Immobilière">

   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title>@yield('page_title')</title>
   <!-- Fav Icon -->
   <link rel="icon" href="{{ asset('assets/images/logo.jpg') }}" type="image/x-icon">
   <!-- Fav Icon -->
   <!-- Google Fonts -->
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
   <!-- Google Fonts -->
   <!-- Style -->
   <link rel='stylesheet' href='{{ asset('assets/css/bootstrap.min.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' href='{{ asset('assets/css/owl.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' href='{{ asset('assets/css/swiper.min.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' href='{{ asset('assets/css/jquery.fancybox.min.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' href='{{ asset('assets/css/icomoon.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' href='{{ asset('assets/css/flexslider.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' href='{{ asset('assets/css/font-awesome.min.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' href='{{ asset('assets/css/style.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' href='{{ asset('assets/css/scss/elements/theme-css.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' id="creote-color-switcher-css" href='{{ asset('assets/css/scss/elements/color-switcher/color.css') }}' type='text/css' media='all' />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/isotope-layout@4.0.0/dist/isotope.min.css">

   <style>
   .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -60px;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }
   </style>
   <!-- Style-->
   <!----woocommerce---->

   <style>
    .opacity-black::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }
</style>
   <link rel='stylesheet' href='{{ asset('assets/css/woocommerce-layout.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' href='{{ asset('assets/css/woocommerce.css') }}' type='text/css' media='all' />
   <!----woocommerce---->


</head>

<body class="home theme-creote page-home-default-one">

   <div id="page" class="page_wapper hfeed site">
      {{-- <div class="style-switcher">
         <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
         <h3>Color Skins</h3>
         <ul id="colorschemeOptions" title="Switch Color" data-css-path="{{ asset('assets/css/scss/elements/color-switcher/') }}">
            <li>
               <a href="#" data-theme="color" style="background-color: #2867b2;"> </a>
            </li>
            <li>
               <a href="#" data-theme="color1" style="background-color: #e5102a;"> </a>
            </li>
            <li>
               <a href="#" data-theme="color2" style="background-color: #3ead3c;"> </a>
            </li>
            <li>
               <a href="#" data-theme="color3" style="background-color: #fed000;"> </a>
            </li>
            <li>
               <a href="#" data-theme="color4" style="background-color: #ff5538;"> </a>
            </li>
            <li>
               <a href="#" data-theme="color5" style="background-color: #246af4;"> </a>
            </li>
         </ul>
      </div> --}}
      <div id="wrapper_full" class="content_all_warpper">
         <!----page-header----->

         <!----preloader----->
         <div class="preloader-wrap">
            <div class="preloader" style="background-image:url(assets/images/preloader.gif)">
            </div>
            <div class="overlay"></div>
         </div>
         <!----preloader end----->
         <!----header----->
         <div class="header_area" id="header_contents">
            <header class="main-header header header_v13">

               <section class="header_top">
                  <div class="medium-container">
                     <div class="header_top_inner">
                        <div class="top_left">
                           {{-- <ul class="top-links clearfix">
                              <li>
                                 <a href="#" class="get_a_quote">Get a quote </a>
                              <li>
                              <li>Welcome to our consulting company.</li>
                           </ul> --}}
                        </div>
                        <div class="top_right text-right">
                           <ul class="contact_info_two">
                              <li class="single">
                                 <p> <span class="icon-telephone"></span> <a href="tel:01.56.30.17.00">01.56.30.17.00</a>
                                 </p>
                              </li>
                              <li class="single">
                                 <p><span class="icon-mail"></span><a
                                       href="mailto:contact@otci.fr"> contact@otci.fr</a>
                                 </p>
                              </li>
                              <li class="single">
                                <a href="{{ route('joindre') }}" style="text-decoration: underline;">NOUS REJOINDRE</a>
                                 {{-- <p> <span class="icon-location2"></span>
                                    3,rue le Corbusier Bâtiment Tolède-CS40422</p> --}}
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="navbar_outer get_sticky_header">
                  <div class="medium-container">
                     <nav class="inner_box">
                        <div class="header_logo_box">
                           <a href="{{ route('home') }}" class="logo navbar-brand" title="OTCI Groupe">
                              <img src="{{ asset('assets/images/logo.jpg') }}" alt="OTCI Groupe" class="logo_default" title="OTCI GROUPE">

                              <img src="{{ asset('assets/images/logo.jpg') }}" alt="OTCI Groupe" class="logo__sticky" title="OTCI GROUPE">

                           </a>
                        </div>
                           <div class="header_logo_box">
                           <a href="{{ route('home') }}" class="logo navbar-brand">
                            <img src="{{ asset('assets/images/logo2.jpg') }}" alt="EXPRIME" class="logo_default" title="EXPRIME">

                            <img src="{{ asset('assets/images/logo2.jpg') }}" alt="EXPRIME" class="logo__sticky" title="EXPRIME">

                         </a>
                        </div>
                         <div class="header_logo_box">
                         <a href="{{ route('home') }}" class="logo navbar-brand">
                            <img src="{{ asset('assets/images/logo3.jpg') }}" alt="ESTAIR" class="logo_default" title="ESTAIR">

                            <img src="{{ asset('assets/images/logo3.jpg') }}" alt="ESTAIR" class="logo__sticky" title="ESTAIR">

                         </a>
                        </div>

                        <div class="header_logo_box">
                            <a href="{{ route('home') }}" class="logo navbar-brand">
                               <img src="{{ asset('assets/images/logo4.jpg') }}" alt="ECOBE" class="logo_default" title="ECOBE">

                               <img src="{{ asset('assets/images/logo4.jpg') }}" alt="ECOBE" class="logo__sticky" title="ECOBE">

                            </a>
                           </div>
                        <div class="navbar_togglers hamburger_menu">
                           <span class="line"></span>
                           <span class="line"></span>
                           <span class="line"></span>
                        </div>
                        <div class="header_content header_content_collapse">

                           <div class="header_menu_box">
                              <div class="navigation_menu">
                                 <ul id="myNavbar" class="navbar_nav">
                                    <li
                                       class="menu-item   dropdown  menu-item-has-children dropdown  position-static mega_menu nav-item">
                                       <a href="{{ route('home') }}" class="dropdown-toggle nav-link">
                                          <span>Accueil</span>
                                       </a>
                                    </li>
                                    <li class="menu-item menu-item-has-children dropdown nav-item">
                                       <a href="{{ route('groupe') }}" class="dropdown-toggle nav-link">
                                          <span>Groupe</span>
                                       </a>

                                    </li>
                                    <li class="menu-item dropdown_full menu-item-has-children dropdown position-static mega_menu nav-item">
                                       <a href="{{ route('metier') }}" class="dropdown-toggle nav-link"><span>Compétences et Métiers</span></a>
                                    </li>
                                    <li class="menu-item menu-item-has-children dropdown nav-item">
                                       <a href="{{ route('realisation') }}" class="dropdown-toggle nav-link">
                                          <span>Réalisations</span>
                                       </a>

                                    </li>
                                    <li class="menu-item menu-item-has-children dropdown nav-item">
                                       <a href="{{ route('client') }}" class="dropdown-toggle nav-link">
                                          <span>Notre approche</span>
                                       </a>

                                    </li>
                                    <li class="menu-item menu-item-has-children dropdown  nav-item">
                                       <a href="{{ route('actualite') }}" class="dropdown-toggle nav-link">
                                          <span>Actualités</span>
                                       </a>

                                    </li>
                                    <li class="menu-item menu-item-has-children dropdown  nav-item theme_btn_all">
                                        <a href="{{ route('contact') }}"  class="dropdown-toggle nav-link ">
                                           <span>Contact</span>
                                        </a>

                                     </li>
                                 </ul>


                        </div>

                     </nav>


                  </div>

               </section>
            </header>
            <!-- end of the loop -->
         </div>
         <!----header end----->
         <!--===============PAGE CONTENT==============-->


         @yield('content')
