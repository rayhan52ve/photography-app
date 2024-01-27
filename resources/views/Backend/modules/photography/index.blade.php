@extends('Backend.layouts.master')

@section('content')
    <main class="mdl-layout__content">
        <div class="mdl-grid ui-cards">

            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h3 style="display: inline-block; margin-right: 10px;">All Photos</h3>
                    <a class="btn btn-outline-info" href="{{ route('admin.photography.create') }}">Upload New Photos</a>
                </div>
            </div>

            <div class="container">
                <div class="m-4">
                    <div class="row">
                        @forelse ($photographies as $key => $photography)
                            <div class="col-md-3 mb-4 position-relative">
                                <div class="card bg-dark text-white">
                                    <img src="{{ asset('uploads/photography/' . $photography->photo) }}"
                                        style="height: 200px" class="card-img" alt="">
                                    <div class="card-img-overlay d-flex flex-column justify-content-between">
                                        <div class="position-absolute top-0 end-0 badge bg-success">{{ $key + 1 }}
                                        </div>
                                        <div class="inline" style="display: inline-block;">
                                            Album: <a href="{{ route('admin.album.show', $photography->album->id) }}"
                                                style="display: inline-block; margin: 0;">
                                                <h6 class="card-title" style="display: inline; margin: 0;">
                                                    {{ $photography->album->name }}</h6>
                                            </a>
                                        </div>

                                        <div>
                                            <a href="{{ route('admin.photography.edit', $photography->id) }}"
                                                class="btn btn-warning" title="Edit">
                                                <box-icon name='edit'></box-icon>
                                            </a>
                                            <form id="{{ 'form_' . $photography->id }}"
                                                action="{{ route('admin.photography.destroy', $photography) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button data-id="{{ $photography->id }}" title="Delete"
                                                    class="delete btn btn-rounded btn-danger ml-1 mt-1" type="button">
                                                    <box-icon name='trash'></box-icon>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                                <h3 class="text-center text-danger">No Photo Uploaded Yet</h3>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>




        </div>
    </main>

    @push('js')
        <script>
            @if (session()->has('msg'))
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
            @endif


            $('.delete').on('click', function() {
                let id = $(this).attr('data-id')

                Swal.fire({
                    title: 'Are you sure to delete this?',
                    text: "You won't be able to revert this!",
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
