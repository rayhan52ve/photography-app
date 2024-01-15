<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PhotoFolio Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    @include('Frontend.layouts.includes.css')
</head>

<body>

    @include('Frontend.layouts.includes.topnav')

    <main id="main" data-aos="fade" data-aos-delay="1500">

        @yield('content')

    </main><!-- End #main -->

    @include('Frontend.layouts.includes.footer')

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader">
        <div class="line"></div>
    </div>

    @include('Frontend.layouts.includes.script')

</body>

</html>
