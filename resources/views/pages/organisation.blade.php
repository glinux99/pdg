@extends('layouts.master')

@section('title')
Organisation du parti
@endsection

@section('content')
<div class="breadcrumb-area">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Vie Politique du parti</h2>
        </div>
    </div>
</div>
<section class="actualites-home py-5">
    <div class="mx-3 ">
        <div class="px-2 py-4 px-md-4 py-md-3 shadow-sm rounded">
            @php
            $actus = [
            1=>[
            "images" => "assets/img/story-big/story1.png",
            "title"=>"PRESIDENT"],
            3=>[
            "images" => "assets/img/story-big/story2.jpg",
            "title"=>"DIRECTEUR DE CABINET"],
            4=>[
            "images" => "assets/img/story-big/noor.webp",
            "title"=>"CONSEILLE STRATEGIQUE"],

            5=>[
            "images" => "assets/img/parti/ERIC DODO-BOUNGUENDZA. sec general.png",
            "categorie" => "Deuil",
            "title"=>"S.G EXÉCUTIF"],

            6=>[
            "images" => "assets/img/parti/CYRIAQUE MVOURANDJAMI. sec general adjoint.jpg",
            "categorie" => "En image",
            "title"=>"S.G EXÉCUTIF ADJOINT, CHARGÉ DES ÉLECTIONS ET DES RELATIONS EXTÉRIEURES"],

            7=>[
            "images" => "assets/img/parti/JEAN MARIE KOUMBA SOUVI. sec adjoint election et affaires exterreirues et celui ci .jpeg",
            "categorie" => "En image",
            "title"=>"S.G ADJOINT, CHARGÉ DE LA COORDINATION, DE L' ANIMATION, DU DÉVELOPPEMENT, DES INSPECTIONS DES STRUCTURES DE BASE DE L'ENCADREMENT DES "],
            8=>[
            "images" => "assets/img/parti/ELOI NZONDO. relation exterieur sec genral adj.jpeg",
            "categorie" => "Election",
            "title"=>"S.G ADJOINT, CHARGÉ DES RELATIONS EXTÉRIEURES ET DES RELATIONS AVEC LES PARTIS DE LA MAJORITÉ RÉPUBLICAINE ET SOCIALE"],
            9=>[
            "images" => "assets/img/parti/SECRÉTAIRE GÉNÉRAL ADJOINT, CHARGÉ DE L'ENCADREMENT, DES PROJETS, DES ADHÉSIONS ET DES VALEURS DE LA JEUNESSE (UJPDG)..jpeg",
            "categorie" => "Election",
            "title"=>"S.G ADJOINT, CHARGÉ DE L'ENCADREMENT, DES PROJETS, DES ADHÉSIONS ET DES VALEURS DE LA JEUNESSE (UJPDG)"],
            10=>[
            "images" => "assets/img/parti/SECRÉTAIRE NATIONAL CHARGÉ DE L'INNOVATION DE LA GOUVERNANCE SOCIALE ET DE L'ANIMATION POLITIQUE DANS LA PROVINCE DU MOYEN-OGOOUÉ..jpeg",
            "categorie" => "Election",
            "title"=>"SECRÉTAIRE NATIONAL CHARGÉ DE L'INNOVATION DE LA GOUVERNANCE SOCIALE ET DE L'ANIMATION POLITIQUE DANS LA PROVINCE DU MOYEN-OGOOUÉ"],
            11=>[
            "images" => "assets/img/parti/SECRÉTAIRE NATIONALE CHARGÉE DE LA RÉNOVATION DES PRATIQUES MILITANTES ET DE L'ANIMATION POLITIQUES DANS LA PROVINCE DU HAUT-OGOOUÉ..jpeg",
            "categorie" => "Election",
            "title"=>"SECRÉTAIRE NATIONALE CHARGÉE DE LA RÉNOVATION DES PRATIQUES MILITANTES ET DE L'ANIMATION POLITIQUES DANS LA PROVINCE DU HAUT-OGOOUÉ"],
            12=>[
            "images" => "assets/img/parti/SECRÉTAIRE NATIONAL CHARGÉ DE L'APPROFONDISSEMENT DES RÉFORMES ÉCONOMIQUES ET DE L' ANIMATION POLITIQUE DANS LA PROVINCE DE LA NGOUNIÉ..jpeg",
            "categorie" => "Election",
            "title"=>"SECRÉTAIRE NATIONAL CHARGÉ DE L'APPROFONDISSEMENT DES RÉFORMES ÉCONOMIQUES ET DE L' ANIMATION POLITIQUE DANS LA PROVINCE DE LA NGOUNIÉ"],
            13=>[
            "images" => "assets/img/parti/SECRÉTAIRE NATIONAL CHARGÉ DU SUIVI-ÉVALUATION DE LA MISE EN ŒUVRE DU PLAN STRATÉGIQUE GABON EMERGENT ET DE L'ANIMATION POLITIQUE DANS LA PROVINCE DE L'OGOOUÉ-IVINDO..jpeg",
            "categorie" => "Election",
            "title"=>"SECRÉTAIRE NATIONAL CHARGÉ DU SUIVI-ÉVALUATION DE LA MISE EN ŒUVRE DU PLAN STRATÉGIQUE GABON EMERGENT ET DE L'ANIMATION POLITIQUE DANS LA PROVINCE DE L'OGOOUÉ-IVINDO"],
            14=>[
            "images" => "assets/img/parti/SECRÉTAIRE NATIONAL CHARGÉ DU PERFECTIONNEMENT DES POLITIQUES ET DES MECANISMES FAVORABLES À L'INTÉGRATION DU DÉVELOPPEMENT URBAIN ET RURAL, ET DE L'ANIMATION POLITIQUES DANS LA PROVINCE DE LA NYANGA..jpeg",
            "categorie" => "Election",
            "title"=>"SECRÉTAIRE NATIONAL CHARGÉ DU PERFECTIONNEMENT DES POLITIQUES ET DES MECANISMES FAVORABLES À L'INTÉGRATION DU DÉVELOPPEMENT URBAIN ET RURAL, ET DE L'ANIMATION POLITIQUES DANS LA PROVINCE DE LA NYANGA"],
            15=>[
            "images" => "assets/img/parti/SECRÉTAIRE NATIONALE CHARGÉE DE LA COMMUNICATION, DES RÉSEAUX SOCIAUX, DU SUIVI DE L'OPINION ET DE L'ANIMATION POLITIQUE DANS LA PROVINCE DE L'OGOOUÉ-LOLO..jpeg",
            "categorie" => "Election",
            "title"=>"SECRÉTAIRE NATIONALE CHARGÉE DE LA COMMUNICATION, DES RÉSEAUX SOCIAUX, DU SUIVI DE L'OPINION ET DE L'ANIMATION POLITIQUE DANS LA PROVINCE DE L'OGOOUÉ-LOLO"],
            16=>[
            "images" => "assets/img/parti/SECRÉTAIRE NATIONAL CHARGÉ DES RELATIONS AVEC LE PARLEMENT ET LE GOUVERNEMENT, ET DE L'ANIMATION POLITIQUE DANS LA PROVINCE DE L'ESTUAIRE..jpeg",
            "categorie" => "Election",
            "title"=>"SECRÉTAIRE NATIONAL CHARGÉ DES RELATIONS AVEC LE PARLEMENT ET LE GOUVERNEMENT, ET DE L'ANIMATION POLITIQUE DANS LA PROVINCE DE L'ESTUAIRE"],
            17=>[
            "images" => "assets/img/parti/SECRÉTAIRE GÉNÉRALE ADJOINTE, CHARGÉE DE L'ENCADREMENT DE L'ANIMATION, DES PROJETS ET DES ADHÉSIONS DES FEMMES (UFPDG)..jpeg",
            "categorie" => "Election",
            "title"=>"S.GE ADJOINTE, CHARGÉE DE L'ENCADREMENT DE L'ANIMATION, DES PROJETS ET DES ADHÉSIONS DES FEMMES (UFPDG)"],

            ];
            @endphp
            <h5 class="h5 fw-700 mb-0 text-title-2 position-relative">
                <span class="2 pb-3 d-inline-block text-white">@lang("Nos Leaders")</span>
            </h5>
            <div class="produits">
                <div class="row">
                    <!-- actus -->
                    @foreach ($actus as $actualite)
                    <div class="col-md-3 col-lg-3 col-6 carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="" class="d-block">
                                    <img class="img-fluid lazyload mx-auto h-140px h-md-250px" src="{{ $actualite['images']}}" data-src="{{ $actualite['images']}}" alt="">
                                </a>
                            </div>
                            <div class="p-md-3 px-2 text-left" style="background-color: darkblue;">
                                <div class="dontaion-category story-meta justify-content-center">
                                    <p class="text-center fs-13 text-white fw-600">{{ $actualite['title']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
        </div>
    </div>
</section>
<!-- advertisement banner-->
<section class="section-padding advertisement-banner-1 bg-banner-mission center-bg-effect">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-12">
                <div class="advertisement-text text-center mx-center-width">
                    <h3 class="text-dark">Nous sommes en mission pour aider les impuissants</h3>
                    <p class="text-dark">Il existe de nombreuses variantes de passages de Lorem Ipsum disponibles, mais la majorité ont subi une altération sous une forme ou une autre, par injection d'humour.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- advertisement banner-->
<!-- Blog section -->
<section class="actualites-home py-5">
    <div class="mx-3 ">
        <div class="px-2 py-4 px-md-4 py-md-3 shadow-sm rounded">

            <h5 class="h5 fw-700 mb-0 text-title-2 position-relative">
                <span class="2 pb-3 d-inline-block text-white">@lang("Les dernieres nouvelles du partie")</span>
            </h5>
            <div class="produits">
                <div class="row">
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
<!-- END/BLOG Section -->
@endsection
