@extends('user.layouts.header')

@section('page_title')
    OTCI GROUPE - {{ $article->titre }}
@endsection

@section('content')



<div class="page_header_default style_one blog_single_pageheader">
    <div class="parallax_cover">
       <div class="simpleParallax"><img src="{{ asset('upload/article/'.$article->image)}}"
             alt="bg_image" class="cover-parallax"></div>
    </div>
    <div class="page_header_content">
       <div class="auto-container">
          <div class="row">
             <div class="col-md-12">
                <div class="banner_title_inner">
                   <div class="title_page">
                    {{Illuminate\Support\Str::limit($article->titre, 25, '...')}}
                   </div>
                </div>
             </div>
             <div class="col-lg-12">
                <div class="breadcrumbs creote">
                   <ul class="breadcrumb m-auto">
                      <li><a href="{{ route('home') }}">Home</a></li>
                      <li class="active">{{ $article->titre }}</li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!---page header--->
 <!--===============PAGE CONTENT==============-->
 <!--===============PAGE CONTENT==============-->
 <div id="content" class="site-content ">
     <!--===============default spacing==============-->
     <div class="pd_top_90"></div>
     <!--===============default spacing==============-->
    <main id="main" class="site-main products_single" role="main">
       <section class="default_single_product">
          <div class="auto-container">
             <div class="row align-items-center">
                <h3 class="product_title entry-title">{{ $article->titre }}</h3><br><br>
                <div class="col-lg-8 col-md-12">

                   <div class="flexslider">
                      <ul class="slides">

                        <li data-thumb="">
                            <img src="{{ asset('upload/article/'.$article->image)}}" class="img-fluid" alt="img" />
                        </li>


                      </ul>
                   </div>
                </div>

             </div>

             <div class="row align-items-center">
             <div class="col-lg-12 col-md-12">
                <div class="summary entry-summary">
                     <h1 class="product_title entry-title">Description</h1>
                     <p style = "text-align : justify;"></strong> {{ $article->description }}</p>
                   </div>


                </div>
            </div>
             </div>

          </div>
       </section>

    </main>
    <!--===============default spacing==============-->
    <div class="pd_bottom_50"></div>


@include('user.layouts.footer')
@endsection
