@extends('user.layouts.header')

@section('page_title')
    OTCI GROUPE - Groupe
@endsection

@section('content')




 <!----page header----->
 <div class="page_header_default style_one ">
    <div class="parallax_cover">
       <img src="assets/images/page-header-default.jpg"  alt="bg_image" class="cover-parallax">
    </div>
    <div class="page_header_content">
       <div class="auto-container">
          <div class="row">
             <div class="col-md-12">
                <div class="banner_title_inner">
                   <div class="title_page">
                      Groupe
                   </div>
                </div>
             </div>
             <div class="col-lg-12">
                <div class="breadcrumbs creote">
                   <ul class="breadcrumb m-auto">
                      <li><a href="{{ route('home') }}">Accueil</a> </li>
                      <li class="active">Groupe</li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!----page header----->
 <!--===============PAGE CONTENT==============-->
 <!--===============PAGE CONTENT==============-->
 <div id="content" class="site-content ">
    <!---about--->
    <section class="about-section">
       <!--===============spacing==============-->
       <div class="pd_top_90"></div>
       <!--===============spacing==============-->
       <div class="container">
          <div class="row">
            @foreach ($groupes as $groupe)

             <div class="col-xl-6 col-lg-12 ">
                <div class="about_content position-relative z_99">
                   <div class="title_all_box style_one text-left  dark_color">
                      <div class="title_sections">
                        <div class="before_title">Nous sommes</div>
                         <h2>{{ $groupe->titre1 }}</h2>
                      </div>
                   </div>

                   <div class="pd_bottom_20"></div>
                   <!--===============spacing==============-->
                   <div class="description_box">
                      <p style="text-align: justify;">{{ $groupe->texte1 }}</p>
                   </div>
                   <!--===============spacing==============-->
                   <div class="pd_bottom_25"></div>
                   <!--===============spacing==============-->
                   <div class="row gutter_15px">


                   </div>

                </div>
             </div>
             <div class="col-xl-6 col-lg-12">
                <p></p><br><br><br>
                <div class="image_boxes style_two">
                    <img src="assets/images/about/groupe.jpg" class="img-fluid" alt="image">


                   </div>

                </div>
             </div>
          </div>
          @endforeach
       </div>
       <!--===============spacing==============-->
       <div class="pd_bottom_70"></div>
       <!--===============spacing==============-->
    </section>
    <!---about end--->
    <!---service--->
    <section class="service-icon-section bg_light_1">
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
       <div class="container">
          <div class="row">
            @foreach ($groupes as $groupe)


             <div class="col-lg-12">
                <div class="title_all_box style_one text-center dark_color">
                   <div class="title_sections">
                      <div class="before_title">Presentation</div>
                      <h2 class="title">{{ $groupe->titre2 }}</h2>
                   </div>
                   <!--===============spacing==============-->
                   <div class="pd_bottom_20"></div>
                   <!--===============spacing==============-->
                </div>
             </div>
          </div>
          <div class="row">

             <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-4 mt-lg-0 mt-xl-0">
                <div class="icon_box_all style_three">
                   <div class="icon_content ">
                      <div class="icon">
                         <span class=" icon-growth"></span>
                      </div>
                      <div class="txt_content">

                         <p style="text-align: justify;">{{ $groupe->texte2 }}</p>


                      </div>
                   </div>
                </div>
             </div>

          </div>
       </div>
       @endforeach
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    </section>






    <div id="content" class="site-content ">
        <div class="auto-container">
           <div class="row default_row">
              <div class="full_width_box">
    <section class="team-section">
        <div class="row">
          @foreach ($equipes as $equipe)


          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="team_box style_one">
              <div class="team_box_outer">
                <div class="member_image">
                  <img
                    src="{{ asset('upload/equipes/'.$equipe->image) }}"
                    alt="team image"
                  />
                </div>
                <div class="about_member">
                  <div class="share_media">

                    <ul class="first">
                        @if($equipe->reseau)
                      <li>
                        <a href="{{ $equipe->reseau }}" target="_blank_">
                          <i class="fa fa-share-alt"> </i>
                        </a>
                      </li>
                      @endif
                    </ul>

                  </div>
                  <div class="authour_details">
                    <span>{{ $equipe->nom }}</span>
                    <h6>{{ $equipe->poste }}</h6>
                    {{-- <div class="button_view">
                      <a
                        href="#"
                        target="_blank"
                        rel="nofollow"
                        class="theme-btn one"
                      >
                        View Profile
                      </a>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </section>
    </div>
</div>
</div>
</div>







     <section class="service-icon-section bg_light_1">
        <!--===============spacing==============-->
        <div class="pd_top_90"></div>
        <!--===============spacing==============-->
           <div class="container">
              <div class="row">
                @foreach ($groupes as $groupe)


                 <div class="col-lg-12">
                    <div class="title_all_box style_one text-center dark_color">
                       <div class="title_sections">
                          <div class="before_title">Presentation</div>
                          <h2 class="title">{{ $groupe->titre4 }}</h2>
                       </div>
                       <!--===============spacing==============-->
                       <div class="pd_bottom_20"></div>
                       <!--===============spacing==============-->
                    </div>
                 </div>
              </div>
              <div class="row">

                 <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-4 mt-lg-0 mt-xl-0">
                    <div class="icon_box_all style_three">
                       <div class="icon_content ">

                          <div class="txt_content">

                             <p style="text-align: justify;">{{ $groupe->texte4 }}</p>


                          </div>
                       </div>
                    </div>
                 </div>

              </div>
           </div>
           @endforeach
        <!--===============spacing==============-->
        <div class="pd_top_90"></div>
        <!--===============spacing==============-->
        </section>




    <!---service end--->
    <!---timeline---->


       <!---tab-end--->
      <!---team--->
      {{-- <section class="team-section">
       <!--===============spacing==============-->
       <div class="pd_top_80"></div>
       <!--===============spacing==============-->
       <div class="container">
          <div class="row align-items-end">
             <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title_all_box style_one  dark_color">
                   <div class="title_sections">
                      <div class="before_title"> Dedicated Team</div>
                      <h2>Professional Individuals</h2>
                   </div>
                </div>
             </div>
             <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="description_box">
                   <p>Our power of choice is untrammelled and when nothing prevents being able to do what we
                      like best every pleasure.</p>
                   <!--===============spacing==============-->
                   <div class="mr_bottom_20"></div>
                   <!--===============spacing==============-->
                </div>
             </div>
             <!--===============spacing==============-->
             <div class="mr_bottom_30"></div>
             <!--===============spacing==============-->
          </div>
          <div class="row">
             <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="team_box style_one">
                   <div class="team_box_outer">
                      <div class="member_image">
                         <img src="assets/images/team/team-1.jpg" alt="team image" />
                      </div>
                      <div class="about_member">
                         <div class="share_media">
                            <ul class="first">
                               <li class="text">Share</li>
                               <li><i class="fa fa-share-alt"></i></li>
                            </ul>
                            <ul>
                               <li class="shar_alt"><i class="fa fa-share-alt"></i></li>
                               <li><a href="#"> <i class="fa fa-facebook"> </i></a></li>
                               <li><a href="#"> <i class="fa fa-twitter"> </i></a></li>
                               <li><a href="#"> <i class="fa fa-skype"> </i></a></li>
                               <li><a href="#"> <i class="fa fa-instagram"> </i></a></li>
                            </ul>
                         </div>
                         <div class="authour_details">
                            <span>Director </span>
                            <h6>Amelia Margaret</h6>
                            <div class="button_view">
                               <a href="#" target="_blank" rel="nofollow" class="theme-btn one"> View Profile
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <!--===============spacing==============-->
                <div class="mr_bottom_30"></div>
                <!--===============spacing==============-->
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="team_box style_one">
                   <div class="team_box_outer">
                      <div class="member_image">
                         <img src="assets/images/team/team-2.jpg" alt="team image" />
                      </div>
                      <div class="about_member">
                         <div class="share_media">
                            <ul class="first">
                               <li class="text">Share</li>
                               <li><i class="fa fa-share-alt"></i></li>
                            </ul>
                            <ul>
                               <li class="shar_alt"><i class="fa fa-share-alt"></i></li>
                               <li><a href="#"> <i class="fa fa-facebook"> </i> </a></li>
                               <li><a href="#"> <i class="fa fa-twitter"> </i> </a></li>
                               <li><a href="#"> <i class="fa fa-skype"> </i> </a></li>
                               <li><a href="#"> <i class="fa fa-instagram"> </i> </a></li>
                            </ul>
                         </div>
                         <div class="authour_details">
                            <span>Team Leader </span>
                            <h6>Andrew Cameron</h6>
                            <div class="button_view">
                               <a href="#" target="_blank" rel="nofollow" class="theme-btn one"> View Profile
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <!--===============spacing==============-->
                <div class="mr_bottom_30"></div>
                <!--===============spacing==============-->
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="team_box style_one">
                   <div class="team_box_outer">
                      <div class="member_image">
                         <img src="assets/images/team/team-3.png" alt="team image" />
                      </div>
                      <div class="about_member">
                         <div class="share_media">
                            <ul class="first">
                               <li class="text">Share</li>
                               <li><i class="fa fa-share-alt"></i></li>
                            </ul>
                            <ul>
                               <li class="shar_alt"><i class="fa fa-share-alt"></i></li>
                               <li><a href="#"> <i class="fa fa-facebook"> </i> </a></li>
                               <li><a href="#"> <i class="fa fa-twitter"> </i> </a></li>
                               <li><a href="#"> <i class="fa fa-skype"> </i> </a></li>
                               <li><a href="#"> <i class="fa fa-instagram"> </i> </a></li>
                            </ul>
                         </div>
                         <div class="authour_details">
                            <span>Manager </span>
                            <h6>Sofia Charlotte</h6>
                            <div class="button_view">
                               <a href="#" target="_blank" rel="nofollow" class="theme-btn one"> View Profile
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <!--===============spacing==============-->
                <div class="mr_bottom_30"></div>
                <!--===============spacing==============-->
             </div>
          </div>
       </div>
       <!--===============spacing==============-->
       <div class="pd_bottom_60"></div>
       <!--===============spacing==============-->
    </section> --}}
    <!---team-end--->




@include('user.layouts.footer')
@endsection
