<!-- Sucscriber -->
<section class="section-padding block_newsletter">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left text-center">
                    <h3 class="text-light-black header-title">S'inscrire au Newsletter</h3>
                    <p>Pour recevoir les dernières nouvelles de notre parti </p>
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
<section class="section-padding bg-light-theme pt-0 u-line bg-custom-primary">
    <div class="container text-white">
        <div class="row">
            <div class="col-lg-6 d-none d-lg-block d-md-block text-center text-md-left">
                <div class="row mt-2">
                    <div class="col-md-3 d-flex align-items-center">
                        <a href="{{ ('index')}}">
                            <img src="{{asset('assets/img/pdg.png')}}" style="height: 70px;" class="img-fluid" alt="img">
                        </a>
                    </div>
                    <div class="my-3 col-md-9">
                        <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                            @lang('Parti Democratique Gabonais')
                        </h4>
                        <p class="text-justify fs-13">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi, doloribus voluptates nemo cupiditate assumenda accusantium magnam, rerum veniam omnis cum nulla nostrum sequi animi nisi, rem illum! Adipisci debitis architecto voluptatem repellat odio. Laudantium ex provident culpa incidunt obcaecati suscipit!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 ml-auto col-md-4 mr-0">
                <div class="text-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        @lang('Liens rapides')
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#" class="opacity-90 hov-opacity-100 text-reset">
                                @lang('Dons')
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="opacity-90 hov-opacity-100 text-reset">
                                @lang("Support")
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ ('contact')}}" class="opacity-90 hov-opacity-100 text-reset">
                                @lang("Joignez-nous")
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ ('contact')}}" class="opacity-90 hov-opacity-100 text-reset">
                                @lang("Contactez-nous")
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="opacity-90 hov-opacity-100 text-reset">
                                @lang("Mot du president")
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-6 col-md-4">
                <div class="text-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        @lang("Contact")
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <span class="d-block opacity-90">@lang("Adresse")</span>
                            <span class="d-block opacity-70"> Libreville, district Ongue</span>
                        </li>
                        <li class="mb-2">
                            <span class="d-block opacity-90">@lang("Telephone")</span>
                            <span class="d-block opacity-70">(+241) 765 123 9887 </span>
                        </li>
                        <li class="mb-2">
                            <span class="d-block opacity-90">@lang('Email:')</span>
                            <span class="d-block opacity-70">
                                <a href="mailto:" class="text-white">info@pdg.com</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FOOTER -->
<div class="copyright bg-black">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-lg-4 text-center medewithlove align-self-center"> <a href="#" class="text-custom-white">Made with Real <i class="fas fa-heart"></i> Victoire Muthamu & Daniel Kikimba</a>
            </div>
            <div class="col-lg-4">
                <div class="copyright-text"> <span class="text-white">© <a href="#" class="text-white">subnetcongo.net</a> - 2022 | All Right Reserved</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center text-md-right">
                    <ul class="list-inline mb-0">
                        <a href="" class="text-white">
                            <span class="text-center text-md-left">
                                @lang("Terms & Condition | Cookie Policy")
                            </span>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<div class="modal" id="quick_view">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <!-- product details inner end -->
                <div class="product-details-inner">
                    <div class="row">
                        <div class="col-lg-5 align-self-center">
                            <div class="shop-detail-image">
                                <div class="detail-slider">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="#" class="popup">
                                                    <img src="{{asset('assets/')}}/img/shop/maindetail.jpg" class="img-fluid full-width" alt="slider">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="shop-detail-contents mb-md-40 mt-md-40">
                                <div class="shop-detail-content-wrapper">
                                    <h3 class="text-custom-black">Handmade Golden Necklace Full Family Package</h3>
                                </div>
                                <div class="ratings d-flex mb-xl-20"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                    <span class="text-dark-white"><i class="fas fa-star"></i></span>
                                    <span class="text-dark-white"><i class="fas fa-star"></i></span>
                                    <div class="pro-review"> <span>1 Reviews</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <h4 class="text-custom-red price-tag">$45 <span class="text-light-white fw-400 fs-14">$50</span></h4>
                                </div>
                                <div class="product-full-des mb-20">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                </div>
                                <div class="availibity mt-20">
                                    <h6 class="text-custom-black fw-600">Avability: <span class="text-success ml-2">In Stock</span></h6>
                                </div>
                                <div class="quantity mb-xl-20">
                                    <h6 class="text-custom-black mb-0 mr-2 fw-600">Qty:</h6>
                                    <div class="product-qty-input">
                                        <button class="minus-btn" type="button" name="button"> <i class="fas fa-minus"></i>
                                        </button>
                                        <input type="text" class="form-control form-control-qty text-center" name="name" value="1">
                                        <button class="plus-btn" type="button" name="button"> <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="shop-bottom">
                                    <div class="shop-meta mt-20">
                                        <h6 class="text-custom-black mb-0 fw-600">Categories:</h6>
                                        <ul class="list-inline ml-2">
                                            <li class="list-inline-item"><a href="#">Necklace</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#">Diamond</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#">Sale</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="shop-meta mt-20">
                                        <h6 class="text-custom-black mb-0 fw-600">Tags:</h6>
                                        <ul class="list-inline ml-2">
                                            <li class="list-inline-item"><a href="#">Luxary</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#">Diamond</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#">New Arrivel</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-btn mt-20"> <a href="#" class="btn-solid with-line ml-2">Add to Cart <i class="pe-7s-cart"></i></a>
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
