@extends('layouts.app')

@section('page_title')
    DC Comics
@endsection

@section('main_content')
    <section class="comics">
        <div class="container">
            <button class="current">
                Current series
            </button>
            <ul class="products-list">
                @foreach ($comics as $item)
                    <li class="product-card">
                        <a href="{{ route('single-product', ['id' => $item['id']]) }}">
                            <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                            <div class="comic-series">{{ $item['series'] }}</div>
                        </a>
                    </li>
                @endforeach
            </ul>
            <button class="load">
                load more
            </button>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <ul class="services-list">
                <li>
                    <div class="service-item">
                        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="digital comics">
                        <span class="service-text">
                            digital comics
                        </span>
                    </div>
                </li>
                <li>
                    <div class="service-item">
                        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="dc merchandise">
                        <span class="service-text">
                            dc merchandise
                        </span>
                    </div>
                </li>
                <li>
                    <div class="service-item">
                        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt=" subscription">
                        <span class="service-text">
                            subscription
                        </span>
                    </div>
                </li>
                <li>
                    <div class="service-item">
                        <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt=" comic shop locator">
                        <span class="service-text">
                            comic shop locator
                        </span>
                    </div>
                </li>
                <li>
                    <div class="service-item">
                        <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="dc power visa">
                        <span class="service-text">
                            dc power visa
                        </span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
