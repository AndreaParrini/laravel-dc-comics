@extends('layouts.app')

@section('PageTitle', 'Add a new Comic')

@section('content')
    <section class="section-add-comic">
        <section class="jumbotron">

        </section>
        <h1>
            Add a New Comic
        </h1>
        <div class="container py-2">
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                aria-describedby="helpId" placeholder="" />
                            <small id="helpId" class="form-text text-muted">Insert here the title of your new
                                comic</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="">
                            <label for="thumb" class="form-label">Thumb</label>
                            <input type="text" class="form-control" name="thumb" id="thumb"
                                aria-describedby="helpId" placeholder="Es. https://picsum.photos/200/300" />
                            <small id="helpId" class="form-text text-muted">Insert here the thumb of comic</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" step="0.01" name="price" id="price"
                                aria-describedby="helpId" placeholder="Es. 19.99" />
                            <small id="helpId" class="form-text text-muted">Insert price of comic</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="">
                            <label for="sales_date" class="form-label">Sales Date</label>
                            <input type="date" class="form-control" name="sales_date" id="sales_date"
                                aria-describedby="helpId" value="{{ date('Y-m-d') }}" />
                            <small id="helpId" class="form-text text-muted">Insert here the date of sale your
                                comic</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" name="type" id="type"
                                aria-describedby="helpId" placeholder="Es. comic book" />
                            <small id="helpId" class="form-text text-muted">Insert type of comic</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" class="form-control" name="series" id="series"
                                aria-describedby="helpId" placeholder="Es. Action Comics" />
                            <small id="helpId" class="form-text text-muted">Insert series of comic</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                            <small id="helpId" class="form-text text-muted">Insert a description of comic</small>
                        </div>
                    </div>
                </div>
                <div class="py-2 text-center">
                    <button type="submit" class="btn bg-primary color-light">
                        Add
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
