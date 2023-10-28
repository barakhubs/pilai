@extends('layout')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <h2>Hello! Welcome to Pilai Men's Collection</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="gallery__section">
        <div class="filter-controls">
            <ul>
                <li class="active" data-filter="*">ALL</li>
                @foreach ($categories as $item)
                    <li data-filter=".{{ $item->title }}">{{ $item->title }}</li>
                @endforeach
            </ul>
        </div>
        <div class="gallery__warp">
            @foreach ($products as $item)
            <div class="mix grid__item grid--1 {{ $item->category->title }}">
                <a class="gallery_img" href="{{ route('single-product', $item->slug) }}">
                    <img src="{{ asset('storage/'.$item->featured_image) }}" alt="{{ $item->name }}">
                    <div class="gellery__text">
                        <span>{{ $item->category->title }}</span>
                        <h3>{{ $item->name }}</h3>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </section>
@endsection
