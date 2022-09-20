@extends('layouts.master')

@section('title')
Faire un don
@endsection

@section('content')
<!-- breadcrumb -->
<div class="breadcrumb-area">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="breadcrumb-content">
            <h2>ELECTION</h2>
        </div>
    </div>
</div>
<!-- breadcrumb -->
<!-- Blog -->
<section class="our-articles bg-light-white section-padding bg-blue-2-armoirie bg-blue-22">
    <div class="container-fluid custom-container">
        <div class="row">
            @php
            $actus = [
            1=>[
            "images" => "assets/img/parti/adhesion.jpeg",
            "categorie" => "Diplomatie",
            "title"=>"L’adhésion au Commonwealth offre au Gabon de nouvelles opportunités de développement aux plans diplomatique, économique, culturel et environnemental, selon le PDG"],
            2=>[
            "images" => "assets/img/parti/alibongovote.webp",
            "categorie" => "Pdg parti",
            "title"=>"La preparation des elections sont en cours deja au Gabon, un pays qui compte plus de personnes qui doivent elir leur nouveau president"],
            3=>[
            "images" => "assets/img/parti/alibongovote2.jpg",
            "categorie" => "Pdg parti",
            "title"=>"Le parti Politique PDG avec Ali Bongo Ondimba se prepare ardument aux elections de 2023 et rassure la population que toutes les demarchent sont entrain d'etre entrepris pour les gagner"],
            4=>[
            "images" => "assets/img/parti/rencontre.jpg",
            "categorie" => "Actus sur les femmes",
            "title"=>"Sensibilisation des femmes sur la maniere de contribuer au developpement du pays en faisant mieux leur choix de leur representant"],

            5=>[
            "images" => "assets/img/parti/gabonelection.jpg",
            "categorie" => "Election 2023",
            "title"=>"Quelques Kit sont entrain d'etre installer dans plusieurs provinces du Gabon pour que les elections se passent dans le delai "],

            6=>[
            "images" => "assets/img/parti/millitanttjrs.jpeg",
            "categorie" => "Preparation Election 2023",
            "title"=>"Les millitants montrant leur loyaute au parti PDG Gabon lors de l'arrive du president Camarade Ali BOngo"],

            7=>[
            "images" => "assets/img/parti/MILLITANT.jpg",
            "categorie" => "PGD ELection",
            "title"=>" Le rendez-vous du militant dans le département des Plateaux (Lekoni), "],
            8=>[
            "images" => "assets/img/parti/programme.jpg",
            "categorie" => "Election",
            "title"=>"Programme de la Rentrée politique 2022 dans la province du Haut-Ogooué"],
            ];
            @endphp
            <div class="col-xl-12 col-lg-12">
                <div class=" full-width">
                    <div class="row ">
                        <div class="px-2 col-8 px-md-4 shadow-sm rounded">

                            <h5 class="h5 fw-700 mb-0 text-title-2">
                                <span class="2 pb-3 d-inline-block text-white">@lang("Election au Gabon: Les dernieres nouvelles")</span>
                            </h5>
                            <div class="produits">
                                <div class="row">
                                    <!-- actus -->
                                    @foreach ($actus as $actualite)
                                    <div class="col-6 carousel-box">
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
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="custom-pagination align-item-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">«</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">»</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-4 pt-5">
                            <div class="side-bar mb-md-40">
                                <div class="main-box padding-20 side-blog mb-xl-20">
                                    <h5 class="text-light-black">Actualites populaires</h5>
                                    <article class="side-post pb-xl-20 mb-xl-20 u-line">
                                        <div class="thumb-img">
                                            <a href="blog-details.html">
                                                <img src="assets/img/blog/sblog1.jpg" alt="thumb-img">
                                            </a>
                                        </div>
                                        <div class="content-wrap">
                                            <div class="entry-meta-content">
                                                <h6 class="entry-title">
                                                    <a href="blog-details.html" class="text-light-black">PDG pour la population</a>
                                                </h6>
                                                <div class="entry-tye"> <span class="text-light-white fw-400">06 Jan 2020</span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="side-post">
                                        <div class="thumb-img">
                                            <a href="blog-details.html">
                                                <img src="assets/img/blog/sblog4.jpg" alt="thumb-img">
                                            </a>
                                        </div>
                                        <div class="content-wrap">
                                            <div class="entry-meta-content">
                                                <h6 class="entry-title">
                                                    <a href="blog-details.html" class="text-light-black">PDG parti politique</a>
                                                </h6>
                                                <div class="entry-tye"> <span class="text-light-white fw-400">21 Mar 2020</span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="main-box padding-20 blog-tags mb-xl-20">
                                    <h5 class="text-light-black">Tags</h5>
                                    <a href="#">#Les dons</a>
                                    <a href="#">#Education</a>
                                    <a href="#">#Handicraft</a>
                                    <a href="#">#Paintings</a>
                                    <a href="#">#Vote</a>
                                    <a href="#">#Trending</a>
                                </div>
                                <div class="main-box padding-20 trending-blog-cat mb-xl-20">
                                    <h5 class="text-light-black">Categories</h5>
                                    <ul>
                                        <li class="pb-xl-20 u-line mb-xl-20"> <a href="#" class="text-light-black fw-600">Enfants <span class="text-light-white fw-400">(110)</span></a>
                                        </li>
                                        <li class="pb-xl-20 u-line mb-xl-20"> <a href="#" class="text-light-black fw-600">Charite <span class="text-light-white fw-400">(98)</span></a>
                                        </li>
                                        <li class="pb-xl-20 u-line mb-xl-20"> <a href="#" class="text-light-black fw-600">Donation <span class="text-light-white fw-400">(52)</span></a>
                                        </li>
                                        <li class="pb-xl-20 u-line mb-xl-20"> <a href="#" class="text-light-black fw-600">Activite du PDG <span class="text-light-white fw-400">(26)</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Subscriber -->
@endsection
