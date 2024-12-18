<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/marketing-html/index_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jan 2024 08:43:21 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>OTCI - GROUPE</title>
    <link rel="icon" href="img/logo.png" type="image/png">

    <link rel="stylesheet" href="{{ asset('css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/gijgo/gijgo.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/datepicker/date-picker.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/scroll/scrollable.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/morris/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/metisMenu.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/colors/default.css') }}" id="colorSkinCSS">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body class="crm_body_bg">



    <nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">

        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="has-arrow" href="{{ route('admin') }}" aria-expanded="false">

                    <div class="icon_menu">
                        <img src="{{ asset('img/menu-icon/dashboard.svg') }}" style="color : black;" alt>
                    </div>
                    <span>Tableau de bord</span>
                </a>


            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="img/menu-icon/4.svg" alt>
                    </div>
                    <span>Réalisations</span>
                </a>
                <ul>
                    <li><a href="{{ route('categorie') }}">Catégorie</a></li>
                    <li><a href="{{ route('sousCategorie') }}">Sous-categorie</a></li>
                    <li><a href="{{ route('form') }}">Ajouter Réalisation</a></li>
                    <li><a href="{{ route('realisation-a') }}">Liste Réalisations</a></li>
                </ul>
            </li>

            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="img/menu-icon/2.svg" alt>
                    </div>
                    <span>Articles</span>
                </a>
                <ul>
                    <li><a href="{{ route('categorieArticle') }}">Catégorie</a></li>
                    <li><a href="{{ route('formArticle') }}">Ajouter article</a></li>
                    <li><a href="{{ route('actualite-a') }}">Liste Articles</a></li>
                </ul>
            </li>


            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="img/menu-icon/2.svg" alt>
                    </div>
                    <span>Postes</span>
                </a>
                <ul>
                    <li><a href="{{ route('formulairePoste') }}">Ajouter Poste</a></li>
                    <li><a href="{{ route('listePoste') }}">Liste Postes</a></li>

                </ul>
            </li>


            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="img/menu-icon/9.svg" alt>
                    </div>
                    <span>Equipe</span>
                </a>
                <ul>
                    <li><a href="{{ route('formulaireEquipe') }}">Ajouter Equipe</a></li>
                    <li><a href="{{ route('listeEquipe') }}">Liste Equipe</a></li>
                </ul>
            </li>


            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="img/menu-icon/9.svg" alt>
                    </div>
                    <span>Candidatures</span>
                </a>
                <ul>
                    <li><a href="{{ route('listeCandidature') }}">Liste</a></li>

                </ul>
            </li>


            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="img/menu-icon/9.svg" alt>
                    </div>
                    <span>Page Groupe</span>
                </a>
                <ul>
                    {{-- <li><a href="{{ route('formulaireGroupe') }}">Ajouter</a></li> --}}
                    <li><a href="{{ route('listeGroupe') }}">Contenu</a></li>
                </ul>
            </li>





            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="img/menu-icon/9.svg" alt>
                    </div>
                    <span>Utilisateurs</span>
                </a>
                <ul>
                    <li><a href="{{ route('register') }}">Ajouter Utilisateur</a></li>
                    <li><a href="{{ route('listeUtilisateurs') }}">Liste Utilisateurs</a></li>
                </ul>
            </li>


            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="img/menu-icon/9.svg" alt>
                    </div>
                    <span>Messages contact</span>
                </a>
                <ul>
                    <li><a href="{{ route('listeContactMessage') }}">Liste</a></li>

                </ul>
            </li>


            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="img/menu-icon/9.svg" alt>
                    </div>
                    <span>Metiers</span>
                </a>
                <ul>
                    <li><a href="{{ route('formulaireMetier') }}">Ajouter Metier</a></li>
                    <li><a href="{{ route('listeMetier') }}">Liste Metiers</a></li>
                </ul>
            </li>


            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="img/menu-icon/9.svg" alt>
                    </div>
                    <span>Infos page contact</span>
                </a>
                <ul>
                    {{-- <li><a href="{{ route('formulaireInfos') }}">Ajouter</a></li> --}}
                    <li><a href="{{ route('infosContact') }}">Contenu</a></li>
                </ul>
            </li>


        </ul>
    </nav>
    @yield('content')
