@extends('Backend.layouts.master')

@section('content')
    <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
            <div class="mdl-card__title">
                <h2>Create Album Category</h2>
            </div>

            <div class="mdl-card__supporting-text">
                <form action="{{ route('admin.category.update',$category->id) }}" method="post" class="form">
                    @method('PUT')
                    @csrf
                    <div class="form__article">
                        <div class="mdl-grid">
                            <div
                                class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="firstName" name="name" value="{{$category->name}}" required />
                                <label class="mdl-textfield__label" for="firstName">Album Category Title</label>
                            </div>
                        </div>
                    </div>

                    <div class="form__action">
                        <button id="submit_button" type="submit"
                            class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    @push('js')
        @if (session()->has('msg'))
            <script>
                Swal.fire({
                    position: 'top-end',
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
                    timer: 3000
                })
            </script>
        @endif
    @endpush
@endsection
