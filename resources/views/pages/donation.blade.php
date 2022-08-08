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
            <h2>Faire un don</h2>
            <ul>
                <li><a href="#">Accueil</a>
                </li>
                <li class="active">Dons</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb -->
<!-- Blog -->
<section class="our-articles bg-light-white section-padding " style="background: linear-gradient(274deg, #021048, #aeb32f);">
    <div class="container-fluid custom-container">
        <div class="row">
            <aside class="col-xl-3 col-lg-4">
                <div class="side-bar mb-md-40">
                    <div class="main-box padding-20 side-blog mb-xl-20">
                        <h5 class="text-light-black">Dons populaires</h5>
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
            </aside>
            <div class="col-xl-9 col-lg-8">
                <div class=" full-width">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="sa-causes-single sa-causes-single-2">
                                <div class="entry-thumb">
                                    <img src="{{asset('assets/img/donation/don6.jpeg')}}" alt="img" class="img-fluid full-width">
                                    <div class="dontaion-category"><a href="#">Education</a></div>
                                </div>
                                <div class="causes-details-wrap">
                                    <div class="causes-details">
                                        <h5><a href="#">Aide a nos enfants</a></h5>
                                        <p class="text-justify">Tous le enfants ont droit a l'education quelque soit leur age ou genre, nous devons muliter pour une education gratuite</p>

                                        <div class="causes-amount">
                                            <div class="left">
                                                <p>Soulevé</p>
                                                <span>$4585.00</span>
                                            </div>
                                            <div class="right">
                                                <p>Objectif</p>
                                                <span>$4585.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area text-center">
                                    <a class="btn-donation text-btn" href="#">Faites un don maintenant</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="sa-causes-single sa-causes-single-2">
                                <div class="entry-thumb">
                                    <img src="{{asset('assets/img/donation/don1.webp')}}" alt="img" class="img-fluid full-width">
                                    <div class="dontaion-category"><a href="#">Divertissement</a></div>
                                </div>
                                <div class="causes-details-wrap">
                                    <div class="causes-details">
                                        <h5><a href="#">Celebration de l'aniversaire</a></h5>
                                        <p>Many desktop publishing package and the web page editor now use lorem Ipsum the model text lorem.</p>

                                        <div class="causes-amount">
                                            <div class="left">
                                                <p>Soulevé</p>
                                                <span>$4585.00</span>
                                            </div>
                                            <div class="right">
                                                <p>Objectif</p>
                                                <span>$4585.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area text-center">
                                    <a class="btn-donation text-btn" href="#">Faites un don maintenant</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="sa-causes-single sa-causes-single-2">
                                <div class="entry-thumb">
                                    <img src="{{asset('assets/img/donation/don2.jpeg')}}" alt="img" class="img-fluid full-width">
                                    <div class="dontaion-category"><a href="#">Education</a></div>
                                </div>
                                <div class="causes-details-wrap">
                                    <div class="causes-details">
                                        <h5><a href="#">Aidez nos vétérans à revenir</a></h5>
                                        <p>Many desktop publishing package and the web page editor now use lorem Ipsum the model text lorem.</p>

                                        <div class="causes-amount">
                                            <div class="left">
                                                <p>Soulevé</p>
                                                <span>$4585.00</span>
                                            </div>
                                            <div class="right">
                                                <p>Objectif</p>
                                                <span>$4585.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area text-center">
                                    <a class="btn-donation text-btn" href="#">Faites un don maintenant</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="sa-causes-single sa-causes-single-2">
                                <div class="entry-thumb">
                                    <img src="{{asset('assets/img/donation/don3.jpeg')}}" alt="img" class="img-fluid full-width">
                                    <div class="dontaion-category"><a href="#">Education</a></div>
                                </div>
                                <div class="causes-details-wrap">
                                    <div class="causes-details">
                                        <h5><a href="#">Notre campagne</a></h5>
                                        <p>Many desktop publishing package and the web page editor now use lorem Ipsum the model text lorem.</p>

                                        <div class="causes-amount">
                                            <div class="left">
                                                <p>Soulevé</p>
                                                <span>$4585.00</span>
                                            </div>
                                            <div class="right">
                                                <p>Objectif</p>
                                                <span>$4585.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area text-center">
                                    <a class="btn-donation text-btn" href="#">Faites un don maintenant</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="sa-causes-single sa-causes-single-2">
                                <div class="entry-thumb">
                                    <img src="{{asset('assets/img/donation/don4.jpeg')}}" alt="img" class="img-fluid full-width">
                                    <div class="dontaion-category"><a href="#">Education</a></div>
                                </div>
                                <div class="causes-details-wrap">
                                    <div class="causes-details">
                                        <h5><a href="#">Help our Veterans come back</a></h5>
                                        <p>Many desktop publishing package and the web page editor now use lorem Ipsum the model text lorem.</p>

                                        <div class="causes-amount">
                                            <div class="left">
                                                <p>Soulevé</p>
                                                <span>$4585.00</span>
                                            </div>
                                            <div class="right">
                                                <p>Objectif</p>
                                                <span>$4585.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area text-center">
                                    <a class="btn-donation text-btn" href="#">Faites un don maintenant</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="sa-causes-single sa-causes-single-2">
                                <div class="entry-thumb">
                                    <img src="{{asset('assets/img/donation/don5.jpeg')}}" alt="img" class="img-fluid full-width">
                                    <div class="dontaion-category"><a href="#">Education</a></div>
                                </div>
                                <div class="causes-details-wrap">
                                    <div class="causes-details">
                                        <h5><a href="#">Help our Veterans come back</a></h5>
                                        <p>Many desktop publishing package and the web page editor now use lorem Ipsum the model text lorem.</p>

                                        <div class="causes-amount">
                                            <div class="left">
                                                <p>Soulevé</p>
                                                <span>$4585.00</span>
                                            </div>
                                            <div class="right">
                                                <p>Objectif</p>
                                                <span>$4585.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area text-center">
                                    <a class="btn-donation text-btn" href="#">Faites un don maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sucscriber -->
<section class="section-padding advertisement-banner-1 bg-banner-mission center-bg-effect">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left text-center">
                    <h3 class="text-light-black header-title">Saisissez notre newsletter</h3>
                    <p>Pour recevoir les dernières informations sur notre parti politique PDG gabon </p>
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
