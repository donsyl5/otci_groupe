@extends('user.layouts.header')

@section('page_title')
    OTCI GROUPE - Nos réalisations
@endsection

@section('content')
<div class="page_header_default style_one">
    <div class="parallax_cover">
       <div class="simpleParallax"><img src="{{ asset('assets/images/page-header-default.jpg') }}" alt="bg_image" class="cover-parallax"></div>
    </div>
    <div class="page_header_content">
       <div class="auto-container">
          <div class="row">
             <div class="col-md-12">
                <div class="banner_title_inner">
                   <div class="title_page">
                    Nos réalisations
                   </div>
                </div>
             </div>
             <div class="col-lg-12">
                <div class="breadcrumbs creote">
                   <ul class="breadcrumb m-auto">
                      <li><a href="{{ route('home') }}">Accueil</a></li>
                      <li class="active">Nos réalisations</li>
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

             <section class="project_all filt_style_five filter_enabled">
                <!--===============spacing==============-->
                <div class="pd_top_90"></div>
                <!--===============spacing==============-->
                <div class="container">
                   <div class="row">
                      <div class="col-lg-12">
                         <div class="fliter_group" style="text-align:center!important;">
                            <ul class="project_filter dark clearfix">
                        <li data-filter="*" class="current">Tout</li>
                                @foreach ($categories as $categorie)
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

                               <li data-filter=".project_category-{{ $categorie->id }}" data-categorie="{{ $categorie->id }}"><a href="{{ route('part', ['nom' => cleanUrl($categorie->nom), 'id' => $categorie->id])}}">{{ $categorie->nom}}</a></li>
                              @endforeach
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="project_container  clearfix">

                    @php
                        $count = 0;
                    @endphp
                    @foreach ($realisations as $realisation)
                      <div class="row clearfix">
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

                         <div class="project-wrapper grid-item col-xl-4 col-lg-6 col-md-12 col-sm-12 project_category-{{ $realisation->sous_categorie_id}}">
                            <div class="project_post style_one style_five hover_actives">
                               <div class="image">
                                  <img width="731" height="488" src="{{ asset('upload/images/'.$realisation->image)}}" class="img-fluid" alt="img">
                                  <a href="{{ route('detail', ['titre' => cleanUrl($realisation->titre), 'id' => $realisation->id]) }}" class="two"><i class="icon-right-arrow"></i></a>
                                  <div class="project_caro_content">
                                     <div class="left_side">
                                        <p>{{Illuminate\Support\Str::limit($realisation->titre, 50, '...')}}</p>
                                        <h2 class="title_pro"><a href="{{ route('detail', ['titre' => cleanUrl($realisation->titre), 'id' => $realisation->id]) }}" rel="bookmark">{{Illuminate\Support\Str::limit($realisation->description, 40, '...')}}</a></h2>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         @php
                         $count++;
                       @endphp

                       @if ($count % 3 === 0)
                         </div>
                         @if ($loop->remaining > 0)
                           <div class="row gy-4">
                         @endif
                       @endif
                     @endforeach
                      </div>
                   </div>


                </div>

                <!--===============spacing==============-->
                <div class="pd_bottom_70"></div>
                <!--===============spacing==============-->


             </section>
          <!---newsteller--->

          <div class="row">
            <div class="col-lg-12">
               <nav aria-label="Page navigation example">
                <ul class="pagination text-center">
                    {{ $realisations->links() }}

                  </ul>
               </nav>
            </div>
         </div>

@include('user.layouts.footer')
@endsection
