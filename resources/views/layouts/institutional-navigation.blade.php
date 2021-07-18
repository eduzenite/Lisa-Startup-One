<nav>
    <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0">
            <div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
                <div class="container h-100">
                    <div class="header-row h-100">
                        <div class="header-column justify-content-between">
                            <div class="header-row">
                                <nav class="header-nav-top w-100">
                                    <ul class="nav nav-pills justify-content-between w-100 h-100">
                                        <li class="nav-item py-2 d-none d-xl-inline-flex">
                                            <span class="header-top-email px-0 font-weight-normal d-flex align-items-center"><i class="far fa-envelope text-4"></i>  <a class="text-color-default" href="mailto:mail@example.com">mail@example.com</a></span>
                                        </li>
                                        <li class="nav-item nav-item-header-top-socials d-flex justify-content-between">
                                            <span class="header-top-button-make-as-appoitment d-inline-flex align-items-center justify-content-center h-100 p-0 align-top">
                                                <a href="demo-medical-2-contact-us.html" class="d-flex align-items-center justify-content-center h-100 w-100 btn-primary font-weight-normal text-decoration-none"><i class="fa fa-user-alt"></i> ÁREA DO CLIENTES</a>
                                            </span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-container container bg-color-light">
                <div class="header-row">
                    <div class="header-column header-column-logo">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="{{ route('welcome') }}">
                                    <img alt="{{ config('app.name') }}" height="48" src="{{ asset('img/demos/medical-2/logos/logo.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column header-column-nav-menu justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown-secondary">
                                                <a class="nav-link {!! Route::currentRouteName() == 'welcome' ? 'active' : '' !!}" href="{{ route('welcome') }}">
                                                    Início
                                                </a>
                                            </li>
                                            <li class="dropdown-secondary">
                                                <a class="nav-link {!! Route::currentRouteName() == 'about-us' ? 'active' : '' !!}" href="{{ route('about-us') }}">
                                                    Sobre Nós
                                                </a>
                                            </li>
                                            <li class="dropdown-secondary">
                                                <a class="nav-link {!! Route::currentRouteName() == 'how-it-works' ? 'active' : '' !!}" href="{{ route('how-it-works') }}">
                                                    Como funciona?
                                                </a>
                                            </li>
                                            <li class="dropdown-secondary">
                                                <a class="nav-link {!! Route::currentRouteName() == 'contact' ? 'active' : '' !!}" href="{{ route('contact') }}">
                                                    Contato
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</nav>
