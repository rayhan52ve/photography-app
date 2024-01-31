@extends('Frontend.layouts.master')

@section('content')
    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>{{$albumCount}} Albums</h2>
                </div>
            </div>
        </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="col-md-12">
                <div class="row gy-5 justify-content-start">
                    @foreach ($categories as $cat)
                        <h3>{{ $cat->name }}</h3>
                        @foreach ($cat->albums as $album)
                            <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                                <a href="{{ route('front.gallerySingle',$album->id) }}">
                                    <div class="gallery-item">
                                        <img src="{{ asset('uploads/album/' . $album->photo) }}"
                                            class="img-fluid" alt="" width="100%" style="height:150px">
                                        <p class="pt-2">{{ $album->name }}</p>
                                    </div>
                                </a>
                            </div><!-- End Gallery Item -->
                        @endforeach
                    @endforeach


                </div>
            </div>

        </div>
    </section><!-- End Gallery Section -->
@endsection
