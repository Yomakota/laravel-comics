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
@endsection
