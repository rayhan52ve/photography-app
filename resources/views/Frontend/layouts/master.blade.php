<!DOCTYPE html>
<html lang="en">
@php
    $websiteInfo = \App\Models\WebsiteInfo::first();
@endphp

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ @$websiteInfo->title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('uploads/websiteinfo/fevicon/' . $websiteInfo->fevicon) }}" rel="icon">

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
