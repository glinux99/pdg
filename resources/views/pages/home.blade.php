@extends('layouts.master')

@section('content')
<!-- slider -->
<section class="about-us-slider swiper-container p-relative slider-banner-1">
    <div class="swiper-wrapper">
        <div class="swiper-slide slide-item">
            <img src="{{asset('assets/img/banner/banner1.webp')}}" class="img-fluid full-width" alt="Banner">
            <div class="transform-center z-index-3">
                <div class="container-fluid custom-container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 align-self-center">
                            <div class="right-side-content far-right">
                                <h5 class="text-white">Partout au Gabon.</h5>
                                <h1 class="text-white fw-600">Nous aidons toutes les personnes dans le besoin</h1>
                                <p class="text-white fw-400">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish
                                    shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                <a href="#" class="btn-solid with-line btn-big mt-20 mr-1"><span>Faire un don <i class="fas fa-caret-right"></i></span></a>
                                <a href="#" class="border-butn mt-20 ml-1"><span>Actualites</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay overlay-bg-dark overlay-bg-img"></div>
        </div>
        <div class="swiper-slide slide-item">
            <img src="{{asset('assets/img/banner/banner2.jpg')}}" class="img-fluid full-width" alt="Banner">
            <div class="transform-center z-index-3">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 align-self-center">
                            <div class="right-side-content text-center">
                                <h5 class="text-white">Seule la lutte libère</h5>
                                <h1 class="text-white fw-600">Sans sacrifice, "Pas de changement"</h1>
                                <p class="text-white fw-400">Ne Jamais trahir, ni par ambition, ni par cupidité, encore moins par lâcheté.</p>
                                <a href="#" class="btn-solid with-line btn-big mt-20 mr-1"><span>Faire un don <i class="fas fa-caret-right"></i></span></a>
                                <a href="#" class="border-butn mt-20 ml-1"><span>Actualites</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay overlay-bg-dark overlay-bg-img"></div>
        </div>
        <div class="swiper-slide slide-item">
            <img src="{{asset('assets/img/banner/banner3.webp')}}" class="img-fluid full-width" alt="Banner">
            <div class="transform-center z-index-3">
                <div class="container-fluid custom-container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 align-self-center">
                            <div class="left-side-content">
                                <h5 class="text-white">Le changement, C'EST MAINTENANT</h5>
                                <h1 class="text-white fw-600">Faisons la différence ! Faites un don à notre parti</h1>
                                <p class="text-white fw-400">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish
                                    shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfishf</p>
                                <a href="#" class="btn-solid with-line btn-big mt-20 mr-1"><span>Faire un don <i class="fas fa-caret-right"></i></span></a>
                                <a href="#" class="border-butn mt-20 ml-1"><span>Actualites</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay overlay-bg-dark overlay-bg-img"></div>
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>
<!-- slider -->
<section class="service-type">
    <div class="row">
        <div class="col-lg-3 col-md-6 bg-custom-1 border-custom-right border-sm-bottom">
            <div class="service-box">
                <div class="service-box-wrapper">
                    <div class="service-icon-box">
                        <img src="{{asset('assets/img/help.svg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="service-text-box">
                        <p>Participer</p>
                        <h6>En tant que bénévole</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 bg-custom-2 border-custom-right border-sm-bottom">
            <div class="service-box">
                <div class="service-box-wrapper">
                    <div class="service-icon-box">
                        <img src="{{asset('assets/img/money.svg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="service-text-box">
                        <p>Soyez un coup de main</p>
                        <h6>en tant que donateur</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 bg-custom-3 border-custom-right border-sm-bottom">
            <div class="service-box">
                <div class="service-box-wrapper">
                    <div class="service-icon-box">
                        <img src="{{asset('assets/img/investor.svg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="service-text-box">
                        <p>Participer</p>
                        <h6>En tant qu'électeur</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 bg-custom-4">
            <div class="service-box">
                <div class="service-box-wrapper">
                    <div class="service-icon-box">
                        <img src="{{asset('assets/img/cash.svg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="service-text-box">
                        <p>Participer</p>
                        <h6>Dans notre mission</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- advertisement banner-->
<section class="section-padding advertisement-banner-1 center-bg-effect">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="advertisement-text-1 center-block-div">
                    <h6 class="sub-head">Nos Causes</h6>
                    <h3 class="text-white heading">Changeons le monde<span class="text-white">Avec l'Humanité</span></h3>

                    <a href="#" class="btn btn-text btn-text-white mt-20">Devenir bénévole</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- advertisement banner-->
