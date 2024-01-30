    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="/uploads/websiteinfo/logo/{{ @$websiteInfo->logo }}" alt="">
                <h1>{{ @$websiteInfo->title }}</h1>
                <i class="bi bi-camera mx-2"></i>

            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('front.home') }}"
                            class="{{ url()->current() == route('front.home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('front.about') }}"
                            class="{{ url()->current() == route('front.about') ? 'active' : '' }}">Bio</a></li>
                    <li><a href="{{ route('front.gallery') }}"
                            class="{{ url()->current() == route('front.gallery') ? 'active' : '' }}">Gallery</a></li>
                    {{-- <li><a href="{{route('front.services')}}">Services</a></li> --}}
                    <li><a href="{{ route('front.contact') }}"
                            class="{{ url()->current() == route('front.contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

            <div class="header-social-links">
                <a href="{{ @$websiteInfo->tweeter }}" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="{{ @$websiteInfo->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="{{ @$websiteInfo->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="{{ @$websiteInfo->linkedin }}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
