@extends('Backend.layouts.master')

@section('content')
    <main class="mdl-layout__content">

        <div class="container">
            <div class="row m-5">
                <!-- Column -->
                <div class="row">
                    <div class="col-xl-3 col-md-4">
                        <div class="card text-white mb-4" style="background-color: rgb(79, 164, 79)">
                            <div class="card-header">
                                <h5>Banners</h5>
                            </div>
                            <div class="card-body text-center">
                                <h1>{{$bannerCount}}</h1>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{route('admin.hero.index')}}">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4">
                        <div class="card bg-dark text-white mb-4">
                            <div class="card-header">
                                <h5>Album Category</h5>
                            </div>
                            <div class="card-body text-center">
                                <h1>{{$categoryCount}}</h1>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{route('admin.category.index')}}">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4">
                        <div class="card bg-info text-white mb-4">
                            <div class="card-header">
                                <h5>Albums</h5>
                            </div>
                            <div class="card-body text-center">
                                <h1>{{$albumCount}}</h1>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{route('admin.album.index')}}">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-header">
                                <h5>Photos</h5>
                            </div>
                            <div class="card-body text-center">
                                <h1>{{$photoCount}}</h1>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{route('admin.photography.index')}}">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
