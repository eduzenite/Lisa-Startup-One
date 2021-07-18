<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/animate/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/settings.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/layers.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/navigation.css') }}">

        <!-- Demo CSS -->
        <link rel="stylesheet" href="{{ asset('css/demos/demo-medical-2.css') }}">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('css/skins/skin-medical-2.css') }}">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- Head Libs -->
        <script src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>
    </head>
    <body>
        <div class="body">
            @include('layouts.institutional-navigation')
            {{ $slot }}

            <footer id="footer" class="bg-color-quaternary border-top-0 mt-0">
                <div class="container py-4">
                    <div class="row py-5">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <h5 class="text-3 mb-3 opacity-7">Saiba mais</h5>
                            <p class="pr-1 text-color-light">Quer integrar nossa ferramente para melhorar a qualidade de vida de seus funcionários? Preencha o formulário abaixo que entraremos em contato com você.</p>
                            <div class="alert alert-danger d-none" id="newsletterError"></div>
                            <form action="#" method="POST" class="mr-4 mb-md-0">
                                <div class="form-group my-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="email" class="form-control" id="nome" name="nome" placeholder="Informe seu nome">
                                    </div>
                                </div>
                                <div class="form-group my-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-paper-plane"></i></span>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Informe seu e-mail">
                                    </div>
                                </div>
                                <div class="form-group my-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fab fa-whatsapp"></i></span>
                                        </div>
                                        <input type="email" class="form-control" id="telefone" name="telefone" placeholder="Informe seu telefone">
                                    </div>
                                </div>
                                <div class="form-group my-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> ENVIAR</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <h5 class="text-3 mb-3 opacity-7">LATEST TWEETS</h5>
                            <div id="tweet" class="twitter twitter-light" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
                                <p class="text-color-light">Please wait...</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                            <h5 class="text-3 mb-3 opacity-7">CONTACT US</h5>
                            <ul class="list list-icons list-icons-lg">
                                <li class="mb-1"><i class="far fa-dot-circle text-color-light"></i><p class="m-0 text-color-light">234 Street Name, City Name</p></li>
                                <li class="mb-1"><i class="fab fa-whatsapp text-color-light"></i><p class="m-0"><a class="text-color-light" href="tel:8001234567">(800) 123-4567</a></p></li>
                                <li class="mb-1"><i class="far fa-envelope text-color-light"></i><p class="m-0"><a class="text-color-light" href="mailto:mail@example.com">mail@example.com</a></p></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <h5 class="text-3 mb-3 opacity-7">FOLLOW US</h5>
                            <ul class="header-social-icons social-icons">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright bg-color-quaternary bg-color-scale-overlay bg-color-scale-overlay-1">
                    <div class="bg-color-scale-overlay-wrapper">
                        <div class="container py-2">
                            <div class="row py-4">
                                <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                                    <a href="index.html" class="logo pr-0 pr-lg-3">
                                        <img alt="{{ config('app.name') }}" src="{{ asset('img/logo-footer.png') }}" class="opacity-5" height="33">
                                    </a>
                                </div>
                                <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                                    <p class="text-color-light">© Copyright 2021. Todos os direitos reservados.</p>
                                </div>
                                <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                                    <nav id="sub-menu">
                                        <ul>
                                            <li class="border-0"><i class="fas fa-angle-right text-color-light"></i><a href="page-faq.html" class="ml-1 text-decoration-none text-color-light"> FAQ's</a></li>
                                            <li class="border-0"><i class="fas fa-angle-right text-color-light"></i><a href="sitemap.html" class="ml-1 text-decoration-none text-color-light"> Sitemap</a></li>
                                            <li class="border-0"><i class="fas fa-angle-right text-color-light"></i><a href="contact-us.html" class="ml-1 text-decoration-none text-color-light"> Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
        <script src="{{ asset('vendor/popper/umd/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/common/common.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
        <script src="{{ asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('vendor/vide/jquery.vide.min.js') }}"></script>
        <script src="{{ asset('vendor/vivus/vivus.min.js') }}"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('js/theme.js') }}"></script>

        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('js/views/view.contact.js') }}"></script>

        <!-- Demo -->
        <script src="{{ asset('js/demos/demo-medical-2.js') }}"></script>

        <!-- Theme Custom -->
        <script src="{{ asset('js/custom.js') }}"></script>

        <!-- Theme Initialization Files -->
        <script src="{{ asset('js/theme.init.js') }}"></script>
    </body>
</html>
