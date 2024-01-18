@extends('Frontend.layouts.master')

@section('content')
    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>16 Albums</h2>
                </div>
            </div>
        </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="col-md-12">
                <div class="row gy-5 justify-content-start">

                    <h3>Gategory Head</h3>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <a href="{{route('front.gallerySingle')}}">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('frontend/assets/img/gallery/gallery-1.jpg') }}" class="img-fluid"
                                    alt="">
                                <p class="pt-2">Album Name</p>
                            </div>
                        </a>
                    </div><!-- End Gallery Item -->

                </div>
            </div>

        </div>
    </section><!-- End Gallery Section -->
@endsection
