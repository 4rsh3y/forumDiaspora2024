@extends('layout-app')

@section('title', 'Concernant le Forum de la Diaspora Ivoirienne 2024')

@section('content')

<section class="banner page-banner position-relative pb-0">
    <div class="overlay">
    </div>
    <div class="container">
        <div class="page-title position-relative py-10 text-center">
            <div class="banner-title position-relative w-lg-50 m-auto mb-1">
                <h2 class="p-0 text-white text-shadow">
                    THÈME : <div class="sperator w-20 border-bottom border-2 border-pink m-auto"></div><br>
                        ATTRACTIVITÉ DES TERRITOIRES ET MÉCANISMES D'APPUI À LA DIASPORA POUR LE DÉVELOPPEMENT DURABLE EN CÔTE D'IVOIRE
                </h2>
            </div>
        </div>
    </div>
</section>

<section class="news-single">
    <div class="container">
        <div class="news-single-inner">
            <div class="row gx-lg-5 gy-5">

                <div class="col-lg-8">
                    <div class="news-left">
                        <div class="banner-title pb-3">
                            <h3 class=" text-center pb-3">Forum de la <span class="pink">DIASPORA Ivoirienne</span>
                                2024</h3>
                        </div>
                        <div class="news-img mb-4">
                            <img src="{{asset('https://placehold.co/1920x850') }}" alt="" class="w-100 rounded shadow mb-4">
                        </div>
                        <div class="news-description pb-4">
                            
                            <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                            <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="event-detail-right text-center">
                        <div class=" align-items-center justify-content-center justify-content-lg-start mb-5">
                            <a class="btn" href="">Inscription</a>
                        </div>
                        <div class="event-info-box p-6 box-shadow rounded mb-6">
                            <div class="info-header mb-5">
                                <h6 class="pb-2">Informations</h6>
                                <div class="sperator w-20 m-auto border-bottom border-2 border-pink"></div>
                            </div>
                            <div class="event-info-list">
                                <div
                                    class="event-info d-md-flex text-md-start align-items-center pb-3 mb-3 border-dashed-bottom-2">
                                    <div class="info-icon">
                                        <i class="fa fa-calendar pink me-2 m-sm-0" aria-hidden="true"></i>
                                    </div>
                                    <div class="event-info-detail ms-1 m-sm-0">
                                        <p class="my-1 fw-semibold black text-uppercase">Date</p>
                                        <p class="mb-0">12 & 13 Novembre 2024</p>
                                    </div>
                                </div>
                                <div
                                    class="event-info d-md-flex text-md-start align-items-center pb-3 mb-3 border-dashed-bottom-2">
                                    <div class="info-icon">
                                        <i class="fa fa-clock-o pink me-2 m-sm-0" aria-hidden="true"></i>
                                    </div>
                                    <div class="event-info-detail ms-1 m-sm-0">
                                        <p class="my-1 fw-semibold black text-uppercase">Temps</p>
                                        <p class="mb-0">08h00 - 16h00</p>
                                    </div>
                                </div>
                                <div class="event-info d-md-flex text-md-start align-items-center mb-3 border-0">
                                    <div class="info-icon">
                                        <i class="fa fa-map-o pink me-2 m-sm-0" aria-hidden="true"></i>
                                    </div>
                                    <div class="event-info-detail ms-1 m-sm-0">
                                        <p class="my-1 fw-semibold black text-uppercase">Lieu</p>
                                        <p class="mb-0">Fondation pour la recherche de la Paix, Yamoussoukro</p>
                                    </div>
                                </div>
                            </div>
                            <div class="map">
                                <iframe height="200" class="rounded w-100"
                                    src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                            </div>
                        </div>
                        {{-- <div class="contact-us-outer position-relative rounded">
                            <div class="overlay"></div>
                            <div class="contact-us  px-6 py-8 position-relative text-white">
                                <h4 class="mb-4 text-white">Need Help?</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur.</p>
                                <div class="contact-btn">
                                    <a class="btn btn3" href="contact.html">Contact Us<i
                                            class="fa fa-long-arrow-right ms-4"></i></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

                
            </div>

            <div class="row gx-lg-5 gy-5">
                <div class="col-lg-12">
                    <div class="news-right">
                        <div class="about-organizer p-6 box-shadow rounded text-center mb-6">
                            <div class="organizer-title mb-3">
                                <h6>Concernant les organisateurs</h6>
                            </div>
                            <div class="sperator w-20 border-bottom border-2 border-pink m-auto"></div>
                            <div class="container-fluid" style="margin: -10% 0 -13% 0 !important">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="{{asset('assets/images/logo/senat.png')}}" alt="" width="100%">
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="{{asset('assets/images/logo/ae.png')}}" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div
                                class="organizer-bio pb-5 mb-4 border-bottom border-2 border-grey border-opacity-25 border-bottom-dashed">
                                <h6 class="mb-1">Le forum de la DIASPORA IVOIRIENNE est portée par 2 entitées maîtresse, e, matière de DIASPORA, le SENAT pour [...] et la DGIE pour son expertise en la question de [...]</h6>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection