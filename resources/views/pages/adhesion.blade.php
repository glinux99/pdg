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
                <div class="section-2 user-page main-padding">
                    <div class="login-sec">
                        <div class="login-box">
                            <form>
                                <h4 class="text-light-black fw-600">Creer votre compte</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="text-light-white fs-14">Votre nom</label>
                                            <input type="text" name="#" class="form-control form-control-submit" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="text-light-white fs-14">Votre prenom</label>
                                            <input type="text" name="#" class="form-control form-control-submit" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="text-light-white fs-14">Adresse Email</label>
                                            <input type="email" name="#" class="form-control form-control-submit" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-light-white fs-14">Mot de passe (8 characteres minimum)</label>
                                            <input type="password" id="password-field" name="#" class="form-control form-control-submit" value="pdg@2022" placeholder="pdg-babonpassword" required>
                                            <div data-name="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></div>
                                        </div>
                                        <div class="form-group checkbox-reset">
                                            <label class="custom-checkbox mb-0">
                                                <input type="checkbox" name="#"> <span class="checkmark"></span> Se souvenir de moi</label>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn-second-2 btn-submit full-width">Creer mon compte</button>
                                        </div>
                                        <div class="form-group text-center"> <span>or</span>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn-second-2 btn-facebook full-width">
                                                <img src="assets/img/facebook-logo.svg" alt="btn logo">Continuer avec Facebook</button>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn-second-2 btn-google full-width">
                                                <img src="assets/img/google-logo.png" alt="btn logo">Continuer avec Google</button>
                                        </div>
                                        <div class="form-group text-center">
                                            <p class="text-light-black mb-0">Vous n'avez pas de compte? <a href="login.html">Se connecter</a>
                                            </p>
                                        </div> <span class="text-light-black fs-12 terms  mb-5">Vous acceptez nos<a href="#"> Termes</a> ainsi que la <a href="#"> Politique du parti.</a></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
