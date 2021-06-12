@extends('site.layouts.app')
@section('title', 'Кейсы')

@section('content')
    <div class="cases">
        <div class="container">
            <h2>Кейсы</h2>
            <div class="cases-slider animate__animated animate__fadeIn">

                @foreach($cases as $case)
                    <div class="item-container ">
                        <div class="item animate__animated animate__fadeIn" style="background: url({{ asset('storage/' .$case->image) }})">
                            <div class="item_child">
                                <img src="{{ asset('storage/' . $case->logo) }}" alt="{{ $case->title }}">
                                <div class="case-info">
                                    <div class="company">
                                        <p>{{ $case->title }}</p>
                                        <p>{{ $case->gained_result }}</p>
                                    </div>
                                    <p class="company_rk-info">
                                        {{$case->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
