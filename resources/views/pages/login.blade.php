@extends('layouts.master')

@section('title')
Adhesion
@endsection

@section('content')
<div class="our-articles bg-light-white m-3 mb-5">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-6">
                <div class="main-banner">
                    <img src="assets/img/slider.jpg" class="img-fluid full-width main-img" alt="banner">
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-2 user-page main-padding  ">
                    <div class="login-sec ">
                        <div class="login-box">
                            <div class="card-body">
                                <div class="mb-4 text-center">
                                    <img src="{{asset('assets/img/pdg.png')}}" class="mb-2 w-25" height="20" width="20">
                                    <p class="fs-18 text-light-black  mb-0 text-uppercase fw-700">@lang("Connection")</p>
                                    <p class="my-2 opacity-60">@lang("Connectez-vous en tant que membre")</p>
                                </div>
                                <form class="pad-hor" method="POST" role="form" action="#">
                                    @csrf
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="password-field" name="password" class="form-control form-control-submit" placeholder="Password" required>
                                        <div data-name="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <div class="text-left">
                                                <label class="aiz-checkbox">
                                                    <input type="checkbox" name="remember" id="remember">
                                                    <span class="opacity-60 text-lowercase">@lang("Se souvenir de moi")</span>
                                                    <span class="aiz-square-check"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-right opacity-100">
                                                <a href="password/reset.html" class="text-reset text-lowercase">@lang("Mot de passe oublie?")</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn-second-2 btn-submit full-width">Se connecter</button>
                                    </div>
                                    <div class="form-group text-center"> <span>or</span>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn-second-2 btn-google full-width">
                                            <img src="assets/img/google-logo.png" alt="btn logo">Continuer avec Google</button>
                                    </div>
                                </form>
                                <div class="mt-4 text-center">
                                    <a href="/register" class="text-light-black"> @lang("Vous n'avez pas de compte? creer votre compte")</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
