@extends('admin.app')


<style>
    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination li {
        margin-right: 5px;
    }

    .pagination li a {
        display: block;
        padding: 5px 10px;
        border: 1px solid #ccc;
        color: #333;
        text-decoration: none;
    }

    .pagination li a:hover {
        background-color: #f5f5f5;
    }

    .pagination .active a {
        background-color: #007bff;
        color: white;
    }
</style>


@section('page_title')
    OTCI GROUPE
@endsection

@section('content')
    <section class="main_content dashboard_part large_header_bg">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area d-flex align-items-center">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt> </button>
                                </form>
                            </div>
                            <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a class="bell_notification_clicker nav-link-notify" href="#"> <img
                                            src="img/icon/bell.svg" alt>
                                    </a>

                                    <div class="Menu_NOtification_Wrap">
                                        <div class="notification_Header">
                                            <h4>Notifications</h4>
                                        </div>
                                        <div class="Notification_body">

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/2.png" alt></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Cool Marketing </h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/4.png" alt></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Awesome packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/3.png" alt></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>what a packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/2.png" alt></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Cool Marketing </h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/4.png" alt></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Awesome packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/3.png" alt></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>what a packages</h5>
                                                    </a>
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
                                    <a class="CHATBOX_open nav-link-notify" href="#"> <img src="img/icon/msg.svg" alt>
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

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">

                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header">
                                        <h4>Equipes</h4>
                                        <div class="box_right d-flex lms_block">

                                            <div class="serach_field_2">
                                                <div class="search_inner">
                                                    <form Active="#">
                                                        <div class="search_field">
                                                            <input type="text" id="searchInput" placeholder="Saisir">
                                                        </div>
                                                        <button type="submit"> <i class="ti-search"></i> </button>

                                                    </form>

                                                </div>

                                            </div>

                                            <div class="add_button ms-2">
                                                <a href="{{ route('listeEquipe') }}" class="btn_1"
                                                    id="addRealizationButton">Recharger tout</a>
                                                <button id="reloadAllButton" style="display: none;"
                                                    class="btn_1">Recharger tout</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                                    <div class="QA_table mb_30">

                                        <table class="table  ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nom</th>
                                                    <th scope="col">Poste</th>
                                                    <th scope="col">Reseau Social</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Modifier</th>
                                                    <th scope="col">Supprimer</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($equipes as $equipe)
                                                    <tr>
                                                        <td>{{ $equipe->nom}}
                                                        </td>
                                                        <td>{{ $equipe->poste}}
                                                        </td>
                                                        <td>{{ $equipe->reseau}}
                                                        </td>
                                                        <td> <img class="card-img-top"
                                                            src="{{ asset('upload/equipes/' . $equipe->image) }}"
                                                            title="" alt=""  style="height: 90px; width:90px;"/></td>
                                                            <td>
                                                                <a href="{{ route('modifierEquipe', $equipe->id )}}" class="btn btn-primary" style="color : white;">Modifier</a>

                                                            </td>
                                                            <td>     <button class="btn btn-danger" onClick="deleteFunction('{{ $equipe->id }}')">Supprimer</button></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="pagination" style="margin-top: 20px;">
                                    {{ $equipes->links() }}
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </div>
        @include('admin.modalEquipe')
        @include('admin.footer')

    @endsection
