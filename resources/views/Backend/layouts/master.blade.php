<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
@php
    $websiteInfo = \App\Models\WebsiteInfo::first();
    $bio = \App\Models\Bio::first();
@endphp

<head>
    <link rel="icon" type="image/png" href="{{ asset('uploads/websiteinfo/fevicon/' . $websiteInfo->fevicon) }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ @$websiteInfo->title }} | Control</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    @include('Backend.layouts.includes.css')

</head>

<body>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
        @include('Backend.layouts.includes.topnav')

        @include('Backend.layouts.includes.sidenav')

        @yield('content')

    </div>

    @include('Backend.layouts.includes.script')

</body>

</html>
