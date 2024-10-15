@extends('layout-app')

@section('title', 'Business to Business Forum de la Diaspora Ivoirienne 2024')

@section('content')

    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-shadow">Les Tables rondes</h2>
            </div>
        </div>
    </section>

    <x-roundtables></x-roundtables>

@endsection
