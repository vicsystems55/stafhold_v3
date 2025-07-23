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
                        <a href="#" class="search-form-icon header-search-form" aria-label="search">
                            <i class="feather icon-feather-search"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
        <!-- start push popup -->
        <div class="push-menu push-menu-style-2 ps-50px pe-50px pt-4 pb-4 bg-white">
            <div class="left-circle bg-gradient-emerald-blue-emerald-green"></div>
            <span class="close-menu text-white bg-dark-gray"><i class="fa-solid fa-xmark"></i></span>
            <div class="push-menu-wrapper" data-scroll-options='{ "theme": "dark" }'>
                <div class="push-menu-header pt-10 pb-30 mb-30 d-block">
                    <h4 class="alt-font fw-500 text-white lh-42">Scalable business for <span
                            class="text-decoration-line-bottom-medium fw-700">startups</span></h4>
                </div>
                <div class="push-menu-address pt-30 lg-pt-10">
                    <div class="icon-with-text-style-01 mb-15px">
                        <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                            <div class="feature-box-icon me-15px">
                                <i class="feather icon-feather-map-pin text-dark-gray lh-inherit"></i>
                            </div>
                            <div class="feature-box-content">
                                <p class="w-90 lh-26">401 Broadway, 24th Floor New York, NY 10013.</p>
                            </div>
                        </div>
                    </div>
                    <div class="icon-with-text-style-01 mb-15px">
                        <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                            <div class="feature-box-icon me-15px">
                                <i class="feather icon-feather-mail text-dark-gray lh-inherit"></i>
                            </div>
                            <div class="feature-box-content">
                                <a href="cdn-cgi/l/email-protection.html#e78e898188a79e88929583888a868e89c984888a"><span
                                        class="__cf_email__"
                                        data-cfemail="4b22252d240b32243e392f24262a222565282426">[email&#160;protected]</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="icon-with-text-style-01">
                        <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                            <div class="feature-box-icon me-15px">
                                <i class="feather icon-feather-phone-call text-dark-gray lh-inherit"></i>
                            </div>
                            <div class="feature-box-content">
                                <a href="tel:1800222000">1-800-222-000</a>
                            </div>
                        </div>
                    </div>
                    <div class="separator-line-1px w-100 bg-extra-medium-gray d-block mt-30px mb-30px"></div>
                </div>
                <div class="push-menu-social last-paragraph-no-margin">
                    <div class="elements-social social-text-style-01">
                        <ul class="medium-icon dark fw-500">
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank">Fb.</a></li>
                            <li><a class="linkedin" href="http://www.linkedin.com/" target="_blank">In.</a></li>
                            <li><a class="twitter" href="https://www.twitter.com/" target="_blank">Tw.</a></li>
                            <li><a class="dribbble" href="http://www.dribbble.com/" target="_blank">Dr.</a></li>
                        </ul>
                    </div>
                    <p class="fs-14">&COPY; Copyright 2024 <a href="index.html" target="_blank">Crafto</a></p>
                </div>
            </div>
        </div>
        <!-- end push popup -->
    </header>
    <!-- end header -->

