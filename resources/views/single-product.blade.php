@extends('layouts.app')

@section('page_title')
    DC Product
@endsection

@section('main_content')
    <div class="single-product-main">
        <div class="thumb-section">
            <div class="container-70">
                <img src="{{ $current_product['thumb'] }}" alt="">
            </div>
        </div>
        <div class="info">
            <div class="container-70">
                <div class="col-left">
                    <div class="title">
                        <h1>{{ $current_product['title'] }}</h1>
                    </div>
                    <div class="availability">
                        <div class="price">
                            <span> <span class="text-green">U.S. price:</span>{{ $current_product['price'] }}</span>
                            <span class="text-green text-up">Available</span>
                        </div>
                        <div class="check-available">
                            <span>Check Availability</span>
                        </div>
                    </div>
                    <div class="description">
                        {{ $current_product['description'] }}
                    </div>
                </div>
                <div class="col-right">
                    <h2 class="ads-title">Advertisement</h2>
                    <img src="{{ asset('img/adv.jpg') }}" alt="advertise">
                </div>
            </div>
        </div>
        <div class="details">
            <div class="container-70">
                <div class="col-left">
                    <div class="info-title">
                        <h3>Talent</h3>
                    </div>
                    <div class="row">
                        <div class="row-title">
                            <span>Art-by:</span>
                        </div>
                        <div class="row-content">
                            @foreach ($current_product['artists'] as $artists)
                                {{ $artists }} @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="row-title">
                            <span>Written by:</span>
                        </div>
                        <div class="row-content">
                            @foreach ($current_product['writers'] as $writers)
                                {{ $writers }} @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-right">
                    <div class="info-title">
                        <h3>Specs</h3>
                    </div>
                    <div class="row">
                        <div class="row-title">
                            <span>Series:</span>
                        </div>
                        <div class="row-content series">
                            {{ $current_product['series'] }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="row-title">
                            <span>U.S. Price:</span>
                        </div>
                        <div class="row-content">
                            {{ $current_product['price'] }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="row-title">
                            <span>On Sale Date:</span>
                        </div>
                        <div class="row-content">
                            {{ date_format(date_create($current_product['sale_date']), 'M d Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="nav-bar-service">
            <div class="container-70">
                <ul class="list-service">
                    <li>
                        <span class="service-text">
                            digital comics
                        </span>
                        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="digital comics">
                    </li>
                    <li>
                        <span class="service-text">
                            shop dc
                        </span>
                        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="subscriptions">
                    </li>
                    <li>
                        <span class="service-text">
                            comic shop locator
                        </span>
                        <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="comic-shop-locator">
                    </li>
                    <li>
                        <span class="service-text">
                            subscriptions
                        </span>
                        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="subscriptions">
                    </li>
                </ul>
            </div>
        </section>
    </div>
@endsection
