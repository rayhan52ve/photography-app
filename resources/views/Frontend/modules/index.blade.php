@extends('Frontend.layouts.master')

@section('content')
    <!-- ======= Hero Section ======= -->
    {{-- <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
        data-aos-delay="1500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>I'm <span>Jenny Wilson</span> a Professional Photographer from New York City</h2>
                    <p>Blanditiis praesentium aliquam illum tempore incidunt debitis dolorem magni est deserunt sed qui
                        libero. Qui voluptas amet.</p>
                    <a href="contact.html" class="btn-get-started">Available for hire</a>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section --> --}}

    <!-- ======= Carousel Section ======= -->
    <div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image:url('{{asset('frontend/carousel/images/slider-1.jpg')}}');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>Best Place to Travel</h2>
                            <h1 class="mb-3">Norway</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url('{{asset('frontend/carousel/images/slider-2.jpg')}}');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>Best Place to Travel</h2>
                            <h1 class="mb-3">Japan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url('{{asset('frontend/carousel/images/slider-3.jpg')}}');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>Best Place to Travel</h2>
                            <h1 class="mb-3">Singapore</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endcarousel --}}
@endsection
