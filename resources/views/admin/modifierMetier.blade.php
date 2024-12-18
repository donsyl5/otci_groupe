@extends('admin.app')

@section('page_title')
    OTCI GROUPE
@endsection

@section('content')


<section class="main_content dashboard_part large_header_bg">
      <div class="container-fluid g-0">
        <div class="row">
          <div class="col-lg-12 p-0">
            <div
              class="header_iner d-flex justify-content-between align-items-center"
            >
              <div class="sidebar_icon d-lg-none">
                <i class="ti-menu"></i>
              </div>
              <div class="serach_field-area d-flex align-items-center">
                <div class="search_inner">
                  <form action="#">
                    <div class="search_field">
                      <input type="text" placeholder="Search here..." />
                    </div>
                    <button type="submit">
                      <img src="img/icon/icon_search.svg" alt />
                    </button>
                  </form>
                </div>
                <span class="f_s_14 f_w_400 ml_25 white_text text_white"
                  >Apps</span
                >
              </div>
              <div
                class="header_right d-flex justify-content-between align-items-center"
              >
                <div class="header_notification_warp d-flex align-items-center">
                  <li>
                    <a
                      class="bell_notification_clicker nav-link-notify"
                      href="#"
                    >
                      <img src="img/icon/bell.svg" alt />
                    </a>

                    <div class="Menu_NOtification_Wrap">
                      <div class="notification_Header">
                        <h4>Notifications</h4>
                      </div>
                      <div class="Notification_body">
                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="img/staf/2.png" alt /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>Cool Marketing</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="img/staf/4.png" alt /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>Awesome packages</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="img/staf/3.png" alt /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>what a packages</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="img/staf/2.png" alt /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>Cool Marketing</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="img/staf/4.png" alt /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>Awesome packages</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="img/staf/3.png" alt /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>what a packages</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>
                      </div>
                      <div class="nofity_footer">
                        <div class="submit_button text-center pt_20">
                          <a href="#" class="btn_1">See More</a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a class="CHATBOX_open nav-link-notify" href="#">
                      <img src="img/icon/msg.svg" alt />
                    </a>
                  </li>
                </div>
                <div class="profile_info">
                                <img src="img/client_img.png" alt="#">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">

                                        <h5>{{ auth()->user()->name }}</h5>
                                    </div>
                                    <div class="profile_info_details">

                                        <a href="{{ route('logout') }}">SE DECONNECTER</a>
                                    </div>
                                </div>
                            </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main_content_iner">
        <div class="container-fluid p-0 sm_padding_15px">
          <div class="row justify-content-center">



            <div class="col-lg-12">
              <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                  <div class="box_header m-0">
                    <div class="main-title">
                      <h3 class="m-0">Formulaire</h3>
                    </div>
                  </div>
                </div>
                <div class="white_card_body">
                  <div class="card-body">
                    <form action="{{ route ('updateMetier', $metier->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf

                        <div class="mb-3">
                          <label class="form-label"
                            >Titre</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            name="titre"
                            id="titre"
                            value="{{ $metier->titre }}"
                          />
                        </div>
                        <div class="mb-3">
                          <label class="form-label"
                            >Texte</label
                          >
                          <textarea name="texte" id="summernote" cols="30" rows="10" class="form-control">{{ $metier->texte }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label"
                              >Slug</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              name="slug"
                              id="slug"
                              value="{{ $metier->slug }}"
                            />
                          </div>

                      <div class="mb-3">
                        <label class="form-label"
                          >Image 1</label
                        >
                        <input
                          type="file"
                          class="form-control"
                          name="image" id="image"
                          value="upload/metiers/{{ $metier->image }}"
                        />
                      </div>


                      <button type="submit" class="btn btn-primary">
                        Enregistrer
                      </button>

                      <a href="{{ route('listeMetier') }}" class="btn btn-primary">Annuler</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@include('admin.footer')

@endsection
