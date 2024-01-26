@extends('Frontend.layouts.master')

@section('content')
    <!-- ======= Carousel Section ======= -->
    <div class="home-slider owl-carousel js-fullheight">
        @forelse ($heroes as $key => $hero)
            <div class="slider-item js-fullheight"
                style="background-image:url('{{ asset('uploads/hero/' . $hero->photo) }}');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>{{ $hero->sub_title }}</h2>
                                <h1 class="mb-3">{{ $hero->title }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty

            <div class="slider-item js-fullheight"
                style="background-image:url('{{ asset('frontend/carousel/images/slider-1.jpg') }}');">
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

            <div class="slider-item js-fullheight"
                style="background-image:url('{{ asset('frontend/carousel/images/slider-2.jpg') }}');">
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

            <div class="slider-item js-fullheight"
                style="background-image:url('{{ asset('frontend/carousel/images/slider-3.jpg') }}');">
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
        @endforelse
    </div>
    {{-- endcarousel --}}
@endsection
