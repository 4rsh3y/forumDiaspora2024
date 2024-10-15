@extends('layout-app')

@section('title', 'Inscription Forum de la Diaspora Ivoirienne 2024')

@section('content')


<section class="banner page-banner position-relative pb-0">
    <div class="overlay">
    </div>
    <div class="container">
        <div class="page-title position-relative py-10 text-center">
            <div class="banner-title position-relative w-lg-50 m-auto mb-1">
                <h2 class="p-0 text-white text-shadow">
                    Inscription Forum de la Diaspora Ivoirienne 2024
                </h2>
            </div>
        </div>
    </div>
</section>


<section class="schedules">
    <div class="container">
        <div class="schedule-inner">
            <div class="schedule-title text-center mb-6 w-lg-60 mx-auto">
                <p class="mb-1 pink">Bienvenu au Forum de la DIASPORA ivoirienne 2024</p>
                <h2 class="mb-1">Inscription</h2>
            </div>
            <div class="schedule-list-outer">
                <div class="accordion">
                    <div class="accordion-tabs">
                        <div class="accordion-tab active" data-tab="1"><i class="fa fa-user"></i> Particulier</div>
                        <div class="accordion-tab" data-tab="2"> <i class="fa fa-building"></i> Entreprise (Privé / Publique)</div>
                    </div>
                    <div class="accordion-content active shadow" data-content="1">
                        <x-inscription-particulier></x-inscription-particulier>
                    </div>
                    <div class="accordion-content shadow" data-content="2">
                        <x-inscription-entreprise></x-inscription-entreprise>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    
@endsection