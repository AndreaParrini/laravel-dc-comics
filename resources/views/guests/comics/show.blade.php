@extends('layouts.app')

@section('content')
    <section class="section_main bg-light">
        <section class="jumbotron">

        </section>
        <section class="bg-primary p-2 p-relative">
            <div class="container">
                <img class="thumb_img" src="{{ $comic['thumb'] }}" alt="">
            </div>
        </section>
        <section class="info-comic">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h2>{{ $comic['title'] }}</h2>
                        <div class="d-flex w-100 bg-green">
                            <div class="box-price">
                                <span>U.S. Price ${{ $comic['price'] }}</span>
                                <span>Available</span>
                            </div>
                            <div class="avaibility">Check Avaibility <i class="fa-solid fa-caret-down"></i></div>
                        </div>
                        <div class="description">
                            {{ $comic['description'] }}
                        </div>
                    </div>
                    <div class="col-4 advertisement">
                        <span class="">ADVERTISEMENT</span>
                        <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="section-talent-specs">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h2>Talent</h2>
                        <div class="art-by">
                            <div class="col-3 text-nowrap">Art By:</div>
                            <div class="col-9">
                                <a href="7">Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem</a>

                            </div>
                        </div>
                        <div class="written-by">
                            <div class="col-3 text-nowrap">Written By:</div>
                            <div class="col-9">
                                <a href="7">Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem,</a>
                                <a href="7"> Lorem Lorem</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h2>Specs</h2>
                        <div class="series">
                            <div class="col-3 text-nowrap">Series:</div>
                            <div class="col-9">
                                <span class="text-uppercase color-primary">{{ $comic['series'] }}</span>
                            </div>
                        </div>
                        <div class="price">
                            <div class="col-3 text-nowrap">U.S. Price: </div>
                            <div class="col-9">
                                ${{ $comic['price'] }}
                            </div>
                        </div>
                        <div class="date">
                            <div class="col-3 text-nowrap">On Sale Date:</div>
                            <div class="col-9">
                                {{ date('M d Y', strtotime($comic['sale_date'])) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-link-comic">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="d-flex gap-2 justify-content-between">
                            <span>Digital Comics</span>
                            <img src="{{ Vite::asset('/resources/images/buy-comics-digital-comics.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="d-flex gap-2 justify-content-between">
                            <span>Shop Dc</span>
                            <img src="{{ Vite::asset('/resources/images/buy-dc-power-visa.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="d-flex gap-2 justify-content-between">
                            <span>Comic Shop Locator</span>
                            <img src="{{ Vite::asset('/resources/images/buy-comics-shop-locator.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="d-flex gap-2 justify-content-between">
                            <span>Subscription</span>
                            <img src="{{ Vite::asset('/resources/images/buy-comics-subscriptions.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
