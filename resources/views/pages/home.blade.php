@extends('layouts.app')

@section('content')
    <!-- start section -->
    <section class="p-0 bg-dark-gray">
        <div class="swiper lg-no-parallax full-screen md-h-600px sm-h-500px swiper-light-pagination ipad-top-space-margin magic-cursor drag-cursor"
            data-slider-options='{ "slidesPerView": 1, "loop": true, "parallax": true, "speed": 1200, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
            <div class="swiper-wrapper">
                <!-- Slide 1: Excellence in Healthcare Staffing -->
                <div class="swiper-slide overflow-hidden">
                    <div class="cover-background position-absolute top-0 start-0 w-100 h-100"
                        style="background-image:url('{{ asset('images/slider1.png') }}');" data-swiper-parallax="1000">
                        <div class="opacity-light bg-gradient-black-green"></div>
                        <div class="container h-100" data-swiper-parallax="-300">
                            <div class="row align-items-center justify-content-center h-100 text-center">
                                <div class="col-xl-7 col-lg-9 col-md-10 position-relative text-white">
                                    <span class="fw-300 fs-22 opacity-7 mb-15px d-inline-block">
                                        Compassionate care. Reliable professionals.
                                    </span>
                                    <span
                                        class="opacity-7 fs-80 xs-fs-60 alt-font fw-700 text-shadow-extra-large ls-minus-2px mb-45px d-inline-block swiper-parallax-fancy-text"
                                        data-fancy-text='{ "effect": "rotate", "string": ["Trusted Healthcare Staffing Solutions"] }'></span>
                                    <div>
                                        <a href="{{ route('who-we-are') }}"
                                            class="btn btn-large btn-gradient-emerald-blue-emerald-green btn-hover-animation-switch btn-round-edge btn-box-shadow me-20px xs-m-10px">
                                            <span>
                                                <span class="btn-text">About Us</span>
                                                <span class="btn-icon"><i
                                                        class="feather icon-feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i
                                                        class="feather icon-feather-arrow-right"></i></span>
                                            </span>
                                        </a>
                                        <a href="{{ route('contact') }}"
                                            class="btn btn-large btn-transparent-white-light border-1 btn-hover-animation btn-box-shadow btn-round-edge xs-m-10px">
                                            <span>
                                                <span class="btn-text">Get in Touch</span>
                                                <span class="btn-icon"><i
                                                        class="feather icon-feather-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2: Innovative Decontamination Services -->
                <div class="swiper-slide overflow-hidden">
                    <div class="cover-background position-absolute top-0 start-0 w-100 h-100"
                        style="background-image:url('{{ asset('images/slider-decontamination.jpg') }}');"
                        data-swiper-parallax="1000">
                        <div class="opacity-light bg-gradient-black-green"></div>
                        <div class="container h-100" data-swiper-parallax="-300">
                            <div class="row align-items-center justify-content-center h-100 text-center">
                                <div class="col-xl-7 col-lg-9 col-md-10 position-relative text-white">
                                    <span class="fw-300 fs-22 opacity-7 mb-15px d-inline-block">
                                        Clean. Compliant. Confident.
                                    </span>
                                    <span
                                        class="opacity-7 fs-80 xs-fs-60 alt-font fw-700 text-shadow-extra-large ls-minus-2px mb-45px d-inline-block swiper-parallax-fancy-text"
                                        data-fancy-text='{ "effect": "rotate", "string": ["Decontamination Services You Can Trust"] }'></span>
                                    <div>
                                        <a href="{{ route('services') }}"
                                            class="btn btn-large btn-gradient-emerald-blue-emerald-green btn-hover-animation-switch btn-round-edge btn-box-shadow me-20px xs-m-10px">
                                            <span>
                                                <span class="btn-text">Explore Services</span>
                                                <span class="btn-icon"><i
                                                        class="feather icon-feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i
                                                        class="feather icon-feather-arrow-right"></i></span>
                                            </span>
                                        </a>
                                        <a href="{{ route('contact') }}"
                                            class="btn btn-large btn-transparent-white-light border-1 btn-hover-animation btn-box-shadow btn-round-edge xs-m-10px">
                                            <span>
                                                <span class="btn-text">Get a Quote</span>
                                                <span class="btn-icon"><i
                                                        class="feather icon-feather-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3: Logistics & Cargo -->
                <div class="swiper-slide overflow-hidden">
                    <div class="cover-background position-absolute top-0 start-0 w-100 h-100"
                        style="background-image:url('{{ asset('images/slider-cargo.jpg') }}');" data-swiper-parallax="1000">
                        <div class="opacity-light bg-gradient-black-green"></div>
                        <div class="container h-100" data-swiper-parallax="-300">
                            <div class="row align-items-center justify-content-center h-100 text-center">
                                <div class="col-xl-7 col-lg-9 col-md-10 position-relative text-white">
                                    <span class="fw-300 fs-22 opacity-7 mb-15px d-inline-block">
                                        Safe. Swift. Secure.
                                    </span>
                                    <span
                                        class="opacity-7 fs-80 xs-fs-60 alt-font fw-700 text-shadow-extra-large ls-minus-2px mb-45px d-inline-block swiper-parallax-fancy-text"
                                        data-fancy-text='{ "effect": "rotate", "string": ["Smart Cargo & Logistics Services"] }'></span>
                                    <div>
                                        <a href="{{ route('services') }}"
                                            class="btn btn-large btn-gradient-emerald-blue-emerald-green btn-hover-animation-switch btn-round-edge btn-box-shadow me-20px xs-m-10px">
                                            <span>
                                                <span class="btn-text">View Logistics</span>
                                                <span class="btn-icon"><i
                                                        class="feather icon-feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i
                                                        class="feather icon-feather-arrow-right"></i></span>
                                            </span>
                                        </a>
                                        <a href="{{ route('contact') }}"
                                            class="btn btn-large btn-transparent-white-light border-1 btn-hover-animation btn-box-shadow btn-round-edge xs-m-10px">
                                            <span>
                                                <span class="btn-text">Let’s Talk</span>
                                                <span class="btn-icon"><i
                                                        class="feather icon-feather-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- start slider pagination -->
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
            <!-- end slider pagination -->
            <!-- start slider navigation -->
            <!--<div class="slider-one-slide-prev-1 icon-extra-large text-white swiper-button-prev slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutLeft"></i></div>
                                <div class="slider-one-slide-next-1 icon-extra-large text-white swiper-button-next slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutRight"></i></div>-->
            <!-- end slider navigation -->
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="background-position-center-top pb-2 sm-pb-50px position-relative z-index-1 sm-background-image-none"
        style="background-image: url('{{ asset('images/vertical-line-bg.svg') }}')">
        <div class="container">
            <div class="row align-items-center">
                <!-- Statistics Card -->
                <div class="col-lg-6 md-mb-50px"
                    data-anime='{ "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="d-flex flex-column box-shadow-quadruple-large border-radius-8px overflow-hidden"
                        data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <div class="row row-cols-1 row-cols-sm-2 justify-content-center m-0">
                            <div
                                class="col p-10 lg-p-8 text-center border-bottom border-end xs-border-end-0 border-color-extra-medium-gray bg-white last-paragraph-no-margin">
                                <h2 class="fw-500 ls-minus-1px text-dark-gray m-0">68K+</h2>
                                <p>Happy Clients Served</p>
                            </div>
                            <div
                                class="col p-10 lg-p-8 text-center border-bottom border-color-extra-medium-gray bg-white last-paragraph-no-margin">
                                <h2 class="fw-500 ls-minus-1px text-dark-gray m-0">120</h2>
                                <p>Certified Professionals</p>
                            </div>
                            <div
                                class="col p-10 lg-p-8 text-center border-end xs-border-end-0 xs-border-bottom border-color-extra-medium-gray bg-white last-paragraph-no-margin">
                                <h2 class="fw-500 ls-minus-1px text-dark-gray m-0">40+</h2>
                                <p>Professionals Trained</p>
                            </div>
                            <div class="col p-10 lg-p-8 text-center bg-white last-paragraph-no-margin">
                                <h2 class="fw-500 ls-minus-1px text-dark-gray m-0">30+</h2>
                                <p>Industries Served</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Textual Content -->
                <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start"
                    data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay":200, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <div class="row justify-content-center justify-content-lg-start">
                        <div>
                            <h3 class="alt-font fw-600 text-dark-gray ls-minus-1px shadow-none"
                                data-shadow-animation="true" data-animation-delay="700">
                                Empowering Health, Home & Logistics <br>
                                <span class="text-highlight fw-800">With Purpose<span
                                        class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span>
                            </h3>
                        </div>

                        <div class="col-sm-6 last-paragraph-no-margin xs-mb-20px">
                            <span class="alt-font fw-700 fs-18 text-dark-gray mb-5px d-inline-block">NHS Workforce
                                Training</span>
                            <p class="w-90 xl-w-100 md-w-95 mx-auto mx-lg-0">Hands-on sterile technician training with
                                career prospects in NHS and private healthcare.</p>
                        </div>

                        <div class="col-sm-6 last-paragraph-no-margin">
                            <span class="alt-font fw-700 fs-18 text-dark-gray mb-5px d-inline-block">Trusted Care &
                                Logistics</span>
                            <p class="w-90 xl-w-100 md-w-95 mx-auto mx-lg-0">Domiciliary care & cargo delivery — safely,
                                reliably, and professionally.</p>
                        </div>

                        <div class="col-md-11">
                            <div
                                class="pt-15px pb-15px ps-30px pe-30px xs-p-15px bg-white border border-color-extra-medium-gray border-radius-6px mt-35px icon-with-text-style-08 text-center text-lg-start">
                                <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                                    <div class="feature-box-icon me-10px">
                                        <i
                                            class="lni lni-heart icon-very-medium text-gradient-emerald-blue-emerald-green align-middle"></i>
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="fs-18 fw-500 text-dark-gray d-block">We care deeply about lives and
                                            logistics.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="pt-0 background-position-center-top sm-background-image-none"
        style="background-image: url('{{ asset('images/vertical-line-bg.svg') }}')">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px">What we offer</span>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px shadow-none" data-shadow-animation="true"
                        data-animation-delay="1000">Explore Our <span class="text-highlight fw-800">Services<span
                                class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span>
                    </h3>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>

                <!-- Service Card 1 -->
                @include('components.service-card', [
                    'image' => 'images/services/decontamination.jpg',
                    'tag' => 'Healthcare',
                    'title' => 'Decontamination Services',
                    'description' => 'Ensuring sterile environments across hospitals and laboratories.',
                ])

                <!-- Service Card 2 -->
                @include('components.service-card', [
                    'image' => 'images/services/training.jpg',
                    'tag' => 'Training',
                    'title' => 'Sterile Technician Training',
                    'description' => 'Hands-on NHS-oriented crash courses and workshops.',
                ])

                <!-- Service Card 3 -->
                @include('components.service-card', [
                    'image' => 'images/services/consultancy.jpg',
                    'tag' => 'Consultancy',
                    'title' => 'Healthcare Consultancy',
                    'description' =>
                        'Personalized training and compliance guidance for professionals and institutions.',
                ])

                <!-- Service Card 4 -->
                @include('components.service-card', [
                    'image' => 'images/services/validation.jpg',
                    'tag' => 'Validation',
                    'title' => 'Equipment Validation',
                    'description' => 'We certify, authorize, and validate sterilization and healthcare equipment.',
                ])

                <!-- Service Card 5 -->
                @include('components.service-card', [
                    'image' => 'images/services/cargo.jpg',
                    'tag' => 'Logistics',
                    'title' => 'Cargo Services',
                    'description' => 'Domestic and international logistics solutions tailored for general goods.',
                ])

                <!-- Service Card 6 -->
                @include('components.service-card', [
                    'image' => 'images/services/homecare.jpg',
                    'tag' => 'Care',
                    'title' => 'Home Care Services',
                    'description' =>
                        'Supportive and compassionate domiciliary care for the elderly and vulnerable.',
                ])

            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start section -->
    <section class="bg-very-light-gray">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center md-mb-50px">
                    <figure class="position-relative m-0">
                        <div class="position-relative d-inline-block"
                            data-anime='{ "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <img class="w-90 border-radius-5px animation-float"
                                src="{{ asset('images/demo-startup-06.jpg') }}" alt="Startup Image">
                        </div>

                        <figcaption
                            class="position-absolute bg-white box-shadow-quadruple-large border-radius-5px bottom-50px xs-bottom-35px left-minus-30px md-left-minus-0px ps-50px pe-50px pt-35px pb-35px xs-p-20px w-320px xs-w-250px text-center last-paragraph-no-margin"
                            data-anime='{ "translateY": [50, 0], "scale": [0.8,1], "opacity": [0,1], "duration": 800, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="icon-with-text-style-06">
                                <div class="bg-white feature-box feature-box-left-icon-middle">
                                    <div class="feature-box-icon me-15px">
                                        <i
                                            class="line-icon-Thumb icon-double-large text-gradient-emerald-blue-emerald-green"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <div class="alt-font fw-600 text-dark-gray lh-26">We provide quality services to
                                            customers.</div>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-8">
                    <h3 class="fw-600 mb-60px md-mb-40px mt-20px text-dark-gray alt-font ls-minus-2px"
                        data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        Committed to <span class="fw-800">Standards & NHS Excellence</span>
                    </h3>

                    <div class="row row-cols-1"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>

                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div
                                        class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-16 bg-gradient-emerald-blue-emerald-green fw-400">
                                        <span class="number text-white">01</span>
                                    </div>
                                    <span class="progress-step-separator bg-extra-medium-gray"></span>
                                </div>
                                <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18 alt-font">Strict NHS
                                        Compliance</span>
                                    <p class="w-80 lg-w-90 sm-w-100">
                                        We adhere to NHS-approved protocols for sterilization, infection control, and
                                        decontamination training.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div
                                        class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-16 bg-gradient-emerald-blue-emerald-green fw-400">
                                        <span class="number text-white">02</span>
                                    </div>
                                    <span class="progress-step-separator bg-extra-medium-gray"></span>
                                </div>
                                <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18 alt-font">Certified Training
                                        Programs</span>
                                    <p class="w-80 lg-w-90 sm-w-100">
                                        Our NHS-aligned training prepares candidates for roles as sterile technicians with
                                        hands-on experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div
                                        class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-16 bg-gradient-emerald-blue-emerald-green fw-400">
                                        <span class="number text-white">03</span>
                                    </div>
                                </div>
                                <div class="process-content ps-35px last-paragraph-no-margin">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18 alt-font">Home & Health Care
                                        Standards</span>
                                    <p class="w-80 lg-w-90 sm-w-100">
                                        We deliver regulated home care and clinical support with full compliance to UK CQC
                                        and NHS frameworks.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end section -->

