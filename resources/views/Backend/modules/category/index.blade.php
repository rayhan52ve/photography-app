@extends('Backend.layouts.master')

@section('content')
    <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
            <div class="mdl-card__title">
                <h2>Create Album Category</h2>
                {{-- @php
                    dd($categories->count());
                @endphp --}}
                @if ($categories->count() < 1)
                    <div class="mdl-card__subtitle text-danger">Please create an album category before creating album.</div>
                @endif
            </div>

            <div class="mdl-card__supporting-text">
                <form action="{{ route('admin.category.store') }}" method="post" class="form">
                    @csrf
                    <div class="form__article">
                        <div class="mdl-grid">
                            <div
                                class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="firstName" name="name" required />
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

        <div class="mdl-grid ui-tables">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title">
                                <h1 class="mdl-card__title-text">Category List</h1>
                            </div>
                            <div class="mdl-card__supporting-text no-padding">
                                <table class="mdl-data-table mdl-js-data-table">
                                    <thead>
                                        <tr>
                                            <th class="mdl-data-table__cell--non-numeric">#</th>
                                            <th class="mdl-data-table__cell--non-numeric">Categories</th>
                                            <th class="mdl-data-table__cell--non-numeric">Action</th>
                                        </tr>
                                    </thead>
                                    @forelse ($categories as $category)
                                        <tbody>
                                            <tr>
                                                <td class="mdl-data-table__cell--non-numeric">1</td>
                                                <td class="mdl-data-table__cell--non-numeric">To Kill a Mockingbird</td>
                                                <td class="mdl-data-table__cell--non-numeric">
                                                    <a href="{{ route('admin.category.edit', $category->id) }}"
                                                        class="btn btn-sm btn-warning" title="Edit">
                                                        <box-icon name='edit'></box-icon>
                                                    </a>
                                                    <form id="{{ 'form_' . $category->id }}"
                                                        action="{{ route('admin.category.destroy', $category) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button data-id="{{ $category->id }}" title="Delete"
                                                            class="delete btn btn-rounded btn-sm btn-danger ml-1 mt-1"
                                                            type="button">
                                                            <box-icon name='trash'></box-icon>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>

                                    @empty
                                        <p class="text-center">No data found.</p>
                                    @endforelse


                                </table>
                            </div>
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
