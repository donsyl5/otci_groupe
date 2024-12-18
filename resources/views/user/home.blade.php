@extends('user.layouts.header2')


@section('page_title')
    OTCI GROUPE
@endsection

@section('content')

         <!--===============PAGE CONTENT==============-->
         <div id="content" class="site-content ">

            <!--- slider-->
            <section class="slider style_page_thirteen nav_position_one position-relative">
               <div class="banner_carousel owl-carousel owl_nav_block owl_dots_none theme_carousel owl-theme"
               data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>

                  <div class="slide-item-content">
                     <div class="slide-item content_center">
                        <div class="image-layer opacity-black"
                           style="background-image:url(assets/images/sliders/slider1.jpg)">
                        </div>
                        <div class="medium-container">
                           <div class="row align-items-center">
                              <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 m-auto">
                                 <div class="slider_content">

                                    <h1 class="animate_up">
                                        Bienvenue sur OTCI GROUPE
                                    </h1>
                                    <p class="animate_right pd_bottom_40">
                                        A travers les différentes compétences, le Groupe propose des métiers de maîtrise d’œuvre et d’Assistance à Maîtrise d’œuvre.
                                    </p>
                                    <ul class="animate_down">
                                       <li class="theme_btn_all ">
                                          <a href="{{ route('realisation') }}" class="theme-btn one">Nos réalisations</a>
                                       </li>
                                       <li class="theme_btn_all ">
                                          <a href="{{ route('metier') }}" class="theme-btn one color_white">Nos métiers</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slide-item-content">
                     <div class="slide-item content_left">
                        <div class="image-layer opacity-black"
                           style="background-image:url(assets/images/sliders/slider2.jpg)">
                        </div>
                        <div class="medium-container">
                           <div class="row align-items-center">
                              <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                 <div class="slider_content">

                                    <h1 class="animate_up">
                                        Bienvenue sur OTCI GROUPE

                                    </h1>
                                    <p class="animate_right pd_bottom_40">
                                        A travers les différentes compétences, le Groupe propose des métiers de maîtrise d’œuvre et d’Assistance à Maîtrise d’œuvre.

                                    </p>
                                    <ul class="animate_down">
                                       <li class="theme_btn_all">
                                        <a href="{{ route('realisation') }}" class="theme-btn one">Nos réalisations</a>
                                       </li>
                                       <li class="theme_btn_all">
                                        <a href="{{ route('metier') }}" class="theme-btn one color_white">Nos métiers</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slide-item-content">
                     <div class="slide-item content_center">
                        <div class="image-layer opacity-black"
                           style="background-image:url(assets/images/sliders/slider3.jpg)">
                        </div>
                        <div class="medium-container">
                           <div class="row align-items-center">
                              <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 m-auto">
                                 <div class="slider_content">

                                    <h1 class="animate_up">
                                        Bienvenue sur OTCI GROUPE
                                    </h1>
                                    <p class="animate_right pd_bottom_40">
                                        A travers les différentes compétences, le Groupe propose des métiers de maîtrise d’œuvre et d’Assistance à Maîtrise d’œuvre.
                                    </p>
                                    <ul class="animate_down">
                                       <li class="theme_btn_all ">
                                        <a href="{{ route('realisation') }}" class="theme-btn one">Nos réalisations</a>
                                       </li>
                                       <li class="theme_btn_all">
                                        <a href="{{ route('metier') }}" class="theme-btn one color_white">Nos métiers</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="position_absolute curve_shape_bottom_1 z_99">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none">
                     <path class="elementor-shape-fill"
                        d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7	s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7	c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3	c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6	c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7	C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5	c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1	c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7	c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6	C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8	c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2	C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3	C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1	z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1	c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z">
                     </path>
                     <path class="elementor-shape-fill"
                        d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C267.7,18.8,269.7,18,269.6,18z">
                     </path>
                     <path class="elementor-shape-fill"
                        d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2	S227.6,9.9,227.4,9.8z">
                     </path>
                     <path class="elementor-shape-fill"
                        d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4	C206.4,12.9,204.6,13.5,204.5,13.4z">
                     </path>
                     <path class="elementor-shape-fill"
                        d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6	S201,10.7,201,10.6z">
                     </path>
                     <path class="elementor-shape-fill"
                        d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C152.6,27.5,154.6,26.8,154.5,26.7z">
                     </path>
                     <path class="elementor-shape-fill"
                        d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6	c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z">
                     </path>
                     <path class="elementor-shape-fill"
                        d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0	C76.9,11.5,75.3,12.5,75.5,12.6z">
                     </path>
                     <path class="elementor-shape-fill"
                        d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4	C19.9,13.7,15.7,13.3,15.6,13.2z">
                     </path>
                  </svg>
               </div>
            </section>
            <!---slider-end--->
            <!--about-->
            <section class="about-section">
               <!--===============spacing==============-->
               <div class="pd_top_70"></div>
               <!--===============spacing==============-->
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="image_box_new type_one clearfix">
                           <div class="image_one">
                              <img src="assets/images/about/image1.jpg" class="img-fluid height_570px object-fit-cover" alt="img">


                           </div>
                           <div class="image_two">
                              <img src="assets/images/about/image2.png" class="img-fluid" alt="img">
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="title_all_box style_six  dark_color">
                           <div class="title_sections">
                              <div class="before_title">
                                 <span class="icon-briefcase icon"></span>
                                 NOS COMPETENCES ET METIERS
                              </div>
                              <div class="title">Une Ingénierie pluridisciplinaire</div>
                              <p class="description_text" style="text-align: justify;">
                                La volonté d’OTCI Groupe est d’apporter à nos clients toutes les compétences requises pour construire leurs projets dans le domaine du bâtiment, de l’aménagement urbain et de l’infrastructure routière.

                                OTCI Groupe est en perpétuelle recherche de nouvelles compétences afin de toujours mieux répondre aux nouvelles exigences environnementales et normatives. A travers les différentes compétences, le Groupe propose des métiers de maîtrise d’œuvre et d’Assistance à Maîtrise d’œuvre.
                              </p>

                           </div>
                        </div>


                        <div class="row gutter_25px">
                           <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="icon_box_new_box type_one">


                                 <div class="text_box">

                                    <p> <span class="icon_bx">
                                        <i class=" icon-checked"></i>
                                     </span>BET VRD</p>

                                     <p> <span class="icon_bx">
                                        <i class=" icon-checked"></i>
                                     </span>Pilotage glogal de projets</p>

                                     <p> <span class="icon_bx">
                                        <i class=" icon-checked"></i>
                                     </span>Pilotage inter chantiers</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="icon_box_new_box type_one">


                                 <div class="text_box">

                                    <p> <span class="icon_bx">
                                        <i class=" icon-checked"></i>
                                     </span>Pilotage et coordination </p>

                                     <p> <span class="icon_bx">
                                        <i class=" icon-checked"></i>
                                     </span>Bet Démolition</p>

                                     <p> <span class="icon_bx">
                                        <i class=" icon-checked"></i>
                                     </span>Bet Fluides</p>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!--===============spacing==============-->
                        <div class="pd_bottom_30"></div>
                        <!--===============spacing==============-->

                        <div class="row gutter_25px">
                           <div class="col-lg-6 col-md-6 col-ms-12">
                              <div class="theme_btn_all color_one">
                                 <a href="{{ route('metier') }}" rel="nofollow" class="theme-btn one">
                                   En savoir plus </a>
                              </div>
                               <!--===============spacing==============-->
                        <div class="pd_bottom_25"></div>
                        <!--===============spacing==============-->
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_80"></div>
               <!--===============spacing==============-->
            </section>
            <!---about end-->
            <!--client-->
            {{-- <section class="client-section text-center bg_op_1"
               style="background: url(assets/images/home-13-client-bg.jpg);">
               <!--===============spacing==============-->
               <div class="pd_top_60"></div>
               <!--===============spacing==============-->
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-12">
                        <div class="swiper-container" data-swiper='{
                           "autoplay": {
                             "delay": 6000
                           },
                           "freeMode": true,
                           "loop": true,
                           "speed": 1000,
                           "centeredSlides": false,
                           "slidesPerView": 5,
                           "spaceBetween": 30,
                           "pagination": {
                             "el": ".swiper-pagination",
                             "clickable": true
                           },

                           "breakpoints": {
                              "1200": {
                                 "slidesPerView": 5
                              },
                              "1024": {
                               "slidesPerView": 4
                              },
                             "768": {
                               "slidesPerView": 3
                             },
                             "576": {
                               "slidesPerView": 2
                             },
                             "250": {
                               "slidesPerView": 2
                             },
                             "0": {
                               "slidesPerView": 1
                             }
                           }
                         }'>
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="image">
                                    <img src="assets/images/cecode-brand-1.png" alt="clients-logo" class="img-fluid" />
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="image">
                                    <img src="assets/images/cecode-brand-2.png" alt="clients-logo" class="img-fluid" />
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="image">
                                    <img src="assets/images/cecode-brand-3.png" alt="clients-logo" class="img-fluid" />
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="image">
                                    <img src="assets/images/cecode-brand-4.png" alt="clients-logo" class="img-fluid" />
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="image">
                                    <img src="assets/images/cecode-brand-5.png" alt="clients-logo" class="img-fluid" />
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_60"></div>
               <!--===============spacing==============-->
            </section> --}}
            <!---client end-->
            <!--service-->
            <section class="service-section bg_op_1 position-relative"
               style="background: url(assets/images/home-13-service-bg.jpg);">
               <!--===============spacing==============-->
               <div class="pd_top_90"></div>
               <!--===============spacing==============-->
               <div class="auto-container">
                  <div class="row">
                     <div class="col-lg-8 m-auto">

                        <div class="title_all_box style_six text-center light_color">
                           <div class="title_sections">
                              <div class="before_title">
                                 <span class="icon-briefcase icon"></span>
                                 NOS REALISATIONS

                              </div>
                              <div class="title"> Nos dernières réalisations</div>

                           </div>
                           <!--===============spacing==============-->
                           <div class="pd_bottom_20"></div>
                           <!--===============spacing==============-->
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="service_all_styles carousel owl_new_one">
                           <div class="owl_nav_none owl_dots_none owl_type_two theme_carousel owl-theme owl-carousel"
                              data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "3" } , "1000":{ "items" : "3" }}}'>
                              @php
                              if (!function_exists('cleanUrl')){function cleanUrl($titre) {
                                 // Convertir en minuscules en prenant en compte les caractères multibytes
                      $cleanedTitle = mb_strtolower($titre);
                      // Remplacer les caractères spéciaux par des tirets
                      $cleanedTitle = preg_replace('/[^a-z0-9\s]/', '', $cleanedTitle);
                      // Remplacer les espaces par des tirets
                      $cleanedTitle = str_replace(' ', '-', $cleanedTitle);
                      // Supprimer les tirets en double
                      $cleanedTitle = preg_replace('/-+/', '-', $cleanedTitle);
                      return $cleanedTitle;
                              }}
                          @endphp


                              @foreach ($realisations as $realisation)
                              <div class="service_box  type_one clearfix">
                                 <div class="image_box">
                                    <img src="{{ asset('upload/images/'.$realisation->image)}}" class="img-fluid" alt="img" />
                                    <div class="overlay"></div>
                                 </div>
                                 <div class="content_box">
                                    <div class="icon_box clearfix">

                                       <div class="icon_box_inner">
                                          <i class="icon icon-thumbs-up icon"></i>
                                       </div>

                                    </div>
                                    <h2 class="entry-title">
                                       <a href="{{ route('detail', ['titre' => cleanUrl($realisation->titre), 'id' => $realisation->id]) }}">{{$realisation->titre}}</a>
                                    </h2>
                                    <p>{{Illuminate\Support\Str::limit($realisation->description, 40, '...')}}</p>
                                    <a href="{{ route('detail', ['titre' => cleanUrl($realisation->titre), 'id' => $realisation->id]) }}" class="read_more type_one">
                                       <span class="icon-arrow-right"></span>
                                       Lire Plus
                                    </a>
                                 </div>
                              </div>

                            @endforeach


                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_90"></div>
               <!--===============spacing==============-->
               <div class="position_absolute curve_shape_bottom_1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none">
                     <path class="shape_bg_white"
                        d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7	s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7	c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3	c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6	c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7	C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5	c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1	c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7	c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6	C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8	c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2	C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3	C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1	z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1	c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z">
                     </path>
                     <path class="shape_bg_white"
                        d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C267.7,18.8,269.7,18,269.6,18z">
                     </path>
                     <path class="shape_bg_white"
                        d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2	S227.6,9.9,227.4,9.8z">
                     </path>
                     <path class="shape_bg_white"
                        d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4	C206.4,12.9,204.6,13.5,204.5,13.4z">
                     </path>
                     <path class="shape_bg_white"
                        d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6	S201,10.7,201,10.6z">
                     </path>
                     <path class="shape_bg_white"
                        d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C152.6,27.5,154.6,26.8,154.5,26.7z">
                     </path>
                     <path class="shape_bg_white"
                        d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6	c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z">
                     </path>
                     <path class="shape_bg_white"
                        d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0	C76.9,11.5,75.3,12.5,75.5,12.6z">
                     </path>
                     <path class="shape_bg_white"
                        d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4	C19.9,13.7,15.7,13.3,15.6,13.2z">
                     </path>
                  </svg>
               </div>
            </section>
            <!--service end-->

            <!--content-->
            <section class="content-section">
               <!--===============spacing==============-->
               <div class="pd_top_50"></div>
               <!--===============spacing==============-->
               <div class="auto-container">
                  <div class="row">
                     <div class="col-lg-8 m-auto">
                        <div class="title_all_box style_six text-center">
                           <div class="title_sections">
                              <div class="before_title">
                                 <span class="icon-briefcase icon"></span>
                                 NOS COMPETENCES ET METIERS
                              </div>
                              <div class="title">Pourquoi nous choisir</div>
                              {{-- <p class="description_text">
                                 Explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                                 born and I will give you a complete account of the system.
                              </p> --}}
                           </div>
                           <!--===============spacing==============-->
                           <div class="pd_bottom_20"></div>
                           <!--===============spacing==============-->
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     @foreach ($metiers as $metier)
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="choose_box  type_one">
                           <div class="image_box">
                              <img src="assets/images/email-marketing.png" class="img-fluid svg_image" alt="icon png">
                           </div>
                           <div class="content_box">
                              <span class="step_no">0{{ $metier->id }}</span>
                              <div class="text_box">
                                 <h2>
                                    <a href="{{ route('detailMetier', $metier->slug) }}" >
                                        {{ $metier->titre }} </a>
                                 </h2>
                                 <p>{!! Illuminate\Support\Str::limit(strip_tags(html_entity_decode($metier->texte)), 50, '...') !!}</p>

                                 <a href="{{ route('detailMetier', $metier->slug) }}" class="read_more type_one" >
                                    Lire plus <span class="icon-arrow-right"></span>
                                 </a>

                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach


                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_65"></div>
               <!--===============spacing==============-->
            </section>








            <!---blog--->
            <section class="blog-post bg_light_1" id="blog" >
               <!--===============spacing==============-->
               <div class="pd_top_80"></div>
               <!--===============spacing==============-->
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 m-auto">
                        <div class="title_all_box style_six text-center  dark_color">
                           <div class="title_sections">
                              <div class="before_title"> <span class="icon-briefcase icon"></span>ACTUALITES</div>
                              <h2>Nos dernières actualités</h2>

                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_10"></div>
                        <!--===============spacing==============-->
                     </div>
                  </div>
                  <div class="blog_all_styles grid ">


                     <div class="row">
                        @php
                        if (!function_exists('cleanUrl')){function cleanUrl($titre) {
                        // Convertir en minuscules en prenant en compte les caractères multibytes
                $cleanedTitle = mb_strtolower($titre);
                // Remplacer les caractères spéciaux par des tirets
                $cleanedTitle = preg_replace('/[^a-z0-9\s]/', '', $cleanedTitle);
                // Remplacer les espaces par des tirets
                $cleanedTitle = str_replace(' ', '-', $cleanedTitle);
                // Supprimer les tirets en double
                $cleanedTitle = preg_replace('/-+/', '-', $cleanedTitle);
                return $cleanedTitle;
                        }}
                @endphp


                        @foreach ($actualites as $actualite)

                        <div class="col-xl-4 col-md-6 col-sm-6  col-xs-12">

                           <div class="news_box type_one clearfix">
                              <div class="news_inner">
                                 <div class="image_box">
                                    <img src="{{ asset('upload/article/'.$actualite->image)}}" class="img-fluid" alt="img">
                                    <div class="overlay"></div>
                                    <div class="post-category">
                                       <a href="{{ route('detailArticle', ['titre' => cleanUrl($actualite->titre), 'id' => $actualite->id]) }}" class="categories">
                                          <i class="icon-folder"></i>
                                          {{ $actualite->sousCategorie->nom }}
                                       </a>
                                    </div>
                                 </div>
                                 <div class="content_box">

                                    <h2 class="entry-title">
                                       <a href="{{ route('detailArticle', ['titre' => cleanUrl($actualite->titre), 'id' => $actualite->id]) }}">
                                        {{Illuminate\Support\Str::limit($actualite->titre, 50, '...')}}
                                       </a>
                                    </h2>
                                    <p class="short_desc">{{Illuminate\Support\Str::limit($actualite->description, 40, '...')}}</p>
                                    <div class="bottom_content clearfix">
                                       <div class="continure_reading">
                                          <a href="{{ route('detailArticle', ['titre' => cleanUrl($actualite->titre), 'id' => $actualite->id]) }}" class="read_more type_one">
                                             Lire Plus <span class="icon-arrow-right"></span></a>
                                       </div>

                                    </div>
                                 </div>
                              </div>
                           </div>


                        </div><!-- /.col-lg-3 -->

                        @endforeach


                     </div>




                  </div><!-- /.blog-one -->
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_70"></div>
               <!--===============spacing==============-->
            </section>
            <!---blog-end--->

         </div>
         <!--===============PAGE CONTENT==============-->
         <!--===============PAGE CONTENT==============-->
      </div>


        @include('user.layouts.footer')
@endsection
