@extends('Backend.layouts.master')

@section('content')
    <main class="mdl-layout__content ui-form-components">

        <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h5 class="mdl-card__title-text text-color--white">Bio Info</h5>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <form method="post" action="{{ route('admin.bio.store') }}" enctype="multipart/form-data"
                            class="form form--basic">
                            @csrf
                            <div class="mdl-grid">
                                <div
                                    class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone form__article">
                                    <h3 class="text-color--smooth-gray">Biopic</h3>
                                    <label class="image" for="imageInput">
                                        <input type="file" id="imageInput" value="{{ old('image') }}" name="image"
                                            class="form-control">
                                        @if (@$bio->image)
                                            <img id="profileImage" src="{{ asset('uploads/bio/' . $bio->image) }}"
                                                height="100%" width="300px" class="rounded-top">
                                        @else
                                            <img id="profileImage" src="{{ asset('asset/bio.jpg') }}" height="100%"
                                                width="300px" class="rounded-top">
                                        @endif
                                    </label>

                                </div>
                                <div
                                    class="mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone form__article">
                                    <h3 class="text-color--smooth-gray text-success">BIO INPUT FIELDS</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input name="name" class="mdl-textfield__input" type="text"
                                                    value="{{ @$bio->name }}" id="floating-first-name">
                                                <label class="mdl-textfield__label" for="floating-first-name">
                                                    Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input name="age" class="mdl-textfield__input" type="text"
                                                    value="{{ @$bio->age }}" id="floating-first-name">
                                                <label class="mdl-textfield__label" for="floating-first-name">Age</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input name="designation" class="mdl-textfield__input" type="text"
                                                    value="{{ @$bio->designation }}" id="floating-first-name">
                                                <label class="mdl-textfield__label"
                                                    for="floating-first-name">Designation</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input name="phone" class="mdl-textfield__input" type="number"
                                                    value="{{ @$bio->phone }}" id="floating-first-name">
                                                <label class="mdl-textfield__label" for="floating-first-name">Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input name="email" class="mdl-textfield__input" type="email"
                                                    value="{{ @$bio->email }}" id="floating-first-name">
                                                <label class="mdl-textfield__label" for="floating-first-name">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input name="city" class="mdl-textfield__input" type="text"
                                                    value="{{ @$bio->city }}" id="floating-first-name">
                                                <label class="mdl-textfield__label" for="floating-first-name">City</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input name="description" class="mdl-textfield__input" type="text"
                                                    value="{{ @$bio->description }}" id="floating-first-name">
                                                <label class="mdl-textfield__label"
                                                    for="floating-first-name">Description</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="text-dark">
                                                <label for="story" class="text-secondary">Your Story</label>
                                                <textarea id="editor" rows="5" class="text-dark" name="story" placeholder="Your Story">{{ @$bio->story }}</textarea>

                                            </div>
                                        </div>

                                        <button type="submit"
                                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal mt-5">
                                            SAVE
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </main>

    @push('css')
        <style>
            #editor {
                min-height: 200px;
            }
        </style>
        <style>
            .image {
                display: block;
                width: 500px;
                max-width: 100%;
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

            #imageInput {
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
        <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>

        <script>
            var imageInput = document.getElementById("imageInput");
            var profileImage = document.getElementById("profileImage");

            imageInput.addEventListener("change", function() {
                // Check if a file has been selected
                if (imageInput.files && imageInput.files[0]) {
                    var reader = new FileReader();

                    // When the file is loaded, set the src attribute of the img element
                    reader.onload = function(e) {
                        profileImage.src = e.target.result;
                    };

                    // Read the selected file as a data URL
                    reader.readAsDataURL(imageInput.files[0]);
                }
            });
        </script>
    @endpush
    @if (session()->has('msg'))
        @push('js')
            <script>
                Swal.fire({
                    position: 'top-right',
                    icon: '{{ session('cls') }}',
                    toast: 'true',
                    title: '{{ session('msg') }}',
                    showConfirmButton: false,
                    confirmButtonText: "ok",
                    timerProgressBar: false,
                    showCancelButton: false,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    showCloseButton: true,
                    timer: 2000
                })
            </script>
        @endpush
    @endif
@endsection
