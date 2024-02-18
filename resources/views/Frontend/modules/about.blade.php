@extends('Frontend.layouts.master')

@section('content')
    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Bio</h2>
                    <p>{{ @$bio->description }}</p>

                    {{-- <a class="cta-btn" href="contact.html">Available for hire</a> --}}

                </div>
            </div>
        </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                    <img src="{{ asset('uploads/bio/' . $bio->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 content">
                    <h2>{{ @$bio->designation }} @if (@$bio->city)
                            From {{ $bio->city }}
                        @endif
                    </h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul>
                                @if (@$bio->name)
                                    <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong>
                                        <span>{{ $bio->name }}</span>
                                    </li>
                                @endif
                                @if (@$bio->phone)
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                        <span>{{ @$bio->phone }}</span>
                                    </li>
                                @endif
                                @if (@$bio->city)
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                        <span>{{ @$bio->city }}</span>
                                    </li>
                                @endif

                            </ul>
                        </div>
                        <div class="col-lg-12">
                            <ul>
                                @if (@$bio->age)
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span>{{ @$bio->age }}</span>
                                    </li>
                                @endif
                                @if (@$bio->email)
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>{{ @$bio->email }}</span>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                    <p class="py-1">
                        {!! @$bio->story !!}
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
@endsection
