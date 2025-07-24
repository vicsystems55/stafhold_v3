@extends('layouts.base')

@section('content')
    <!-- start page title -->
    <section
        class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0 cover-background background-position-center-top"
        style="background-image: url({{ asset('images/who-we-are.jpg') }})">
        <div class="opacity-extra-medium bg-gradient-black-green"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-xl-6 col-lg-7 col-sm-8 position-relative text-center page-title-extra-small"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>

                    <div>
                        <h1 class="text-uppercase mb-15px alt-font text-white opacity-6 fw-500 ls-2px"
                            data-fancy-text='{
                            "opacity": [0, 1],
                            "translateY": [50, 0],
                            "filter": ["blur(20px)", "blur(0px)"],
                            "string": ["About Stafhold Group"],
                            "duration": 400,
                            "delay": 0,
                            "speed": 50,
                            "easing": "easeOutQuad"
                        }'>
                        </h1>
                    </div>

                    <h2 class="m-auto text-white alt-font text-shadow-double-large fw-700 w-120 xl-w-100"
                        data-fancy-text='{
                        "opacity": [0, 1],
                        "translateY": [50, 0],
                        "filter": ["blur(20px)", "blur(0px)"],
                        "string": ["Delivering Quality."],
                        "duration": 400,
                        "delay": 0,
                        "speed": 50,
                        "easing": "easeOutQuad"
                    }'>
                    </h2>
                </div>

                <div class="down-section text-center"
                    data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <a href="#down-section" class="section-link">
                        <div class="text-white">
                            <i class="line-icon-Down icon-medium"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->


    <!-- start section -->
    <section id="down-section" class="background-position-center-top sm-background-image-none"
        style="background-image: url('{{ asset('images/vertical-line-bg.svg') }}')">
        <div class="container">
            <div class="row align-items-center justify-content-center mb-8 xs-mb-50px">
                <div class="col-lg-6 col-md-10 position-relative md-mb-50px sm-mb-30px"
                    data-anime='{ "effect": "slide", "direction": "tb", "color": "#252840", "duration": 1000, "delay": 0 }'>
                    <img class="w-100 border-radius-5px" src="{{ asset('images/demo-startup-who-we-are-01.jpg') }}"
                        alt="Stafhold Care - About Us">
                </div>
                <div class="col-xl-4 offset-lg-1 col-lg-5 col-md-10 text-center text-lg-start"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="alt-font text-uppercase fw-600 mb-15px d-inline-block ls-1px">About us</span>
                    <h3 class="alt-font fw-600 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true"
                        data-animation-delay="1500">
                        Driving growth in <span class="text-highlight fw-800">healthcare & logistics<span
                                class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span>
                    </h3>
                    <p class="mb-35px sm-mb-25px">
                        At Stafhold Care, we specialize in delivering compliant, client-focused solutions in healthcare,
                        logistics, and recruitment. Our mission is to connect trained professionals with industries that
                        matter most.
                    </p>
                    <a href="{{ url('/services') }}"
                        class="btn btn-large btn-gradient-emerald-blue-emerald-green btn-hover-animation-switch btn-round-edge btn-box-shadow">
                        <span>
                            <span class="btn-text">Our Services</span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Stats -->
            <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 justify-content-center text-center"
                data-anime='{"el": "childs", "opacity": [0,1], "translateX": [50, 0], "duration": 800, "delay":300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col last-paragraph-no-margin sm-mb-40px">
                    <h2 class="alt-font fw-900 text-dark-gray m-0">68K+</h2>
                    <p>Happy Clients Served</p>
                </div>
                <div class="col last-paragraph-no-margin sm-mb-40px">
                    <h2 class="alt-font fw-900 text-dark-gray m-0">120</h2>
                    <p>Certified Professionals</p>
                </div>
                <div class="col last-paragraph-no-margin xs-mb-40px">
                    <h2 class="alt-font fw-900 text-dark-gray m-0">40+</h2>
                    <p>Professionals Trained</p>
                </div>
                <div class="col last-paragraph-no-margin">
                    <h2 class="alt-font fw-900 text-dark-gray m-0">30+</h2>
                    <p>Industries Served</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="cover-background" style="background-image: url('{{ asset('images/demo-startup-who-we-are-bg.jpg') }}')">
        <div class="container">
            <!-- Section Heading -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px">Why Stafhold Care?</span>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px shadow-none" data-shadow-animation="true"
                        data-animation-delay="1000">What <span class="text-highlight fw-800">sets us apart<span
                                class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span>
                        from others?</h3>
                </div>
            </div>

            <!-- Feature Boxes -->
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center"
                data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                <!-- Support -->
                <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                    <div
                        class="feature-box bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover justify-content-start border-radius-5px overflow-hidden pt-18 pb-18 ps-14 pe-14 lg-p-12 h-100">
                        <div class="feature-box-icon">
                            <i
                                class="bi bi-chat-quote icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-18">Reliable Support</span>
                            <p>We offer 24/7 responsive support, ensuring our clients and staff always feel heard and
                                guided.</p>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>

                <!-- Compliance -->
                <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                    <div
                        class="feature-box bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover justify-content-start border-radius-5px overflow-hidden pt-18 pb-18 ps-14 pe-14 lg-p-12 h-100">
                        <div class="feature-box-icon">
                            <i
                                class="bi bi-shield-check icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-18">NHS-Compliant</span>
                            <p>We strictly adhere to NHS and industry regulations, maintaining the highest professional
                                standards.</p>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>

                <!-- Expertise -->
                <div class="col icon-with-text-style-04 transition-inner-all xs-mb-30px">
                    <div
                        class="feature-box bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover justify-content-start border-radius-5px overflow-hidden pt-18 pb-18 ps-14 pe-14 lg-p-12 h-100">
                        <div class="feature-box-icon">
                            <i
                                class="bi bi-person-check icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-18">Trained
                                Professionals</span>
                            <p>We deploy highly skilled, certified professionals trained for both clinical and non-clinical
                                roles.</p>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>

                <!-- Flexibility -->
                <div class="col icon-with-text-style-04 transition-inner-all">
                    <div
                        class="feature-box bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover justify-content-start border-radius-5px overflow-hidden pt-18 pb-18 ps-14 pe-14 lg-p-12 h-100">
                        <div class="feature-box-icon">
                            <i
                                class="bi bi-arrow-repeat icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-18">Flexible
                                Solutions</span>
                            <p>We offer scalable staffing and support services tailored to your organization’s unique needs.
                            </p>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
            </div>

            <!-- Trust CTA -->
            <div class="row mt-5 sm-mt-30px"
                data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-12 text-center">
                    <div
                        class="d-inline-block bg-dark-gray fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-10px">
                        Proven Track Record
                    </div>
                    <div class="d-inline-block align-middle">
                        <span class="fs-24 alt-font text-dark-gray d-block fw-600 ls-minus-1px mb-0">
                            Join 10,000+ clients who trust Stafhold Care to deliver results.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="background-position-center-top sm-background-image-none"
        style="background-image: url('images/vertical-line-bg.svg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-10 text-center text-lg-start"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="swiper slider-one-slide md-mb-50px sm-mb-40px text-slider-style-01"
                        data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                        <div class="swiper-wrapper mb-30px">
                            <!-- Mission Slide -->
                            <div class="swiper-slide">
                                <div class="alt-font text-uppercase text-base-color fw-600 mb-15px d-inline-block ls-1px">
                                    Our Mission
                                </div>
                                <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">
                                    Compassionate care. Trusted professionals.
                                </h3>
                                <span class="d-inline-block w-95 md-w-100">
                                    Our mission is to improve lives through tailored healthcare, efficient logistics, and
                                    reliable staffing solutions—empowering clients and professionals every step of the way.
                                </span>
                            </div>

                            <!-- Vision Slide -->
                            <div class="swiper-slide">
                                <div class="alt-font text-uppercase text-base-color fw-600 mb-15px d-inline-block ls-1px">
                                    Our Vision
                                </div>
                                <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">
                                    Shaping the future of care and workforce solutions.
                                </h3>
                                <span class="d-inline-block w-95 md-w-100">
                                    We envision a world where top-tier support services meet human-centered care—seamlessly
                                    integrating innovation into daily operations for better outcomes.
                                </span>
                            </div>

                            <!-- Core Values Slide -->
                            <div class="swiper-slide">
                                <div class="alt-font text-uppercase text-base-color fw-600 mb-15px d-inline-block ls-1px">
                                    Core Values
                                </div>
                                <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">
                                    Integrity. Excellence. Empathy.
                                </h3>
                                <span class="d-inline-block w-95 md-w-100">
                                    We are driven by values that prioritize people, ensure compliance, and deliver
                                    outstanding results in every interaction, from care provision to workforce management.
                                </span>
                            </div>

                            <!-- Healthcare Services Slide -->
                            <div class="swiper-slide">
                                <div class="alt-font text-uppercase text-base-color fw-600 mb-15px d-inline-block ls-1px">
                                    Healthcare Support
                                </div>
                                <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">
                                    Compassionate healthcare, delivered with dignity.
                                </h3>
                                <span class="d-inline-block w-95 md-w-100">
                                    From care homes to private support, we connect patients and organizations with dedicated
                                    healthcare professionals committed to quality and compassion.
                                </span>
                            </div>

                            <!-- Recruitment Services Slide -->
                            <div class="swiper-slide">
                                <div class="alt-font text-uppercase text-base-color fw-600 mb-15px d-inline-block ls-1px">
                                    Recruitment & Staffing
                                </div>
                                <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">
                                    The right talent. The right time.
                                </h3>
                                <span class="d-inline-block w-95 md-w-100">
                                    We provide skilled, vetted professionals across various sectors—filling critical roles
                                    quickly, reliably, and efficiently.
                                </span>
                            </div>

                            <!-- Logistics Slide -->
                            <div class="swiper-slide">
                                <div class="alt-font text-uppercase text-base-color fw-600 mb-15px d-inline-block ls-1px">
                                    Logistics
                                </div>
                                <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">
                                    Smart logistics to move your world forward.
                                </h3>
                                <span class="d-inline-block w-95 md-w-100">
                                    Our growing logistics arm focuses on dependable, streamlined transport
                                    solutions—supporting both people and businesses across the UK.
                                </span>
                            </div>

                            <!-- Home Care Slide -->
                            <div class="swiper-slide">
                                <div class="alt-font text-uppercase text-base-color fw-600 mb-15px d-inline-block ls-1px">
                                    Home Care
                                </div>
                                <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">
                                    Care at home, where comfort lives.
                                </h3>
                                <span class="d-inline-block w-95 md-w-100">
                                    We bring personalized care services into the home—ensuring safety, independence, and
                                    dignity for clients and peace of mind for their families.
                                </span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <!-- start slider navigation -->
                            <div
                                class="slider-one-slide-prev-1 text-dark-gray swiper-button-prev slider-navigation-style-04 border border-1 border-color-extra-medium-gray bg-white">
                                <i class="fa-solid fa-arrow-left"></i>
                            </div>
                            <div
                                class="slider-one-slide-next-1 text-dark-gray swiper-button-next slider-navigation-style-04 border border-1 border-color-extra-medium-gray bg-white">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 offset-xl-1 position-relative text-end md-mb-6 sm-mb-10 xs-mb-12">
                    <!-- Main Image -->
                    <div class="text-end w-80 md-w-75 ms-auto" data-animation-delay="100" data-shadow-animation="true"
                        data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img src="{{ asset('images/about2b.jpg') }}" alt="Team Working"
                            class="border-radius-5px">
                    </div>

                    <!-- Overlapping Image -->
                    <div class="w-60 md-w-50 xs-w-55 overflow-hidden position-absolute left-15px bottom-minus-50px"
                        data-shadow-animation="true" data-animation-delay="200"
                        data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
                        <img src="{{ asset('images/about2a.jpg') }}" alt="Collaboration"
                            class="border-radius-5px">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end section -->
    @include('components.clients')
    <!-- start section -->
    <section class="background-position-center-top pt-10 sm-background-image-none"
        style="background-image: url('{{ asset('images/vertical-line-bg.svg') }}')">
        <div class="container">
            <!-- Header -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-7 text-center"
                    data-anime='{"el":"childs","translateY":[50,0],"opacity":[0,1],"duration":600,"delay":0,"staggervalue":300,"easing":"easeOutQuad"}'>
                    <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px">Core people</span>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px shadow-none" data-shadow-animation="true"
                        data-animation-delay="1000">
                        Expert <span class="text-highlight fw-800">consultants
                            <span
                                class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span>
                        </span>
                    </h3>
                </div>
            </div>

            <!-- Team Grid -->
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center"
                data-anime='{"el":"childs","translateY":[15,0],"translateX":[-15,0],"opacity":[0,1],"duration":800,"delay":0,"staggervalue":300,"easing":"easeOutQuad"}'>

                <!-- Example cards -->
                <x-team-card image="images/demo-startup-who-we-are-team-01.jpg" name="Jeremy Dupont" role="Founder"
                    :socials="[
                        'facebook-f' => 'https://facebook.com/',
                        'instagram' => 'https://instagram.com/',
                        'twitter' => 'https://twitter.com/',
                    ]" />

                <x-team-card image="images/victor.jpg" name="Victor Asuquo" role="CTO"
                    :socials="[
                        'facebook-f' => 'https://facebook.com/',
                        'instagram' => 'https://instagram.com/',
                        'twitter' => 'https://twitter.com/',
                    ]" />

                <x-team-card image="images/toyin.jpg" name="Emmanuel Oluwatoyin" role="Social Media Manager"
                    :socials="[
                        'facebook-f' => 'https://facebook.com/',
                        'instagram' => 'https://instagram.com/',
                        'twitter' => 'https://twitter.com/',
                    ]" />

                <x-team-card image="images/demo-startup-who-we-are-team-04.jpg" name="John Parker" role="Consultant"
                    :socials="[
                        'facebook-f' => 'https://facebook.com/',
                        'instagram' => 'https://instagram.com/',
                        'twitter' => 'https://twitter.com/',
                    ]" />
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
