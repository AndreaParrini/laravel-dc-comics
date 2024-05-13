@extends('layouts.app')

@section('PageTitle', 'Modify' . ' ' . $comic['title'])

@section('content')
    <section class="section-add-comic">
        <section class="jumbotron">

        </section>
        <h3 class="py-3 bg-primary text-light text-center ">
            Modify {{ $comic['title'] }}
        </h3>
        <div class="container py-2">
            <form action="{{ route('comics.update', $comic) }}" method="post">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-6">
                        <div class="">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                aria-describedby="helpId" placeholder="" value="{{ $comic['title'] }}" />
                            <small id="helpId" class="form-text text-muted">Insert here the title of your new
                                comic</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex gap-3 align-items-center mb-3">
                            <img width="150" src="{{ $comic['thumb'] }}" alt="">
                            <div class="w-100">
                                <label for="thumb" class="form-label">Thumb</label>
                                <input type="text" class="form-control" name="thumb" id="thumb"
                                    aria-describedby="helpId" placeholder="Es. https://picsum.photos/200/300"
                                    value="{{ $comic['thumb'] }}" />
                                <small id="helpId" class="form-text text-muted">Insert here the thumb of comic</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-4">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" step="0.01" name="price" id="price"
                                aria-describedby="helpId" placeholder="Es. 19.99" value="{{ $comic['price'] }}" />
                            <small id="helpId" class="form-text text-muted">Insert price of comic</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-4">
                            <label for="sale_date" class="form-label">Sale Date</label>
                            <input type="date" class="form-control" name="sale_date" id="sale_date"
                                aria-describedby="helpId" value="{{ $comic['sale_date'] }}" />
                            <small id="helpId" class="form-text text-muted">Insert here the date of sale your
                                comic</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-4">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" name="type" id="type"
                                aria-describedby="helpId" placeholder="Es. comic book" value="{{ $comic['type'] }}" />
                            <small id="helpId" class="form-text text-muted">Insert type of comic</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-4">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" class="form-control" name="series" id="series"
                                aria-describedby="helpId" placeholder="Es. Action Comics" value="{{ $comic['series'] }}" />
                            <small id="helpId" class="form-text text-muted">Insert series of comic</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $comic['description'] }}</textarea>
                            <small id="helpId" class="form-text text-muted">Insert a description of comic</small>
                        </div>
                    </div>
                </div>
                <div class="py-2 text-center">
                    <button type="submit" class="btn bg-primary text-light">
                        Modify
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection