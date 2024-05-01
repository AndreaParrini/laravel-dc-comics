@extends('layouts.app')

@section('content')
    <section class="section_main bg-dark">

        <section class="jumbotron">

        </section>
        <section class="welcome">
            <h3>Benvenuti nel sito dei tuoi fumetti preferiti</h3>
        </section>
        <section class="section-digitalcomics">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="icon">
                            <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                                alt="Digital Comics">
                            <div>
                                Digital Comics
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="icon">
                            <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}"
                                alt="DC Merchandise">
                            <div>
                                DC Merchandise
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="icon">
                            <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}"
                                alt="Subscription">
                            <div>
                                Subscription
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="icon">
                            <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="Shop Locator">
                            <div>
                                Comic Shop Locator
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="icon">
                            <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="DC Power Visa">
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
