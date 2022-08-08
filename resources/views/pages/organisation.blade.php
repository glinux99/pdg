@extends('layouts.master')

@section('title')
Organisation du parti
@endsection

@section('content')
<div class="breadcrumb-area">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Organisation du parti</h2>
            <ul>
                <li><a href="#">Accueil</a>
                </li>
                <li class="active"> Organisation</li>
            </ul>
        </div>
    </div>
</div>
<!-- Blog -->
<section class="our-articles bg-light-theme section-padding ">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-xl-12">
                <div class=" full-width">
                    <h4 class="text-light-black">Nos leaders</h4>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="sa-causes-single sa-causes-single-2">
                                <div class="entry-thumb">
                                    <img src="{{asset('assets/img/story-big/story1.png')}}" alt="img" class="img-fluid full-width">
                                    <div class="dontaion-category story-meta">
                                        <p><strong>President</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="sa-causes-single sa-causes-single-2">
                                <div class="entry-thumb">
                                    <img src="{{asset('assets/img/story-big/story2.jpeg')}}" alt="img" class="img-fluid full-width">
                                    <div class="dontaion-category story-meta">
                                        <p><strong>Vice President</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="sa-causes-single sa-causes-single-2">
                                <div class="entry-thumb">
                                    <img src="{{asset('assets/img/story-big/story2.jpg')}}" alt="img" class="img-fluid full-width">
                                    <div class="dontaion-category story-meta">
                                        <p><strong>Secretaire general</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="sa-causes-single sa-causes-single-2">
                                <div class="entry-thumb">
                                    <img src="{{asset('assets/img/story-big/noor.webp')}}" alt="img" class="img-fluid full-width">
                                    <div class="dontaion-category story-meta">
                                        <p><strong>Conseilleur Strategique</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="sa-causes-single sa-causes-single-2">
                                <div class="entry-thumb">
                                    <img src="{{asset('assets/img/story-big/membre.jpg')}}" alt="img" class="img-fluid full-width">
                                    <div class="dontaion-category story-meta">
                                        <p><strong>Membre du bureau</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="sa-causes-single sa-causes-single-2">
                                <div class="entry-thumb">
                                    <img src="assets/img/story-big/story5.jpg" alt="img" class="img-fluid full-width">
                                    <div class="dontaion-category story-meta">
                                        <p><strong>Tresorier</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="sa-causes-single sa-causes-single-2">
                                <div class="entry-thumb">
                                    <img src="{{asset('assets/img/story-big/story2.jpeg')}}" alt="img" class="img-fluid full-width">
                                    <div class="dontaion-category story-meta">
                                        <p><strong>Vice-tresorier</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="sa-causes-single sa-causes-single-2">
                                <div class="entry-thumb">
                                    <img src="assets/img/story-big/story5.jpg" alt="img" class="img-fluid full-width">
                                    <div class="dontaion-category story-meta">
                                        <p><strong>Adherant</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        </div>
    </div>
</section>
<!-- advertisement banner-->
<section class="section-padding advertisement-banner-1 bg-banner-mission center-bg-effect">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-12">
                <div class="advertisement-text text-center mx-center-width">
                    <h3 class="text-white">Nous sommes en mission pour aider les impuissants</h3>
                    <p class="text-white">Il existe de nombreuses variantes de passages de Lorem Ipsum disponibles, mais la majorité ont subi une altération sous une forme ou une autre, par injection d'humour.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- advertisement banner-->
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
@endsection
