@extends('user.layouts.header')

@section('page_title')
    OTCI GROUPE - Metiers et compétences
@endsection

@section('content')


 <!----header end----->
 <div class="page_header_default style_one">
    <div class="parallax_cover">
       <div class="simpleParallax"><img src="assets/images/page-header-default.jpg" alt="bg_image" class="cover-parallax"></div>
    </div>
    <div class="page_header_content">
       <div class="auto-container">
          <div class="row">
             <div class="col-md-12">
                <div class="banner_title_inner">
                   <div class="title_page">
                      Nos metiers
                   </div>
                </div>
             </div>
             <div class="col-lg-12">
                <div class="breadcrumbs creote">
                   <ul class="breadcrumb m-auto">
                      <li><a href="{{ route('home') }}">Accueil</a></li>
                      <li class="active">Nos metiers</li>
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

        <section class="blog_post_section four_column pd_left_100 pd_right_100 style_four masonary_enable">
            <!--===============spacing==============-->
            <div class="pd_top_90"></div>
            <!--===============spacing==============-->
            <div class="container-fluid">
                <div class="grid_show_case  ">
                    @foreach ($metiers as $metier)


                    <div class="grid_box _card ">
                        <div class="news_box style_four has_images"
                            style="background-image: url({{ asset('upload/metiers/'.$metier->image) }});">
                            <div class="overlay"> </div>
                            <div class="date">
                                <span class="date_in_month">Oct</span>
                                <span class="date_in_number">08</span>
                            </div>
                            <div class="content_box">
                                <h2 class="title"><a href="{{ route('detailMetier', $metier->slug) }}">{{$metier->titre}}</a></h2>
                            </div>

                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_70"></div>
            <!--===============spacing==============-->
        </section>



        @include('user.layouts.footer')
    @endsection
