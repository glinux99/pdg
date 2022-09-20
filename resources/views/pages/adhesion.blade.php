@extends('layouts.master')

@section('title')
adhesion
@endsection

@section('content')
<!-- formulaire d'adhesion -->
<div id="adhesion-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="col-md-8 mx-auto card mt-5">
                <div class="card-body">
                    <div class="mb-4 text-center">
                        <img src="{{asset('assets/img/pdg.png')}}" style="height: 70px;" class="img-fluid" alt="img">
                        <p class="fs-18 text-light-black  mb-0 text-uppercase fw-700">@lang("Formulaire d'adhesion")</p>
                        <p class="my-2 opacity-60">@lang("ce formulaire d'adhesion vous pourmettra de jouir de tous les avantages en tant que membre du parti")
                            <br>
                            @lang("Veuillez a bien completer les champs ci-dessous")
                        </p>
                    </div>
                    <div class="toggle">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Nom (s) ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre nom" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Prenom (s) ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre prenom" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Date de naissance ')</label>
                                    <input type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Lieu de naissance ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre lieu de naissance" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Genre ')</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Feminin</option>
                                        <option value="">Masculin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Province ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre province" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Telephone (s) ')</label>
                                    <input type="text" class="form-control" value="+241" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('E-mail ')</label>
                                    <input type="email" class="form-control" placeholder="votre adresse email ici" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="col-md-8 mx-auto card mt-5">
                <div class="card-body">
                    <div class="mb-4 text-center">
                        <img src="{{asset('assets/img/pdg.png')}}" style="height: 70px;" class="img-fluid" alt="img">
                        <p class="fs-18 text-light-black  mb-0 text-uppercase fw-700">@lang("Formulaire d'adhesion")</p>
                        <p class="my-2 opacity-60">@lang("ce formulaire d'adhesion vous pourmettra de jouir de tous les avantages en tant que membre du parti")
                            <br>
                            @lang("Veuillez a bien completer les champs ci-dessous")
                        </p>
                    </div>
                    <div class="toggle">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Profession ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre nom" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Commune ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre prenom" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Departement ')</label>
                                    <input type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Arrondissement ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre lieu de naissance" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Quartier ')</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Feminin</option>
                                        <option value="">Masculin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('District ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre distrct" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Canton ')</label>
                                    <input type="text" class="form-control" value="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Village ')</label>
                                    <input type="email" class="form-control" placeholder="votre adresse email ici" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="col-md-8 mx-auto card mt-5">
                <div class="card-body">
                    <div class="mb-4 text-center">
                        <img src="{{asset('assets/img/pdg.png')}}" style="height: 70px;" class="img-fluid" alt="img">
                        <p class="fs-18 text-light-black  mb-0 text-uppercase fw-700">@lang("Formulaire d'adhesion")</p>
                        <p class="my-2 opacity-60">@lang("ce formulaire d'adhesion vous pourmettra de jouir de tous les avantages en tant que membre du parti")
                            <br>
                            @lang("Veuillez a bien completer les champs ci-dessous")
                        </p>
                    </div>
                    <div class="toggle">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('commune ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre nom" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Departement ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre prenom" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Arrondissement ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre lieu de naissance" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Quartier ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre distrct" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('District ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre distrct" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Canton ')</label>
                                    <input type="text" class="form-control" value="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Village ')</label>
                                    <input type="email" class="form-control" placeholder="votre adresse email ici" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Siege ')</label>
                                    <input type="email" class="form-control" placeholder="votre adresse email ici" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="col-md-8 mx-auto card mt-5">
                <div class="card-body">
                    <div class="mb-4 text-center">
                        <img src="{{asset('assets/img/pdg.png')}}" style="height: 70px;" class="img-fluid" alt="img">
                        <p class="fs-18 text-light-black  mb-0 text-uppercase fw-700">@lang("Formulaire d'adhesion")</p>
                        <p class="my-2 opacity-60">@lang("ce formulaire d'adhesion vous pourmettra de jouir de tous les avantages en tant que membre du parti")
                            <br>
                            @lang("Veuillez a bien completer les champs ci-dessous")
                        </p>
                    </div>
                    <div class="toggle">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Federation ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre nom" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Section ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre prenom" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Comite ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre lieu de naissance" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Cellule ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre distrct" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Centre de vote ')</label>
                                    <input type="text" class="form-control" placeholder="tapez ici votre distrct" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('Bureau de vote N` ')</label>
                                    <input type="text" class="form-control" value="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group d-flex justify-content-center my-4">
        <button type="button" class="btn-second-2 btn-submit px-5 carousel-control-prev" href="#adhesion-carousel" role="button" data-slide="prev">Arriere</button>
        <button type="button" class="btn-second-2 btn-submit px-5 carousel-control-next" href="#adhesion-carousel" role="button" data-slide="next">Suivant</button>
    </div>
    <!-- <a class="carousel-control-prev" href="#adhesion-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>-->
    <!-- <a class="carousel-control-next" href="#adhesion-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a> -->
</div>
@endsection
