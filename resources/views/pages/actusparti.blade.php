@extends('layouts.master')

@section('title')
Historique du parti
@endsection
@section('content')
<!-- breadcrumb -->
<div class="breadcrumb-area">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Actualite du parti PDG</h2>
        </div>
    </div>
</div>
<!-- Actus -->
<section class="actualites-home py-5">
    <div class="mx-3 ">
        <div class="px-2 py-4 px-md-4 py-md-3 shadow-sm rounded">
            @php
            $actus = [
            1=>[
            "images" => "assets/img/parti/adhesion.jpeg",
            "categorie" => "Diplomatie FOCUS MONDE",
            "title"=>"L’adhésion au Commonwealth offre au Gabon de nouvelles opportunités de développement aux plans diplomatique, économique, culturel et environnemental, selon le PDG"],
            2=>[
            "images" => "assets/img/parti/pdganniv.jpg",
            "categorie" => "Pdg parti",
            "title"=>"le PDG fête ses 54 ans d'existence et le retour d'Ali Bongo"],
            3=>[
            "images" => "assets/img/parti/annivextrait.jpg",
            "categorie" => "Pdg parti",
            "title"=>"Extrait du Discours du Président de la République Chef de l'Etat, Ali Bongo Ondimba à l'occasion de la Fête de l'Indépendance."],
            4=>[
            "images" => "assets/img/parti/rencontre.jpg",
            "categorie" => "Pdg parti",
            "title"=>"Rencontre entre le Secrétaire Général et les Femmes du district de Mokéko."],

            5=>[
            "images" => "assets/img/parti/hommage.jpg",
            "categorie" => "Deuil",
            "title"=>"Les hommages du secretariat executif À Catherine MAPAGHA "],

            6=>[
            "images" => "assets/img/parti/millitanttjrs.jpeg",
            "categorie" => "En image",
            "title"=>"Les millitants toujours fideles aux postes"],

            7=>[
            "images" => "assets/img/parti/MILLITANT.jpg",
            "categorie" => "En image",
            "title"=>" Le rendez-vous du militant dans le département des Plateaux (Lekoni), "],
            8=>[
            "images" => "assets/img/parti/programme.jpg",
            "categorie" => "Election",
            "title"=>"Programme de la Rentrée politique 2022 dans la province du Haut-Ogooué"],
            ];
            @endphp
            <div class="row">
                <div class="col-md-9">
                    <div class="d-flex flex-wrap mb-3 align-items-baseline">
                        <h3 class="h5 fw-700 mb-0">
                            <span class="text-white pb-3 d-inline-block">L’adhésion au Commonwealth offre au Gabon de nouvelles opportunités de développement aux plans diplomatique, économique, culturel et environnemental, selon le PDG</span>
                        </h3>
                    </div>
                    <div class="aiz-card-box border border-light rounded  mt-1 mb-2 has-transition bg-white">
                        <div class="position-relative">
                            <a href="assets/img/parti/adhesion.jpeg" class="d-block">
                                <img class="img-fit " src="assets/img/parti/adhesion.jpeg" height="500" data-src="assets/img/parti/adhesion.jpeg" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                            </a>
                        </div>
                        <div class="p-md-3 p-2 text-left ">
                            <div class="row">
                                <div class="col-1">
                                    <ul class="list-unstyled my-3 my-md-0 social colored text-center">
                                        <li>
                                            <a href="#" target="_blank" class="facebook p-1"><i class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="twitter p-1"><i class="lab la-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="instagram p-1"><i class="lab la-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="youtube p-1"><i class="lab la-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="linkedin p-1"><i class="lab la-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-11">
                                    <p>Publie Le 24 Aout 2022</p>
                                    <p class="text-justify fs-20 p-0 m-0 text-muted">
                                        Le Conseiller porte-parole du Parti démocratique gabonais (PDG) a effectué une déclaration de presse ce lundi 27 juin, David Ella Mintsa a qualifié l’adhésion du Gabon au Commonwealth de succès diplomatique sans précédent du Président Ali Bongo Ondimba tout en soulignant que cela offre au pays de nouvelles opportunités de développement aux plans diplomatique, économique, culturel et environnemental.

                                        « Le Commonwealth c’est deux milliards cinq cent millions de consommateurs ; l’entrée dans cette grande communauté, forte désormais de 56 Etats membres offre pour le Gabon de nouvelles opportunités de développement aux plans diplomatique, économique, culturel et environnemental », a estimé avec satisfaction David Ella Mintsa.
                                    </p>
                                    <p>
                                    <div class="d-flex justify-content-center" role="group" aria-label="Third group">
                                        <a href="#" class="btn-solid with-line btn-big mt-20 mr-1"><span>Lire plus <i class="fas fa-caret-right"></i></span></a>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="aiz-card-box  rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        <div class="card-user">
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="mb-0 text-center">@lang("Les articles les plus lus")</h6>
                            </div>
                            <div class="px-3 border c-scrollbar-light overflow-auto ">
                                <ul class="list-group list-group-flush">
                                    @foreach ($actus as $actualite)
                                    <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                        <a href="">
                                            <div class="media text-inherit">
                                                <div class="media-body">
                                                    <p class="mb-1 text-truncate-2 text-dark">
                                                        {{$actualite['title']}}
                                                    </p>
                                                    <small class="text-muted">
                                                        Le 22 juillet 2022
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog section -->
<section class="actualites-home py-5">
    <div class="mx-3 ">
        <div class="px-2 py-4 px-md-4 py-md-3 shadow-sm rounded">

            <h5 class="h5 fw-700 mb-0 text-title-2">
                <span class="2 pb-3 d-inline-block text-white">@lang("Les dernieres nouvelles du partie")</span>
            </h5>
            <div class="produits">
                <div class="row">
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
                                    <a href="#" class="d-block text-reset ">{{ $actualite['title']}}</a>
                                </h5>
                            </div>
                            <p>
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
@endsection
