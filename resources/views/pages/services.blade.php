@extends('layouts.base')

@section('content')
    <!-- start page title -->
    <section
        class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0 cover-background background-position-center-top"
        style="background-image: url(images/services-bg.jpg)">
        <div class="opacity-extra-medium bg-gradient-black-green"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-xl-6 col-lg-7 col-sm-8 position-relative text-center page-title-extra-small"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <div>
                        <h1 class="text-uppercase mb-15px alt-font text-white opacity-6 fw-500 ls-2px"
                            data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Our service"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'>
                        </h1>
                    </div>
                    <h2 class="m-auto text-white alt-font text-shadow-double-large fw-700 w-90 xl-w-100"
                        data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["We help clients startup business"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'>
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
    @include('components.expertise')
    <!-- start section -->
    <section class="bg-dark-gray overflow-hidden">
        <div class="container pb-5 xs-pb-8">
            <div class="row justify-content-center text-center text-lg-start">
                <div class="col-lg-6 col-md-9 col-sm-8 md-mb-4">
                    <h3 class="alt-font fw-700 text-white w-80 lg-w-100 m-0 ls-minus-1px"
                        data-anime='{ "el": "lines", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                        We provide essential services to power your success.
                    </h3>
                </div>
                <div class="col-lg-6 col-md-9 last-paragraph-no-margin">
                    <p class="w-90 lg-w-100"
                        data-anime='{ "el": "lines", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "delay": 100, "staggervalue": 250, "easing": "easeOutQuad" }'>
                        From trusted healthcare staffing to reliable logistics and professional home care, Stafhold empowers
                        your operations with people-focused, reliable solutions.
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid ps-10 pe-10 xxl-ps-5 xxl-pe-5 xl-px-0">
            <div class="row justify-content-center">
                <div class="col-12 sliding-box-style-03 sliding-box justify-content-center d-flex lg-flex-nowrap flex-wrap"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay":200, "staggervalue": 300, "easing": "easeOutQuad" }'>

                    <!-- Service 1 -->
                    <div class="sliding-box-item box-shadow-extra-large md-mb-30px">
                        <div class="sliding-box-img position-relative">
                            <img alt="Healthcare Staffing" class="w-100" src="{{ asset('images/services/training.jpg') }}">
                            <div
                                class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">Healthcare Staffing</div>
                                <span class="number fs-70 lh-70 fw-300 text-white">01</span>
                            </div>
                            <div class="overlay bg-dark-gray"></div>
                        </div>
                        <div
                            class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                            <div class="content-hover w-100">
                                <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">Quality Care Staffing
                                </div>
                                <p>Reliable and compassionate healthcare professionals.</p>
                                <a href="{{ route('contact') }}"
                                    class="btn btn-small btn-gradient-emerald-blue-emerald-green btn-round-edge mt-25px">Contact
                                    us</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="sliding-box-item box-shadow-extra-large md-mb-30px active">
                        <div class="sliding-box-img position-relative">
                            <img alt="Logistics Solutions" class="w-100" src="{{ asset('images/services/cargo.jpg') }}">
                            <div
                                class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">Logistics Solutions</div>
                                <span class="number fs-70 lh-70 fw-300 text-white">02</span>
                            </div>
                            <div class="overlay bg-dark-gray"></div>
                        </div>
                        <div
                            class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                            <div class="content-hover w-100">
                                <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">Smart Transport</div>
                                <p>Efficient courier and goods transport services.</p>
                                <a href="{{ route('contact') }}"
                                    class="btn btn-small btn-gradient-emerald-blue-emerald-green btn-round-edge mt-25px">Get
                                    in touch</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="sliding-box-item box-shadow-extra-large">
                        <div class="sliding-box-img position-relative">
                            <img alt="Home Care Support" class="w-100" src="{{ asset('images/services/homecare.jpg') }}">
                            <div
                                class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">Home Care Support</div>
                                <span class="number fs-70 lh-70 fw-300 text-white">03</span>
                            </div>
                            <div class="overlay bg-dark-gray"></div>
                        </div>
                        <div
                            class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                            <div class="content-hover w-100">
                                <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">Dignified Home Support
                                </div>
                                <p>Professional in-home support for daily care, mobility and more.</p>
                                <a href="{{ route('contact') }}"
                                    class="btn btn-small btn-gradient-emerald-blue-emerald-green btn-round-edge mt-25px">Book
                                    now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <!-- start section -->
    <section class="background-position-center-top sm-background-image-none"
        style="background-image: url('{{ asset('images/vertical-line-bg.svg') }}')">
        <div class="container">
            <div class="row justify-content-center mb-1">
                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px">Specialized Solutions</span>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px shadow-none" data-shadow-animation="true"
                        data-animation-delay="1000">Our <span class="text-highlight fw-800">Core Services
                            <span
                                class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span>
                    </h3>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                <!-- start features box item -->
                <div class="col icon-with-text-style-03 mb-10px">
                    <div class="feature-box p-6 overflow-hidden">
                        <div class="feature-box-icon">
                            <i class="line-icon-Doctor icon-extra-large text-base-color mb-20px"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-18">Healthcare
                                Staffing</span>
                            <p class="w-80 md-w-100 m-auto">Providing licensed, compassionate professionals for hospitals
                                and clinics.</p>
                        </div>
                    </div>
                </div>
                <!-- end -->

                <!-- start features box item -->
                <div class="col icon-with-text-style-03 mb-10px">
                    <div class="feature-box p-6 overflow-hidden">
                        <div class="feature-box-icon">
                            <i class="line-icon-Business-ManWoman icon-extra-large text-base-color mb-20px"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-18">Recruitment
                                Solutions</span>
                            <p class="w-80 md-w-100 m-auto">Tailored hiring strategies for permanent, temporary, and
                                contract placements.</p>
                        </div>
                    </div>
                </div>
                <!-- end -->

                <!-- start features box item -->
                <div class="col icon-with-text-style-03 mb-10px">
                    <div class="feature-box p-6 overflow-hidden">
                        <div class="feature-box-icon">
                           <i class="fa-solid fa-truck-fast icon-extra-large text-base-color mb-20px"></i>


                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-18">Logistics
                                Support</span>
                            <p class="w-80 md-w-100 m-auto">Efficient staffing for warehouse, transportation, and supply
                                chain operations.</p>
                        </div>
                    </div>
                </div>
                <!-- end -->

                <!-- start features box item -->
                <div class="col icon-with-text-style-03 sm-mb-10px">
                    <div class="feature-box p-6 overflow-hidden">
                        <div class="feature-box-icon">
                            <i class="line-icon-Home icon-extra-large text-base-color mb-20px"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-18">Home Care
                                Services</span>
                            <p class="w-80 md-w-100 m-auto">Providing trusted caregivers and companions for in-home
                                support.</p>
                        </div>
                    </div>
                </div>
                <!-- end -->

                <!-- start features box item -->
                <div class="col icon-with-text-style-03 xs-mb-10px">
                    <div class="feature-box p-6 overflow-hidden">
                        <div class="feature-box-icon">
                            <i class="line-icon-Data-Cloud icon-extra-large text-base-color mb-20px"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-18">Workforce
                                Analytics</span>
                            <p class="w-80 md-w-100 m-auto">Track trends, monitor performance, and optimize staffing
                                metrics.</p>
                        </div>
                    </div>
                </div>
                <!-- end -->

                <!-- start features box item -->
                <div class="col icon-with-text-style-03">
                    <div class="feature-box p-6 overflow-hidden">
                        <div class="feature-box-icon">
                            <i class="line-icon-Medal-2 icon-extra-large text-base-color mb-20px"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-18">Training &
                                Compliance</span>
                            <p class="w-80 md-w-100 m-auto">Equipping professionals with the latest certifications and
                                training modules.</p>
                        </div>
                    </div>
                </div>
                <!-- end -->

            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
