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
            <div class="col-8">
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
            <div class="col-4 bg-adresse pt-4 rounded">
                <h6 class="text-center">Les Adresses de Nos QG</h6>
                @php
                $adresses = array(
                1=>[
                "province"=>"PROVINCE DU MOYEN-OGOOUÉ"],
                2=>[
                "province"=>"PROVINCE DU HAUT-OGOOUÉ"],
                3=>[
                "province"=>"PROVINCE DE LA NGOUNIÉ"],
                4=>[
                "province"=>"PROVINCE DE L'OGOOUÉ-IVINDO"],
                5=>[
                "province"=>"PROVINCE DE L'OGOOUÉ-LOLO"],
                6=>[
                "province"=>"PROVINCE DE LA NYANGA"],
                7=>[
                "province"=>"PROVINCE DE L'ESTUAIRE"],
                7=>[
                "province"=>"PROVINCE DE L'OGOOUÉ-MARITIME"],
                7=>[
                "province"=>"PROVINCE DE WOLEU-NTEM"],
                );
                @endphp
                <div class="col-md-12">
                    @foreach ($adresses as $adresse)
                    <div class="form-group">
                        <label class=" fw-600">{{ $adresse['province']}}</label>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
