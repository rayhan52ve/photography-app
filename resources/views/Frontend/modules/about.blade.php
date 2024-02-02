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
                    <h2>{{@$bio->designation}} from {{@$bio->city}}</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong>
                                    <span>{{ @$bio->name }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                    <span>{{ @$bio->phone }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                    <span>{{ @$bio->city }}</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-12">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                    <span>{{ @$bio->age }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                    <span>{{ @$bio->email }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <p class="py-3">
                      {!! @$bio->story !!}
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
@endsection
