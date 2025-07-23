<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $title ?? 'Stafhold Group | Healthcare, Logistics & Home Care Services' }}</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ $description ?? 'Stafhold Group offers healthcare staffing, NHS training, decontamination, cargo logistics, and home care solutions in the UK.' }}">
    <meta name="keywords" content="Stafhold, NHS training, Decontamination, Logistics, Home Care, Healthcare staffing, UK">
    <meta name="author" content="Stafhold Group">

    <!-- Open Graph / Social Meta -->
    <meta property="og:title" content="{{ $title ?? 'Stafhold Group | Healthcare & Logistics Experts' }}">
    <meta property="og:description" content="{{ $description ?? 'Join thousands who trust Stafhold for healthcare, logistics, and home care services.' }}">
    <meta property="og:image" content="{{ $seoImage ?? asset('images/seo/default-preview.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Favicon & Apple Icons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">

    <!-- Fonts Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.min.css') }}">
    <link rel="stylesheet" href="{{ asset('demos/startup/startup.css') }}">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    
</head>


<body data-mobile-nav-style="classic">
@include('components.header2')
@yield('content')
    @include('components.footer')
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/vendors.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>



    @yield('scripts')
</body>

<!-- Mirrored from craftohtml.themezaa.com/demo-startup-who-we-are.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jul 2025 11:30:36 GMT -->

</html>
