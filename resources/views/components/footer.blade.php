    <!-- start footer -->
    <footer class="footer-dark bg-slate-blue p-0">
        <div class="d-none d-md-flex">
            <div class="overlap-section-one-fourth animation-float">
                {{-- <img  alt="Decorative" src="images/logo2.png"> --}}
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center pt-4 lg-pt-2 sm-pt-45px">
                <!-- Branding Column - Now wider -->
                <div class="col-12 col-xl-4 col-lg-4 col-sm-6 text-xl-start text-lg-start lg-mb-50px sm-mb-35px bg-">
                    <a href="/" class="footer-logo mb-20px d-inline-block bg-blac " aria-label="Stafhold Logo">
                        <img  src="images/logo.png" alt="Stafhold Group Logo">
                    </a>
                    <p class="w-90">Stafhold Group is a UK-based agency delivering recruitment, staffing, and home
                        care services with professionalism and compassion.</p>
                    <!-- Social Icons -->
                    <div class="elements-social social-icon-style-02 mt-20px">
                        <ul class="small-icon light">
                            <li><a class="facebook" href="https://www.facebook.com/stafholdcare" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="https://x.com/stafholdcare" target="_blank"><i
                                        class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a class="instagram" href="https://www.instagram.com/stafholdcare/"
                                    target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Company Links -->
                <div class="col-12 col-xl-2 col-lg-2 col-sm-6 mb-35px">
                    <span class="alt-font fw-500 d-block text-white mb-10px">Company</span>
                    <ul>
                        <li><a href="/who-we-are">Who we are</a></li>
                        <li><a href="/services">Our services</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/contact-us">Contact us</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-12 col-xl-3 col-lg-3 col-sm-6 mb-35px">
                    <span class="alt-font fw-500 d-block text-white mb-10px">Contact Us</span>
                    <span>Email us at:</span>
                    <a href="mailto:info@stafholdgroup.com"
                        class="text-white d-block mb-10px">info@stafholdgroup.com</a>
                    <span>Call:</span>
                    <a href="tel:+447445107434" class="text-white d-block">+44 7445 107434</a>

                </div>

                <!-- Newsletter -->
                <div class="col-12 col-xl-3 col-lg-3 col-sm-6 mb-35px">
                    <span class="alt-font fw-500 d-block text-white mb-10px">Newsletter</span>
                    <p class="mb-20px">Stay updated with our latest news and job offers.</p>
                    <form action="/newsletter-subscribe" method="post"
                        class="position-relative w-100 newsletter-style-02">
                        <input class="input-small form-control bg-white-transparent-extra-light pe-50px ps-20px"
                            type="email" name="email" placeholder="Enter your email" required>
                        <button class="btn pe-20px submit" aria-label="submit"><i
                                class="bi bi-envelope icon-small text-white"></i></button>
                    </form>
                </div>
            </div>


            <!-- Footer Bottom -->
            <div class="row justify-content-center align-items-center pt-5 sm-pt-35px">
                <div class="col-12">
                    <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-light"></div>
                </div>
                <div class="col-lg-5 pt-25px pb-25px text-center text-lg-start fs-16 order-2 order-lg-1">
                    <p>&copy; {{ date('Y') }} Stafhold Group. All Rights Reserved.</p>
                </div>
                <div class="col-lg-7 pt-25px pb-25px text-center text-lg-end fs-16 order-1 order-lg-2">
                    <ul class="footer-navbar">
                        <li><a href="/privacy-policy" class="nav-link">Privacy Policy</a></li>
                        <li><a href="/terms-and-conditions" class="nav-link">Terms & Conditions</a></li>
                        <li><a href="/copyright" class="nav-link">Copyright</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
