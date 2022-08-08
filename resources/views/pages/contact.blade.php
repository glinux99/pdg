@extends('layouts.master')

@section('title')
Contactez-nous
@endsection

@section('content')
<!-- breadcrumb -->
<div class="breadcrumb-area">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Contactez-nous</h2>
            <ul>
                <li><a href="/">Accueil</a>
                </li>
                <li class="active">Contactez-nous</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb -->
<div class="contact_map d-flex">
    <iframe src="https://www.google.com/maps/d/embed?mid=1r3gHBQNfKdaGlz6UXivLaRHPGkk&ll=-0.20680572226199734%2C10.531921999999954&z=9" class="border-0 w-100" style="height: 100%; min-height: 500px;" allowfullscreen=""></iframe>
</div>
<section class="section-padding bg-theme-primary">
    <div class="container">
        <div class="section-header-style-2">
            <h6 class="text-light-green sub-title">Contactez-nous</h6>
            <h3 class="text-light-black header-title">Faites-le en un seul click</h3>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="form_validate ajax_submit form_alert" action="#" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-light-black fw-600">Nom</label>
                                <input type="text" name="name" class="form-control form-control-submit" placeholder="tapez ici votre nom">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-light-black fw-600">Adresse Email</label>
                                <input type="email" name="email" class="form-control form-control-submit" placeholder="tapez ici votre adresse email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-light-black fw-600">Numero de Telephone</label>
                                <input type="text" name="phone" class="form-control form-control-submit" placeholder="Ex. +241 06078076">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-light-black fw-600">Sujet</label>
                                <input type="text" name="subject" class="form-control form-control-submit" placeholder="Sujet">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="text-light-black fw-600">Message</label>
                                <textarea class="form-control form-control-submit" name="message" rows="6" placeholder="Ecrivez ici votre message"></textarea>
                            </div>
                            <button type="submit" class="btn-second btn-submit full-width">Envoyer</button>
                            <div class="server_response w-100"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="section-padding block_newsletter" style="background: linear-gradient(274deg, #021048, #aeb32f);">
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
@endsection
