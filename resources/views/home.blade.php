@extends('layouts.app')

@section('page_title')
    DC Comics
@endsection

@section('main_content')
    <section class="comics">
        <div class="container">
            <ul class="products-list">
                @foreach ($comics as $item)
                    <li class="product-card">
                        <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <ul class="services-list">
                <li>
                    <div class="service-item">
                        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                        <span class="service-text">
                            digital comics
                        </span>
                    </div>
                </li>
                <li>
                    <div class="service-item">
                        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                        <span class="service-text">
                            dc merchandise
                        </span>
                    </div>
                </li>
                <li>
                    <div class="service-item">
                        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                        <span class="service-text">
                            subscription
                        </span>
                    </div>
                </li>
                <li>
                    <div class="service-item">
                        <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                        <span class="service-text">
                            comic shop locator
                        </span>
                    </div>
                </li>
                <li>
                    <div class="service-item">
                        <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                        <span class="service-text">
                            dc power visa
                        </span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
