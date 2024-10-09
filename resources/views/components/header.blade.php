<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/accordion.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rgpd.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/font-awesome.min.css') }}">
</head>

<body>

    <header class="main_header_area position-absolute w-100">
        <div class="header-content text-white">
            <div class="container">
                <div class="header-content-inner py-2">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="social-links ">
                                <ul class="m-0 p-0">
                                    <li class="d-inline">
                                        <a href="#">
                                            <i class="fa fa-facebook border-social rounded-circle text-center"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-event-info text-end">
                                <ul class="m-0 p-0">
                                    <li class="px-2 border-end border-lightgrey border-opacity-50 d-inline">
                                        <i class="fa fa-phone pe-1"></i>
                                        <small>+225 01 02 03 04 05</small>
                                    </li>
                                    <li class=" px-2 border-end d-inline border-lightgrey border-opacity-50">
                                        <i class="fa fa-envelope-o pe-1"></i>
                                        <small>
                                            <a href="#" class="__cf_email__" id="emailLink">[email&#160;protected]</a>
                                        </small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_menu " id="header_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg py-2">
                    <div class="row">
                        <div class="col-lg-2 col-md-6">
                            <div class="navbar-brand m-0">
                                <img src="{{asset('assets/images/logo/1.png')}}" alt="Logo" class="w-100">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 ">
                            <div class="collapse navbar-collapse justify-content-center"
                                id="bs-example-navbar-collapse-1">
                                <ul class="navbar-nav align-items-center" id="responsive-menu" style="font-size: 18px; font-weight: bold !important; ">
                                    <li class="nav-item ">
                                        <a class="nav-link px-2 my-4 py-0 text-white text-shadow" style="font-weight: bold !important "
                                            href="{{route('Accueil')}}">Accueil</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link px-2 my-4 py-0 text-white text-shadow" href="{{route('Panelistes')}}">
                                            Panelistes
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle px-2 my-4 py-0 text-white text-shadow"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Calendrier & Activités
                                        </a>
                                        <ul class="dropdown-menu bg-lightgrey p-0 rounded">
                                            <li>
                                                <a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                                    href="{{route('calendrier')}}">Le Calendrier
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                                    href="{{route('stands')}}">Les Stands
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                                    href="{{route('b2b')}}">Les B2B
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                                    href="{{route('b2g')}}"> Les B2G
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                                    href="{{route('tables-rondes')}}">Les Tables rondes
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    {{-- <li class="nav-item dropdown">
                                        <a class="nav-link  px-2 my-4 py-0 text-white" href="{{route('partenaires')}}">
                                            Partenaires
                                        </a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link px-2 my-4 py-0 text-white text-shadow" href="{{route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="menu-search text-end">
                                <a class="btn btn3" href="{{route('inscriptions')}}">Inscription</a>
                            </div>
                        </div>
                        <div id="slicknav-mobile"></div>
                    </div>
                </nav>
            </div>
        </div>

    </header>