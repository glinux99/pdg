<!-- top-Navigation -->
<div class="top-header">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-md-6">
                <div class="top-left">
                    <ul class="top-info">
                        <li><a href="#"><i class="fas fa-phone-alt"></i> +241 765 123 9887</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> info@pdg.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="top-right">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-square"></i></a> </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter-square"></i></a> </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a> </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a> </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a> </li>
                    </ul>
                    <a href="#" class="top-btn" data-target="#donation" data-toggle="modal">DONNEZ AUJOURD'HUI</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navigation -->
<header class="header">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-12">
                <div class="navigation ">
                    <div class="logo">
                        <a href="#">
                            <img src="{{asset('assets/img/pdg.png')}}" style="width: 40px;" class="image-fit" alt="logo">
                        </a>
                    </div>
                    <div class="main-navigation d-flex align-items-center">
                        <nav>
                            <ul class="main-menu ">
                                <li class="menu-item"> <a href="/" class="text-light-black">Accueil</a>

                                </li>
                                <li class="menu-item"> <a href="/about" class="text-light-black">Notre partie</a>
                                </li>
                                <li class="menu-item"> <a href="/organisation" class="text-light-black">Agenda</a>
                                </li>
                                <li class="menu-item"> <a href="/organisation" class="text-light-black">Vie politique</a>
                                </li>
                                <li class="menu-item menu-item-has-children"> <a href="#" class="text-light-black">Actualite</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"> <a href="/election">Election au Gabon</a>
                                        </li>
                                        <li class="menu-item"> <a href="/actualite">Actualite du partie</a>
                                        </li>
                                    </ul>
                                </li>
                                <!--
                                <li class="menu-item"> <a href="/blog" class="text-light-black">Actualites</a>
                                </li> -->
                                <li class="menu-item"> <a href="/contact" class="text-light-black">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="right-side-navigation">
                        <ul>
                            <li class="hamburger-menu">
                                <a href="#" class="menu-btn"> <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </li>
                            <li class="user-details">
                                <a href="{{ route('pdg::login')}}" class="border-butn login"> <span>Se connecter</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="main-sec"></div>
<style>
    .login :hover {
        color: white;
    }
</style>
