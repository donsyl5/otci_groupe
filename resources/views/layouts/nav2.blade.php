<!DOCTYPE html>
<html lang="zxx" class="dark">
  <!-- Mirrored from www.pxdraft.com/wrap/mombo/html/coworking/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Dec 2023 16:43:23 GMT -->
  <head>

    <!-- metas -->
    <meta charset="utf-8" />
    <meta name="author" content="pxdraft" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,shrink-to-fit=no"
    />
    <meta name="keywords" content="Crikon – Multipurpose Template" />
    <meta name="description" content="Crikon – Multipurpose Template" />
    <!-- title -->
    <title>OTCI GROUPE - La maîtrise de vos projets</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/avatar/logo.jpg') }}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <!-- CSS Template -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <style>
    .text-blue {
    color: blue; /* Définition de la couleur bleue */
     }
</style>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <!-- Skippy & Prload --><!-- skippy -->
    <a
      id="skippy"
      class="skippy visually-hidden-focusable overflow-hidden"
      href="#content"
      ><div class="container">
        <span class="u-skiplink-text">Skip to main content</span>
      </div></a
    ><!-- End skippy --><!-- Preload -->
    <div id="loading" class="loading-preloader">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
    <!-- End Preload --><!-- Edn Skippy & Prload --><!--
    ========================
        Wrapper
    ========================
    -->
    <div class="wrapper">
      <!--  --><!-- Header --><!-- Header -->
      <header
        class="main-header main-header-01 position-relative2 navbar-light bg-body shadow-sm fixed-top"
      >
        <!-- Header -->
        <div class="header-top-01 header-top-light small bg-dark2">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="nav d-flex">
                  <a class="nav-link ps-0" href="#"
                    ><i class="bi-phone"></i> Tel. : 01.56.30.17.00</a
                  >
                  <a class="nav-link ms-auto ms-lg-0 pe-0" href="#"
                    ><i class="bi-envelope"></i> contact@otci.fr</a
                  >
                </div>
              </div>
              <div class="col-lg-6 d-none d-lg-block">
                <div class="nav justify-content-end">
                    <a  href="{{ Route('joindre') }}" class="nav-link text-white">Nous Rejoindre</a>

                  <a class="icon-sm bg-dark text-white rounded ms-2" href="#"
                    ><i class="bi-facebook"></i
                  ></a>
                  <a class="icon-sm bg-dark text-white rounded ms-2" href="#"
                    ><i class="bi-twitter"></i
                  ></a>
                  <a class="icon-sm bg-dark text-white rounded ms-2" href="#"
                    ><i class="bi-linkedin"></i
                  ></a>
                  <a class="icon-sm bg-dark text-white rounded ms-2" href="#"
                    ><i class="bi-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Header -->
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <!-- Logo -->
            <div style="margin-right : 20px;">
            <a class="navbar-brand header-navbar-brand  href="{{ Route('home') }}"
              ><img
                class="logo-dark"
                src="{{ asset('assets/img/avatar/logo.jpg') }}"
                title=""
                alt=""
              />
              <img
                class="logo-dark"
                src="{{ asset('assets/img/avatar/logo2.jpg') }}"
                title=""
                alt=""
              />
              <img
                class="logo-dark"
                src="{{ asset('assets/img/avatar/logo3.jpg') }}"
                title=""
                alt=""
              />
              <img
                class="logo-light"
                src="{{ asset('assets/img/avatar/logo.jpg') }}"
                title=""
                alt=""
              />
            </a>
            </div>
            <!-- Logo -->
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ Request::is('/') ? 'font-weight-bold' : '' }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('groupe') }}" class="nav-link {{ Request::is('groupe') ? 'font-weight-bold' : '' }}">Groupe</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('metier') }}" class="nav-link {{ Request::is('metier') ? 'font-weight-bold' : '' }}">Compétences et Métiers</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('realisation') }}" class="nav-link {{ Request::is('realisation') ? 'font-weight-bold' : '' }}">Réalisations</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('client') }}" class="nav-link {{ Request::is('client') ? 'font-weight-bold' : '' }}">Notre approche</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('actualite') }}" class="nav-link {{ Request::is('actualite') ? 'font-weight-bold' : '' }}">Actualités</a>
                    </li>
                </ul>
            </div>
            <!-- End Menu -->
            <div class="nav d-flex ps-4">

              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="toggler-icon"></span></button
              ><!-- End Mobile Toggle -->
              <a
                href="{{ Route('contact') }}"
                class="btn text-nowrap btn-sm d-none d-lg-flex"
                style = "background-color: #2867b2; color : white;"
                >NOUS CONTACTER</a
              >
            </div>
          </div>
        </nav>
      </header>
      <main>
      @yield('content')
      </main>