<section class="section-padding ex-collection" style="background: linear-gradient(274deg, #021048, #6fa591);">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left">
                    <h3 class="text-light-white header-title title">Nos campagnes de dons</h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="story-wrapper">
                    <img src="assets/img/donation/barticle1.png" alt="" class="full-width img-fluid mx-auto d-block">
                    <div class="story-box-content story-content-wrapper">
                        <span class="story-badge bg-custom-secondary text-color-primary">Politique</span>
                        <h5><a href="#">Maintenant ou jamais</a> </h5>
                        <a href="shop-details.html" class="btn btn-text btn-text-white">Lire Plus</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="story-wrapper">
                    <img src="assets/img/donation/barticle2.jpeg" alt="" class="full-width img-fluid mx-auto d-block">
                    <div class="story-box-content story-content-wrapper">
                        <span class="story-badge bg-custom-secondary text-color-primary">Politique</span>
                        <h5><a href="#">Aide aux enfants de l'Est</a> </h5>
                        <a href="shop-details.html" class="btn btn-text btn-text-white">Lire Plus</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="story-wrapper">
                    <img src="assets/img/donation/barticle3.jpeg" alt="" class="full-width img-fluid mx-auto d-block">
                    <div class="story-box-content story-content-wrapper">
                        <span class="story-badge bg-custom-secondary text-color-primary">Politique</span>
                        <h5><a href="#">pour être pris au sérieux</a> </h5>
                        <a href="shop-details.html" class="btn btn-text btn-text-white">Lire Plus</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="story-wrapper">
                    <img src="assets/img/donation/barticle4.png" alt="" class="full-width img-fluid mx-auto d-block">
                    <div class="story-box-content story-content-wrapper">
                        <span class="story-badge bg-custom-secondary text-color-primary">Politique</span>
                        <h5><a href="#">Le président qu'il nous faut</a> </h5>
                        <a href="shop-details.html" class="btn btn-text btn-text-white">Lire Plus</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="story-wrapper">
                    <img src="assets/img/donation/barticle5.jpeg" alt="" class="full-width img-fluid mx-auto d-block">
                    <div class="story-box-content story-content-wrapper">
                        <span class="story-badge bg-custom-secondary text-color-primary">Politique</span>
                        <h5><a href="#">Faire le vide pour faire le bien</a> </h5>
                        <a href="shop-details.html" class="btn btn-text btn-text-white">Lire Plus</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="story-wrapper">
                    <img src="assets/img/donation/barticle6.jpg" alt="" class="full-width img-fluid mx-auto d-block">
                    <div class="story-box-content story-content-wrapper">
                        <span class="story-badge bg-custom-secondary text-color-primary">Politique</span>
                        <h5><a href="#">collectes de vêtements</a> </h5>
                        <a href="shop-details.html" class="btn btn-text btn-text-white">Lire Plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Special offer-->
<section class="section-padding advertisement-banner-1 center-bg-effect">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title title" style="color:white;">Dons</h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="sa-causes-single sa-causes-single-2">
                    <div class="causes-details-wrap">
                        <div class="causes-details">
                            <h5><a href="#">L'honorable exclue du PDG</a></h5>
                            <p>Elle n’aura même pas eu le temps de porter son écharpe au sein de l’Assemblée Nationale,...</p>
                            <div class="entry-thumb mtmb-spacing">
                                <img src="{{asset('assets/img/donation/barticle7.jpg')}}" alt="img" class="img-fluid full-width">
                                <div class="dontaion-category"><a href="#">Education</a></div>
                            </div>
                            <div class="causes-amount">
                                <div class="left">
                                    <p>Soulevé</p>
                                    <span>$100.00</span>
                                </div>
                                <div class="right">
                                    <p>Objectif</p>
                                    <span>$4585.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-area text-center">
                        <a class="btn-donation text-btn" href="#">Donner aujourd'hui</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="sa-causes-single sa-causes-single-2">
                    <div class="causes-details-wrap">
                        <div class="causes-details">
                            <h5><a href="#">Maintenir le gouvernement du Congrès</a></h5>
                            <p>membre du bureau politique du Parti Démocratique Gabonais et récemment,...</p>
                            <div class="entry-thumb mtmb-spacing">
                                <img src="{{asset('assets/img/donation/barticle3.jpeg')}}" alt="img" class="img-fluid full-width">
                                <div class="dontaion-category"><a href="#">Santé</a></div>
                            </div>
                            <div class="causes-amount">
                                <div class="left">
                                    <p>Soulevé</p>
                                    <span>$100.00</span>
                                </div>
                                <div class="right">
                                    <p>Objectif</p>
                                    <span>$4585.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-area text-center">
                        <a class="btn-donation text-btn" href="#">Donner aujourd'hui</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="sa-causes-single sa-causes-single-2">
                    <div class="causes-details-wrap">
                        <div class="causes-details">
                            <h5><a href="#">Offrir un meilleur environnement</a></h5>
                            <p>Il est crutial pour le peuple africain...</p>
                            <div class="entry-thumb mtmb-spacing">
                                <img src="{{asset('assets/img/donation/barticle4.png')}}" alt="img" class="img-fluid full-width">
                                <div class="dontaion-category"><a href="#">Hygiene</a></div>
                            </div>
                            <div class="causes-amount">
                                <div class="left">
                                    <p>Soulevé</p>
                                    <span>$100.00</span>
                                </div>
                                <div class="right">
                                    <p>Objectif</p>
                                    <span>$4585.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-area text-center">
                        <a class="btn-donation text-btn" href="#">Donner aujourd'hui</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonail-->
