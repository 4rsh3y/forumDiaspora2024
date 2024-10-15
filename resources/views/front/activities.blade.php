
@extends('layout-app')

@section('title', 'Business to Business Forum de la Diaspora Ivoirienne 2024')

@section('content')

    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-shadow">Les Activités</h2>
            </div>
        </div>
    </section>

    <x-stands></x-stands>

    <hr class="mb-6 sperator w-50 border-bottom border-2 border-pink m-auto">

    <x-b2b></x-b2b>

    <hr class="mb-6 sperator w-50 border-bottom border-2 border-pink m-auto">

    <x-b2g></x-b2g>

    <hr class="mb-6 sperator w-50 border-bottom border-2 border-pink m-auto">

    <x-roundtables></x-roundtables>

@endsection