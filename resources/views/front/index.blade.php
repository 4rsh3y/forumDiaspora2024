@extends('layout-app')

@section('title', 'Forum de la Diaspora Ivoirienne 2024')

@section('content')

    <main>
        <section class="banner position-relative pb-0">
            <div class="overlay">
            </div>
            <div class="container">
                <div class="inner-banner position-relative text-white ">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="banner-left text-center pb-lg-5 p-md-0">
                                <div class="banner-image">
                                    <img src="assets/images/team/flag.png" alt="banner-image" class="w-50"><br>
                                </div>
                                <div class="countdown">
                                    <div id="countdown"
                                        class="countdown-inner d-flex w-100 bg-white p-2 rounded-3 justify-content-center box-shadow position-relative z-2">
                                        <div class="time m-auto py-4 ">
                                            <span id="days" class="lh-1 h1 fw-bold"></span><br>
                                            <small class="text-secondary">Jours</small>
                                        </div>
                                        <div class="time  m-auto py-4">
                                            <span id="hours" class="lh-1 h1 fw-bold"></span><br>
                                            <small class="text-secondary">Heure</small>
                                        </div>
                                        <div class="time  m-auto py-4">
                                            <span id="minutes" class="lh-1 h1 fw-bold"></span><br>
                                            <small class="text-secondary">Minutes</small>
                                        </div>
                                        <div class="time  m-auto py-4">
                                            <span id="seconds" class="lh-1 h1 fw-bold"></span><br>
                                            <small class="text-secondary">Secondes</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-shadow">
                            <div class="banner-right  ms-2 text-center text-lg-start pb-8">
                                <div class="banner-title pb-3">
                                    <h4 class="text-white pb-3">Forum de la <span class="pink">DIASPORA Ivoirienne</span>
                                        2024</h5>
                                        <h2 class="text-white mt-5">
                                            Attractivité des territoires et mécanismes d'appui à la diaspora pour le
                                            développement durable en Côte d'Ivoire.
                                    </h4>
                                </div>
                                <div class="banner-event-info pb-3 mt-4">
                                    <ul
                                        class="m-0 ps-0 d-sm-flex justify-content-center justify-content-lg-start list-unstyled">
                                        <li class="pe-2 border-end border-1 border-lightgrey">
                                            <h5 class="text-white"><i class="fa  fa-calendar-o pe-1"></i> 12-13 Nov 2024
                                            </h5>
                                        </li>
                                        <li class="ps-2">
                                            <h5 class="text-white"><i class="fa  fa-map-marker pe-1"></i> Yamoussoukro, Côte
                                                d'Ivoire</h5>
                                        </li>
                                    </ul>
                                </div>
                                <div class="event-discription">
                                    <div class="banner-button">
                                        <div class="row mt-5">
                                            <div class=" offset-3 col-lg-6 col-md-6">
                                                <a class="btn me-3 my-1 w-100" href="{{ route('Apropos') }}">
                                                    Découvrez l'évènement
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave overflow-hidden position-absolute w-100 z-0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"
                    class="d-block position-relative">
                    <path class="elementor-shape-fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
                  c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
                  c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
                </svg>
            </div>
        </section>


        <section class="overview pb-0">
            <div class="container">
                <div class="inner-overview pb-10 position-relative border-dashed-bottom-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="overview-left text-center text-lg-start">
                                <div class="overview-title pb-4">
                                    <p class="mb-1 pink">L'évènement</p>
                                    <h2 class="mb-2">Bienvenu au Forum de la <span class="pink">DIASPORA
                                            IVOIRIENNE</span> 2024</h2>
                                    <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut
                                        aliquip ex ea commodo consequat.</P>
                                    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia deserunt
                                        mollit anim id est laborum...</p>
                                    <p class="text-center">
                                        <a class="btn btn3" href="{{ route('Apropos') }}">Lire plus</a>
                                    </p>
                                </div>
                                <div class="overview-event-info pb-6 g-4 text-start position-absolute">
                                    <div class="row justify-content-around ">
                                        <div class="col-lg-6 col-md-6">
                                            <a>
                                                <div
                                                    class="event-info-box align-items-center d-flex p-4 rounded bg-white box-shadow my-2">
                                                    <div class="event-info-icon text-center ">
                                                        <i
                                                            class="fa fa-map-marker  text-white bg-pink rounded-circle me-3"></i>
                                                    </div>
                                                    <div class="location-info">
                                                        <h5 class="mb-1">Lieu : </h5>
                                                        <small>Fondation Félix HOUPHOUËT-BOIGNY pour la Recherche de la Paix
                                                            de Yamoussoukro</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <a>
                                                <div
                                                    class="event-info-box align-items-center d-flex p-4 rounded bg-white box-shadow my-2">
                                                    <div class="event-info-icon text-center">
                                                        <i
                                                            class="fa fa-calendar-o  text-white bg-pink rounded-circle me-3"></i>
                                                    </div>
                                                    <div class="time-info">
                                                        <h5 class="mb-1">Date : </h5>
                                                        <small>Les 12 & 13 <br> Novembre, 2024</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="overview-img">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 p-0 ">
                                        <div class="container-img-left mb-2">
                                            <div class="img-left-1 float-end w-lg-80">
                                                <img class="mb-2 w-100 rounded"
                                                    src="{{ asset('https://placehold.co/1094x730') }}" alt="group-image">
                                            </div>
                                            <div class="img-left-2">
                                                <img src="{{ asset('https://placehold.co/922x922') }}" alt="group-image"
                                                    class="w-100 rounded">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="container-img-right w-lg-75">
                                            <img src="{{ asset('https://placehold.co/971x1456') }}" alt="group-image"
                                                class="w-100 rounded">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="partners">
            <div class="container">
                <div class="partner-inner">
                    <div class="partner-title text-center pb-6 w-lg-60 m-auto">
                        <p class="mb-1 pink">Partenariats</p>
                        <h2 class="mb-1">Ils ont bien voulu nous accompagner</h2>

                    </div>
                    <div class="partner-img pb-6">
                        <div class="row row-cols-1 row-cols-lg-5 row-cols-md-5 ">
                            <div class="col p-0 border-end border-sm-0">
                                <div class="p-2 partner-img-box text-center">
                                    <img src="{{ asset('https://placehold.co/143x86') }}" alt="partner-img"
                                        class="opacity-75 w-lg-75 w-md-100 w-40">
                                </div>
                            </div>
                            <div class="col p-0 border-end border-sm-0">
                                <div class="p-2 partner-img-box text-center ">
                                    <img src="{{ asset('https://placehold.co/143x86') }}" alt="partner-img"
                                        class="opacity-75 w-lg-75 w-md-100 w-40">
                                </div>
                            </div>
                            <div class="col p-0 border-end border-sm-0">
                                <div class="p-2 partner-img-box text-center">
                                    <img src="{{ asset('https://placehold.co/143x86') }}" alt="partner-img"
                                        class="opacity-75 w-lg-75 w-md-100 w-40">
                                </div>
                            </div>
                            <div class="col p-0 border-end border-sm-0">
                                <div class="p-2 partner-img-box text-center">
                                    <img src="{{ asset('https://placehold.co/143x86') }}" alt="partner-img"
                                        class="opacity-75 w-lg-75 w-md-100 w-40">
                                </div>
                            </div>
                            <div class="col p-0 border-sm-0">
                                <div class="p-2 partner-img-box text-center">
                                    <img src="{{ asset('https://placehold.co/143x86') }}" alt="partner-img"
                                        class="opacity-75 w-lg-75 w-md-100 w-40">
                                </div>
                            </div>
                            <div class="col p-0 border-end border-top border-sm-0">
                                <div class="p-2 partner-img-box text-center">
                                    <img src="{{ asset('https://placehold.co/143x86') }}" alt="partner-img"
                                        class="opacity-75 w-lg-75 w-md-100 w-40">
                                </div>
                            </div>
                            <div class="col p-0 border-end border-top border-sm-0">
                                <div class="p-2 partner-img-box text-center">
                                    <img src="{{ asset('https://placehold.co/143x86') }}" alt="partner-img"
                                        class="opacity-75 w-lg-75 w-md-100 w-40">
                                </div>
                            </div>
                            <div class="col p-0 border-end border-top border-sm-0">
                                <div class="p-2 partner-img-box text-center ">
                                    <img src="{{ asset('https://placehold.co/143x86') }}" alt="partner-img"
                                        class="opacity-75 w-lg-75 w-md-100 w-40">
                                </div>
                            </div>
                            <div class="col p-0 border-end border-top border-sm-0">
                                <div class="p-2 partner-img-box text-center ">
                                    <img src="{{ asset('https://placehold.co/143x86') }}" alt="partner-img"
                                        class="opacity-75 w-lg-75 w-md-100 w-40">
                                </div>
                            </div>
                            <div class="col p-0 border-top border-0 border-sm-0">
                                <div class="p-2 partner-img-box text-center border-sm-0">
                                    <img src="{{ asset('https://placehold.co/143x86') }}" alt="partner-img"
                                        class="opacity-75 w-lg-75 w-md-100 w-40">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="partner-button text-center">
                        <a class="btn" href="{{ route('Panelistes') }}#partners">Découvrir la liste complète</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="feature text-white position-relative z-0 start-0">
            <div class="overlay z-n1">
            </div>
            <div class="container">
                <div class="feature-inner">
                    <div class="counter text-center border-bottom border-white border-opacity-25">
                        <div class="inner-counter mb-7">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 p-2 ">
                                    <div class="counter-box p-2 border-end border-white border-opacity-25">
                                        <h1 class="text-white m-0"><span class="num"
                                                data-val="10"></span><span>+</span>
                                        </h1>
                                        <p>Panelistes</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 p-2">
                                    <div class="counter-box p-2 border-end border-white border-opacity-25">
                                        <h1 class="text-white m-0"><span class="num"
                                                data-val="100"></span><span>+</span>
                                        </h1>
                                        <p>Participants attendus</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 p-2">
                                    <div class="counter-box p-2 border-end border-white border-opacity-25">
                                        <h1 class="text-white m-0"><span class="num"
                                                data-val="10"></span><span>+</span>
                                        </h1>
                                        <p>Stands</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 p-2">
                                    <div class="p-2">
                                        <h1 class="text-white m-0"><span class="num"
                                                data-val="10"></span><span>+</span>
                                        </h1>
                                        <p class="mb-0">B2G et B2B</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-lists pt-8">
                        <div class="row g-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box py-7 px-6 rounded text bg-black bg-opacity-25">
                                    <a>
                                        <div class="feature-box-icon mb-4">
                                            <i
                                                class="fa fa-address-book-o text-white bg-pink rounded-circle text-center"></i>
                                        </div>
                                        <div class="feature-box-info ">
                                            <h5 class="text-white mb-2">LOREM IPSUM <sup
                                                    class="bg-danger p-1 rounded">B2G</sup> </h5>
                                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut
                                                labore et dolore.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box py-7 px-6 rounded  bg-black bg-opacity-25">
                                    <a>
                                        <div class="feature-box-icon mb-4">
                                            <i class="fa fa-desktop text-white bg-pink rounded-circle text-center"></i>
                                        </div>
                                        <div class="feature-box-info">
                                            <h5 class="text-white mb-2">LOREM IPSUM <sup
                                                    class="bg-primary p-1 rounded">B2B</sup> </h5>
                                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut
                                                labore et dolore.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box py-7 px-6 rounded bg-black bg-opacity-25">
                                    <a>
                                        <div class="feature-box-icon mb-4">
                                            <i class="fa fa-desktop text-white bg-pink rounded-circle text-center"></i>
                                        </div>
                                        <div class="feature-box-info">
                                            <h5 class="text-white mb-2">LOREM IPSUM <sup
                                                    class="bg-secondary p-1 rounded">Stands</sup> </h5>
                                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut
                                                labore et dolore.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box py-7 px-6 rounded bg-black bg-opacity-25">
                                    <a>
                                        <div class="feature-box-icon mb-4">
                                            <i class="fa fa-cogs text-white bg-pink rounded-circle text-center"></i>
                                        </div>
                                        <div class="feature-box-info">
                                            <h5 class="text-white mb-2">LOREM <sup
                                                    class="bg-light p-1 rounded text-dark">Table ronde</sup> </h5>
                                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut
                                                labore et dolore.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box py-7 px-6 rounded text bg-black bg-opacity-25">
                                    <a>
                                        <div class="feature-box-icon mb-4">
                                            <i
                                                class="fa fa-address-book-o text-white bg-pink rounded-circle text-center"></i>
                                        </div>
                                        <div class="feature-box-info ">
                                            <h5 class="text-white mb-2">LOREM IPSUM <sup
                                                    class="bg-danger p-1 rounded">B2G</sup> </h5>
                                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut
                                                labore et dolore.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box py-7 px-6 rounded  bg-black bg-opacity-25">
                                    <a>
                                        <div class="feature-box-icon mb-4">
                                            <i class="fa fa-desktop text-white bg-pink rounded-circle text-center"></i>
                                        </div>
                                        <div class="feature-box-info">
                                            <h5 class="text-white mb-2">LOREM IPSUM <sup
                                                    class="bg-primary p-1 rounded">B2B</sup> </h5>
                                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut
                                                labore et dolore.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box py-7 px-6 rounded bg-black bg-opacity-25">
                                    <a>
                                        <div class="feature-box-icon mb-4">
                                            <i class="fa fa-desktop text-white bg-pink rounded-circle text-center"></i>
                                        </div>
                                        <div class="feature-box-info">
                                            <h5 class="text-white mb-2">LOREM IPSUM <sup
                                                    class="bg-secondary p-1 rounded">Stands</sup> </h5>
                                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut
                                                labore et dolore.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box py-7 px-6 rounded bg-black bg-opacity-25">
                                    <a>
                                        <div class="feature-box-icon mb-4">
                                            <i class="fa fa-cogs text-white bg-pink rounded-circle text-center"></i>
                                        </div>
                                        <div class="feature-box-info">
                                            <h5 class="text-white mb-2">LOREM <sup
                                                    class="bg-light p-1 rounded text-dark">Table ronde</sup> </h5>
                                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut
                                                labore et dolore.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="partner-button text-center mt-5">
                        <a class="btn mt-5" href="{{ route('Activities') }}">Découvrir la liste complète</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="speakers">
            <div class="container">
                <div class="speaker-inner">
                    <div class="speaker-title text-center p-2">
                        <div class="row align-items-center ">
                            <div class="col-lg-6">
                                <div class="title-content  text-lg-start mb-2">
                                    <p class="mb-1 pink">PANELISTES</p>
                                    <h2 class="mb-1">DÉCOUVREZ NOS ÉMINENTS <span class="pink">PANELISTES</span></h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="speaker-button text-lg-end">
                                    <a class="btn my-2" href="{{ route('Panelistes') }}#speakers">Voir la liste
                                        complète</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sepaker-list text-center text-white">
                        <div class="row">
                            <div class=" col-lg-3 col-md-6 p-2">
                                <div class="speaker-box  position-relative overflow-hidden text-white">
                                    <img class="speaker-image rounded w-100"
                                        src="{{ asset('assets/images/speakers/zeze.png') }}" alt="ZEZE STANISLAS">
                                    <div class="box-content position-absolute bottom-0 z-1">
                                        <h6 class="speaker-title d-block text-white pb-1"><a href="">ZEZE
                                                STANISLAS</a>
                                        </h6>
                                        <span class="speaker-post d-block pb-2">PDG Bloomfield Investment</span>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-3 col-md-6 p-2">
                                <div class="speaker-box position-relative overflow-hidden">
                                    <img class="speaker-image rounded w-100"
                                        src="{{ asset('https://placehold.co/922x1126') }}" alt="speaker-image">
                                    <div class="box-content position-absolute bottom-0 z-1">
                                        <h6 class="speaker-title d-block text-white pb-1"><a href="">GERARDO
                                                AMBROSE</a>
                                        </h6>
                                        <span class="speaker-post d-block pb-2">Marketing Expert</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 p-2">
                                <div class="speaker-box position-relative overflow-hidden">
                                    <img class="speaker-image rounded w-100"
                                        src="{{ asset('https://placehold.co/922x1126') }}" alt="speaker-image">
                                    <div class="box-content position-absolute bottom-0 z-1">
                                        <h6 class="speaker-title d-block text-white pb-1"><a href="">GERARDO
                                                AMBROSE</a>
                                        </h6>
                                        <span class="speaker-post d-block pb-2">Marketing Expert</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 p-2">
                                <div class="speaker-box position-relative overflow-hidden">
                                    <img class="speaker-image rounded w-100"
                                        src="{{ asset('https://placehold.co/922x1126') }}" alt="speaker-image">
                                    <div class="box-content position-absolute bottom-0 z-1">
                                        <h6 class="speaker-title d-block text-white pb-1"><a href="">GERARDO
                                                AMBROSE</a>
                                        </h6>
                                        <span class="speaker-post d-block pb-2">Marketing Expert</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-infobanner></x-infobanner>

        <section class="schedules">
            <div class="container">
                <div class="schedule-inner">
                    <div class="schedule-title text-center mb-6 w-lg-60 mx-auto">
                        <p class="mb-1 pink">Chronogramme</p>
                        <h2 class="mb-1">Déroulement du forum</h2>
                    </div>
                    <div class="schedule-list-outer">
                        <div class="accordion">
                            <div class="accordion-tabs">
                                <div class="accordion-tab active" data-tab="1"> 12 Novembre 2024</div>
                                <div class="accordion-tab" data-tab="2">13 Novembre 2024</div>
                            </div>
                            <div class="accordion-content active shadow" data-content="1">
                                <div class="schedule-list text-center text-sm-start ">
                                    <div
                                        class="schedule-list-box bg-lightgrey border border-white border-2 rounded px-6 py-4 mb-5 hover:scale-105 transition-transform duration-300">
                                        <div class="schedule-box-title">
                                            <h5 class="mb-2">
                                                <a class="black">
                                                    Lorem Ipsum
                                                </a>
                                            </h5>
                                        </div>
                                        <div class="schedule-box-info">
                                            <ul class="mb-2 p-0">
                                                <li class="d-inline"><i class="fa fa-clock-o pink me-2"
                                                        aria-hidden="true"></i><small>08:30 -
                                                        09:30 AM</small></li>
                                                <li class="d-inline"><i class="fa fa-thumb-tack pink mx-2"
                                                        aria-hidden="true"></i><small>Exploration Hall</small></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div
                                        class="schedule-list-box bg-lightgrey border border-white border-2 rounded px-6 py-4 mb-5 hover:scale-105 transition-transform duration-300">
                                        <div class="schedule-box-title">
                                            <h5 class="mb-2">
                                                <a class="black">
                                                    Lorem Ipsum
                                                </a>
                                            </h5>
                                        </div>
                                        <div class="schedule-box-info">
                                            <ul class="mb-2 p-0">
                                                <li class="d-inline"><i class="fa fa-clock-o pink me-2"
                                                        aria-hidden="true"></i><small>08:30 -
                                                        09:30 AM</small></li>
                                                <li class="d-inline"><i class="fa fa-thumb-tack pink mx-2"
                                                        aria-hidden="true"></i><small>Exploration Hall</small></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-content shadow" data-content="2">
                                <div
                                    class=" schedule-list-box bg-lightgrey   border border-white border-2 rounded px-6 py-4 mb-5">
                                    <div class="schedule-box-title">
                                        <h5 class="mb-2">
                                            <a class="black">
                                                Lorem Ipsum
                                            </a>
                                        </h5>
                                    </div>
                                    <div class="schedule-box-info">
                                        <ul class="mb-2 p-0">
                                            <li class="d-inline"><i class="fa fa-clock-o pink me-2"
                                                    aria-hidden="true"></i><small>08:30 -
                                                    09:30 AM</small></li>
                                            <li class="d-inline"><i class="fa fa-thumb-tack pink mx-2"
                                                    aria-hidden="true"></i><small>Exploration Hall</small></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial bg-lightgrey">
            <div class="container">
                <div class="section-title w-lg-60 m-auto text-center pb-5">
                    <p class="mb-1  pink">Retour d'expérience</p>
                    <h2 class="mb-1">témoignages des anciens participants</h2>
                </div>
                <div class="slider testimonial-slide">
                    <div class="box1 mx-4 p-6 rounded bg-white">
                        <div class="testimonial-content position-relative">
                            <i class="fa fa-quote-left position-absolute" aria-hidden="true"></i>
                            <p class="my-6 position-relative w-md-75 m-6">Lorem ipsum dolor sit amet, consectetur
                                adipiscing
                                elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="testimonial-bio d-flex align-items-center">
                            <img src="{{ asset('https://placehold.co/100') }}" alt
                                class="bio-img me-5 rounded-circle float-start">
                            <div>
                                <p class="mb-1 fw-semibold black">DANIEL FRANKIE</p>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="box1 mx-4 p-6 rounded bg-white">
                        <div class="testimonial-content position-relative">
                            <i class="fa fa-quote-left position-absolute" aria-hidden="true"></i>
                            <p class="my-6 position-relative w-md-75 m-6">Lorem ipsum dolor sit amet, consectetur
                                adipiscing
                                elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="testimonial-bio d-flex align-items-center">
                            <img src="{{ asset('https://placehold.co/100') }}" alt
                                class="bio-img me-5 rounded-circle float-start">
                            <div>
                                <p class="mb-1 fw-semibold black">DANIEL FRANKIE</p>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="box1 mx-4 p-6 rounded bg-white">
                        <div class="testimonial-content position-relative">
                            <i class="fa fa-quote-left position-absolute" aria-hidden="true"></i>
                            <p class="my-6 position-relative w-md-75 m-6">Lorem ipsum dolor sit amet, consectetur
                                adipiscing
                                elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="testimonial-bio d-flex align-items-center">
                            <img src="{{ asset('https://placehold.co/100') }}" alt
                                class="bio-img me-5 rounded-circle float-start">
                            <div>
                                <p class="mb-1 fw-semibold black">DANIEL FRANKIE</p>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="box1 mx-4 p-6 rounded bg-white">
                        <div class="testimonial-content position-relative">
                            <i class="fa fa-quote-left position-absolute" aria-hidden="true"></i>
                            <p class="my-6 position-relative w-md-75 m-6">Lorem ipsum dolor sit amet, consectetur
                                adipiscing
                                elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="testimonial-bio d-flex align-items-center">
                            <img src="{{ asset('https://placehold.co/100') }}" alt
                                class="bio-img me-5 rounded-circle float-start">
                            <div>
                                <p class="mb-1 fw-semibold black">DANIEL FRANKIE</p>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq pb-0 overflow-visible d-block position-relative z-1">
            <div class="overlay opacity-25 z-n1">
            </div>
            <div class="container">
                <div>
                    <div class="row">
                        <div class="col-lg-4 px-4 mb-2">
                            <div class="faq-general">
                                <div class="section-title pb-3 text-center text-lg-start">
                                    <p class="mb-1 pink">Vos Questions</p>
                                    <h2 class="mb-2 text-white">Foires aux <span class="pink">QUESTIONS!!</span>
                                    </h2>
                                </div>
                                <div class="faq-accordion p-4 mb-5 bg-white rounded">
                                    <div class="accordion accordion-faq" id="accordionFlushExample">
                                        <div class="accordion-item ">
                                            <p class="accordion-header p-4">
                                                <button class="accordion-button collapsed fw-semibold p-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing.
                                                </button>
                                            </p>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body bg-lightgrey p-6">Phasellus quis diam sed ligula
                                                    sagittis tempus
                                                    malesuada sed eros. Quisque elementum, diam et pellentesque volutpat,
                                                    ligula diam suscipit
                                                    ligula, sit amet hendrerit arcu ipsum eu nulla. Morbi sed molestie
                                                    nulla, ac viverra turpis.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <p class="accordion-header p-4">
                                                <button class="accordion-button collapsed  fw-semibold p-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing.
                                                </button>
                                            </p>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body bg-lightgrey p-6">Placeholder content for this
                                                    accordion, which is
                                                    intended to demonstrate the <code>.accordion-flush</code> class. This is
                                                    the second item's
                                                    accordion body. Let's imagine this being filled with some actual
                                                    content.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <p class="accordion-header p-4">
                                                <button class="accordion-button collapsed fw-semibold p-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing.
                                                </button>
                                            </p>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body bg-lightgrey p-6">Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Curabitur interdum, arcu a accumsan
                                                    vulputate, leo diam sodales mi, et bibendum mi nunc at lorem. Etiam ut
                                                    nisi hendrerit,</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <p class="accordion-header p-4">
                                                <button class="accordion-button collapsed fw-semibold p-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree1"
                                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing.
                                                </button>
                                            </p>
                                            <div id="flush-collapseThree1" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body bg-lightgrey p-6">Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Curabitur interdum, arcu a accumsan
                                                    vulputate, leo diam sodales mi, et bibendum mi nunc at lorem. Etiam ut
                                                    nisi hendrerit,</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 align-self-center px-4">
                            <div class="faq-form bg-white rounded shadow-lg p-6 mb-mi">
                                <x-inscription-particulier></x-inscription-particulier>
                                <p class="mt-6">
                                    Entreprise ? Cliquez <a href="{{ route('inscriptions') }}" class="text-blue">ici</a>
                                    pour être redirigé
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="direction pb-0 mb-5">
            <div class="container">
                <div class="section-title text-center pb-2 w-lg-60 m-auto">
                    <h2 class="mb-1">informations</h2>
                </div>
                <div class="direction-content">
                    <div class="direction-info">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 px-1">
                                <div class="p-6 d-flex text-white w-100 h-100 rounded bg-pink ">
                                    <div class="justify-content-center align-self-center ms-6">
                                        <h5 class="text-white pb-2">EVENT VENUE:</h5>
                                        <p class="pb-5 m-0">Galleria mall conference center</p>
                                        <h5 class="text-white pb-2">ADDRESS:</h5>
                                        <p class="pb-5 m-0">19 By Pass NR, Bali, Indonesia, BC 22196</p>
                                        <h5 class="text-white pb-2">RECEPTION INFO:</h5>
                                        <p class="pb-5 m-0">Booking: (+62) 1919-2020</p>
                                        <a>Get Directions</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 px-1 py-2">
                                <iframe height="400" class="rounded w-100"
                                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="my-5 py-5"></div>

    </main>

@endsection