@include('components.expertise')

    @include('components.clients')

    <!-- start section -->
    <section class="background-position-center-top position-relative overflow-hidden sm-background-image-none"
        style="background-image: url('images/vertical-line-bg.svg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-10 md-mb-50px">
                    <div class="row row-cols-1 row-cols-lg-1">
                        <!-- Testimonial 1 -->
                        <div class="col mb-35px ms-35px lg-ms-0"
                            data-anime='{ "translateX": [25, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 500, "easing": "easeOutQuad" }'>
                            <div class="d-flex flex-column flex-sm-row align-items-center testimonials testimonials-style-07 border-radius-6px ps-45px pe-45px pt-35px pb-35px lg-p-30px bg-white box-shadow-quadruple-large text-center text-sm-start last-paragraph-no-margin"
                                data-bottom-top="transform: translate3d(80px, 0px, 0px);"
                                data-top-bottom="transform: translate3d(-80px, 0px, 0px);">
                                <div class="testimonials-author w-120px me-25px xs-me-0 xs-mb-20px flex-shrink-0">
                                    <img class="rounded-circle me-15px xs-me-0" src="images/avtar-24.jpg" alt="">
                                </div>
                                <div class="testimonials-content">
                                    <p>"Their decontamination service exceeded my expectations, providing a safe and clean
                                        environment for our patients."</p>
                                    <span class="fs-18 alt-font text-dark-gray fw-700 d-block mt-5px">Aleesha Brown, NHS
                                        Facility Manager</span>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="col"
                            data-anime='{ "translateX": [-25, 0], "opacity": [0,1], "duration": 800, "delay": 300, "staggervalue": 500, "easing": "easeOutQuad" }'>
                            <div class="d-flex flex-column flex-sm-row align-items-center testimonials testimonials-style-07 border-radius-6px ps-45px pe-45px pt-35px pb-35px lg-p-30px bg-white box-shadow-quadruple-large text-center text-sm-start last-paragraph-no-margin"
                                data-bottom-top="transform: translate3d(-80px, 0px, 0px);"
                                data-top-bottom="transform: translate3d(80px, 0px, 0px);">
                                <div class="testimonials-author w-120px me-25px xs-me-0 xs-mb-20px flex-shrink-0">
                                    <img class="rounded-circle me-15px xs-me-0" src="images/avtar-25.jpg" alt="">
                                </div>
                                <div class="testimonials-content">
                                    <p>"I was impressed by their professionalism and attention to detail. Their team is
                                        NHS-trained and always responsive."</p>
                                    <span class="fs-18 alt-font text-dark-gray fw-700 d-block mt-5px">Dr. Kareem Yusuf,
                                        Biomedical Scientist</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Callout -->
                <div class="col-xl-5 col-lg-6 offset-xl-1 col-md-10 text-center text-lg-start"
                    data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <h3 class="alt-font fw-600 ls-minus-2px text-dark-gray">Our clients speak to our <span
                            class="fw-800">reliability & excellence.</span></h3>
                    <p class="d-inline-block">From NHS-backed sterile service training to care and cargo services, Stafhold
                        is trusted across industries to deliver with integrity, professionalism, and high standards.</p>
                    <a href="/contact-us"
                        class="btn btn-medium btn-gradient-emerald-blue-emerald-green btn-hover-animation-switch btn-round-edge btn-box-shadow mt-10px">
                        <span>
                            <span class="btn-text">Partner with us</span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Bottom Call-to-Action -->
            <div class="row align-items-center justify-content-center mt-7 sm-mt-12">
                <div class="col-lg-12 col-md-10 text-center"
                    data-anime='{ "translateY": [30, 0], "opacity": [0,1], "delay": 600, "staggervalue": 250, "easing": "easeOutQuad" }'>
                    <h4 class="alt-font text-dark-gray d-block fw-600 ls-minus-1px shadow-none mb-0"
                        data-shadow-animation="true" data-animation-delay="600">
                        Join <span class="text-highlight fw-800 ls-minus-3px">thousands of professionals</span>
                        relying on Stafhold’s industry-aligned services.
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="background-position-center-top position-relative overflow-hidden py-0 sm-background-image-none"
        style="background-image: url('images/vertical-line-bg.svg')">
        <div class="skrollr-parallax mx-auto" data-bottom-top="width: 70%" data-center-top="width: 100%;"
            data-parallax-background-ratio="0.5" style="background-image: url('images/collage.jpg')">
            <div class="opacity-extra-medium bg-dark-gray"></div>
            <div class="container">
                <div class="row justify-content-center align-items-center one-third-screen">
                    <div
                        class="col-xl-6 col-lg-8 text-center position-relative last-paragraph-no-margin parallax-scrolling-style-2">
                        <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU" aria-label="popup-video"
                            class="position-relative d-inline-block text-center bg-gradient-emerald-blue-emerald-green rounded-circle video-icon-box video-icon-large popup-youtube mb-9 md-mb-6">
                            <span>
                                <span class="video-icon">
                                    <i class="fa-solid fa-play text-white"></i>
                                    <span class="video-icon-sonar">
                                        <span
                                            class="video-icon-sonar-bfr bg-gradient-emerald-blue-emerald-green opacity-9"></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                        <span class="d-block fs-22 fw-300 text-white opacity-8 mb-10px">
                            From healthcare facilities to home care – we support lives
                        </span>
                        <h1 class="alt-font text-white fw-700 mb-20px ls-minus-2px text-shadow-extra-large">
                            Training. Safety. Support. Delivered by Experts.
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="background-position-center-top position-relative sm-background-image-none d-none"
        style="background-image: url('images/vertical-line-bg.svg')">
        <div class="container">
            <div class="row justify-content-center mb-1">
                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px">Stay new updated</span>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px shadow-none" data-shadow-animation="true"
                        data-animation-delay="1000">Explore the <span class="text-highlight fw-800">news<span
                                class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 px-0">
                    <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1000, "willchange": "transform", "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div
                                class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                <div class="blog-image">
                                    <a href="demo-startup-blog-single-simple.html" class="d-block"><img alt=""
                                            data-cfsrc="images/demo-startup-blog-01.jpg"
                                            style="display:none;visibility:hidden;" /><noscript><img
                                                src="images/demo-startup-blog-01.jpg" alt="" /></noscript></a>
                                    <div class="blog-categories">
                                        <a href="demo-startup-blog.html"
                                            class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-700">Agency</a>
                                    </div>
                                </div>
                                <div class="card-body p-13 md-p-11">
                                    <a href="demo-startup-blog-single-simple.html"
                                        class="card-title mb-15px alt-font fw-700 fs-18 lh-30 text-dark-gray text-dark-gray-hover d-inline-block">Build
                                        up healthy habits and strong peaceful life</a>
                                    <p>Lorem ipsum dolor consectetur adipiscing eiusmod tempor</p>
                                    <div
                                        class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                        <div class="me-auto">
                                            <span class="blog-date d-inline-block">30 August 2021</span>
                                            <div class="d-inline-block author-name">By <a href="demo-startup-blog.html"
                                                    class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-500">Den
                                                    viliamson</a></div>
                                        </div>
                                        <div class="like-count">
                                            <a href="demo-startup-blog-single-simple.html"><i
                                                    class="fa-regular fa-heart text-base-color"></i><span
                                                    class="text-dark-gray align-middle fw-500">25</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div
                                class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                <div class="blog-image">
                                    <a href="demo-startup-blog-single-simple.html" class="d-block"><img alt=""
                                            data-cfsrc="images/demo-startup-blog-02.jpg"
                                            style="display:none;visibility:hidden;" /><noscript><img
                                                src="images/demo-startup-blog-02.jpg" alt="" /></noscript></a>
                                    <div class="blog-categories">
                                        <a href="demo-startup-blog.html"
                                            class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-700">Luxurious</a>
                                    </div>
                                </div>
                                <div class="card-body p-13 md-p-11">
                                    <a href="demo-startup-blog-single-simple.html"
                                        class="card-title mb-15px alt-font fw-700 fs-18 lh-30 text-dark-gray text-dark-gray-hover d-inline-block">How
                                        to bring the season into your great marketing</a>
                                    <p>Lorem ipsum dolor consectetur adipiscing eiusmod tempor</p>
                                    <div
                                        class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                        <div class="me-auto">
                                            <span class="blog-date d-inline-block">28 August 2021</span>
                                            <div class="d-inline-block author-name">By <a href="demo-startup-blog.html"
                                                    class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-500">Hugh
                                                    macleod</a></div>
                                        </div>
                                        <div class="like-count">
                                            <a href="demo-startup-blog-single-simple.html"><i
                                                    class="fa-regular fa-heart text-base-color"></i><span
                                                    class="text-dark-gray align-middle fw-500">58</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div
                                class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                <div class="blog-image">
                                    <a href="demo-startup-blog-single-simple.html" class="d-block"><img alt=""
                                            data-cfsrc="images/demo-startup-blog-03.jpg"
                                            style="display:none;visibility:hidden;" /><noscript><img
                                                src="images/demo-startup-blog-03.jpg" alt="" /></noscript></a>
                                    <div class="blog-categories">
                                        <a href="demo-startup-blog.html"
                                            class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-700">Business</a>
                                    </div>
                                </div>
                                <div class="card-body p-13 md-p-11">
                                    <a href="demo-startup-blog-single-simple.html"
                                        class="card-title mb-15px alt-font fw-700 fs-18 lh-30 text-dark-gray text-dark-gray-hover d-inline-block">Be
                                        the strong willed one the public relationship</a>
                                    <p>Lorem ipsum dolor consectetur adipiscing eiusmod tempor</p>
                                    <div
                                        class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                        <div class="me-auto">
                                            <span class="blog-date d-inline-block">26 August 2021</span>
                                            <div class="d-inline-block author-name">By <a href="demo-startup-blog.html"
                                                    class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-500">Walton
                                                    smith</a></div>
                                        </div>
                                        <div class="like-count">
                                            <a href="demo-startup-blog-single-simple.html"><i
                                                    class="fa-regular fa-heart text-base-color"></i><span
                                                    class="text-dark-gray align-middle fw-500">75</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
