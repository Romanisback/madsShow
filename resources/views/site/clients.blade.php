@extends('site.layouts.app')
@section('title', 'Наши клиенты')

@section('content')
    <div class="clients animate__animated animate__fadeInLeft" id="clients">
        <div class="container">
            <h2>Наши клиенты</h2>
            <ul class="clients-slider">
                @foreach($clients as $client)
                    <li>
                        <a href="{{ $client->url }}" target="_blank">
                            <img src="{{ asset('storage/' . $client->image) }}" alt="{{ $client->name }}" loading="lazy">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
