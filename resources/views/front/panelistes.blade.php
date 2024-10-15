@extends('layout-app')

@section('title', 'Nos panelistes Forum de la Diaspora Ivoirienne 2024')

@section('content')

    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-shadow">Nos Panelistes</h2>
            </div>
        </div>
    </section>

    <div id="speakers"></div>

    <section class="speakers">
        <div class="container">
            <div class="speaker-inner">
                <div class="partner-title text-center pb-6 w-lg-60 m-auto">
                    <p class="mb-1 pink">Nos panelistes</p>
                    <h2 class="mb-1">Découvrez nos différents Panelistes</h2>
                </div>
                <div class="sepaker-list text-center text-white">
                    <div class="row">
                        <div class=" col-lg-3 col-md-6 p-2">
                            <div class="speaker-box  position-relative overflow-hidden text-white">
                                <img class="speaker-image rounded w-100" src="{{asset('https://placehold.co/922x1126')}}" alt="speaker-image">
                                <div class="box-content position-absolute bottom-0 z-1">
                                    <h6 class="speaker-title d-block text-white pb-1">
                                        <a href="">
                                            Sandra FOLQUET
                                        </a>
                                    </h6>
                                    <span class="speaker-post d-block pb-2">Chef de Cabinet du Ministère des Affaires Étrangères</span>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-6 p-2">
                            <div class="speaker-box  position-relative overflow-hidden text-white">
                                <img class="speaker-image rounded w-100" src="{{asset('https://placehold.co/922x1126')}}" alt="speaker-image">
                                <div class="box-content position-absolute bottom-0 z-1">
                                    <h6 class="speaker-title d-block text-white pb-1">
                                        <a href="">
                                            Sandra FOLQUET
                                        </a>
                                    </h6>
                                    <span class="speaker-post d-block pb-2">Chef de Cabinet du Ministère des Affaires Étrangères</span>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-6 p-2">
                            <div class="speaker-box  position-relative overflow-hidden text-white">
                                <img class="speaker-image rounded w-100" src="{{asset('https://placehold.co/922x1126')}}" alt="speaker-image">
                                <div class="box-content position-absolute bottom-0 z-1">
                                    <h6 class="speaker-title d-block text-white pb-1">
                                        <a href="">
                                            Sandra FOLQUET
                                        </a>
                                    </h6>
                                    <span class="speaker-post d-block pb-2">Chef de Cabinet du Ministère des Affaires Étrangères</span>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-6 p-2">
                            <div class="speaker-box  position-relative overflow-hidden text-white">
                                <img class="speaker-image rounded w-100" src="{{asset('https://placehold.co/922x1126')}}" alt="speaker-image">
                                <div class="box-content position-absolute bottom-0 z-1">
                                    <h6 class="speaker-title d-block text-white pb-1">
                                        <a href="">
                                            Sandra FOLQUET
                                        </a>
                                    </h6>
                                    <span class="speaker-post d-block pb-2">Chef de Cabinet du Ministère des Affaires Étrangères</span>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-6 p-2">
                            <div class="speaker-box  position-relative overflow-hidden text-white">
                                <img class="speaker-image rounded w-100" src="{{asset('https://placehold.co/922x1126')}}" alt="speaker-image">
                                <div class="box-content position-absolute bottom-0 z-1">
                                    <h6 class="speaker-title d-block text-white pb-1">
                                        <a href="">
                                            Sandra FOLQUET
                                        </a>
                                    </h6>
                                    <span class="speaker-post d-block pb-2">Chef de Cabinet du Ministère des Affaires Étrangères</span>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-6 p-2">
                            <div class="speaker-box  position-relative overflow-hidden text-white">
                                <img class="speaker-image rounded w-100" src="{{asset('https://placehold.co/922x1126')}}" alt="speaker-image">
                                <div class="box-content position-absolute bottom-0 z-1">
                                    <h6 class="speaker-title d-block text-white pb-1">
                                        <a href="">
                                            Sandra FOLQUET
                                        </a>
                                    </h6>
                                    <span class="speaker-post d-block pb-2">Chef de Cabinet du Ministère des Affaires Étrangères</span>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-6 p-2">
                            <div class="speaker-box  position-relative overflow-hidden text-white">
                                <img class="speaker-image rounded w-100" src="{{asset('https://placehold.co/922x1126')}}" alt="speaker-image">
                                <div class="box-content position-absolute bottom-0 z-1">
                                    <h6 class="speaker-title d-block text-white pb-1">
                                        <a href="">
                                            Sandra FOLQUET
                                        </a>
                                    </h6>
                                    <span class="speaker-post d-block pb-2">Chef de Cabinet du Ministère des Affaires Étrangères</span>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-6 p-2">
                            <div class="speaker-box  position-relative overflow-hidden text-white">
                                <img class="speaker-image rounded w-100" src="{{asset('https://placehold.co/922x1126')}}" alt="speaker-image">
                                <div class="box-content position-absolute bottom-0 z-1">
                                    <h6 class="speaker-title d-block text-white pb-1">
                                        <a href="">
                                            Sandra FOLQUET
                                        </a>
                                    </h6>
                                    <span class="speaker-post d-block pb-2">Chef de Cabinet du Ministère des Affaires Étrangères</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-infobanner></x-infobanner>


    <div id="partners"></div>

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
                    <hr>
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
        </div>
    </section>



@endsection
