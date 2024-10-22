@extends('layout-app')

@section('title', 'Contact Forum de la Diaspora Ivoirienne 2024')

@section('content')

<section class="banner page-banner position-relative pb-0">
    <div class="overlay">
    </div>
    <div class="container">
        <div class="page-title text-center position-relative py-11">
            <h2 class="text-white text-shadow">Nous Contacter</h2>
        </div>
    </div>
</section>

<section class="contact">
    <div class="container">
        <div class="contact-inner text-center text-md-start">
            <div class="row g-md-5 gy-5 align-items-center">
            <div class="col-lg-4 col-md-5 px-1">
                                <div class="p-6 d-flex text-white w-100 h-100 rounded bg-pink ">
                                    <div class="justify-content-center align-self-center ms-6">
                                        <h5 class="text-white pb-2">ÉVÈNEMENT:</h5>
                                        <p class="pb-5 m-0">Forum de la DIASPORA IVOIRIENNE 2024</p>
                                        <h5 class="text-white pb-2">Lieu : </h5>
                                        <p class="pb-5 m-0">Fondation Félix HOUPHOUËT-BOIGNY pour la Recherche de la Paix de Yamoussoukro</p>
                                        <h5 class="text-white pb-2">INFOLINE:</h5>
                                        <p class="pb-5 m-0">(+225) 00 00 00 00 00</p>
                                    </div>
                                </div>
                            </div>
                <div class="col-lg-8 col-md-7">
                    <div class="contact-form">
                        <div class="form-title mb-4">
                            <h2 class="mb-1">Partagez une <span class="pink">expérience </span> ? </h2>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                        </div>
                        <div class="form">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Nom" class="mb-3">
                                    </div>
                                    <div class="col-lg-6 ">
                                        <input type="email" placeholder="Email" class="mb-3" required>
                                    </div>
                                </div>
                                <div class="phone-no">
                                    <input type="tel" placeholder="N° de Téléphone" class="mb-3">
                                </div>
                                <div class="subject">
                                    <input type="text" placeholder="Sujet" class="mb-3">
                                </div>
                                <div class="message">
                                    <textarea placeholder="Message" rows="4" class="mb-3"></textarea>
                                </div>
                                <a class="btn">Envoyer le message<i class="fa fa-long-arrow-right ms-3"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-direction mt-5">
                <iframe height="400" class="rounded w-100"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15847.098594053849!2d-5.2640813!3d6.7972496!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfb89728969f5ce1%3A0x9408210ed875b2dd!2sFondation%20F%C3%A9lix%20Houphou%C3%ABt%20Boigny%20pour%20la%20Recherche%20de%20la%20Paix!5e0!3m2!1sfr!2sci!4v1729563001017!5m2!1sfr!2sci"></iframe>
            </div>
        </div>
    </div>
</section>


@endsection