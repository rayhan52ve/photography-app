@extends('Backend.layouts.master')

@section('content')
    <main class="mdl-layout__content ui-form-components">

        <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h5 class="mdl-card__title-text text-color--white">EDIT PHOTO</h5>
                    </div>
                    <div class="mdl-card__supporting-text">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{ route('admin.photography.update',$photography->id) }}" enctype="multipart/form-data"
                            class="form form--basic">
                            @method('PUT')
                            @csrf
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                                    <label class="image" for="imageInput">
                                        <input type="file" id="imageInput" value="{{ old('photo') }}" name="photo"
                                            class="form-control">
                                        @if (@$photography->photo)
                                            <img id="profileImage" src="{{ asset('uploads/photography/' . $photography->photo) }}"
                                                width="100%" class="rounded-top">
                                        @else
                                            <img id="profileImage" src="{{ asset('asset/no-images.png') }}" width="100%" style="min-height: 250px;min-width:280px"
                                                class="rounded-top">
                                        @endif
                                    </label>

                                </div>
                                <div
                                    class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone form__article">
                                    <div class="row">
                                        <div
                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size text-secondary">
                                            <select name="album_id" class="mdl-textfield__input" id="floating-album">
                                                <option value="" disabled selected>Select Album</option>
                                                @foreach ($albums as $album)
                                                    <option value="{{ $album->id }}" {{ $album->id == $photography->album_id ? 'selected' : '' }}>
                                                        {{ $album->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <button type="submit"
                                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal mt-5">
                                            UPDATE PHOTO
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
            .image {
                display: block;
                width: 100%;
                max-width: 500px;
                max-width: auto;
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
