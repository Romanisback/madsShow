@extends('site.layouts.app')
@section('title', 'Главная страница')

@section('content')
    <!-- Add agency -->
    <div class="agency" id="agency">
        <div class="container">
            <div class="container_content">
                <div class="agency__first-item">
                    <h1 class="h1-agency animate__animated animate__fadeIn">Mads Show</h1>
                    <p class="p-agency animate__animated animate__fadeIn">Маркетинговое агентство, объединяющее бизнес и
                        людей.</p>
                </div>
                <div class="agency__second-item animate__animated animate__fadeIn">
                    <img src="/assets/images/main/female.svg" alt="female" loading="lazy">
                    <img src="/assets/images/main/male-xxx.svg" alt="male-xxx" loading="lazy">
                    <img src="/assets/images/main/female-right.svg" alt="female-right" loading="lazy">
                </div>
            </div>
        </div>
    </div><!-- ./agency -->

    <div class="blogers animate__animated animate__fadeIn" id="blogers">
        <div class="container">
            <div class="blogers_section">
                <h2 class="h2-blogers animate__animated animate__fadeInUp">Наши блогеры</h2>
                <p class="p-blogers animate__animated animate__fadeInUp">Проводя рекламные кампании, мы индивидуально
                    подбираем подходящих блогеров, учитывая: целевую аудиторию, пол, возраст и интересы.</p>

                <!-- SLIDER BLOGERS -->

                <div class="slider-blogers">
                    @foreach($bloggers as $blogger)
                        <a href="{{ $blogger->url }}">
                            <img src="{{ asset('storage/' . $blogger->image) }}" alt="{{ $blogger->name }}">
                            <div class="title">{{ $blogger->name }}</div>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

@endsection
