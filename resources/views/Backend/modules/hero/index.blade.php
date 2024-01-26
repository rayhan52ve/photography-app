@extends('Backend.layouts.master')

@section('content')
    <main class="mdl-layout__content">
        <div class="mdl-grid ui-cards">

            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                <h3>Banner Images</h3>
            </div>
            <div class="container">
                <div class="row">
                    @forelse ($heroes as $key => $hero)
                        <div class="col-md-4 mb-4 position-relative">
                            <div class="card bg-dark text-white">
                                <img src="{{ asset('uploads/hero/' . $hero->photo) }}" class="card-img" alt="">
                                <div class="card-img-overlay d-flex flex-column justify-content-between">
                                    <div class="position-absolute top-0 end-0 badge bg-success">{{ $key + 1 }}</div>
                                    <div>
                                        <h2 class="card-title">{{ $hero->title }}</h2>
                                        <p class="card-text">{{ $hero->sub_title }}</p>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.hero.edit', $hero->id) }}" class="btn btn-warning"
                                            title="Edit">
                                            <box-icon name='edit'></box-icon>
                                        </a>
                                        <form id="{{ 'form_' . $hero->id }}"
                                            action="{{ route('admin.hero.destroy', $hero) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button data-id="{{ $hero->id }}" title="Delete"
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
                            <h3 class="text-center text-danger">No Banner Created Yet</h3>
                        </div>
                    @endforelse
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
