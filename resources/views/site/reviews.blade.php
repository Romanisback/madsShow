@extends('site.layouts.app')
@section('title', 'Отзывы')

@section('content')
    <div class="review animate__animated animate__fadeInLeft" id="reviews ">
        <div class="review_container">
            <div class="container">
                <h2>Отзывы</h2>
                <ul class="review-slider">
                    @foreach($reviews as $review)
                        <li>
                            <div class="text">
                                <p>{{ $review->review }}</p>
                            </div>
                            <div class="user_photo">
                                <img src="{{ asset('storage/' . $review->avatar) }}" data-src="" alt="{{ $review->id }}">
                            </div>
                            <div class="review_social_links">
                                <a href="{{ $review->url }}" target="_blank"><img src="/assets/images/vk.svg" alt=""></a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
