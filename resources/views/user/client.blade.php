@extends('user.layouts.header')


@section('page_title')
    OTCI GROUPE - Notre approche
@endsection

@section('content')
          <!----header end----->
          <div class="page_header_default style_one ">
            <div class="parallax_cover">
               <div class="simpleParallax"><img src="assets/images/page-header-default.jpg" alt="bg_image"
                     class="cover-parallax"></div>
            </div>
            <div class="page_header_content">
               <div class="auto-container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="banner_title_inner">
                           <div class="title_page">
                              Notre approche
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                           <ul class="breadcrumb m-auto">
                              <li><a href="{{ route('home') }}">Accueil</a></li>
                              <li class="active">Notre approche</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!----header----->
         <!----page-CONTENT----->
         <div id="content" class="site-content ">

            <section class="contact-section bg_light_1" >
                <div class="pd_top_70 "></div>
               <h2 class="justify-content-center" style="text-align:center;">PAGE EN CONSTRUCTION</h2>
               <!--===============spacing==============-->
               <div class="pd_top_70"></div>
               <!--===============spacing==============-->
            </section>

@include('user.layouts.footer')

@endsection