<section class="feedback-area-two section-padding bg-custom-primary">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left text-center">
                    <h3 class="text-white header-title">Ce que dit la communauté</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="feedback-slider p-relative swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="feedback-item-two">
                                <img src="{{asset('assets/img/testimonial/temoignage1.jpeg')}}" alt="Feedback">
                                <p class="text-white fs-16">J'aime la politique et par rapport à d'autres entreprises, ses politiques et son support client sont très bons et faciles à atteindre. De plus, ils sont souvent incapables de livrer. Quis ipsum suspendisse ultrices gravida. Risus
                                    commodo
                                    viverra
                                    maecenas accumsan lacus vel facilisist amet, sed do eiusm.</p>
                                <h5 class="text-white fw-600 no-margin">Janadhon doe</h5>
                                <span class="text-white fw-400">President</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="feedback-item-two">
                                <img src="{{asset('assets/img/testimonial/temoignage2.jpeg')}}" alt="Feedback">
                                <p class="text-white fs-16">J'aime la politique et par rapport à d'autres entreprises, ses politiques et son support client sont très bons et faciles à atteindre. De plus, ils sont souvent incapables de livrer. Quis ipsum suspendisse ultrices gravida. Risus
                                    commodo
                                    viverra
                                    maecenas accumsan lacus vel facilisist amet, sed do eiusm.</p>
                                <h5 class="text-white fw-600 no-margin">Anna Wright</h5>
                                <span class="text-white fw-400">Co-founder</span>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonail End-->
<!-- Blog section -->
<section class="section-padding blog-section bg-theme-primary" style="background: linear-gradient(274deg, #021048, #aeb32f);">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left title">
                    <h3 class="text-light-black header-title">Nos dernières nouvelles</h3>
                    <span class="fs-16"><a href="#.html">Voir tout</a></span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <article class="blog-item blog-item-box">
                    <div class="blog-item-img">
                        <img class="blog-img" src="assets/img/blog/barticle4.png" alt="img">
                        <ul class="blog-item-badge">
                            <li><a href="#">Hygiene</a> </li>
                        </ul>
                    </div>
                    <div class="blog-item-content">
                        <h5 class="blog-item-title"><a href="#">La "task force" gazière désormais dans les mains</a></h5>
                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
                        <div class="blog-item-details">
                            <span class="blog-item-date"><i class="fas fa-calendar-week"></i> 20 Aug' 20</span>
                            <span><i class="fas fa-comment-dots"></i> 501</span>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <article class="blog-item blog-item-box">
                    <div class="blog-item-img">
                        <img class="blog-img" src="assets/img/blog/barticle5.jpeg" alt="img">
                        <ul class="blog-item-badge">
                            <li><a href="#">Santé</a></li>
                        </ul>
                    </div>
                    <div class="blog-item-content">
                        <h5 class="blog-item-title"><a href="#">Conseiller présidentiel Jean-Pierre Boussougou</a></h5>
                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
                        <div class="blog-item-details">
                            <span class="blog-item-date"><i class="fas fa-calendar-week"></i> 20 Aug' 20</span>
                            <span><i class="fas fa-comment-dots"></i> 501</span>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <article class="blog-item blog-item-box">
                    <div class="blog-item-img">
                        <img class="blog-img" src="assets/img/blog/barticle6.jpg" alt="img">
                        <ul class="blog-item-badge">
                            <li><a href="#">Eau</a> </li>
                        </ul>
                    </div>
                    <div class="blog-item-content">
                        <h5 class="blog-item-title"><a href="#">Gabon: l’honorable exclue du PDG !</a></h5>
                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
                        <div class="blog-item-details">
                            <span class="blog-item-date"><i class="fas fa-calendar-week"></i> 20 Aug' 20</span>
                            <span><i class="fas fa-comment-dots"></i> 501</span>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <article class="blog-item blog-item-box">
                    <div class="blog-item-img">
                        <img class="blog-img" src="assets/img/blog/barticle8.jpeg" alt="img">
                        <ul class="blog-item-badge">
                            <li><a href="#">Tout genre</a> </li>
                        </ul>
                    </div>
                    <div class="blog-item-content">
                        <h5 class="blog-item-title"><a href="#">Save the American's Role in Fight Against Malnutrition Hailed</a></h5>
                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
                        <div class="blog-item-details">
                            <span class="blog-item-date"><i class="fas fa-calendar-week"></i> 20 Aug' 20</span>
                            <span><i class="fas fa-comment-dots"></i> 501</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- END/BLOG Section -->
