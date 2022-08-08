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
            <h2>Notre histoire</h2>
            <ul>
                <li><a href="/">Accueil</a>
                </li>
                <li class="active">A propos de nous</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb -->

<!-- about us -->
<section class="aboutus section-padding advertisement-apropos center-bg-effect">
    <div class="container-fluid custom-container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-9">
                <div class="history-title mb-lg-40">
                    <h4 class="text-light-black">Comment pouvons-nous aider la communauté?</h4>
                    <div class="row justify-content-between">
                        <div class="col-md">
                            <div class="about-box">
                                <p class="text-light-white mb-xl-20 text-justify">
                                    Le parti est d'abord connu sous le nom de Bloc démocratique gabonais sous la direction de Léon Mba. </p>

                            </div>
                            <div class="row full-height">
                                <div class="col-12 full-height">
                                    <div class="img-box mb-sm-40">
                                        <img src="{{asset('assets/img/story-big/story1.png')}}" class="image-fit" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="about-box">
                                <h5 class="btn-text-dark">Steeve Nzegho Dieko</h5>
                                <p class="text-light-white mb-xl-20 text-justify">
                                    Avec l'accession de Mba à la présidence, le parti devient dominant. Devenu président du Gabon en 1967, Albert Bernard Bongo, renomme le parti en Parti démocratique gabonais, le 12 mars 1968. Le président Bongo rend illégaux tous les autres partis, faisant du PDG le parti unique du Gabon.
                                </p>
                            </div>
                            <div class="about-box">
                                <h5 class="btn-text-dark">Éric Dodo Bounguendza</h5>
                                <p class="text-light-white mb-xl-20 text-justify">
                                    Au cours des deux décennies du monopartisme, le PDG prend de l'essor et conforte sa position sur l'échiquier politique national, ce qui explique son hégémonie. Il est le seul parti avec une présence réelle dans toutes les provinces du Gabon.
                                </p>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="about-box ">
                                <p class="text-light-white custom-lh mb-xl-20 text-justify">
                                    La fin du parti unique en 1991 ne change rien à la mainmise du PDG sur la politique gabonaise. L'appareil d'État est quasi entièrement composé de fonctionnaires membres du PDG et la presse, qu'elle soit étatique ou privée, reste dans la plupart des cas le porte-voix du PDG et surtout du président Bongo.
                                </p>
                                <ul>
                                    <li class="fs-14 text-light-white">
                                        <i class="fas fa-check"></i>Un système fiscal équitable
                                    </li>
                                    <li class="fs-14 text-light-white">
                                        <i class="fas fa-check"></i>Changement climatique
                                    </li>
                                    <li class="fs-14 text-light-white">
                                        <i class="fas fa-check"></i>Consultation de santé
                                    </li>
                                    <li class="fs-14 text-light-white">
                                        <i class="fas fa-check"></i>Prévention de la violence armée
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between" style="margin-top: 40px;">
                        <div class="col-12">
                            <div class="blog-meta mb-xl-20">
                                <h5 class="blog-title text-light-black">Meilleur parti démocrate gabonais.</h5>
                                <p class="text-light-white text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="blog-meta mb-xl-20">
                                <h6 class="blog-title text-light-black">Pourquoi le choisissons-nous ?</h6>
                                <p class="text-light-white text-justify">C'est un fait établi depuis longtemps qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il regarde sa mise en page. L'intérêt d'utiliser Lorem Ipsum est qu'il a une distribution plus ou moins normale des lettres, par opposition à l'utilisation de "Contenu ici, contenu ici", ce qui le fait ressembler à un anglais lisible. De nombreux packages de publication assistée par ordinateur et éditeurs de pages Web utilisent désormais Lorem Ipsum comme texte de modèle par défaut, et une recherche de «lorem ipsum» découvrira de nombreux sites Web encore à leurs balbutiements. Diverses versions ont évolué au fil des ans, parfois par accident, parfois à dessein (humour injecté, etc.).</p>
                            </div>
                            <hr>
                            <div class="post-details-tags-social mb-xl-20">
                                <div class="row">
                                    <div class="col-lg-8 col-md-6">
                                        <div class="tags-box">
                                            <div class="tags">
                                                <a href="#"></a>
                                                <a href="#"></a>
                                                <a href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="social-media-box">
                                            <ul class="custom">
                                                <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="gg"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
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
</section>
<!-- about us -->
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
                        <h5 class="blog-item-title"><a href="#">ACTIVITÉ DE L'UJPDG | Province de l'Ogooué-Ivindo | Journée Citoyenne </a></h5>
                        <p>L'UJPDG a organisé, sous la supervision du Camarade Délégué National, Axel Jesson Ayenoue...</p>
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
@endsection
