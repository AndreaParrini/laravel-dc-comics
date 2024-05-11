@extends('layouts.app')

@section('content')
    <section class="section_main bg-dark">
        <section class="jumbotron">

        </section>
        <div class="container">
            <span class="title text-uppercase bg-primary py-2 px-3 text-light fs-5">
                Current Series
            </span>
            <div class="comics">
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-2 my-3">
                            <a class="text-decoration-none" href="{{ route('guest.comics.show', $comic) }}">
                                <div class="ratio ratio-1x1 overflow-hidden">
                                    <div class="">
                                        <img class="mw-100 " src="{{ $comic['thumb'] }}" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="text-light text-uppercase mt-3">
                                    {{ $comic['series'] }}
                                </div>
                            </a>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <section class="text-center my-3 ">
            <button class="btn btn-primary rounded-0 text-uppercase px-5">load more</button>
        </section>
        <section class="section-digitalcomics py-5 bg-primary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex gap-4 text-light text-uppercase align-items-center">
                            <img width="40" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                                alt="Digital Comics">
                            <div>
                                Digital Comics
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex gap-4 text-light text-uppercase align-items-center">
                            <img width="40" src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}"
                                alt="DC Merchandise">
                            <div>
                                DC Merchandise
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex gap-4 text-light text-uppercase align-items-center">
                            <img width="40" src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}"
                                alt="Subscription">
                            <div>
                                Subscription
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex gap-4 text-light text-uppercase align-items-center">
                            <img width="40" src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}"
                                alt="Shop Locator">
                            <div>
                                Comic Shop Locator
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex gap-4 text-light text-uppercase align-items-center">
                            <img width="40" src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}"
                                alt="DC Power Visa">
                            <div>
                                DC Power Visa
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>
@endsection
