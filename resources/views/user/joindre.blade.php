@extends('user.layouts.header')


@section('page_title')
    OTCI GROUPE - Contact
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
                              Nous rejoindre
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                           <ul class="breadcrumb m-auto">
                              <li><a href="{{ route('home') }}">Accueil</a></li>
                              <li class="active">Nous rejoindre</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!----header----->
         <!----page-CONTENT----->
         <div id="content" class="site-content contain-center">

            <section class="contact-section bg_light_1" >
               <!--===============spacing==============-->
               <div class="pd_top_90"></div>
               <!--===============spacing==============-->
               <div class="container justify-content-center" >
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                  <div class="row align-items-center justify-content-center">
                     <div class="col-xl-8 col-lg-8 mb-5 mb-lg-5 mb-xl-0 " >
                        <div class="contact_form_box_all type_one">
                           <div class="contact_form_box_inner">
                              <div class="contact_form_shortcode">
                                 <form method="post" action="{{ route ('storeCandidature') }}" role="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="messages"></div>

                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label> Votre Nom<br /></label>
                                                    <input type="text" name="nom" placeholder="Votre Nom*"  data-error="Entrez Votre Nom" value="{{ old('nom') }}">
                                                    @error('nom')
                                                    <div class="text-danger">Le champ Nom est obligatoire </div>
		                                            @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label> Votre Prenom<br /></label>
                                                    <input type="text" name="prenom" placeholder="Votre prenom*"  data-error="Etrez Votre Prenom" value="{{ old('prenom') }}">
                                                    @error('prenom')
                                                    <div class="text-danger">Le champ Prenom est obligatoire</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label> Votre Email<br /></label>
                                                    <input type="email" name="email" placeholder="Email *" data-error="Entrez votre Adresse Email" value="{{ old('email') }}">
                                                    @error('email')
                                                    <div class="text-danger">Le champ Email est obligatoire</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label> Poste<br /></label>
                                                <select name="poste" id="poste">
                                                    @foreach ($postes as $poste)
                                                    <option value="{{ $poste->nom }}">{{ $poste->nom }}</option>
                                                    @endforeach

                                                </select>
                                                    @error('poste')
                                                    <div class="text-danger">Le champ Poste est obligatoire</div>
                                                    @enderror

                                                </div>
                                            </div>


                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label> CV<br /></label>
                                                   <input type="file" name="cv">
                                                    @error('cv')
                                                    <div class="text-danger">Le champ cv est obligatoire </div>
                                                    @enderror
                                                    @error('cv')
                                                    <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label> Lettre<br /></label>
                                                   <input type="file" name="lettre">
                                                    @error('lettre')
                                                    <div class="text-danger">Le champ lettre est obligatoire </div>
                                                    @enderror
                                                    @error('lettre')
                                                    <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label>Prouvez que vous êtes humain<br /></label>
                                                   {!! NoCaptcha::renderJs() !!}
                                                   {!! NoCaptcha::display() !!}
                                                   @error('g-recaptcha-response')
                                                   <div class="text-danger">Ce champ est obligatoire</div>
                                                   @enderror
                                                </div><br><br>
                                            </div><br><br>
                                            <div class="col-sm-12">

                                                <div class="form-group mg_top apbtn">
                                                    <button class="theme_btn" type="submit">Envoyer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>



                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_top_70"></div>
               <!--===============spacing==============-->
            </section>


@include('user.layouts.footer')

@endsection

