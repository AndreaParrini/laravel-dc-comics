@extends('layouts.app')

@section('PageTitle', $comic['title'])

@section('content')
    <section class="section_main bg-light">
        <section class="jumbotron">

        </section>
        <section class="bg-primary p-4 position-relative">
            <div class="container">
                <img class="thumb_img" src="{{ $comic['thumb'] }}" alt="">
            </div>
        </section>
        <section class="info-comic mt-4 pb-5 border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h2>{{ $comic['title'] }}</h2>
                        <div class="d-flex w-100 bg-success text-white mt-2">
                            <div class="d-flex justify-content-between flex-grow-1 p-3 border-end border-dark">
                                <span class="text-white-50">U.S. Price <span
                                        class="text-light">${{ $comic['price'] }}</span></span>
                                <span class="text-uppercase text-white-50">Available</span>
                            </div>
                            <div class="avaibility p-3 ">Check Avaibility <i class="fa-solid fa-caret-down"></i></div>
                        </div>
                        <div class="description lh-base mt-3">
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
        <section class="section-talent-specs pt-4 bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-6 ">
                        <h2 class="border-bottom py-3">Talent</h2>
                        <div class="art-by d-flex border-bottom py-3">
                            <div class="col-3 text-nowrap">Art By:</div>
                            <div class="col-9">
                                <a class="text-decoration-none text-info" href="7">Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem</a>

                            </div>
                        </div>
                        <div class="written-by d-flex border-bottom py-3">
                            <div class="col-3 text-nowrap">Written By:</div>
                            <div class="col-9">
                                <a class="text-decoration-none text-info" href="7">Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem,</a>
                                <a class="text-decoration-none text-info" href="7"> Lorem Lorem</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h2 class="border-bottom py-3">Specs</h2>
                        <div class="series d-flex border-bottom py-2">
                            <div class="col-3 text-nowrap">Series:</div>
                            <div class="col-9">
                                <span class="text-uppercase text-info">{{ $comic['series'] }}</span>
                            </div>
                        </div>
                        <div class="price d-flex border-bottom py-2">
                            <div class="col-3 text-nowrap">U.S. Price: </div>
                            <div class="col-9">
                                ${{ $comic['price'] }}
                            </div>
                        </div>
                        <div class="date d-flex border-bottom py-2">
                            <div class="col-3 text-nowrap">On Sale Date:</div>
                            <div class="col-9">
                                {{ date('M d Y', strtotime($comic['sale_date'])) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-link-comic bg-secondary border-top text-uppercase text-light">
            <div class="container">
                <div class="row">
                    <div class="col-3 border-start border-end">
                        <div class="d-flex gap-2 justify-content-between  h-100 p-3">
                            <span class="">Digital Comics</span>
                            <img width="60" src="{{ Vite::asset('/resources/images/buy-comics-digital-comics.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-3 border-end">
                        <div class="d-flex gap-2 justify-content-between h-100 p-3">
                            <span>Shop Dc</span>
                            <img width="60" src="{{ Vite::asset('/resources/images/buy-dc-power-visa.svg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-3 border-end">
                        <div class="d-flex gap-2 justify-content-between h-100 p-3">
                            <span>Comic Shop Locator</span>
                            <img width="60" src="{{ Vite::asset('/resources/images/buy-comics-shop-locator.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-3 border-end">
                        <div class="d-flex gap-2 justify-content-between h-100 p-3">
                            <span>Subscription</span>
                            <img width="60" src="{{ Vite::asset('/resources/images/buy-comics-subscriptions.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
