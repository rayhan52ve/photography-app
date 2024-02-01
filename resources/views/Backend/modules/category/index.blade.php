@extends('Backend.layouts.master')

@section('content')
    <main class="mdl-layout__content mdl-color--grey-100">
        <div class="container">
            <div class="row justify-content-center m-5">
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <h2>Create Album Category</h2>
                            @if ($categories->count() < 1)
                                <div class="text-danger">Please create an album category before creating album.</div>
                            @endif
                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin.category.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Album Category Title</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <button type="submit" class="btn btn-info mt-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6"> <!-- Added missing class -->
                    <div class="card shadow">
                        <div class="card-header">
                            <h1 class="card-title">Category List</h1>
                        </div>
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Categories</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $key => $category)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <a href="{{ route('admin.category.edit', $category->id) }}"
                                                    class="btn btn-warning" title="Edit">
                                                    <box-icon name='edit'></box-icon>
                                                </a>
                                                <form id="{{ 'form_' . $category->id }}"
                                                    action="{{ route('admin.category.destroy', $category) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button data-id="{{ $category->id }}" title="Delete"
                                                        class="delete btn btn-danger ml-1 mt-1" type="button">
                                                        <box-icon name='trash'></box-icon>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <p class="text-center">No data found.</p>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
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
                    title: 'Are you sure to delete this category?',
                    text: "All the albums and photos related to this calegory may be lost!",
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
