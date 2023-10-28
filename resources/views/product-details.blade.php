@extends('layout')

@section('content')
    <section class="albums__details__section">
        <div class="album__slider owl-carousel">
            <div class="album__slide set-bg" data-setbg="{{ asset('storage/' . $product->featured_image) }}">
                <img src="{{ asset('storage/'.$product->featured_image) }}" alt="{{ $product->name }}">
                <div class="album__slide__text">
                    <div class="container">
                        <div class="slide__cata">{{ $product->category->title }}</div>
                        <h2>{{ $product->name }}</h2>
                    </div>
                </div>
            </div>

            @foreach ($product->images as $image)
                <div class="album__slide set-bg" data-setbg="{{ asset('storage/' . $product->featured_image) }}">
                    <img src="{{ asset('storage/'.$image) }}" alt="{{ $product->name }}">
                    <div class="album__slide__text">
                        <div class="container">
                            <div class="slide__cata">{{ $product->category->title }}</div>
                            <h2>{{ $product->name }}</h2>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="album_thumb_slider owl-carousel">
            <div class="album__slide_thumb">
                <img src="{{ asset('storage/'.$product->featured_image) }}" alt>
            </div>
            @foreach ($product->images as $image)
            <div class="album__slide_thumb">
                <img src="{{ asset('storage/'.$image) }}" alt>
            </div>
            @endforeach
        </div>
    </section>
@endsection
