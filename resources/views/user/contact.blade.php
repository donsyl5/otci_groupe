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
                              Contact
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                           <ul class="breadcrumb m-auto">
                              <li><a href="{{ route('home') }}">Accueil</a></li>
                              <li class="active">Contact</li>
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
               <!--===============spacing==============-->
               <div class="pd_top_90"></div>
               <!--===============spacing==============-->
               <div class="container">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                  <div class="row align-items-center">
                     <div class="col-xl-6 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
                        <div class="contact_form_box_all type_one">
                           <div class="contact_form_box_inner">
                              <div class="contact_form_shortcode">
                                 <form method="post" action="{{ route ('storeContact') }}" role="form">
                                    @csrf
                                    <div class="messages"></div>

                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label> Votre Nom<br /></label>
                                                    <input type="text" name="nom" placeholder="Votre Nom*"  data-error="Entrez Votre Nom" value="{{ old('nom') }}">
                                                    @error('nom')
                                                    <div class="text-danger">Le champ Nom est obligatoire</div>
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
                                                    <input type="text" name="email" placeholder="Email *" data-error="Entrez votre Adresse Email" value="{{ old('email') }}">
                                                    @error('email')
                                                    <div class="text-danger">Le champ Email est obligatoire</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label> Sujet<br /></label>
                                                    <input type="text" name="sujet"  placeholder=" sujet" value="{{ old('sujet') }}">
                                                    @error('sujet')
                                                    <div class="text-danger">Le champ Sujet est obligatoire</div>
                                                    @enderror

                                                </div>
                                            </div>


                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label> Message<br /></label>
                                                    <textarea name="commentaire"  rows="3"  data-error="Please, leave us a message." >{{ old('commentaire') }}</textarea>
                                                    @error('commentaire')
                                                    <div class="text-danger">Le champ Message est obligatoire</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label>Prouvez que vous êtes humain<br /></label>
                                                   <div class="form-group">
                                                    {!! NoCaptcha::renderJs() !!}
                                                   {!! NoCaptcha::display() !!}
                                                   </div>

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
                     <div class="col-xl-6 col-lg-6 pd_left_30">
                        <div class="title_all_box style_one dark_color">
                           <div class="title_sections left">
                              <div class="before_title">Informations de contact</div>

                              <p>Envoyez un message via le formulaire fourni. Si votre demande est urgente, veuillez utiliser les coordonnées de contact ci-dessous.</p>
                           </div>
                        </div>

                        <div class="contact_box_content style_one">
                           <div class="contact_box_inner icon_yes">
                              <div class="icon_bx">
                                 <span class=" icon-placeholder"></span>
                              </div>
                              @foreach ($contact as $contact)


                              <div class="contnet">
                                 <h3>Adresse </h3>
                                 <p>
                                    {{ $contact->address }}
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_15"></div>
                        <!--===============spacing==============-->
                        <div class="contact_box_content style_one">
                           <div class="contact_box_inner icon_yes">
                              <div class="icon_bx">
                                 <span class="icon-phone-call"></span>
                              </div>
                              <div class="contnet">
                                 <h3> Telephone et Email</h3>
                                 <p>
                                    Phone: {{ $contact->phone }} &amp; Email: {{ $contact->email }}
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_15"></div>
                        <!--===============spacing==============-->
                        <div class="contact_box_content style_one">
                           <div class="contact_box_inner icon_yes">
                              <div class="icon_bx">
                                 <span class="fa fa-clock-o"></span>
                              </div>
                              <div class="contnet">
                                 <h3>Pays , Region</h3>
                                 <p>
                                    {{ $contact->lieu }}
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_40"></div>
                        <!--===============spacing==============-->
                        @endforeach
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_top_70"></div>
               <!--===============spacing==============-->
            </section><br><br>
            <section class="contact-map-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <section class="map-section">
                           <!--Map Outer-->
                           <div class="">
                              <div class="google-map"

                                >
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5262.366205207461!2d2.347909!3d48.740199000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6768677a48c07%3A0x5156b7df0ed830ee!2sOrganis%20Techn%20Construc%20Immob!5e0!3m2!1sfr!2sus!4v1705416503330!5m2!1sfr!2sus" width="590" height="416" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              </div>
                        </div>
                      </section>

                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_top_70"></div>
               <!--===============spacing==============-->
            </section>

@include('user.layouts.footer')

@endsection
