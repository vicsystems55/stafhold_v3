<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    {{-- SEO --}}
    <title>{{ $title ?? 'Stafhold Group — Healthcare, Cargo & Home Care Solutions' }}</title>
    <meta name="description"
        content="{{ $description ?? 'Leading provider of healthcare decontamination, cargo logistics, and home care services in the UK.' }}">
    <meta name="author" content="Stafhold Group">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- Open Graph --}}
    <meta property="og:title" content="{{ $title ?? 'Stafhold Group' }}">
    <meta property="og:description" content="{{ $description ?? '' }}">
    <meta property="og:image" content="{{ $seoImage ?? asset('images/default-seo.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Stafhold Group' }}">
    <meta name="twitter:description" content="{{ $description ?? '' }}">
    <meta name="twitter:image" content="{{ $seoImage ?? asset('images/default-seo.jpg') }}">

    {{-- Favicon and Icons --}}
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">

    {{-- Google Fonts Preconnect --}}
    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    {{-- CSS Stylesheets --}}
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('demos/startup/startup.css') }}" />


    {{-- Page-specific styles (optional) --}}
    @stack('styles')
</head>


<body data-mobile-nav-style="classic">
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav
            class="navbar navbar-expand-lg header-transparent bg-transparent border-bottom border-color-transparent-white-light disable-fixed">
            <div class="container-fluid">
                <!-- Logo -->
                <div class="col-auto col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="Stafhold Group" class="default-logo" />
                    </a>
                </div>

                <!-- Mobile toggle -->
                <div class="col-auto menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>

                    <!-- Navigation links -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav alt-font">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('who-we-are') }}" class="nav-link">Who We Are</a>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="{{ route('services') }}" class="nav-link">Services</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="line-icon-Money-Bag"></i>
                                            <span>Decontamination</span></a></li>
                                    <li><a href="#"><i class="line-icon-Cursor-Click2"></i> <span>Home
                                                Care</span></a></li>
                                    <li><a href="#"><i class="line-icon-Bar-Chart"></i>
                                            <span>Recruitment</span></a></li>
                                    <li><a href="#"><i class="line-icon-Environmental-3"></i>
                                            <span>Cargo</span></a></li>
                                </ul>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Icons -->
                 <div class="col-auto col-lg-2 text-end md-pe-0">
                    <div class="header-icon">
                        <div class="header-search-icon icon">
                            <a href="#" class="search-form-icon header-search-form"><i
                                    class="feather icon-feather-search"></i></a>
                            <!-- start search input -->
                            <div class="search-form-wrapper">
                                <button title="Close" type="button" class="search-close alt-font">×</button>
                                <form id="search-form" role="search" method="get" class="search-form text-left"
                                    action="/">
                                    <div class="search-form-box">
                                        <h2 class="text-dark-gray fw-700 ls-minus-1px text-center mb-4 alt-font">What
                                            are you looking for?</h2>
                                        <input class="search-input alt-font" id="search-form-input5e219ef164995"
                                            placeholder="Enter your keywords..." name="s" value="" type="text"
                                            autocomplete="off">
                                        <button type="submit" class="search-button">
                                            <i class="feather icon-feather-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end search input -->
                        </div>
                        <div class="header-push-button icon">
                            <div class="push-button">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->

        <!-- Push Menu (Optional) -->
        <div class="push-menu push-menu-style-2 ps-50px pe-50px pt-4 pb-4 bg-white">
            <span class="close-menu text-white bg-dark-gray"><i class="fa-solid fa-xmark"></i></span>
            <div class="push-menu-wrapper">
                <div class="push-menu-header pt-10 pb-30 mb-30 d-block">
                    <h4 class="alt-font fw-500 text-dark lh-42">Empowering solutions for <span
                            class="text-decoration-line-bottom-medium fw-700">care & logistics</span></h4>
                </div>
                <div class="push-menu-address pt-30 lg-pt-10">
                    <div class="mb-15px">
                        <i class="feather icon-feather-map-pin text-dark-gray"></i>
                        <p>UK Based – Nationwide Service</p>
                    </div>
                    <div class="mb-15px">
                        <i class="feather icon-feather-mail text-dark-gray"></i>
                        <a href="mailto:info@stafholdgroup.com">info@stafholdgroup.com</a>
                    </div>
                    <div>
                        <i class="feather icon-feather-phone-call text-dark-gray"></i>
                        <a href="tel:+44000000000">+44 0000 000 000</a>
                    </div>
                    <hr class="my-4 bg-extra-medium-gray" />
                </div>
                <div class="push-menu-social">
                    <ul class="social-icon-style">
                        <li><a href="https://facebook.com" target="_blank">Fb.</a></li>
                        <li><a href="https://twitter.com" target="_blank">Tw.</a></li>
                        <li><a href="https://instagram.com" target="_blank">Ig.</a></li>
                    </ul>
                    <p class="fs-14 mt-3">&copy; {{ now()->year }} <a href="{{ url('/') }}">Stafhold
                            Group</a></p>
                </div>
            </div>
        </div>
        <!-- end push popup -->
    </header>
    <!-- end header -->


    @yield('content')

    <!-- start subscription popup -->
    <div id="subscribe-popup" class="mfp-hide subscribe-popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-md-10 bg-white">
                    <div class="row position-relative box-shadow-quadruple-large">
                        <div class="col-lg-6 cover-background md-h-400px xs-h-300px"
                            style="background-image:url('images/newsletter-popup-img-01.jpg');"></div>
                        <div class="col-lg-6 newsletter-popup p-8 pt-10 pb-10 lg-p-5 md-p-6 xs-p-8 position-relative">
                            <h4 class="d-inline-block alt-font ls-minus-1px fw-700 text-dark-gray mb-15px">Subscribe to
                                the latest updates!</h4>
                            <p>Subscribe to our newsletters and get the latest business updates.</p>
                            <div class="d-inline-block w-100 newsletter-style-05 position-relative mb-20px">
                                <form action="/subscribe" class="newsletter-form form-style-01"
                                    method="post">
                                    @csrf
                                        <input class="input-medium w-100 border-radius-4px form-control required mb-15px"
                                        type="text" name="name" placeholder="Enter your name" />
                                    <input class="input-medium w-100 border-radius-4px form-control required mb-15px"
                                        type="email" name="email" placeholder="Enter your email address" />
                                    <input type="hidden" name="redirect" value="">
                                    <button type="submit"
                                        class="btn btn-medium btn-round-edge btn-dark-gray btn-box-shadow w-100 submit">Subscribe
                                        now!</button>
                                    <div
                                        class="form-results border-radius-4px mt-10px lh-normal pt-10px pb-10px ps-15px pe-15px fs-16 w-100 text-center position-absolute z-index-1 d-none">
                                    </div>
                                </form>
                            </div>
                            <label for="newsletter-off" class="fs-15"><input
                                    class="w-auto me-10px position-relative top-1px p-0" type="checkbox"
                                    id="newsletter-off" name="newsletter-off">Don't show this popup again</label>
                        </div>
                        <button title="Close (Esc)" type="button" class="mfp-close text-dark-gray"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end subscription popup -->
@include('components.footer ')


    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                    class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/vendors.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

<!-- Mirrored from craftohtml.themezaa.com/demo-startup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jul 2025 11:27:01 GMT -->

</html>
