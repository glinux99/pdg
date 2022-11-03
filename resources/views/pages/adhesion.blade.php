@extends('layouts.master')

@section('title')
adhesion
@endsection

@section('content')
<!-- MultiStep Form -->
<style>
    /*custom font*/
    @import url(https://fonts.googleapis.com/css?family=Montserrat);

    /*basic reset*/
    * {
        margin: 0;
        padding: 0;
    }


    body {
        font-family: montserrat, arial, verdana;
        background: transparent;
    }

    /*form styles*/
    #msform {
        text-align: center;
        /* position: relative; */
        margin-top: 30px;

    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0px;
        box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
        padding: 20px 30px;
        box-sizing: border-box;
        width: 80%;
        margin: 0 10%;
        /*stacking fieldsets above each other*/
        position: relative;
    }

    /*Hide all except first fieldset*/
    #msform fieldset:not(:first-of-type) {
        display: none;
    }

    /*inputs*/
    #msform input,
    #msform select,
    #msform textarea {
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 13px;
    }


    #msform input:focus,
    #msform select:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid green;
        outline-width: 0;
        transition: All 0.5s ease-in;
        -webkit-transition: All 0.5s ease-in;
        -moz-transition: All 0.5s ease-in;
        -o-transition: All 0.5s ease-in;
    }

    /*buttons*/
    #msform .action-button {
        width: 100px;
        background: green;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 25px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px green;
    }

    #msform .action-button-previous {
        width: 100px;
        background: #C5C5F1;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 25px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
    }

    /*headings*/
    .fs-title {
        font-size: 18px;
        text-transform: uppercase;
        color: #2C3E50;
        margin-bottom: 10px;
        letter-spacing: 2px;
        font-weight: bold;
    }

    .fs-subtitle {
        font-weight: normal;
        font-size: 13px;
        color: #666;
        margin-bottom: 20px;
    }

    /*progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
    }

    #progressbar li {
        list-style-type: none;
        color: white;
        text-transform: uppercase;
        font-size: 9px;
        width: 33.33%;
        float: left;
        position: relative;
        letter-spacing: 1px;
    }

    #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 24px;
        height: 24px;
        line-height: 26px;
        display: block;
        font-size: 12px;
        color: #333;
        background: white;
        border-radius: 25px;
        margin: 0 auto 10px auto;
    }

    /*progressbar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: yellowgreen;
        position: absolute;
        left: -50%;
        top: 9px;
        z-index: -1;
        /*put it behind the numbers*/
    }

    #progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none;
    }

    /*marking active/completed steps green*/
    /*The number of the step and the connector before it = green*/
    #progressbar li.active:before,
    #progressbar li.active:after {
        background: green;
        color: white;
    }


    /* Not relevant to this form */
    .dme_link {
        margin-top: 30px;
        text-align: center;
    }

    .dme_link a {
        background: #FFF;
        font-weight: bold;
        color: green;
        border: 0 none;
        border-radius: 25px;
        cursor: pointer;
        padding: 5px 25px;
        font-size: 12px;
    }

    .dme_link a:hover,
    .dme_link a:focus {
        background: #C5C5F1;
        text-decoration: none;
    }

    .amazing {
        /* background-color: red; */
        position: relative;
        min-height: 70vh;
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/css/intlTelInput.css">
<div class="amazing">

    <div class="row">
        <div class="mx-auto  col-md-10 col-md-offset-3">
            <form id="msform">
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Details personnels</li>
                    <li>Details sur votre profession</li>
                    <li>Details sur votre bureau de votre</li>

                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Details personnels</h2>
                    <h3 class="fs-subtitle">Les champs * sont obligatoires</h3>
                    <div class="row">
                        <div class="col-md-6">

                            <span class="label">Nom :</span>
                            <input type="text" name="fname" placeholder="Votre nom" />
                        </div>
                        <div class="col-md-6">
                            <span class="label">Prenom :</span>
                            <input type="text" name="lname" placeholder="Votre prenom" />
                        </div>
                        <div class="col-md-6">
                            <span class="label">Telephone :</span>
                            <div class="form-group has-danger">
                                <input id="phone" class="" type="tel" name="phone" maxlength="15" />
                                <br>
                                <span id="error-msg" class="hide"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <span class="label">Sexe</span>
                            <select id="Sexe" name="Sexe" class="form-select" aria-label="">
                                <option>--Selectionner votre sexe--</option>
                                <option>Masculin</option>
                                <option>Femimin</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <span class="label">Lieu de naissance :</span>
                            <input type="text" name="lname" placeholder="Lieu de naissance" value="France-Ville" />
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <span for="inputDate de naissance" class="control-label">Date de naissance:</span>
                                <div class="">
                                    <input type="date" name="Date de naissance" id="inputDate de naissance" value="" required="required" title="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <span class="label">Type de piece d'identite</span>
                            <select id="Sexe" name="Sexe" class="form-select" aria-label="">
                                <option>--Selectionner votre type de piece--</option>
                                <option>Permis de conduire</option>
                                <option>Carte d'electeur</option>
                                <option>Carte de citoyennete</option>
                                <option>Carte d'eleve</option>
                                <option>Carte d'etudiant</option>
                                <option>Autres</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <span class="label">Numero de votre piece: </span>

                            <input type="number" name="" id="" placeholder="2246648900034">
                        </div>
                        <div class="col-md-6">
                            <span class="label">Situation Matrimoniale:</span>
                            <select id="Sexe" name="Sexe" class="form-select" aria-label="">
                                <option>--Selectionner votre status matrimoniale--</option>
                                <option>Mariee</option>
                                <option>Fiancee</option>
                                <option>Concubinage</option>
                                <option>Celibataire</option>
                                <option>Veuf(ve)</option>
                                <option>Autres</option>
                            </select>
                        </div>
                        <div class="col-md-6">

                            <span class="label">Lieu de residence actuel: </span>
                            <input type="text" name="" id="" placeholder="Votre lieu de residence actuel">

                        </div>
                    </div>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Details personnels supplementaires</h2>
                    <h3 class="fs-subtitle">Details sur la profession</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="label">Nom et Prenom du Pere:</span>
                            <input type="text" name="" id="" placeholder="Nom et prenom de votre pere">
                        </div>
                        <div class="col-md-6">
                            <span class="label">Nom et Prenom du Mere:</span>
                            <input type="text" name="" id="" placeholder="Nom et prenom de votre mere">
                        </div>
                        <div class="col-md-6">
                            <span class="label">Profession:</span>
                            <input type="text" name="" id="" placeholder="Votre profession">
                        </div>
                        <div class="col-md-6">
                            <span class="label">Employeur:</span>
                            <input type="text" name="" id="" placeholder="Votre employeur">
                        </div>
                        <div class="col-md-6">
                            <span class="label">Fonction:</span>
                            <input type="text" name="" id="" placeholder="Votre fonction">
                        </div>
                        <div class="col-md-6">
                            <span class="label">Type d'employeur:</span>
                            <select id="Sexe" name="Sexe" class="form-select" aria-label="">
                                <option>--Selectionner votre type d'emploayeur--</option>
                                <option value="">Etat</option>
                                <option value="">Prive</option>
                                <option value="">Autre</option>
                            </select>
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Informations supplementaires</h2>
                    <h3 class="fs-subtitle">Details sur la profession</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="label">Nom et Prenom du Pere:</span>
                            <input type="text" name="" id="" placeholder="Nom et prenom de votre pere">
                        </div>
                        <div class="col-md-6">
                            <span class="label">Nom et Prenom du Mere:</span>
                            <input type="text" name="" id="" placeholder="Nom et prenom de votre mere">
                        </div>
                        <div class="col-md-6">
                            <span class="label">Profession:</span>
                            <input type="text" name="" id="" placeholder="Votre profession">
                        </div>
                        <div class="col-md-6">
                            <span class="label">Employeur:</span>
                            <input type="text" name="" id="" placeholder="Votre employeur">
                        </div>
                        <div class="col-md-6">
                            <span class="label">Fonction:</span>
                            <input type="text" name="" id="" placeholder="Votre fonction">
                        </div>
                        <div class="col-md-6">
                            <span class="label">Type d'employeur:</span>
                            <select id="Sexe" name="Sexe" class="form-select" aria-label="">
                                <option>--Selectionner votre type d'emploayeur--</option>
                                <option value="">Etat</option>
                                <option value="">Prive</option>
                                <option value="">Autre</option>
                            </select>
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Details sur votre bureau de votre</h2>
                    <h3 class="fs-subtitle">Fill in your credentials</h3>
                    <input type="text" name="email" placeholder="Email" />
                    <input type="password" name="pass" placeholder="Password" />
                    <input type="password" name="cpass" placeholder="Confirm Password" />
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="submit" name="submit" class="submit action-button" value="Submit" />
                </fieldset>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script>
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function() {
        return false;
    })
