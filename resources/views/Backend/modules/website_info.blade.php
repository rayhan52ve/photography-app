@extends('Backend.layouts.master')

@section('content')
    <main class="mdl-layout__content">
        <div class="mdl-grid mdl-grid--no-spacing dashboard">
            <div class="container my-4">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Edit Website info</h2>
                                <hr>
                                <form class="form-horizontal form-material mx-2" action="{{ route('admin.web-info.store') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <div class="mb-4">
                                                    <label class="image" for="imageInput1"
                                                        style="border: 2px solid #ccc; padding: 5px; display: inline-block;">
                                                        <input type="file" id="imageInput1" name="logo"
                                                            class="form-control">
                                                            <img id="profileImage1"
                                                                src="/uploads/websiteinfo/logo/{{ @$websiteInfo->logo }}"
                                                                height="150px" width="150px">

                                                        <i class="mdi mdi-camera mdi-24px"></i> Website Logo
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mx-5">
                                                <div class="mb-4">
                                                    <label class="image" for="imageInput2"
                                                        style="border: 2px solid #ccc; padding: 5px; display: inline-block;">
                                                        <input type="file" id="imageInput2" name="fevicon"
                                                            class="form-control">
                                                            <img id="profileImage2"
                                                                src="/uploads/websiteinfo/fevicon/{{ @$websiteInfo->fevicon }}"
                                                                height="150px" width="150px">
                                                        <i class="mdi mdi-camera mdi-24px"></i> Fevicon
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="row">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="address">Website Name</label>
                                                            <input type="text" name="title"
                                                                class="form-control @error('title') is-invalid @enderror"
                                                                value="{{ @$websiteInfo->title }}" />
                                                        </div>
                                                        @error('title')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <h4>Social Media</h4>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="row">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="facebook">Facebook</label>
                                                            <input type="text" name="facebook"
                                                                class="form-control @error('facebook') is-invalid @enderror"
                                                                value="{{ @$websiteInfo->facebook }}" />
                                                        </div>
                                                        @error('facebook')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="row">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="tweeter">Tweeter</label>
                                                            <input type="text" name="tweeter"
                                                                class="form-control @error('tweeter') is-invalid @enderror"
                                                                value="{{ @$websiteInfo->tweeter }}" />
                                                        </div>
                                                        @error('tweeter')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="row">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="instagram">Instagram</label>
                                                            <input type="text" name="instagram"
                                                                class="form-control @error('instagram') is-invalid @enderror"
                                                                value="{{ @$websiteInfo->instagram }}" />
                                                        </div>
                                                        @error('instagram')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="row">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="linkedin">Linkedin</label>
                                                            <input type="text" name="linkedin"
                                                                class="form-control @error('linkedin') is-invalid @enderror"
                                                                value="{{ @$websiteInfo->linkedin }}" />
                                                        </div>
                                                        @error('title')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <h4>Footer</h4>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="row">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="copyright">Copy Right</label>
                                                            <input type="text" name="copyright"
                                                                class="form-control @error('copyright') is-invalid @enderror"
                                                                value="{{ @$websiteInfo->copyright }}" />
                                                        </div>
                                                        @error('copyright')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12 d-flex">
                                                <button type="submit"
                                                    class="btn btn-success mx-auto mx-md-0 text-white">Update
                                                    Website
                                                    info</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    @push('css')
        <style>
            .image {
                display: block;
                width: 150px;
                height: auto;
                background-color: rgb(239, 241, 245);
                border-radius: 5px;
                font-size: 1em;
                line-height: 2em;
                text-align: center;
            }

            .image:hover {
                background-color: rgb(207, 226, 207);
            }

            .image:active {
                background-color: skyblue;
            }

            #imageInput1 {
                border: 5px;
                clip: rect(1px, 1px, 1px, 1px);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            #imageInput2 {
                border: 5px;
                clip: rect(1px, 1px, 1px, 1px);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            #imageInput3 {
                border: 5px;
                clip: rect(1px, 1px, 1px, 1px);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }
        </style>
    @endpush

    @push('js')
        <script>
            // first image
            var imageInput1 = document.getElementById("imageInput1");
            var profileImage1 = document.getElementById("profileImage1");

            imageInput1.addEventListener("change", function() {
                if (imageInput1.files && imageInput1.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        profileImage1.src = e.target.result;
                    };

                    reader.readAsDataURL(imageInput1.files[0]);
                }
            });

            // second image
            var imageInput2 = document.getElementById("imageInput2");
            var profileImage2 = document.getElementById("profileImage2");

            imageInput2.addEventListener("change", function() {
                if (imageInput2.files && imageInput2.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        profileImage2.src = e.target.result;
                    };

                    reader.readAsDataURL(imageInput2.files[0]);
                }
            });

            // third image
            var imageInput3 = document.getElementById("imageInput3");
            var profileImage3 = document.getElementById("profileImage3");

            imageInput3.addEventListener("change", function() {
                if (imageInput3.files && imageInput3.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        profileImage3.src = e.target.result;
                    };

                    reader.readAsDataURL(imageInput3.files[0]);
                }
            });
        </script>
    @endpush
    @push('js')
        <script>
            @if (session()->has('msg'))
                Swal.fire({
                    position: 'top-end',
                    icon: '{{ session('cls') }}',
                    toast: 'true',
                    title: '{{ session('msg') }}',
                    showConfirmButton: false,
                    timer: 3000
                })
            @endif


            $('.delete').on('click', function() {
                let id = $(this).attr('data-id')

                Swal.fire({
                    title: 'আপনি কি নিশ্চিত?',
                    text: "ডিলিট করার পর ডাটা আর ফেরতযোগ্য নয়!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(`#form_${id}`).submit()

                    }
                })
            })
        </script>
    @endpush
@endsection
