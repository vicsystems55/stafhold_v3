@extends('layouts.base')
@section('content')

    <!-- start page title -->
    <section
        class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0 cover-background background-position-center-top"
        style="background-image: url(images/demo-startup-contact-title-bg.jpg)">
        <div class="opacity-extra-medium bg-gradient-black-green"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-xl-6 col-lg-7 col-sm-8 position-relative text-center page-title-extra-small"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <div>
                        <h1 class="text-uppercase mb-15px alt-font text-white opacity-6 fw-500 ls-2px"
                            data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Contact us"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'>
                        </h1>
                    </div>
                    <h2 class="m-auto text-white alt-font text-shadow-double-large fw-700 w-90 xl-w-100"
                        data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Let&apos;s discuss your projects now"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'>
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
    <section id="down-section" class="bg-very-light-gray overflow-hidden">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start rotate box item -->
                <div class="col rotate-box-style-02 md-mb-30px">
                    <div class="w-100 min-h-300px text-center rotate-box to-left">
                        <!-- start front side -->
                        <div class="w-100 h-100 overflow-hidden z-index-1 front-side bg-white w-100 border-radius-5px">
                            <div class="rotate-content-front z-index-2">
                                <i class="line-icon-Geo2-Love icon-extra-large text-base-color mb-25px"></i>
                                <div class="fs-19 text-dark-gray fw-500 mb-5px">Stafhold Group</div>
                                <span class="w-60 lg-w-75 md-w-70 xs-w-60 d-block m-auto">5 Harbour House, Coldharbour Lane, RM13 9YB, United Kingdom</span>
                            </div>
                        </div>
                        <!-- end front side -->
                        <!-- start back side -->
                        <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-5px"
                            style="background-image:url('images/demo-startup-contact-01.jpg')">
                            <div class="opacity-light bg-charcoal-blue"></div>
                            <div
                                class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-15">
                                <a href="#location"
                                    class="btn btn-medium btn-round-edge btn-gradient-emerald-blue-emerald-green section-link">Location
                                    map</a>
                            </div>
                            <!-- end back side -->
                        </div>
                    </div>
                </div>
                <!-- end rotate box item -->
                <!-- start rotate box item -->
                <div class="col rotate-box-style-02 md-mb-30px">
                    <div class="w-100 min-h-300px text-center rotate-box to-left">
                        <!-- start front side -->
                        <div class="w-100 h-100 overflow-hidden z-index-1 front-side bg-white w-100 border-radius-5px">
                            <div class="rotate-content-front z-index-2">
                                <i class="line-icon-Headset icon-extra-large text-base-color mb-25px"></i>
                                <div class="fs-19 text-dark-gray fw-500 mb-5px">Let's talk with us</div>
                                <span class="w-60 lg-w-75 md-w-70 xs-w-60 d-block m-auto">Phone: 07445 107434</span>

                            </div>
                        </div>
                        <!-- end front side -->
                        <!-- start back side -->
                        <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-5px"
                            style="background-image:url('images/demo-startup-contact-02.jpg')">
                            <div class="opacity-light bg-charcoal-blue"></div>
                            <div
                                class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-15">
                                <a href="tel:+07445 107434"
                                    class="btn btn-medium btn-round-edge btn-gradient-emerald-blue-emerald-green">Talk
                                    with us</a>
                            </div>
                            <!-- end back side -->
                        </div>
                    </div>
                </div>
                <!-- end rotate box item -->
                <!-- start rotate box item -->
                <div class="col rotate-box-style-02 md-mb-30px">
                    <div class="w-100 min-h-300px text-center rotate-box to-left">
                        <!-- start front side -->
                        <div class="w-100 h-100 overflow-hidden z-index-1 front-side bg-white w-100 border-radius-5px">
                            <div class="rotate-content-front z-index-2">
                                <i class="line-icon-Mail-Read icon-extra-large text-base-color mb-25px"></i>
                                <div class="fs-19 text-dark-gray fw-500 mb-5px">Need live support?</div>
                                <span class="w-60 lg-w-75 md-w-70 xs-w-60 d-block m-auto">Committed staff members are
                                    ready to help you.</span>
                            </div>
                        </div>
                        <!-- end front side -->
                        <!-- start back side -->
                        <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-5px"
                            style="background-image:url('images/demo-startup-contact-03.jpg')">
                            <div class="opacity-light bg-charcoal-blue"></div>
                            <div
                                class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-15">
                                <a href="cdn-cgi/l/email-protection.html#80e9eee6efc0f9eff5f2e4efede1e9eeaee3efed"
                                    class="btn btn-medium btn-round-edge btn-gradient-emerald-blue-emerald-green">Support
                                    desk</a>
                            </div>
                            <!-- end back side -->
                        </div>
                    </div>
                </div>
                <!-- end rotate box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px">Feel free to get in touch!</span>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px shadow-none" data-shadow-animation="true"
                        data-animation-delay="1000">How we can <span class="text-highlight fw-800">help<span
                                class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span>
                        you?</h3>
                </div>
            </div>
            <div class="row row-cols-md-1 justify-content-center">
                <div class="col-xl-9 overflow-hidden">
                    <!-- start contact form -->
                    <form action="/" method="post"
                        class="row contact-form-style-02"
                        data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 250, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col-md-6 mb-30px">
                            <input class="input-name form-control required" type="text" name="name"
                                placeholder="Your name*" />
                        </div>
                        <div class="col-md-6 mb-30px">
                            <input class="form-control required" type="email" name="email"
                                placeholder="Your email address*" />
                        </div>
                        <div class="col-md-6 mb-30px">
                            <input class="form-control" type="tel" name="phone" placeholder="Your phone" />
                        </div>
                        <div class="col-md-6 mb-30px">
                            <input class="form-control" type="text" name="subject" placeholder="Your subject" />
                        </div>
                        <div class="col-md-12 mb-30px">
                            <textarea class="form-control" cols="40" rows="4" name="comment"
                                placeholder="Your message"></textarea>
                        </div>
                        <div class="col-xl-6 col-md-7 last-paragraph-no-margin">
                            <p class="text-center text-md-start fs-15 lh-28">We are committed to protecting your
                                privacy. We will never collect information about you without your explicit consent.</p>
                        </div>
                        <div class="col-xl-6 col-md-5 text-center text-md-end sm-mt-20px">
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-gradient-emerald-blue-emerald-green btn-small btn-round-edge submit"
                                type="submit">Send message</button>
                        </div>
                        <div class="col-12">
                            <div class="form-results mt-20px d-none"></div>
                        </div>
                    </form>
                    <!-- end contact form -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0" id="location"
        data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 p-0">
                    <div id="map" class="map"
                        data-map-options='{ "lat": -37.805688, "lng": 144.962312, "style": "Silver", "marker": { "type": "HTML", "color": "#00ce9b" }, "popup": { "defaultOpen": true, "html": "<div class=infowindow><strong class=\"mb-3 d-inline-block alt-font fw-700\">Crafto Startup</strong><p class=\"alt-font\">16122 Collins street, Melbourne, Australia</p></div><div class=\"google-maps-link alt-font\"> <a aria-label=\"View larger map\" target=\"_blank\" jstcache=\"31\" href=_https_/maps.google.com/mapse283.html?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449\%22 jsaction=\"mouseup:placeCard.largerMap\">VIEW LARGER MAP</a></div>" } }'>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection

@section('scripts')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXbrQhbrrdjSTVaPzJeILiZP_asMgUIrw&callback=initMap"></script>

@endsection