<!-- Start Paravideo and icon -->
<section class="section-padding-top paravideo-icon-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="icon-sec">
                    <div class="row">
                        <div class="col">
                            <div class="icon-box">
                                <a href="#">
                                    <img src="{{asset('assets/')}}/img/help.svg" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box">
                                <a href="#">
                                    <img src="{{asset('assets/')}}/img/cash.svg" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box">
                                <a href="#">
                                    <img src="{{asset('assets/')}}/img/investor.svg" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box">
                                <a href="#">
                                    <img src="{{asset('assets/')}}/img/help.svg" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box">
                                <a href="#">
                                    <img src="{{asset('assets/')}}/img/money.svg" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- start Paravideo and icon -->
<div class="section-padding-bottom paravideo-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="video-sec">
                    <div class="row no-gutters">
                        <div class="col-lg-8">
                            <div class="full-height video-sec-left section-padding">
                                <div class="video-sec-left-inner">
                                    <ul>
                                        <li class="fs-14 text-custom-pink mb-xl-20">
                                            <i class="fas fa-calendar-week"></i>
                                            <span class="text-custom-white">24 May 2020</span>
                                        </li>
                                        <li class="fs-14 text-custom-pink mb-xl-20">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span class="text-custom-white">Libreville (Gabon)</span>
                                        </li>
                                    </ul>
                                    <h3 class="text-custom-white">Campagne à venir</h3>
                                    <div class="upcoming-cam-timer">
                                        <div class="countdown-box">
                                            <div class="counter-box"> <span id="up-days"></span>
                                            </div>
                                            <div class="counter-box"> <span id="up-hours"></span>
                                            </div>
                                            <div class="counter-box"> <span id="up-minutes"></span>
                                            </div>
                                            <div class="counter-box"> <span id="up-seconds"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="full-height video-sec-right">
                                <div class="video_wrapper video_wrapper_full js-videoWrapper">
                                    <iframe class="videoIframe js-videoIframe" src="#" data-src="#" allow="autoplay"></iframe>
                                    <div class="videoPoster js-videoPoster">
                                        <img src="{{asset('assets/img/pdg.jpg')}}" class="image-fit" alt="#">
                                        <div class="video-inner video-btn-wrapper blob play-btn "> <a href="JavaScript:Void(0);"><i class="pe-7s-play"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Paravideo and icon -->
<!-- Sucscriber -->
<section class="section-padding block_newsletter">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left text-center">
                    <h3 class="text-light-black header-title">S'inscrire au Newsletter</h3>
                    <p>Pour recevoir les dernières offres et réductions de la boutique. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="subscribe-wrapper">
                    <form id="subscribe-form" method="post" action="#">
                        <div class="subscribe-content">
                            <input type="text" name="subscribe-input" id="subscribe-input" value="" placeholder="Entrez votre adresse email" class="form-control input-text required-entry validate-email">
                            <button class="button" type="submit"><span>S'abonner</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Subscriber -->
@endsection