</script>
<!-- /.MultiStep Form -->
<!-- input number -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/js/intlTelInput.js"></script>
<script>
    var input = document.querySelector("#phone"),
        errorMap = ["Numero Invalide", "Code de pays invalide", "Trop petit", "Trop long", "Numero invalide"],
        result = document.querySelector("#result");


    window.addEventListener("load", function() {


        errorMsg = document.querySelector("#error-msg");

        function getIp(callback) {
            fetch('https://ipinfo.io', {
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                .then((resp) => resp.json())
                .catch(() => {
                    return {
                        country: '',
                    };
                })
                .then((resp) => callback(resp.country));
        }

        var iti = window.intlTelInput(input, {
            // allowDropdown: false,
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            hiddenInput: "full_number",
            nationalMode: false,
            formatOnDisplay: true,
            separateDialCode: true,
            autoHideDialCode: true,
            autoPlaceholder: "aggressive",
            initialCountry: "ga",
            placeholderNumberType: "MOBILE",
            preferredCountries: ['ga', 'cd'],
            geoIpLookup: getIp,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/js/utils.js",
        });


        input.addEventListener('keyup', formatIntlTelInput);
        input.addEventListener('change', formatIntlTelInput);

        function formatIntlTelInput() {
            if (typeof intlTelInputUtils !== 'undefined') { // utils are lazy loaded, so must check
                var currentText = iti.getNumber(intlTelInputUtils.numberFormat.E164);
                if (typeof currentText === 'string') { // sometimes the currentText is an object :)
                    iti.setNumber(currentText); // will autoformat because of formatOnDisplay=true
                }
            }
        }



        input.addEventListener('keyup', function() {
            reset();
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    $(input).addClass('form-control is-valid');

                } else {
                    $(input).addClass('form-control is-invalid');
                    var errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    $(errorMsg).show();
                }
            }
        });
        input.addEventListener('change', reset);
        input.addEventListener('keyup', reset);

        var reset = function() {
            $(input).removeClass('form-control is-invalid');
            errorMsg.innerHTML = "";
            $(errorMsg).hide();

        };



        ////////////// testing - start //////////////

        input.addEventListener('keyup', function(e) {
            e.preventDefault();
            var num = iti.getNumber(),
                valid = iti.isValidNumber();
            result.textContent = "Number: " + num + ", valid: " + valid;
        }, false);

        input.addEventListener("focus", function() {
            result.textContent = "";
        }, false);


        $(input).on("focusout", function(e, countryData) {
            var intlNumber = iti.getNumber();
            console.log(intlNumber);
        });

        ////////////// testing - end //////////////

    });


    //-----------------------only-phone-number-input code (with +)-------------------------------start-------//
    function isPhoneNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode != 43 && charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
@endsection
