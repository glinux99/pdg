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
                        <p>Donnez un coup de main</p>
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

<section class="actualites-home py-5">
    <div class="mx-3 ">
        <div class="px-2 py-4 px-md-4 py-md-3 shadow-sm rounded">

            <h5 class="h5 fw-700 mb-0 text-center text-title-2 ">
                <span class="2 pb-3 d-inline-block  mb-5 text-white">@lang("Actualites")</span>
            </h5>
            <div class="produits">
                <div class="row">
                    @php
                    $actus = [
                    1=>[
                    "images" => "assets/img/donation/barticle1.png",
                    "categorie" => "Election",
                    "title"=>"Mis en place de Kit pour le lancement des Elections au Gabon"],
                    2=>[
                    "images" => "assets/img/donation/barticle2.jpeg",
                    "categorie" => "Pdg parti",
                    "title"=>"Meting du president avec les membres du parti"],
                    2=>[
                    "images" => "assets/img/donation/barticle3.jpeg",
                    "categorie" => "Energie",
                    "title"=>" la construction de la centrale de Ngoulmendjim"],
                    3=>[
                    "images" => "assets/img/donation/barticle4.jpeg",
                    "categorie" => "Societe",
                    "title"=>"Gabon : inauguration du nouveau siège du PDG à Franceville"],
                    4=>[
                    "images" => "assets/img/donation/barticle8.jpeg",
                    "categorie" => "Election",
                    "title"=>"Le Président de la République échange avec le Premier ministre et le ministre du Budget"],
                    ];
                    @endphp
                    <!-- actus -->
                    @foreach ($actus as $actualite)
                    <div class="col-md-3 col-lg-3 col-6 carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px" src="{{ $actualite['images']}}" data-src="{{ $actualite['images']}}" alt="">
                                </a>
                                <span class="absolute-bottom-left fs-11 text-white fw-600 px-2 lh-1-8" style="background-color: #455a64">
                                    {{ $actualite['categorie']}}
                                </span>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                                </div>
                                <h5 class="fw-600 fs-15 text-truncate-2 lh-1-4 mb-0 h-40px">
                                    <a href="#" class="d-block text-reset">{{ $actualite['title']}}</a>
                                </h5>

                            </div>
                            <p class="my-0">
                            <div class="d-flex justify-content-center" role="group" aria-label="Third group">
                                <a href="#" class="with-line mr-1"><span class="fw-700" style="color:blue;">Lire plus ...</span></a>
                            </div>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--Special offer-->
<section class="section-padding advertisement-banner-1 center-bg-effect">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/donation/alibongoafrique.jpg" alt="" class="d-block img-fit rounded shadow-sm overflow-hidden w-100">
            </div>
            <div class="col-md-6 text-justify">
                <h5>Mot du president Camarade</h5>
                <i class="fs-15">Gabonaises, Gabonais,
                    Mes très chers compatriotes,

                    « We made it ! »

                    Cette expression, en langue anglaise, signifie : « Nous y sommes arrivés ! »

                    Le 25 juin 2022, le Gabon est devenu membre du Commonwealth, une famille forte de 56 pays regroupant 2,5 milliards de personnes.

                    Ce jour est historique.

                    62 ans après notre Indépendance, notre pays s’apprête à ouvrir une nouvelle et, j’en suis certain, glorieuse page de son Histoire.

                    L’idée de faire adhérer le Gabon au Commonwealth, je l’ai longtemps mûrie avant de prendre ma décision. Cette décision, je l’ai, par la suite, toujours assumée. Contre vents et marées. Et Dieu sait si les vents ont souvent été contraires.

                    Je tiens ici à remercier l’ensemble des membres de cette grande famille, qu’est le Commonwealth, qui nous ont soutenus et ont permis l’intégration de notre pays au sein de cette organisation de premier plan.</i>
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
                                <img src="{{asset('assets/img/story-big/storyg6.jpg')}}" alt="Feedback">
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
                                <img src="{{asset('assets/img/categories/category7.png')}}" alt="Feedback">
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
                                <div class="service-text-box icon-box-level">
                                    <!-- <p>Participer</p> -->
                                    <h6>Participer en tant que bénévole</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col">
                            <div class="icon-box">
                                <a href="#">
                                    <img src="{{asset('assets/')}}/img/cash.svg" alt="img">
                                </a>
                                <div class="service-text-box icon-box-level">
                                    <!-- <p>Participer</p> -->
                                    <h6>Participer dans notre mission</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box">
                                <a href="#">
                                    <img src="{{asset('assets/')}}/img/investor.svg" alt="img">
                                </a>
                                <div class="service-text-box icon-box-level">
                                    <!-- <p>Participer</p> -->
                                    <h6>Participer en tant qu'électeur</h6>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col">
                            <div class="icon-box">
                                <a href="#">
                                    <img src="{{asset('assets/')}}/img/help.svg" alt="img">
                                </a>
                            </div>
                        </div> -->
                        <div class="col">
                            <div class="icon-box">
                                <a href="#">
                                    <img src="{{asset('assets/')}}/img/money.svg" alt="img">
                                </a>
                                <div class="service-text-box icon-box-level">
                                    <!-- <p>Participer</p> -->
                                    <h6>Participer en tant que donateur</h6>
                                </div>
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
                                            <span class="text-custom-white">24 May 2023</span>
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

@endsection
