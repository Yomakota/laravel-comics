@extends('layouts.app')

@section('page_title')
    DC Comics
@endsection

@section('main_content')
    <div class="container">
        <div class="products-list">
            @foreach ($comics as $item)
                <div class="product-card">
                    <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                </div>
            @endforeach
        </div>
    @endsection
