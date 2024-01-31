@extends('Frontend.layouts.master')

@section('content')
    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h4>{{$album->name}} ({{$album->photographies->count()}} {{$album->photographies->count()==1 ? 'Image':'Images'}})</h4>
                </div>
            </div>
        </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="col-md-12">
                <div class="row gy-5 justify-content-start">

                    @foreach ($album->photographies as $photography)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="{{ asset('uploads/photography/' . $photography->photo) }}" title=""
                                class="glightbox preview-link">
                                <div class="gallery-item">
                                    <img src="{{ asset('uploads/photography/' . $photography->photo) }}" width="100%" style="height:180px" class="img-fluid"
                                        alt="">
                                </div>
                            </a>
                        </div><!-- End Gallery Item -->
                    @endforeach



                </div>
            </div>

        </div>
    </section><!-- End Gallery Section -->
@endsection
