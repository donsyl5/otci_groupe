@extends('user.layouts.header')

@section('page_title')
    OTCI GROUPE - {{ $metier->titre }}
@endsection

@section('content')
    <!----header end----->
    <div class="page_header_default style_one blog_single_pageheader">
        <div class="parallax_cover">
            <div class="simpleParallax"><img src="{{ asset('upload/metiers/' . $metier->image) }}" alt="bg_image"
                    class="img-fluid"></div>
        </div>
        <div class="page_header_content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">
                                {{ $metier->titre }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="{{ route('home') }}">Accueil</a></li>
                                <li><a href="{{ route('metier') }}">Metier</a></li>
                                <li class="active">{{ $metier->titre }}</li>
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
        <div class="auto-container">
            <div class="row default_row">
                <div id="primary" class="content-area service col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <main id="main" class="site-main" role="main">
                        <!--===============spacing==============-->
                        <div class="pd_top_90"></div>
                        <!--===============spacing==============-->
                        <section class="blog_single_details_outer">
                            <div class="single_content_upper">
                                <div class="blog_feature_image">
                                    <img src="{{ asset('upload/metiers/' . $metier->image) }}" class="wp-post-image"
                                        alt="img">
                                </div>


                            </div>



                        </section>

                    </main>

                </div>


        <div id="secondary" class="content-area service col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <main id="main" class="site-main" role="main">
                <!--===============spacing==============-->
                <div class="pd_top_90"></div>
                <!--===============spacing==============-->
                <section class="blog_single_details_outer">
                    <div class="single_content_upper">

                        <div class="post_single_content">
                            <h5>{{ $metier->titre }}</h5>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_15"></div>
                            <!--===============spacing==============-->
                            <div class="description_box" style="text-align: justify;">
                                <p style="text-align: justify;">{!! html_entity_decode($metier->texte) !!}</p>
                            </div>

                        </div>
                    </div>

                </section>

            </main>

        </div>
    </div>

    </div>
    </div>





    @include('user.layouts.footer')
@endsection
