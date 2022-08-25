@extends('layouts.app')

@section('page_title')
    DC Product
@endsection

@section('main_content')
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
                        <span>{{ $current_product['price'] }}</span>
                        <span>Available</span>
                    </div>
                    <div class="check-available">
                        <span>Check available</span>
                    </div>
                </div>
                <div class="description">
                    {{ $current_product['description'] }}
                </div>
            </div>
            <div class="col-right">
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
                        <h4>Art-by:</h4>
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
                        <h4>Written by:</h4>
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
                        <h4>Series:</h4>
                    </div>
                    <div class="row-content">
                        {{ $current_product['series'] }}
                    </div>
                </div>
                <div class="row">
                    <div class="row-title">
                        <h4>U.S. Price:</h4>
                    </div>
                    <div class="row-content">
                        {{ $current_product['price'] }}
                    </div>
                </div>
                <div class="row">
                    <div class="row-title">
                        <h4>On Sale Date:</h4>
                    </div>
                    <div class="row-content">
                        {{ date_format(date_create($current_product['sale_date']), 'M d Y') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
