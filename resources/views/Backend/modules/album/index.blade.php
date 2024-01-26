@extends('Backend.layouts.master')

@section('content')
    <main class="mdl-layout__content">
        <div class="mdl-grid ui-cards">

            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h3 style="display: inline-block; margin-right: 10px;">Albums</h3>
                    <a class="btn btn-outline-info" href="{{ route('admin.album.create') }}">Create Album</a>
                </div>
            </div>

            <div class="container">
                <div class="m-5">
                    <div class="row">
                        @forelse ($albums as $key => $album)
                            <div class="col-md-4 mb-4 position-relative">
                                <div class="card bg-dark text-white">
                                    <img src="{{ asset('uploads/album/' . $album->photo) }}" style="height: 200px"
                                        class="card-img" alt="">
                                    <div class="card-img-overlay d-flex flex-column justify-content-between">
                                        <div class="position-absolute top-0 end-0 badge bg-success">{{ $key + 1 }}
                                        </div>
                                        <div>
                                            <h2 class="card-title">{{ $album->name }}</h2>
                                        </div>
                                        <div>
                                            <a href="{{ route('admin.album.edit', $album->id) }}" class="btn btn-warning"
                                                title="Edit">
                                                <box-icon name='edit'></box-icon>
                                            </a>
                                            <form id="{{ 'form_' . $album->id }}"
                                                action="{{ route('admin.album.destroy', $album) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button data-id="{{ $album->id }}" title="Delete"
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
                                <h3 class="text-center text-danger">No Album Created Yet</h3>
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
