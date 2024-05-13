@extends('layouts.app')

@section('content')
    <section class="section_main bg-dark">
        <h3 class="py-5 bg-primary text-center text-uppercase">
            All comics
        </h3>
        <div class="section-admin container p-2">
            <div class="table-responsive">
                <table class="table table-primary p-2 bg-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Thumb</th>
                            <th scope="col">Price</th>
                            <th scope="col text-no-wrap">Sale Date</th>
                            <th scope="col">Type</th>
                            <th scope="col">Series</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr class="p-2">
                                <td scope="row" class="p-2">{{ $comic->id }}</td>
                                <td class="p-2">{{ $comic->title }}</td>
                                <td class="p-2">
                                    <div class="overflow-auto" style="height: 200px;">{{ $comic->description }}</div>
                                </td>
                                <td class=""><img width="100" src="{{ $comic->thumb }}" alt=""></td>
                                <td class="p-2">${{ $comic->price }}</td>
                                <td class="p-2 text-nowrap">{{ $comic->sale_date }}</td>
                                <td class="p-2">{{ $comic->type }}</td>
                                <td class="p-2">{{ $comic->series }}</td>
                                <td class="text-nowrap">
                                    <div class="d-flex">
                                        <a class="text-decoration-none" href="{{ route('comics.show', $comic) }}">
                                            <i class="fa-solid fa-eye fa-lg p-2 text-success"></i>
                                        </a>
                                        <a class="text-decoration-none" href="{{ route('comics.edit', $comic) }}">
                                            <i class="fa-solid fa-pen fa-lg p-2 text-secondary"></i>
                                        </a>
                                        <!-- Modal trigger button -->
                                        <button type="button" class="border-0 bg-transparent" data-bs-toggle="modal"
                                            data-bs-target="#modalId-{{ $comic->id }}">
                                            <i class="fa-solid fa-trash fa-lg p-2 text-danger"></i>
                                        </button>

                                        <!-- Modal Body -->
                                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                        <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                            aria-labelledby="modalTitleId-{{ $comic->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-wrap"
                                                            id="modalTitleId-{{ $comic->id }}">
                                                            Delete Comic {{ $comic->title }}
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Sei sicuro di voler cancellare?<br />
                                                        <i class="fa-solid fa-triangle-exclamation"></i>L'azione sarà
                                                        irreversibile <i class="fa-solid fa-triangle-exclamation"></i>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">
                                                            Close
                                                        </button>
                                                        <form action="{{ route('comics.destroy', $comic) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-danger">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            {{ $comics->links() }}
        </div>
        <a href="{{ route('comics.create') }}"
            class="btn btn-light rounded-pill text-primary position-fixed end-0 bottom-0 m-5 fs-5">
            <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
            <span>ADD</span>
        </a>
    </section>
@endsection
